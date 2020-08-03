<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model\Pet;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\CollectionValueObject;
use PHPUnit\Framework\TestCase;

class PetsValueObjectTest extends TestCase
{
    private $collectedPets;
    private $numNotCollected;
    private $numCollected;

    public function setUp(): void
    {
        $this->numCollected = 123;
        $this->numNotCollected = 123;
        $this->collectedPets = $this->getMockBuilder('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\PetValueObject')->disableOriginalConstructor()->getMock();
    }

    public function testGetNumCollected()
    {
        $object = new CollectionValueObject(
            $this->numCollected,
            $this->numNotCollected,
            $this->collectedPets
        );

        $this->assertEquals($this->numCollected, $object->getNumCollected());
    }

    public function testGetNumNotCollected()
    {
        $object = new CollectionValueObject(
            $this->numCollected,
            $this->numNotCollected,
            $this->collectedPets
        );

        $this->assertEquals($this->numNotCollected, $object->getNumNotCollected());
    }

    public function testGetCollectedPets()
    {
        $object = new CollectionValueObject(
            $this->numCollected,
            $this->numNotCollected,
            $this->collectedPets
        );

        $this->assertEquals($this->collectedPets, $object->getCollected());
    }
}
