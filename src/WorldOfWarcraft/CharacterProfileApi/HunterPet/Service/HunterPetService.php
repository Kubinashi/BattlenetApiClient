<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\HunterPet\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\HunterPet\Model\HunterPetValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Shared\Model\SpecValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-28
 * @version 1.0
 */
class HunterPetService
{
    /**
     * @param \StdClass $responseObject
     * @return HunterPetValueObject[]
     */
    public function prepareHunterPets(\StdClass $responseObject)
    {
        $hunterPets = [];
        foreach ($responseObject->hunterPets as $hunterPet) {
            $hunterPetSpecValueObject = null;
            if (isset($hunterPet->spec)) {
                $hunterPetSpecValueObject = $this->prepareHunterPetSpecValueObject($hunterPet->spec);
            }

            $hunterPets[] = new HunterPetValueObject(
                $hunterPet->name,
                $hunterPet->creature,
                $hunterPet->slot,
                $hunterPet->calcSpec,
                $hunterPet->familyId,
                $hunterPet->familyName,
                $hunterPetSpecValueObject
            );
        }

        return $hunterPets;
    }

    /**
     * @param \StdClass $spec
     * @return SpecValueObject
     */
    private function prepareHunterPetSpecValueObject(\StdClass $spec)
    {
        return new SpecValueObject(
            $spec->name,
            $spec->role,
            $spec->backgroundImage,
            $spec->icon,
            $spec->description,
            $spec->order
        );
    }
}
