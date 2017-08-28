<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Reputation\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-28
 * @version 1.0
 */
class ReputationValueObject
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
    private $standing;

    /**
     * @var int
     */
    private $value;

    /**
     * @var int
     */
    private $max;

    /**
     * ReputationValueObject constructor.
     * @param int    $id
     * @param string $name
     * @param int    $standing
     * @param int    $value
     * @param int    $max
     */
    public function __construct(
        $id,
        $name,
        $standing,
        $value,
        $max
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->standing = $standing;
        $this->value = $value;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getStanding()
    {
        return $this->standing;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return int
     */
    public function getMax()
    {
        return $this->max;
    }
}
