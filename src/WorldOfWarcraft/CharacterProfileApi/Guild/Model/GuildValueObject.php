<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Guild\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-22
 * @version 1.0
 */
class GuildValueObject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $realm;

    /**
     * @var string
     */
    private $battlegroup;

    /**
     * @var string
     */
    private $members;

    /**
     * @var EmblemValueObject
     */
    private $emblemValueObject;

    /**
     * GuildValueObject constructor.
     * @param string            $name
     * @param string            $realm
     * @param string            $battlegroup
     * @param string            $members
     * @param EmblemValueObject $emblemValueObject
     */
    public function __construct(
        $name,
        $realm,
        $battlegroup,
        $members,
        EmblemValueObject $emblemValueObject
    ) {
        $this->name = $name;
        $this->realm = $realm;
        $this->battlegroup = $battlegroup;
        $this->members = $members;
        $this->emblemValueObject = $emblemValueObject;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * @return string
     */
    public function getBattlegroup()
    {
        return $this->battlegroup;
    }

    /**
     * @return string
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @return EmblemValueObject
     */
    public function getEmblemValueObject()
    {
        return $this->emblemValueObject;
    }
}
