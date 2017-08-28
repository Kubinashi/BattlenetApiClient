<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-26
 * @version 1.0
 */
class StatValueObject
{
    /**
     * @var BaseStatValueObject
     */
    private $baseStats;
    /**
     * @var SecondaryStatValueObject
     */
    private $secondaryStats;
    /**
     * @var TertiaryStatValueObject
     */
    private $tertiaryStats;
    /**
     * @var DefensiveStatValueObject
     */
    private $defensiveStats;
    /**
     * @var OffensiveStatValueObject
     */
    private $offensiveStats;

    /**
     * StatValueObject constructor.
     * @param BaseStatValueObject      $baseStats
     * @param SecondaryStatValueObject $secondaryStats
     * @param TertiaryStatValueObject  $tertiaryStats
     * @param DefensiveStatValueObject $defensiveStats
     * @param OffensiveStatValueObject $offensiveStats
     */
    public function __construct(
        $baseStats,
        $secondaryStats,
        $tertiaryStats,
        $defensiveStats,
        $offensiveStats
    ) {
        $this->baseStats = $baseStats;
        $this->secondaryStats = $secondaryStats;
        $this->tertiaryStats = $tertiaryStats;
        $this->defensiveStats = $defensiveStats;
        $this->offensiveStats = $offensiveStats;
    }

    /**
     * @return BaseStatValueObject
     */
    public function getBaseStats()
    {
        return $this->baseStats;
    }

    /**
     * @return SecondaryStatValueObject
     */
    public function getSecondaryStats()
    {
        return $this->secondaryStats;
    }

    /**
     * @return TertiaryStatValueObject
     */
    public function getTertiaryStats()
    {
        return $this->tertiaryStats;
    }

    /**
     * @return DefensiveStatValueObject
     */
    public function getDefensiveStats()
    {
        return $this->defensiveStats;
    }

    /**
     * @return OffensiveStatValueObject
     */
    public function getOffensiveStats()
    {
        return $this->offensiveStats;
    }
}
