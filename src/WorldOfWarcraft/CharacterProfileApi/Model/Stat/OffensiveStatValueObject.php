<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Stat;

/**
 * @author  Willy Reiche
 * @since   2017-08-26
 * @version 1.0
 */
class OffensiveStatValueObject
{
    /**
     * @var int
     */
    private $mainHandDmgMin;
    /**
     * @var int
     */
    private $mainHandDmgMax;
    /**
     * @var float
     */
    private $mainHandSpeed;
    /**
     * @var float
     */
    private $mainHandDps;
    /**
     * @var int
     */
    private $offHandDmgMin;
    /**
     * @var int
     */
    private $offHandDmgMax;
    /**
     * @var float
     */
    private $offHandSpeed;
    /**
     * @var float
     */
    private $offHandDps;
    /**
     * @var int
     */
    private $rangedDmgMin;
    /**
     * @var int
     */
    private $rangedDmgMax;
    /**
     * @var int
     */
    private $rangedSpeed;
    /**
     * @var float
     */
    private $rangedDps;

    /**
     * OffensiveStatValueObject constructor.
     * @param int   $mainHandDmgMin
     * @param int   $mainHandDmgMax
     * @param float $mainHandSpeed
     * @param float $mainHandDps
     * @param int   $offHandDmgMin
     * @param int   $offHandDmgMax
     * @param float $offHandSpeed
     * @param float $offHandDps
     * @param int   $rangedDmgMin
     * @param int   $rangedDmgMax
     * @param int   $rangedSpeed
     * @param float $rangedDps
     */
    public function __construct(
        $mainHandDmgMin,
        $mainHandDmgMax,
        $mainHandSpeed,
        $mainHandDps,
        $offHandDmgMin,
        $offHandDmgMax,
        $offHandSpeed,
        $offHandDps,
        $rangedDmgMin,
        $rangedDmgMax,
        $rangedSpeed,
        $rangedDps
    ) {
        $this->mainHandDmgMin = $mainHandDmgMin;
        $this->mainHandDmgMax = $mainHandDmgMax;
        $this->mainHandSpeed = $mainHandSpeed;
        $this->mainHandDps = $mainHandDps;
        $this->offHandDmgMin = $offHandDmgMin;
        $this->offHandDmgMax = $offHandDmgMax;
        $this->offHandSpeed = $offHandSpeed;
        $this->offHandDps = $offHandDps;
        $this->rangedDmgMin = $rangedDmgMin;
        $this->rangedDmgMax = $rangedDmgMax;
        $this->rangedSpeed = $rangedSpeed;
        $this->rangedDps = $rangedDps;
    }

    /**
     * @return int
     */
    public function getMainHandDmgMin()
    {
        return $this->mainHandDmgMin;
    }

    /**
     * @return int
     */
    public function getMainHandDmgMax()
    {
        return $this->mainHandDmgMax;
    }

    /**
     * @return float
     */
    public function getMainHandSpeed()
    {
        return $this->mainHandSpeed;
    }

    /**
     * @return float
     */
    public function getMainHandDps()
    {
        return $this->mainHandDps;
    }

    /**
     * @return int
     */
    public function getOffHandDmgMin()
    {
        return $this->offHandDmgMin;
    }

    /**
     * @return int
     */
    public function getOffHandDmgMax()
    {
        return $this->offHandDmgMax;
    }

    /**
     * @return float
     */
    public function getOffHandSpeed()
    {
        return $this->offHandSpeed;
    }

    /**
     * @return float
     */
    public function getOffHandDps()
    {
        return $this->offHandDps;
    }

    /**
     * @return int
     */
    public function getRangedDmgMin()
    {
        return $this->rangedDmgMin;
    }

    /**
     * @return int
     */
    public function getRangedDmgMax()
    {
        return $this->rangedDmgMax;
    }

    /**
     * @return int
     */
    public function getRangedSpeed()
    {
        return $this->rangedSpeed;
    }

    /**
     * @return float
     */
    public function getRangedDps()
    {
        return $this->rangedDps;
    }
}
