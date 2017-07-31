<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-28
 * @version 1.0
 */
class PetSlotsValueObject
{
    /**
     * @var int
     */
    private $slot;

    /**
     * @var string
     */
    private $battlePetGuid;

    /**
     * @var bool
     */
    private $isEmpty;

    /**
     * @var bool
     */
    private $isLocked;

    /**
     * @var int[]
     */
    private $abilities;

    /**
     * PetSlotsValueObject constructor.
     * @param int    $slot
     * @param string $battlePetGuid
     * @param bool   $isEmpty
     * @param bool   $isLocked
     * @param int[]  $abilities
     */
    public function __construct(
        $slot,
        $battlePetGuid,
        $isEmpty,
        $isLocked,
        $abilities
    ) {
        $this->slot = $slot;
        $this->battlePetGuid = $battlePetGuid;
        $this->isEmpty = $isEmpty;
        $this->isLocked = $isLocked;
        $this->abilities = $abilities;
    }

    /**
     * @return int
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * @return string
     */
    public function getBattlePetGuid()
    {
        return $this->battlePetGuid;
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return $this->isEmpty;
    }

    /**
     * @return bool
     */
    public function isLocked()
    {
        return $this->isLocked;
    }

    /**
     * @return int[]
     */
    public function getAbilities()
    {
        return $this->abilities;
    }
}
