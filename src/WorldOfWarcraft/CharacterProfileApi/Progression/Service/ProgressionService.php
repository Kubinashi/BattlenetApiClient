<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Progression\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Progression\Model\BossValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Progression\Model\ProgressionValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Progression\Model\RaidValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-28
 * @version 1.0
 */
class ProgressionService
{
    /**
     * @param \StdClass $responseObject
     * @return ProgressionValueObject
     */
    public function prepareProgressionValueObject($responseObject)
    {
        $raids = $this->prepareRaidValueObject($responseObject);

        $progression = new ProgressionValueObject(
            $raids
        );

        return $progression;
    }

    /**
     * @param \StdClass $responseObject
     * @return RaidValueObject[]
     */
    private function prepareRaidValueObject($responseObject)
    {
        $raids = [];

        foreach ($responseObject->progression->raids as $raid) {
            $bosses = $this->prepareBossValueObject($raid);

            $raids[] = new RaidValueObject(
                $raid->name,
                $raid->lfr,
                $raid->normal,
                $raid->heroic,
                $raid->mythic,
                $raid->id,
                $bosses
            );
        }

        return $raids;
    }

    /**
     * @param \StdClass $raid
     * @return BossValueObject[]
     */
    private function prepareBossValueObject($raid)
    {
        $bosses = [];
        foreach ($raid->bosses as $boss) {
            $bosses[] = new BossValueObject(
                $boss->id,
                $boss->name,
                $boss->lfrKills,
                $boss->lfrTimestamp,
                $boss->normalKills,
                $boss->normalTimestamp,
                $boss->heroicKills,
                $boss->heroicTimestamp,
                $boss->mythicKills,
                $boss->mythicTimestamp
            );
        }

        return $bosses;
    }
}
