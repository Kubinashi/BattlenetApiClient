<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class DamageValueObject
{
    /**
     * @var int
     */
    private $min;
    /**
     * @var int
     */
    private $max;
    /**
     * @var int
     */
    private $exactMin;
    /**
     * @var int
     */
    private $exactMax;

    /**
     * DamageValueObject constructor.
     * @param int $min
     * @param int $max
     * @param int $exactMin
     * @param int $exactMax
     */
    public function __construct(
        $min,
        $max,
        $exactMin,
        $exactMax
    ) {
        $this->min = $min;
        $this->max = $max;
        $this->exactMin = $exactMin;
        $this->exactMax = $exactMax;
    }

    /**
     * @return int
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @return int
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @return int
     */
    public function getExactMin()
    {
        return $this->exactMin;
    }

    /**
     * @return int
     */
    public function getExactMax()
    {
        return $this->exactMax;
    }
}
