<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Feed\Model;

use Kubinashi\BattlenetApi\WorldOfWarcraft\Model\AchievementValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-22
 * @version 1.0
 */
class FeedAchievementValueObject
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
     * AchievementValueObject constructor.
     * @param string                 $type
     * @param int                    $timestamp
     * @param AchievementValueObject $achievement
     * @param bool                   $featOfStrength
     */
    public function __construct(
        $type,
        $timestamp,
        $achievement,
        $featOfStrength
    ) {
        $this->type = $type;
        $this->timestamp = $timestamp;
        $this->achievement = $achievement;
        $this->featOfStrength = $featOfStrength;
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
}
