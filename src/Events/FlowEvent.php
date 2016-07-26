<?php
namespace Survos\Rapidpro\Events;

class FlowEvent {
    /** @var string */
    private $event = 'flow';

    /** @var string */
    private $flow_name;

    /** @var int */
    private $run;

    /** @var int */
    private $channel;

    /** @var int */
    private $relayer;

    /** @var string */
    private $flow_base_language;

    /** @var array */
    private $values;

    /** @var array */
    private $steps;

    /** @var string */
    private $time;

    /** @var string */
    private $urn;

    /** @var string */
    private $text;

    /** @var string */
    private $step;

    /** @var string */
    private $contact;

    /** @var int */
    private $flow;

    /** @var string */
    private $phone;

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param string $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @return string
     */
    public function getFlowName()
    {
        return $this->flow_name;
    }

    /**
     * @param string $flow_name
     */
    public function setFlowName($flow_name)
    {
        $this->flow_name = $flow_name;
    }

    /**
     * @return int
     */
    public function getRun()
    {
        return $this->run;
    }

    /**
     * @param int $run
     */
    public function setRun($run)
    {
        $this->run = $run;
    }

    /**
     * @return int
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param int $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return int
     */
    public function getRelayer()
    {
        return $this->relayer;
    }

    /**
     * @param int $relayer
     */
    public function setRelayer($relayer)
    {
        $this->relayer = $relayer;
    }

    /**
     * @return string
     */
    public function getFlowBaseLanguage()
    {
        return $this->flow_base_language;
    }

    /**
     * @param string $flow_base_language
     */
    public function setFlowBaseLanguage($flow_base_language)
    {
        $this->flow_base_language = $flow_base_language;
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @param array $values
     */
    public function setValues($values)
    {
        $this->values = $values;
    }

    /**
     * @return array
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * @param array $steps
     */
    public function setSteps($steps)
    {
        $this->steps = $steps;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getUrn()
    {
        return $this->urn;
    }

    /**
     * @param string $urn
     */
    public function setUrn($urn)
    {
        $this->urn = $urn;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @param string $step
     */
    public function setStep($step)
    {
        $this->step = $step;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return int
     */
    public function getFlow()
    {
        return $this->flow;
    }

    /**
     * @param int $flow
     */
    public function setFlow($flow)
    {
        $this->flow = $flow;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}
