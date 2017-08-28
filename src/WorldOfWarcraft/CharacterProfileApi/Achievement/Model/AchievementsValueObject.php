<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Achievement\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-22
 * @version 1.0
 */
class AchievementsValueObject
{
    /**
     * @var string
     */
    private $achievementsCompleted;

    /**
     * @var string
     */
    private $achievementsCompletedTimestamp;

    /**
     * @var string
     */
    private $criteria;

    /**
     * @var string
     */
    private $criteriaQuantity;

    /**
     * @var string
     */
    private $criteriaTimestamp;

    /**
     * @var string
     */
    private $criteriaCreated;

    /**
     * AchievementsValueObject constructor.
     * @param string $achievementsCompleted
     * @param string $achievementsCompletedTimestamp
     * @param string $criteria
     * @param string $criteriaQuantity
     * @param string $criteriaTimestamp
     * @param string $criteriaCreated
     */
    public function __construct(
        $achievementsCompleted,
        $achievementsCompletedTimestamp,
        $criteria,
        $criteriaQuantity,
        $criteriaTimestamp,
        $criteriaCreated
    ) {
        $this->achievementsCompleted = $achievementsCompleted;
        $this->achievementsCompletedTimestamp = $achievementsCompletedTimestamp;
        $this->criteria = $criteria;
        $this->criteriaQuantity = $criteriaQuantity;
        $this->criteriaTimestamp = $criteriaTimestamp;
        $this->criteriaCreated = $criteriaCreated;
    }

    /**
     * @return string
     */
    public function getAchievementsCompleted()
    {
        return $this->achievementsCompleted;
    }

    /**
     * @return string
     */
    public function getAchievementsCompletedTimestamp()
    {
        return $this->achievementsCompletedTimestamp;
    }

    /**
     * @return string
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * @return string
     */
    public function getCriteriaQuantity()
    {
        return $this->criteriaQuantity;
    }

    /**
     * @return string
     */
    public function getCriteriaTimestamp()
    {
        return $this->criteriaTimestamp;
    }

    /**
     * @return string
     */
    public function getCriteriaCreated()
    {
        return $this->criteriaCreated;
    }
}
