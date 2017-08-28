<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-26
 * @version 1.0
 */
class TertiaryStatValueObject
{
    /**
     * @var int
     */
    private $leechRating;
    /**
     * @var int
     */
    private $leechRatingBonus;
    /**
     * @var int
     */
    private $versatility;
    /**
     * @var float
     */
    private $versatilityDamageDoneBonus;
    /**
     * @var float
     */
    private $versatilityHealingDoneBonus;
    /**
     * @var float
     */
    private $versatilityDamageTakenBonus;
    /**
     * @var int
     */
    private $avoidanceRating;
    /**
     * @var int
     */
    private $avoidanceRatingBonus;
    /**
     * @var int
     */
    private $spellPen;
    /**
     * @var float
     */
    private $spellCrit;
    /**
     * @var int
     */
    private $spellCritRating;
    /**
     * @var int
     */
    private $mana5;
    /**
     * @var int
     */
    private $mana5Combat;

    /**
     * TertiaryStatValueObject constructor.
     * @param int   $leechRating
     * @param int   $leechRatingBonus
     * @param int   $versatility
     * @param float $versatilityDamageDoneBonus
     * @param float $versatilityHealingDoneBonus
     * @param float $versatilityDamageTakenBonus
     * @param int   $avoidanceRating
     * @param int   $avoidanceRatingBonus
     * @param int   $spellPen
     * @param float $spellCrit
     * @param int   $spellCritRating
     * @param int   $mana5
     * @param int   $mana5Combat
     */
    public function __construct(
        $leechRating,
        $leechRatingBonus,
        $versatility,
        $versatilityDamageDoneBonus,
        $versatilityHealingDoneBonus,
        $versatilityDamageTakenBonus,
        $avoidanceRating,
        $avoidanceRatingBonus,
        $spellPen,
        $spellCrit,
        $spellCritRating,
        $mana5,
        $mana5Combat
    ) {
        $this->leechRating = $leechRating;
        $this->leechRatingBonus = $leechRatingBonus;
        $this->versatility = $versatility;
        $this->versatilityDamageDoneBonus = $versatilityDamageDoneBonus;
        $this->versatilityHealingDoneBonus = $versatilityHealingDoneBonus;
        $this->versatilityDamageTakenBonus = $versatilityDamageTakenBonus;
        $this->avoidanceRating = $avoidanceRating;
        $this->avoidanceRatingBonus = $avoidanceRatingBonus;
        $this->spellPen = $spellPen;
        $this->spellCrit = $spellCrit;
        $this->spellCritRating = $spellCritRating;
        $this->mana5 = $mana5;
        $this->mana5Combat = $mana5Combat;
    }

    /**
     * @return int
     */
    public function getLeechRating()
    {
        return $this->leechRating;
    }

    /**
     * @return int
     */
    public function getLeechRatingBonus()
    {
        return $this->leechRatingBonus;
    }

    /**
     * @return int
     */
    public function getVersatility()
    {
        return $this->versatility;
    }

    /**
     * @return float
     */
    public function getVersatilityDamageDoneBonus()
    {
        return $this->versatilityDamageDoneBonus;
    }

    /**
     * @return float
     */
    public function getVersatilityHealingDoneBonus()
    {
        return $this->versatilityHealingDoneBonus;
    }

    /**
     * @return float
     */
    public function getVersatilityDamageTakenBonus()
    {
        return $this->versatilityDamageTakenBonus;
    }

    /**
     * @return int
     */
    public function getAvoidanceRating()
    {
        return $this->avoidanceRating;
    }

    /**
     * @return int
     */
    public function getAvoidanceRatingBonus()
    {
        return $this->avoidanceRatingBonus;
    }

    /**
     * @return int
     */
    public function getSpellPen()
    {
        return $this->spellPen;
    }

    /**
     * @return float
     */
    public function getSpellCrit()
    {
        return $this->spellCrit;
    }

    /**
     * @return int
     */
    public function getSpellCritRating()
    {
        return $this->spellCritRating;
    }

    /**
     * @return int
     */
    public function getMana5()
    {
        return $this->mana5;
    }

    /**
     * @return int
     */
    public function getMana5Combat()
    {
        return $this->mana5Combat;
    }
}
