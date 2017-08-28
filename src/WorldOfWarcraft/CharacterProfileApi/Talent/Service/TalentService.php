<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Talent\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Shared\Model\SpecValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Talent\Model\TalentsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Talent\Model\TalentValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\Model\SpellValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-28
 * @version 1.0
 */
class TalentService
{
    /**
     * @param \StdClass $responseObject
     *
     * @return TalentValueObject[]
     */
    public function prepareTalentValueObject($responseObject)
    {
        $talents = [];

        foreach ($responseObject->talents as $talent) {
            if (empty($talent->calcSpec)) {
                continue;
            }

            $selected = false;
            if (isset($talent->selected)) {
                $selected = true;
            }

            $talentsValueObject = $this->prepareTalentsValueObject($talent);
            $specValueObject = $this->prepareSpecValueObject($talent->spec);

            $talents[] = new TalentValueObject(
                $selected,
                $talentsValueObject,
                $specValueObject,
                $talent->calcTalent,
                $talent->calcSpec
            );
        }

        return $talents;
    }

    /**
     * @param \StdClass $talent
     * @return TalentsValueObject[]
     */
    private function prepareTalentsValueObject($talent)
    {
        $talents = [];
        foreach ($talent->talents as $talent) {
            $cooldown = "";
            if (isset($talent->spell->cooldown)) {
                $cooldown = $talent->spell->cooldown;
            }

            $spell = new SpellValueObject(
                $talent->spell->id,
                $talent->spell->name,
                $talent->spell->icon,
                $talent->spell->description,
                $talent->spell->castTime,
                $cooldown
            );

            $spec = $this->prepareSpecValueObject($talent->spec);

            $talents[] = new TalentsValueObject(
                $talent->tier,
                $talent->column,
                $spell,
                $spec
            );
        }

        return $talents;
    }

    /**
     * @param \StdClass $spec
     * @return SpecValueObject
     */
    private function prepareSpecValueObject($spec)
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
