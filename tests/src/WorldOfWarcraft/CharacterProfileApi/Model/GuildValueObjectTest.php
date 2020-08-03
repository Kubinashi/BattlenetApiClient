<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Guild\Model\GuildValueObject;
use PHPUnit\Framework\TestCase;

class GuildValueObjectTest extends TestCase
{
    private $guildName;
    private $realm;
    private $battlegroup;
    private $members;
    private $emblemValueObject;

    public function setUp(): void
    {
        $this->guildName = uniqid();
        $this->realm = uniqid();
        $this->battlegroup = uniqid();
        $this->members = uniqid();

        $this->emblemValueObject = new \Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Guild\Model\EmblemValueObject(
            uniqid(),
            uniqid(),
            uniqid(),
            uniqid(),
            uniqid(),
            uniqid(),
            uniqid(),
            uniqid()
        );
    }

    public function testGetName()
    {
        $object = new GuildValueObject(
            $this->guildName,
            $this->realm,
            $this->battlegroup,
            $this->members,
            $this->emblemValueObject
        );

        $this->assertEquals($this->guildName, $object->getName());
    }

    public function testGetRealm()
    {
        $object = new GuildValueObject(
            $this->guildName,
            $this->realm,
            $this->battlegroup,
            $this->members,
            $this->emblemValueObject
        );

        $this->assertEquals($this->realm, $object->getRealm());
    }

    public function testGetBattlegroup()
    {
        $object = new GuildValueObject(
            $this->guildName,
            $this->realm,
            $this->battlegroup,
            $this->members,
            $this->emblemValueObject
        );

        $this->assertEquals($this->battlegroup, $object->getBattlegroup());
    }

    public function testGetMembers()
    {
        $object = new GuildValueObject(
            $this->guildName,
            $this->realm,
            $this->battlegroup,
            $this->members,
            $this->emblemValueObject
        );

        $this->assertEquals($this->members, $object->getMembers());
    }

    public function testGetEmblem()
    {
        $object = new GuildValueObject(
            $this->guildName,
            $this->realm,
            $this->battlegroup,
            $this->members,
            $this->emblemValueObject
        );

        $this->assertEquals($this->emblemValueObject, $object->getEmblemValueObject());
    }
}
