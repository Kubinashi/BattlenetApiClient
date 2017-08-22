<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Feed;
use Kubinashi\BattlenetApi\WorldOfWarcraft\Model\AchievementValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\Criteria\Model\CriteriaValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-22
 * @version 1.0
 */
class FeedBosskillValueObject
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $timestamp;

    /**
     * @var AchievementValueObject
     */
    private $achievement;

    /**
     * @var bool
     */
    private $featOfStrength;

    /**
     * @var CriteriaValueObject
     */
    private $criteria;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var string
     */
    private $name;

    /**
     * BosskillValueObject constructor.
     * @param string                 $type
     * @param int                    $timestamp
     * @param AchievementValueObject $achievement
     * @param bool                   $featOfStrength
     * @param CriteriaValueObject    $criteria
     * @param int                    $quantity
     * @param string                 $name
     */
    public function __construct(
        $type,
        $timestamp,
        $achievement,
        $featOfStrength,
        $criteria,
        $quantity,
        $name
    ) {
        $this->type = $type;
        $this->timestamp = $timestamp;
        $this->achievement = $achievement;
        $this->featOfStrength = $featOfStrength;
        $this->criteria = $criteria;
        $this->quantity = $quantity;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return AchievementValueObject
     */
    public function getAchievement()
    {
        return $this->achievement;
    }

    /**
     * @return bool
     */
    public function isFeatOfStrength()
    {
        return $this->featOfStrength;
    }

    /**
     * @return CriteriaValueObject
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
