<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model\Mount;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\MountValueObject;
use PHPUnit\Framework\TestCase;

class MountValueObjectTest extends TestCase
{
    private $isJumping;
    private $isAquatic;
    private $isFlying;
    private $isGrounded;
    private $icon;
    private $qualityId;
    private $itemId;
    private $creatureId;
    private $spellId;
    private $mountName;

    public function setUp(): void
    {
        $this->mountName = uniqid();
        $this->spellId = uniqid();
        $this->creatureId = uniqid();
        $this->itemId = uniqid();
        $this->qualityId = uniqid();
        $this->icon = uniqid();
        $this->isGrounded = true;
        $this->isFlying = true;
        $this->isAquatic = true;
        $this->isJumping = true;
    }

    public function testGetName()
    {
        $object = new MountValueObject(
            $this->mountName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->isGrounded,
            $this->isFlying,
            $this->isAquatic,
            $this->isJumping
        );

        $this->assertEquals($this->mountName, $object->getName());
    }

    public function testGetSpellId()
    {
        $object = new MountValueObject(
            $this->mountName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->isGrounded,
            $this->isFlying,
            $this->isAquatic,
            $this->isJumping
        );

        $this->assertEquals($this->spellId, $object->getSpellId());
    }

    public function testGetCreatureId()
    {
        $object = new MountValueObject(
            $this->mountName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->isGrounded,
            $this->isFlying,
            $this->isAquatic,
            $this->isJumping
        );

        $this->assertEquals($this->creatureId, $object->getCreatureId());
    }

    public function testGetItemId()
    {
        $object = new MountValueObject(
            $this->mountName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->isGrounded,
            $this->isFlying,
            $this->isAquatic,
            $this->isJumping
        );

        $this->assertEquals($this->itemId, $object->getItemId());
    }

    public function testGetQualityId()
    {
        $object = new MountValueObject(
            $this->mountName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->isGrounded,
            $this->isFlying,
            $this->isAquatic,
            $this->isJumping
        );

        $this->assertEquals($this->qualityId, $object->getQualityId());
    }

    public function testGetIcon()
    {
        $object = new MountValueObject(
            $this->mountName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->isGrounded,
            $this->isFlying,
            $this->isAquatic,
            $this->isJumping
        );

        $this->assertEquals($this->icon, $object->getIcon());
    }

    public function testIsGrounded()
    {
        $object = new MountValueObject(
            $this->mountName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->isGrounded,
            $this->isFlying,
            $this->isAquatic,
            $this->isJumping
        );

        $this->assertEquals($this->isGrounded, $object->isGrounded());
    }

    public function testIsFlying()
    {
        $object = new MountValueObject(
            $this->mountName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->isGrounded,
            $this->isFlying,
            $this->isAquatic,
            $this->isJumping
        );

        $this->assertEquals($this->isFlying, $object->isFlying());
    }

    public function testIsAAquatic()
    {
        $object = new MountValueObject(
            $this->mountName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->isGrounded,
            $this->isFlying,
            $this->isAquatic,
            $this->isJumping
        );

        $this->assertEquals($this->isAquatic, $object->isAquatic());
    }

    public function testIsJumping()
    {
        $object = new MountValueObject(
            $this->mountName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->isGrounded,
            $this->isFlying,
            $this->isAquatic,
            $this->isJumping
        );

        $this->assertEquals($this->isJumping, $object->isJumping());
    }
}
