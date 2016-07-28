<?php
namespace Survos\Rapidpro\Mapper;

use Survos\Rapidpro\Events\FlowEvent;
use Symfony\Component\Serializer\Serializer;

class WebhookMapper
{
    /** @var Serializer */
    private $serializer;

    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param array $data
     * @return FlowEvent
     */
    public function getFlowEvent(array $data)
    {
        return $this->serializer->denormalize($data, FlowEvent::class);
    }
}
