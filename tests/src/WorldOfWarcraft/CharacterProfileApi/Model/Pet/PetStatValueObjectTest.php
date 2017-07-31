<?php

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Pet\PetStatValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-07-27
 * @version 1.0
 */
class PetStatValueObjectTest extends PHPUnit_Framework_TestCase
{
    private $speed;
    private $power;
    private $health;
    private $level;
    private $petQualityId;
    private $breedId;
    private $speciesId;

    public function setUp()
    {
        $this->speciesId = 123;
        $this->breedId = 123;
        $this->petQualityId = 123;
        $this->level = 123;
        $this->health = 123;
        $this->power = 123;
        $this->speed = 123;
    }

    public function testGetSpeciesId()
    {
        $object = new PetStatValueObject(
            $this->speciesId,
            $this->breedId,
            $this->petQualityId,
            $this->level,
            $this->health,
            $this->power,
            $this->speed
        );

        $this->assertEquals($this->speciesId, $object->getSpeciesId());
    }

    public function testGetBreedId()
    {
        $object = new PetStatValueObject(
            $this->speciesId,
            $this->breedId,
            $this->petQualityId,
            $this->level,
            $this->health,
            $this->power,
            $this->speed
        );

        $this->assertEquals($this->breedId, $object->getBreedId());
    }

    public function testGetPetQualityId()
    {
        $object = new PetStatValueObject(
            $this->speciesId,
            $this->breedId,
            $this->petQualityId,
            $this->level,
            $this->health,
            $this->power,
            $this->speed
        );

        $this->assertEquals($this->petQualityId, $object->getPetQualityId());
    }

    public function testGetLevel()
    {
        $object = new PetStatValueObject(
            $this->speciesId,
            $this->breedId,
            $this->petQualityId,
            $this->level,
            $this->health,
            $this->power,
            $this->speed
        );

        $this->assertEquals($this->level, $object->getLevel());
    }

    public function testGetHealth()
    {
        $object = new PetStatValueObject(
            $this->speciesId,
            $this->breedId,
            $this->petQualityId,
            $this->level,
            $this->health,
            $this->power,
            $this->speed
        );

        $this->assertEquals($this->health, $object->getHealth());
    }

    public function testGetPower()
    {
        $object = new PetStatValueObject(
            $this->speciesId,
            $this->breedId,
            $this->petQualityId,
            $this->level,
            $this->health,
            $this->power,
            $this->speed
        );

        $this->assertEquals($this->power, $object->getPower());
    }

    public function testGetSpeed()
    {
        $object = new PetStatValueObject(
            $this->speciesId,
            $this->breedId,
            $this->petQualityId,
            $this->level,
            $this->health,
            $this->power,
            $this->speed
        );

        $this->assertEquals($this->speed, $object->getSpeed());
    }
}
