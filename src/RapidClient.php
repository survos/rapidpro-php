<?php
namespace Survos\Rapidpro;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ConnectException;
use Psr\Http\Message\ResponseInterface;

class RapidClient
{
    private $endpoint;
    private $token;
    private $format = 'json';

    /**
     * @param string $url
     * @param string $token
     * @param string $version
     */
    public function __construct($url, $token, $version = 'v1')
    {
        $url = rtrim($url, '/');
        $this->endpoint = sprintf('%s/api/%s/', $url, $version);
        $this->token = $token;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @return Client
     */
    protected function getGuzzle()
    {
        return new Client([
            'base_uri' => $this->endpoint,
            'headers' => ['Authorization' => 'Token '.$this->token],
            'http_errors' => false,
        ]);
    }

    protected function request($method, $uri, array $options = [])
    {
        try {
            $guzzle = $this->getGuzzle();
            return $guzzle->request($method, $uri, $options);
        } catch (ConnectException $e) {
            throw new RapidException('Connection error', 0, $e);
        }
    }

    /**
     * @param ResponseInterface $response
     * @return array
     * @throws RapidException
     */
    protected function parseResponse($response)
    {
        $content = $response->getBody()->getContents();
        $data = json_decode($content, true);
        if (!is_array($data)) {
            throw new RapidException("Bad data in server response: ".substr($response->getBody(),0,200));
        }
        return $data;
    }


    /**
     * @param ResponseInterface $response
     * @param array $expectedCodes
     * @throws RapidException
     */
    protected function assertResponse($response, array $expectedCodes = [200])
    {
        if (!in_array($response->getStatusCode(), $expectedCodes)) {
            $data = $this->parseResponse($response);
            $message = isset($data['detail']) ? $data['detail'] : json_encode($data);
            throw new RapidException($message);
        }
    }

    /**
     * @param string $resource
     * @param array $params
     * @return array
     * @throws RapidException
     */
    public function get($resource, array $params = [])
    {
        $resource = $resource.'.'.$this->format;
        $response = $this->request('GET', $resource, ['query' => $params]);
        $this->assertResponse($response, [200]);
        return $this->parseResponse($response);
    }

    /**
     * @param string $resource
     * @param int $id
     * @return bool
     * @throws RapidException
     */
    public function delete($resource, $id)
    {
        $resource = $resource.'.'.$this->format;
        $response = $this->request('DELETE', $resource);
        $this->assertResponse($response, [204]);
        return true;
    }

    /**
     * @param string $resource
     * @param array $data
     * @return array
     * @throws RapidException
     */
    public function post($resource, array $data)
    {
        $resource = $resource.'.'.$this->format;
        $response = $this->request('POST', $resource, ['form_params' => $data]);
        $this->assertResponse($response, [200, 201]);
        return $this->parseResponse($response);
    }
}
