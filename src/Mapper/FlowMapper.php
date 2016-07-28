<?php
namespace Survos\Rapidpro\Mapper;

use Survos\Rapidpro\Entity\Flow;

class FlowMapper extends Mapper
{
    protected $resource = 'flows';

    /**
     * @param array $params
     * @return Flow[]
     */
    public function findBy(array $params = [])
    {
        $response = $this->gateway->get($this->resource, $params);
        return $this->denormalizeArray($response['results'], Flow::class);
    }

    /**
     * @param array $params
     * @return Flow|null
     */
    public function findOneBy(array $params = [])
    {
        $response = $this->gateway->get($this->resource, $params);
        if ($response['count'] === 0) {
            return null;
        }
        return $this->serializer->denormalize($response['results'][0], Flow::class);
    }
}
