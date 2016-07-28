<?php
namespace Survos\Rapidpro\Mapper;

use Survos\Rapidpro\Entity\Contact;

class ContactMapper extends Mapper
{
    protected $resource = 'contacts';

    /**
     * @param array $params
     * @return Contact[]
     */
    public function findBy(array $params = [])
    {
        $response = $this->gateway->get($this->resource, $params);
        return $this->denormalizeArray($response['results'], Contact::class);
    }

    /**
     * @param array $params
     * @return Contact|null
     */
    public function findOneBy(array $params = [])
    {
        $response = $this->gateway->get($this->resource, $params);
        if ($response['count'] === 0) {
            return null;
        }
        return $this->serializer->denormalize($response['results'][0], Contact::class);
    }
}