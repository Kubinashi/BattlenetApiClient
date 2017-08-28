<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-26
 * @version 1.0
 */
class DefensiveStatValueObject
{
    /**
     * @var int
     */
    private $armor;
    /**
     * @var float
     */
    private $dodge;
    /**
     * @var int
     */
    private $dodgeRating;
    /**
     * @var float
     */
    private $parry;
    /**
     * @var int
     */
    private $parryRating;
    /**
     * @var float
     */
    private $block;
    /**
     * @var int
     */
    private $blockRating;

    /**
     * DefensiveStatValueObject constructor.
     * @param int   $armor
     * @param float $dodge
     * @param int   $dodgeRating
     * @param float $parry
     * @param int   $parryRating
     * @param float $block
     * @param int   $blockRating
     */
    public function __construct(
        $armor,
        $dodge,
        $dodgeRating,
        $parry,
        $parryRating,
        $block,
        $blockRating
    ) {
        $this->armor = $armor;
        $this->dodge = $dodge;
        $this->dodgeRating = $dodgeRating;
        $this->parry = $parry;
        $this->parryRating = $parryRating;
        $this->block = $block;
        $this->blockRating = $blockRating;
    }

    /**
     * @return int
     */
    public function getArmor()
    {
        return $this->armor;
    }

    /**
     * @return float
     */
    public function getDodge()
    {
        return $this->dodge;
    }

    /**
     * @return int
     */
    public function getDodgeRating()
    {
        return $this->dodgeRating;
    }

    /**
     * @return float
     */
    public function getParry()
    {
        return $this->parry;
    }

    /**
     * @return int
     */
    public function getParryRating()
    {
        return $this->parryRating;
    }

    /**
     * @return float
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * @return int
     */
    public function getBlockRating()
    {
        return $this->blockRating;
    }
}
