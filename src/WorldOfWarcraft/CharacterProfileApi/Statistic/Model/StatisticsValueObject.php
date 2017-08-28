<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Statistic\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-26
 * @version 1.0
 */
class StatisticsValueObject
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
     * @var StatisticsValueObject[]
     */
    private $subCategories;
    /**
     * @var StatisticValueObject[]
     */
    private $statistics;

    /**
     * StatisticsValueObject constructor.
     * @param int                     $id
     * @param string                  $name
     * @param StatisticsValueObject[] $subCategories
     * @param StatisticValueObject[]  $statistics
     */
    public function __construct(
        $id,
        $name,
        $subCategories,
        $statistics
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->subCategories = $subCategories;
        $this->statistics = $statistics;
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
     * @return StatisticsValueObject[]
     */
    public function getSubCategories()
    {
        return $this->subCategories;
    }

    /**
     * @return StatisticValueObject[]
     */
    public function getStatistics()
    {
        return $this->statistics;
    }
}
