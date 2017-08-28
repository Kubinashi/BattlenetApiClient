<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Pvp\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Pvp\Model\BracketValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Pvp\Model\PvpValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-28
 * @version 1.0
 */
class PvpService
{
    /**
     * @param \StdClass $responseObject
     * @return PvpValueObject
     */
    public function preparePvpValueObject($responseObject)
    {
        $brackets = $this->prepareBracketValueObject($responseObject);

        $pvp = new PvpValueObject(
            $brackets
        );

        return $pvp;
    }

    /**
     * @param \StdClass $responseObject
     * @return BracketValueObject[]
     */
    private function prepareBracketValueObject($responseObject)
    {
        $brackets = [];

        foreach ($responseObject->pvp->brackets as $bracket) {
            $brackets[] = new BracketValueObject(
                $bracket->slug,
                $bracket->rating,
                $bracket->weeklyPlayed,
                $bracket->weeklyWon,
                $bracket->weeklyLost,
                $bracket->seasonPlayed,
                $bracket->seasonWon,
                $bracket->seasonLost
            );
        }

        return $brackets;
    }
}
