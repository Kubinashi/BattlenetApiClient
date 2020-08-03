<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model\Mount;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\CollectionValueObject;
use PHPUnit\Framework\TestCase;

class MountsValueObjectTest extends TestCase
{
    private $numCollected;
    private $collectedMounts;
    private $numNotCollected;

    public function setUp(): void
    {
        $this->numCollected = 123;
        $this->numNotCollected = 123;
        $this->collectedMounts = [$this->getMockBuilder('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Mount\MountValueObject')->disableOriginalConstructor()->getMock()];
    }

    public function testGetNumCollected()
    {
        $object = new CollectionValueObject(
            $this->numCollected,
            $this->numNotCollected,
            $this->collectedMounts
        );

        $this->assertEquals($this->numCollected, $object->getNumCollected());
    }

    public function testGetNumNotCollected()
    {
        $object = new CollectionValueObject(
            $this->numCollected,
            $this->numNotCollected,
            $this->collectedMounts
        );

        $this->assertEquals($this->numNotCollected, $object->getNumNotCollected());
    }

    public function testGetCollectedMounts()
    {
        $object = new CollectionValueObject(
            $this->numCollected,
            $this->numNotCollected,
            $this->collectedMounts
        );

        $this->assertEquals($this->collectedMounts, $object->getCollected());
    }
}
