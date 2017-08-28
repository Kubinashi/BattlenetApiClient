<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Profession\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Profession\Model\ProfessionsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Profession\Model\ProfessionValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-28
 * @version 1.0
 */
class ProfessionService
{
    /**
     * @param \StdClass $professions
     *
     * @return ProfessionsValueObject
     */
    public function prepareProfessionsValueObject($professions)
    {
        $primaryProfessions = $this->prepareProfessionValueObject($professions->primary);
        $secondaryProfessions = $this->prepareProfessionValueObject($professions->secondary);

        $professions = new ProfessionsValueObject(
            $primaryProfessions,
            $secondaryProfessions
        );

        return $professions;
    }

    /**
     * @param \StdClass[] $professions
     *
     * @return ProfessionValueObject[]
     */
    private function prepareProfessionValueObject($professions) {
        $characterProfessions = [];

        foreach ($professions as $profession) {
            $characterProfessions[] = new ProfessionValueObject(
                $profession->id,
                $profession->name,
                $profession->icon,
                $profession->rank,
                $profession->max,
                $profession->recipes
            );
        }

        return $characterProfessions;
    }
}
