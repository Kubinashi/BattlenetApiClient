<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model\Pet;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\PetValueObject;
use PHPUnit\Framework\TestCase;

class PetValueObjectTest extends TestCase
{
    private $canBattle;
    private $creatureName;
    private $isThirdAbilitySlotSelected;
    private $isSecondAbilitySlotSelected;
    private $isFirstAbilitySlotSelected;
    private $isFavorite;
    private $battlePetGuid;
    private $petStatValueObject;
    private $icon;
    private $qualityId;
    private $itemId;
    private $creatureId;
    private $spellId;
    private $petName;

    public function setUp(): void
    {
        $this->petName = uniqid();
        $this->spellId = 123;
        $this->creatureId = 123;
        $this->itemId = 123;
        $this->qualityId = 123;
        $this->icon = uniqid();
        $this->petStatValueObject = $this->getMockBuilder('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\PetStatValueObject')->disableOriginalConstructor()->getMock();
        $this->battlePetGuid = uniqid();
        $this->isFavorite = true;
        $this->isFirstAbilitySlotSelected = true;
        $this->isSecondAbilitySlotSelected = true;
        $this->isThirdAbilitySlotSelected = true;
        $this->creatureName = uniqid();
        $this->canBattle = true;
    }

    public function testGetName()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->petName, $object->getName());
    }

    public function testGetSpellId()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->spellId, $object->getSpellId());
    }

    public function testGetCreatureId()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->creatureId, $object->getCreatureId());
    }

    public function testGetItemId()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->itemId, $object->getItemId());
    }

    public function testGetQualityId()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->qualityId, $object->getQualityId());
    }

    public function testGetIcon()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->icon, $object->getIcon());
    }

    public function testGetPetStatValueObject()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->petStatValueObject, $object->getPetStatValueObject());
    }

    public function testGetBattlePetGuid()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->battlePetGuid, $object->getBattlePetGuid());
    }

    public function testIsFavorite()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->isFavorite, $object->isFavorite());
    }

    public function testIsFirstAbilitySlotSelected()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->isFirstAbilitySlotSelected, $object->isFirstAbilitySlotSelected());
    }

    public function testIsSecondAbilitySlotSelected()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->isSecondAbilitySlotSelected, $object->isSecondAbilitySlotSelected());
    }

    public function testIsThirdAbilitySlotSelected()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->isThirdAbilitySlotSelected, $object->isThirdAbilitySlotSelected());
    }

    public function testGetCreatureName()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->creatureName, $object->getCreatureName());
    }

    public function testCanBattle()
    {
        $object = new PetValueObject(
            $this->petName,
            $this->spellId,
            $this->creatureId,
            $this->itemId,
            $this->qualityId,
            $this->icon,
            $this->petStatValueObject,
            $this->battlePetGuid,
            $this->isFavorite,
            $this->isFirstAbilitySlotSelected,
            $this->isSecondAbilitySlotSelected,
            $this->isThirdAbilitySlotSelected,
            $this->creatureName,
            $this->canBattle
        );

        $this->assertEquals($this->canBattle, $object->isCanBattle());
    }
}
