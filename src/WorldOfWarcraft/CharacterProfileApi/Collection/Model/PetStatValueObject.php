<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-27
 * @version 1.0
 */
class PetStatValueObject
{
    /**
     * @var int
     */
    private $speciesId;

    /**
     * @var int
     */
    private $breedId;

    /**
     * @var int
     */
    private $petQualityId;

    /**
     * @var int
     */
    private $level;

    /**
     * @var int
     */
    private $health;

    /**
     * @var int
     */
    private $power;

    /**
     * @var int
     */
    private $speed;

    /**
     * PetStatValueObject constructor.
     * @param int $speciesId
     * @param int $breedId
     * @param int $petQualityId
     * @param int $level
     * @param int $health
     * @param int $power
     * @param int $speed
     */
    public function __construct(
        $speciesId,
        $breedId,
        $petQualityId,
        $level,
        $health,
        $power,
        $speed
    ) {
        $this->speciesId = $speciesId;
        $this->breedId = $breedId;
        $this->petQualityId = $petQualityId;
        $this->level = $level;
        $this->health = $health;
        $this->power = $power;
        $this->speed = $speed;
    }

    /**
     * @return int
     */
    public function getSpeciesId()
    {
        return $this->speciesId;
    }

    /**
     * @return int
     */
    public function getBreedId()
    {
        return $this->breedId;
    }

    /**
     * @return int
     */
    public function getPetQualityId()
    {
        return $this->petQualityId;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getHealth()
    {
        return $this->health;
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
    public function getSpeed()
    {
        return $this->speed;
    }
}
