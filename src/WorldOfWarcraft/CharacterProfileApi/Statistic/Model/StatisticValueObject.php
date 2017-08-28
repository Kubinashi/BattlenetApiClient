<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Statistic\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-26
 * @version 1.0
 */
class StatisticValueObject
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $quantity;
    /**
     * @var int
     */
    private $lastUpdated;
    /**
     * @var bool
     */
    private $money;
    /**
     * @var string
     */
    private $highest;

    /**
     * StatisticValueObject constructor.
     * @param int    $id
     * @param string $name
     * @param int    $quantity
     * @param int    $lastUpdated
     * @param bool   $money
     * @param string $highest
     */
    public function __construct(
        $id,
        $name,
        $quantity,
        $lastUpdated,
        $money,
        $highest
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->lastUpdated = $lastUpdated;
        $this->money = $money;
        $this->highest = $highest;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return int
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * @return bool
     */
    public function isMoney()
    {
        return $this->money;
    }

    /**
     * @return string
     */
    public function getHighest()
    {
        return $this->highest;
    }
}
