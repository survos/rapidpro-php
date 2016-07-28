<?php
namespace Survos\Rapidpro;

use Survos\Rapidpro\Mapper\ContactMapper;
use Survos\Rapidpro\Mapper\FlowMapper;
use Survos\Rapidpro\Mapper\WebhookMapper;
use Symfony\Component\Serializer\Serializer;

/**
 * RapidPro API v1
 * https://rapidpro.io/api/v1
 */
class RapidproClient
{
    /** @var Gateway */
    private $gateway;

    /** @var Serializer */
    private $serializer;

    public function __construct(Gateway $gateway, Serializer $serializer)
    {
        $this->gateway = $gateway;
        $this->serializer = $serializer;
    }

    /**
     * @return Gateway
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /** @var WebhookMapper */
    private $webhookMapper;

    /**
     * https://rapidpro.io/webhooks/webhook/
     * @return WebhookMapper
     */
    public function webhooks()
    {
        if (!$this->webhookMapper) {
            $this->webhookMapper = new WebhookMapper($this->serializer);
        }
        return $this->webhookMapper;
    }

    /** @var ContactMapper */
    private $contactMapper;

    /**   
     * https://rapidpro.io/api/v1/contacts
     * @return ContactMapper
     */
    public function contacts()
    {
        if (!$this->contactMapper) {
            $this->contactMapper = new ContactMapper($this->gateway, $this->serializer);
        }
        return $this->contactMapper;
    }

    /** @var FlowMapper */
    private $flowMapper;

    /**   
     * https://rapidpro.io/api/v1/flows
     * @return FlowMapper
     */
    public function flows()
    {
        if (!$this->flowMapper) {
            $this->flowMapper = new FlowMapper($this->gateway, $this->serializer);
        }
        return $this->flowMapper;
    }

}
