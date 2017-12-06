<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Feed\Model;

use Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\Criteria\Model\CriteriaValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-22
 * @version 1.0
 */
class AchievementValueObject
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $points;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string[]
     */
    private $rewardItems;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var CriteriaValueObject[]
     */
    private $criteria;

    /**
     * @var bool
     */
    private $accountWide;

    /**
     * @var int
     */
    private $factionId;

    /**
     * AchievementValueObject constructor.
     * @param int                   $id
     * @param string                $title
     * @param int                   $points
     * @param string                $description
     * @param string[]              $rewardItems
     * @param string                $icon
     * @param CriteriaValueObject[] $criteria
     * @param bool                  $accountWide
     * @param int                   $factionId
     */
    public function __construct(
        $id,
        $title,
        $points,
        $description,
        $rewardItems,
        $icon,
        $criteria,
        $accountWide,
        $factionId
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->points = $points;
        $this->description = $description;
        $this->rewardItems = $rewardItems;
        $this->icon = $icon;
        $this->criteria = $criteria;
        $this->accountWide = $accountWide;
        $this->factionId = $factionId;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string[]
     */
    public function getRewardItems()
    {
        return $this->rewardItems;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return CriteriaValueObject[]
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @return bool
     */
    public function isAccountWide()
    {
        return $this->accountWide;
    }

    /**
     * @return int
     */
    public function getFactionId()
    {
        return $this->factionId;
    }
}
