<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model\HunterPet;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\HunterPet\Model\HunterPetValueObject;
use PHPUnit\Framework\TestCase;

class HunterPetValueObjectTest extends TestCase
{
    private $familyName;
    private $familyId;
    private $calcSpec;
    private $hunterPetSpecValueObject;
    private $slot;
    private $creature;
    private $petName;

    public function setUp(): void
    {
        $this->petName = uniqid();
        $this->creature = uniqid();
        $this->slot = uniqid();
        $this->hunterPetSpecValueObject = $this->getMockBuilder('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Shared\Model\SpecValueObject')->disableOriginalConstructor()->getMock();
        $this->calcSpec = uniqid();
        $this->familyId = uniqid();
        $this->familyName = uniqid();
    }

    public function testGetPetName()
    {
        $object = new HunterPetValueObject(
            $this->petName,
            $this->creature,
            $this->slot,
            $this->calcSpec,
            $this->familyId,
            $this->familyName,
            $this->hunterPetSpecValueObject
        );

        $this->assertEquals($this->petName, $object->getName());
    }

    public function testGetCreature()
    {
        $object = new HunterPetValueObject(
            $this->petName,
            $this->creature,
            $this->slot,
            $this->calcSpec,
            $this->familyId,
            $this->familyName,
            $this->hunterPetSpecValueObject
        );

        $this->assertEquals($this->creature, $object->getCreature());
    }

    public function testGetSlot()
    {
        $object = new HunterPetValueObject(
            $this->petName,
            $this->creature,
            $this->slot,
            $this->calcSpec,
            $this->familyId,
            $this->familyName,
            $this->hunterPetSpecValueObject
        );

        $this->assertEquals($this->slot, $object->getSlot());
    }

    public function testGetHunterPetSpec()
    {
        $object = new HunterPetValueObject(
            $this->petName,
            $this->creature,
            $this->slot,
            $this->calcSpec,
            $this->familyId,
            $this->familyName,
            $this->hunterPetSpecValueObject
        );

        $this->assertEquals($this->hunterPetSpecValueObject, $object->getHunterPetSpecValueObject());
    }

    public function testGetCalcSpec()
    {
        $object = new HunterPetValueObject(
            $this->petName,
            $this->creature,
            $this->slot,
            $this->calcSpec,
            $this->familyId,
            $this->familyName,
            $this->hunterPetSpecValueObject
        );

        $this->assertEquals($this->calcSpec, $object->getCalcSpec());
    }

    public function testGetFamilyId()
    {
        $object = new HunterPetValueObject(
            $this->petName,
            $this->creature,
            $this->slot,
            $this->calcSpec,
            $this->familyId,
            $this->familyName,
            $this->hunterPetSpecValueObject
        );

        $this->assertEquals($this->familyId, $object->getFamilyId());
    }

    public function testGetFamilyName()
    {
        $object = new HunterPetValueObject(
            $this->petName,
            $this->creature,
            $this->slot,
            $this->calcSpec,
            $this->familyId,
            $this->familyName,
            $this->hunterPetSpecValueObject
        );

        $this->assertEquals($this->familyName, $object->getFamilyName());
    }
}
