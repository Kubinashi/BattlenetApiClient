<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-27
 * @version 1.0
 */
class PetValueObject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $spellId;

    /**
     * @var int
     */
    private $creatureId;

    /**
     * @var int
     */
    private $itemId;

    /**
     * @var int
     */
    private $qualityId;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var PetStatValueObject
     */
    private $petStatValueObject;

    /**
     * @var string
     */
    private $battlePetGuid;

    /**
     * @var bool
     */
    private $isFavorite;

    /**
     * @var bool
     */
    private $isFirstAbilitySlotSelected;

    /**
     * @var bool
     */
    private $isSecondAbilitySlotSelected;

    /**
     * @var bool
     */
    private $isThirdAbilitySlotSelected;

    /**
     * @var string
     */
    private $creatureName;

    /**
     * @var bool
     */
    private $canBattle;

    /**
     * PetValueObject constructor.
     * @param string             $name
     * @param int                $spellId
     * @param int                $creatureId
     * @param int                $itemId
     * @param int                $qualityId
     * @param string             $icon
     * @param PetStatValueObject $petStatValueObject
     * @param string             $battlePetGuid
     * @param bool               $isFavorite
     * @param bool               $isFirstAbilitySlotSelected
     * @param bool               $isSecondAbilitySlotSelected
     * @param bool               $isThirdAbilitySlotSelected
     * @param string             $creatureName
     * @param bool               $canBattle
     */
    public function __construct(
        $name,
        $spellId,
        $creatureId,
        $itemId,
        $qualityId,
        $icon,
        PetStatValueObject $petStatValueObject,
        $battlePetGuid,
        $isFavorite,
        $isFirstAbilitySlotSelected,
        $isSecondAbilitySlotSelected,
        $isThirdAbilitySlotSelected,
        $creatureName,
        $canBattle
    ) {
        $this->name = $name;
        $this->spellId = $spellId;
        $this->creatureId = $creatureId;
        $this->itemId = $itemId;
        $this->qualityId = $qualityId;
        $this->icon = $icon;
        $this->petStatValueObject = $petStatValueObject;
        $this->battlePetGuid = $battlePetGuid;
        $this->isFavorite = $isFavorite;
        $this->isFirstAbilitySlotSelected = $isFirstAbilitySlotSelected;
        $this->isSecondAbilitySlotSelected = $isSecondAbilitySlotSelected;
        $this->isThirdAbilitySlotSelected = $isThirdAbilitySlotSelected;
        $this->creatureName = $creatureName;
        $this->canBattle = $canBattle;
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
    public function getSpellId()
    {
        return $this->spellId;
    }

    /**
     * @return int
     */
    public function getCreatureId()
    {
        return $this->creatureId;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return int
     */
    public function getQualityId()
    {
        return $this->qualityId;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return PetStatValueObject
     */
    public function getPetStatValueObject()
    {
        return $this->petStatValueObject;
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
    public function isFavorite()
    {
        return $this->isFavorite;
    }

    /**
     * @return bool
     */
    public function isFirstAbilitySlotSelected()
    {
        return $this->isFirstAbilitySlotSelected;
    }

    /**
     * @return bool
     */
    public function isSecondAbilitySlotSelected()
    {
        return $this->isSecondAbilitySlotSelected;
    }

    /**
     * @return bool
     */
    public function isThirdAbilitySlotSelected()
    {
        return $this->isThirdAbilitySlotSelected;
    }

    /**
     * @return string
     */
    public function getCreatureName()
    {
        return $this->creatureName;
    }

    /**
     * @return bool
     */
    public function isCanBattle()
    {
        return $this->canBattle;
    }
}
