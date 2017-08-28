<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\CollectionValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\MountValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\PetStatValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\PetValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-28
 * @version 1.0
 */
class CollectionService
{
    const MOUNT = 'MOUNT';
    const PET = 'PET';

    /**
     * @param \StdClass $object
     * @param string $type
     *
     * @return CollectionValueObject
     */
    public function prepareCollectionValueObject($object, $type)
    {
        $collected = [];
        foreach ($object->collected as $collect) {
            switch ($type) {
                case self::MOUNT:
                    $collected[] = $this->prepareMountValueObject($collect);
                    break;
                case self::PET:
                    $collected[] = $this->preparePetValueObject($collect);
                    break;
            }
        }

        return new CollectionValueObject(
            $object->numCollected,
            $object->numNotCollected,
            $collected
        );
    }

    /**
     * @param \StdClass $mount
     * @return MountValueObject
     */
    private function prepareMountValueObject(\StdClass $mount)
    {
        return new MountValueObject(
            $mount->name,
            $mount->spellId,
            $mount->creatureId,
            $mount->itemId,
            $mount->qualityId,
            $mount->icon,
            $mount->isGround,
            $mount->isFlying,
            $mount->isAquatic,
            $mount->isJumping
        );
    }

    /**
     * @param \StdClass $pet
     * @return PetValueObject
     */
    private function preparePetValueObject($pet)
    {
        $petStatValueObject = $this->preparePetStatsValueObject($pet->stats);

        return new PetValueObject(
            $pet->name,
            $pet->spellId,
            $pet->creatureId,
            $pet->itemId,
            $pet->qualityId,
            $pet->icon,
            $petStatValueObject,
            $pet->battlePetGuid,
            $pet->isFavorite,
            $pet->isFirstAbilitySlotSelected,
            $pet->isSecondAbilitySlotSelected,
            $pet->isThirdAbilitySlotSelected,
            $pet->creatureName,
            $pet->canBattle
        );
    }

    /**
     * @param \StdClass $stats
     * @return PetStatValueObject
     */
    private function preparePetStatsValueObject($stats)
    {
        return new PetStatValueObject(
            $stats->speciesId,
            $stats->breedId,
            $stats->petQualityId,
            $stats->level,
            $stats->health,
            $stats->power,
            $stats->speed
        );
    }
}
