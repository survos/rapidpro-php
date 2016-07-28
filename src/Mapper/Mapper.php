<?php

namespace Survos\Rapidpro\Mapper;

use Survos\Rapidpro\Gateway;
use Symfony\Component\Serializer\Serializer;

abstract class Mapper
{
    protected $resource;

    /** @var Gateway */
    protected $gateway;

    /** @var Serializer */
    protected $serializer;

    public function __construct(Gateway $gateway, Serializer $serializer)
    {
        $this->gateway = $gateway;
        $this->serializer = $serializer;
    }

    protected function denormalizeArray(&$array, $type)
    {
        $result = [];
        foreach ($array as $item) {
            $result[] = $this->serializer->denormalize($item, $type);
        }
        return $result;
    }
}
