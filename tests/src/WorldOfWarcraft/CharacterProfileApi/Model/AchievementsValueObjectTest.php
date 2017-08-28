<?php
/**
 * @author  Willy Reiche
 * @since   2017-07-23
 * @version 1.0
 */

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Achievement\Model\AchievementsValueObject;

class AchievementsValueObjectTest extends PHPUnit_Framework_TestCase
{
    private $achievementsCompleted;
    private $achievementsCompletedTimestamp;
    private $criteria;
    private $criteriaQuantity;
    private $criteriaTimestamp;
    private $criteriaCreated;

    public function setUp()
    {
        $this->achievementsCompleted = uniqid();
        $this->achievementsCompletedTimestamp = uniqid();
        $this->criteria = uniqid();
        $this->criteriaQuantity = uniqid();
        $this->criteriaTimestamp = uniqid();
        $this->criteriaCreated = uniqid();
    }

    public function testGetAchievementsCompleted()
    {
        $object = new AchievementsValueObject(
            $this->achievementsCompleted,
            $this->achievementsCompletedTimestamp,
            $this->criteria,
            $this->criteriaQuantity,
            $this->criteriaTimestamp,
            $this->criteriaCreated
        );

        $this->assertEquals($this->achievementsCompleted, $object->getAchievementsCompleted());
    }

    public function testGetAchievementsCompletedTimestamp()
    {
        $object = new AchievementsValueObject(
            $this->achievementsCompleted,
            $this->achievementsCompletedTimestamp,
            $this->criteria,
            $this->criteriaQuantity,
            $this->criteriaTimestamp,
            $this->criteriaCreated
        );

        $this->assertEquals($this->achievementsCompletedTimestamp, $object->getAchievementsCompletedTimestamp());
    }

    public function testGetCriteria()
    {
        $object = new AchievementsValueObject(
            $this->achievementsCompleted,
            $this->achievementsCompletedTimestamp,
            $this->criteria,
            $this->criteriaQuantity,
            $this->criteriaTimestamp,
            $this->criteriaCreated
        );

        $this->assertEquals($this->criteria, $object->getCriteria());
    }

    public function testGetCriteriaQuantity()
    {
        $object = new AchievementsValueObject(
            $this->achievementsCompleted,
            $this->achievementsCompletedTimestamp,
            $this->criteria,
            $this->criteriaQuantity,
            $this->criteriaTimestamp,
            $this->criteriaCreated
        );

        $this->assertEquals($this->criteriaQuantity, $object->getCriteriaQuantity());
    }

    public function testGetCriteriaTimestamp()
    {
        $object = new AchievementsValueObject(
            $this->achievementsCompleted,
            $this->achievementsCompletedTimestamp,
            $this->criteria,
            $this->criteriaQuantity,
            $this->criteriaTimestamp,
            $this->criteriaCreated
        );

        $this->assertEquals($this->criteriaTimestamp, $object->getCriteriaTimestamp());
    }

    public function testGetCriteriaCreated()
    {
        $object = new AchievementsValueObject(
            $this->achievementsCompleted,
            $this->achievementsCompletedTimestamp,
            $this->criteria,
            $this->criteriaQuantity,
            $this->criteriaTimestamp,
            $this->criteriaCreated
        );

        $this->assertEquals($this->criteriaCreated, $object->getCriteriaCreated());
    }
}
