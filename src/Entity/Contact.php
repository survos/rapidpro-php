<?php
namespace Survos\Rapidpro\Entity;

class Contact
{
    /** @var string */
    private $uuid;

    /** @var string */
    private $name;

    /** @var array */
    private $language;

    /** @var array */
    private $group_uuids;

    /** @var array */
    private $urns;

    /** @var array */
    private $fields;

    /** @var boolean */
    private $blocked;

    /** @var boolean */
    private $failed;

    /** @var string */
    private $modified_on;

    /** @var string */
    private $phone;

    /** @var array */
    private $groups;

    /**
     * Get email or tel, e.g: mailto, tel
     * @param string $urnKey
     * @return string|null
     */
    public function getUrn($urnKey)
    {
        if (is_array($this->urns)) {
            foreach ($this->urns as $urn) {
                list($key, $value) = explode(':', $urn);
                if ($urnKey === $key) {
                    return $value;
                }
            }
        }
        return null;
    }

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
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param array $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return array
     */
    public function getGroupUuids()
    {
        return $this->group_uuids;
    }

    /**
     * @param array $group_uuids
     */
    public function setGroupUuids($group_uuids)
    {
        $this->group_uuids = $group_uuids;
    }

    /**
     * @return array
     */
    public function getUrns()
    {
        return $this->urns;
    }

    /**
     * @param array $urns
     */
    public function setUrns($urns)
    {
        $this->urns = $urns;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param array $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    /**
     * @return boolean
     */
    public function isBlocked()
    {
        return $this->blocked;
    }

    /**
     * @param boolean $blocked
     */
    public function setBlocked($blocked)
    {
        $this->blocked = $blocked;
    }

    /**
     * @return boolean
     */
    public function isFailed()
    {
        return $this->failed;
    }

    /**
     * @param boolean $failed
     */
    public function setFailed($failed)
    {
        $this->failed = $failed;
    }

    /**
     * @return string
     */
    public function getModifiedOn()
    {
        return $this->modified_on;
    }

    /**
     * @param string $modified_on
     */
    public function setModifiedOn($modified_on)
    {
        $this->modified_on = $modified_on;
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

    /**
     * @return array
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param array $groups
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;
    }
}
