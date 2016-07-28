<?php
namespace Survos\Rapidpro\Entity;

class Flow
{
    /** @var string */
    private $uuid;

    /** @var boolean */
    private $archived;

    /** @var int */
    private $expires;

    /** @var string */
    private $name;

    /** @var array */
    private $labels;

    /** @var int */
    private $runs;

    /** @var int */
    private $completed_runs;

    /** @var array */
    private $participants;

    /** @var array */
    private $rulesets;

    /** @var string */
    private $created_on;

    /** @var int */
    private $flow;

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param string $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return boolean
     */
    public function isArchived()
    {
        return $this->archived;
    }

    /**
     * @param boolean $archived
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    }

    /**
     * @return int
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @param int $expires
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @param array $labels
     */
    public function setLabels($labels)
    {
        $this->labels = $labels;
    }

    /**
     * @return int
     */
    public function getRuns()
    {
        return $this->runs;
    }

    /**
     * @param int $runs
     */
    public function setRuns($runs)
    {
        $this->runs = $runs;
    }

    /**
     * @return int
     */
    public function getCompletedRuns()
    {
        return $this->completed_runs;
    }

    /**
     * @param int $completed_runs
     */
    public function setCompletedRuns($completed_runs)
    {
        $this->completed_runs = $completed_runs;
    }

    /**
     * @return array
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param array $participants
     */
    public function setParticipants($participants)
    {
        $this->participants = $participants;
    }

    /**
     * @return array
     */
    public function getRulesets()
    {
        return $this->rulesets;
    }

    /**
     * @param array $rulesets
     */
    public function setRulesets($rulesets)
    {
        $this->rulesets = $rulesets;
    }

    /**
     * @return string
     */
    public function getCreatedOn()
    {
        return $this->created_on;
    }

    /**
     * @param string $created_on
     */
    public function setCreatedOn($created_on)
    {
        $this->created_on = $created_on;
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
}
