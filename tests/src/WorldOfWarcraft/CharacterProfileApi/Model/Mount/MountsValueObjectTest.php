<?php
/**
 * @author  Willy Reiche
 * @since   2017-07-25
 * @version 1.0
 */

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\CollectionValueObject;

class MountsValueObjectTest extends PHPUnit_Framework_TestCase
{
    private $numCollected;
    private $collectedMounts;
    private $numNotCollected;

    public function setUp()
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
