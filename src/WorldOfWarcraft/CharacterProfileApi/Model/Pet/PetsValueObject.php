<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Pet;

/**
 * @author  Willy Reiche
 * @since   2017-07-27
 * @version 1.0
 */
class PetsValueObject
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
     * @var PetValueObject[]
     */
    private $collectedPets;

    /**
     * PetsValueObject constructor.
     * @param int              $numCollected
     * @param int              $numNotCollected
     * @param PetValueObject[] $collectedPets
     */
    public function __construct(
        $numCollected,
        $numNotCollected,
        $collectedPets
    ) {

        $this->numCollected = $numCollected;
        $this->numNotCollected = $numNotCollected;
        $this->collectedPets = $collectedPets;
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
     * @return PetValueObject[]
     */
    public function getCollectedPets()
    {
        return $this->collectedPets;
    }
}
