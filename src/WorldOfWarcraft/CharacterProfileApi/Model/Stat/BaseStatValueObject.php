<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Stat;

/**
 * @author  Willy Reiche
 * @since   2017-08-26
 * @version 1.0
 */
class BaseStatValueObject
{
    /**
     * @var int
     */
    private $health;
    /**
     * @var string
     */
    private $powerType;
    /**
     * @var int
     */
    private $power;
    /**
     * @var int
     */
    private $str;
    /**
     * @var int
     */
    private $agi;
    /**
     * @var int
     */
    private $int;
    /**
     * @var int
     */
    private $sta;

    /**
     * BaseStatValueObject constructor.
     * @param int    $health
     * @param string $powerType
     * @param int    $power
     * @param int    $str
     * @param int    $agi
     * @param int    $int
     * @param int    $sta
     */
    public function __construct(
        $health,
        $powerType,
        $power,
        $str,
        $agi,
        $int,
        $sta
    ) {
        $this->health = $health;
        $this->powerType = $powerType;
        $this->power = $power;
        $this->str = $str;
        $this->agi = $agi;
        $this->int = $int;
        $this->sta = $sta;
    }

    /**
     * @return int
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @return string
     */
    public function getPowerType()
    {
        return $this->powerType;
    }

    /**
     * @return int
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @return int
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * @return int
     */
    public function getAgi()
    {
        return $this->agi;
    }

    /**
     * @return int
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * @return int
     */
    public function getSta()
    {
        return $this->sta;
    }
}
