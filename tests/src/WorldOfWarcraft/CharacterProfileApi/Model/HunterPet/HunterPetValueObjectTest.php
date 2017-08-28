<?php
/**
 * @author  Willy Reiche
 * @since   2017-07-23
 * @version 1.0
 */

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\HunterPet\Model\HunterPetValueObject;

class HunterPetValueObjectTest extends PHPUnit_Framework_TestCase
{
    private $familyName;
    private $familyId;
    private $calcSpec;
    private $hunterPetSpecValueObject;
    private $slot;
    private $creature;
    private $petName;

    public function setUp()
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
