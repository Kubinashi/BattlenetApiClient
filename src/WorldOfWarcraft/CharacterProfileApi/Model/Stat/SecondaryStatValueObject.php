<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Stat;

/**
 * @author  Willy Reiche
 * @since   2017-08-26
 * @version 1.0
 */
class SecondaryStatValueObject
{
    /**
     * @var float
     */
    private $speedRating;
    /**
     * @var int
     */
    private $speedRatingBonus;
    /**
     * @var float
     */
    private $crit;
    /**
     * @var int
     */
    private $critRating;
    /**
     * @var float
     */
    private $haste;
    /**
     * @var int
     */
    private $hasteRating;
    /**
     * @var float
     */
    private $hasteRatingPercent;
    /**
     * @var float
     */
    private $mastery;
    /**
     * @var int
     */
    private $masteryRating;

    /**
     * SecondaryStatValueObject constructor.
     * @param float $speedRating
     * @param int   $speedRatingBonus
     * @param float $crit
     * @param int   $critRating
     * @param float $haste
     * @param int   $hasteRating
     * @param float $hasteRatingPercent
     * @param float $mastery
     * @param int   $masteryRating
     */
    public function __construct(
        $speedRating,
        $speedRatingBonus,
        $crit,
        $critRating,
        $haste,
        $hasteRating,
        $hasteRatingPercent,
        $mastery,
        $masteryRating
    ) {
        $this->speedRating = $speedRating;
        $this->speedRatingBonus = $speedRatingBonus;
        $this->crit = $crit;
        $this->critRating = $critRating;
        $this->haste = $haste;
        $this->hasteRating = $hasteRating;
        $this->hasteRatingPercent = $hasteRatingPercent;
        $this->mastery = $mastery;
        $this->masteryRating = $masteryRating;
    }

    /**
     * @return float
     */
    public function getSpeedRating()
    {
        return $this->speedRating;
    }

    /**
     * @return int
     */
    public function getSpeedRatingBonus()
    {
        return $this->speedRatingBonus;
    }

    /**
     * @return float
     */
    public function getCrit()
    {
        return $this->crit;
    }

    /**
     * @return int
     */
    public function getCritRating()
    {
        return $this->critRating;
    }

    /**
     * @return float
     */
    public function getHaste()
    {
        return $this->haste;
    }

    /**
     * @return int
     */
    public function getHasteRating()
    {
        return $this->hasteRating;
    }

    /**
     * @return float
     */
    public function getHasteRatingPercent()
    {
        return $this->hasteRatingPercent;
    }

    /**
     * @return float
     */
    public function getMastery()
    {
        return $this->mastery;
    }

    /**
     * @return int
     */
    public function getMasteryRating()
    {
        return $this->masteryRating;
    }
}
