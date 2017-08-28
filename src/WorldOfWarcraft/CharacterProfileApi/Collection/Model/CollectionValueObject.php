<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model;


/**
 * @author  Willy Reiche
 * @since   2017-07-25
 * @version 1.0
 */
class CollectionValueObject
{
    /**
     * @var int
     */
    private $numCollected;

    /**
     * @var int
     */
    private $numNotCollected;

    /**
     * @var MountValueObject[]|PetValueObject[]
     */
    private $collected;

    /**
     * MountsValueObject constructor.
     * @param int                                 $numCollected
     * @param int                                 $numNotCollected
     * @param MountValueObject[]|PetValueObject[] $collected
     */
    public function __construct(
        $numCollected,
        $numNotCollected,
        $collected
    ) {
        $this->numCollected = $numCollected;
        $this->numNotCollected = $numNotCollected;
        $this->collected = $collected;
    }

    /**
     * @return int
     */
    public function getNumCollected()
    {
        return $this->numCollected;
    }

    /**
     * @return int
     */
    public function getNumNotCollected()
    {
        return $this->numNotCollected;
    }

    /**
     * @return MountValueObject[]|PetValueObject[]
     */
    public function getCollected()
    {
        return $this->collected;
    }
}
