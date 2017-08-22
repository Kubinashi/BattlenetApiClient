<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\Criteria\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-22
 * @version 1.0
 */
class CriteriaValueObject
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $orderIndex;

    /**
     * @var int
     */
    private $max;

    /**
     * CriteriaValueObject constructor.
     * @param int    $id
     * @param string $description
     * @param int    $orderIndex
     * @param int    $max
     */
    public function __construct(
        $id,
        $description,
        $orderIndex,
        $max
    ) {
        $this->id = $id;
        $this->description = $description;
        $this->orderIndex = $orderIndex;
        $this->max = $max;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getOrderIndex()
    {
        return $this->orderIndex;
    }

    /**
     * @return int
     */
    public function getMax()
    {
        return $this->max;
    }
}
