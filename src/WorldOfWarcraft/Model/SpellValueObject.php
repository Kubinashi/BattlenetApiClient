<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-01
 * @version 1.0
 */
class SpellValueObject
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
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $castTime;

    /**
     * @var string
     */
    private $cooldown;

    /**
     * SpellValueObject constructor.
     * @param int    $id
     * @param string $name
     * @param string $icon
     * @param string $description
     * @param string $castTime
     * @param string $cooldown
     * @param string $powerCost
     * @param string $range
     */
    public function __construct(
        $id,
        $name,
        $icon,
        $description,
        $castTime,
        $cooldown,
        $range = "",
        $powerCost = ""
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->icon = $icon;
        $this->description = $description;
        $this->castTime = $castTime;
        $this->cooldown = $cooldown;
        $this->range = $range;
        $this->powerCost = $powerCost;
    }

    /**
     * @var string
     */
    private $range;

    /**
     * @var string
     */
    private $powerCost;

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
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getCastTime()
    {
        return $this->castTime;
    }

    /**
     * @return string
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * @return string
     */
    public function getPowerCost()
    {
        return $this->powerCost;
    }

    /**
     * @return string
     */
    public function getCooldown()
    {
        return $this->cooldown;
    }
}
