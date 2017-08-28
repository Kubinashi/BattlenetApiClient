<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Model\BaseStatValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Model\DefensiveStatValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Model\OffensiveStatValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Model\SecondaryStatValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Model\StatValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Model\TertiaryStatValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-26
 * @version 1.0
 */
class StatService
{
    /**
     * @param \StdClass $stats
     * @return StatValueObject
     */
    public function getStatValueObject($stats)
    {
        $baseStats = $this->getBaseStatValueObject($stats);
        $secondaryStats = $this->getSecondaryStatValueObject($stats);
        $tertiaryStats = $this->getTertiaryStatValueObject($stats);
        $defensiveStats = $this->getDefensiveStatValueObject($stats);
        $offensiveStats = $this->getOffensiveStatValueObject($stats);

        return new StatValueObject(
            $baseStats,
            $secondaryStats,
            $tertiaryStats,
            $defensiveStats,
            $offensiveStats
        );
    }

    /**
     * @param \StdClass $stats
     * @return BaseStatValueObject
     */
    private function getBaseStatValueObject($stats)
    {
        return new BaseStatValueObject(
            $stats->health,
            $stats->powerType,
            $stats->power,
            $stats->str,
            $stats->agi,
            $stats->int,
            $stats->sta
        );
    }

    /**
     * @param \StdClass $stats
     * @return SecondaryStatValueObject
     */
    private function getSecondaryStatValueObject($stats)
    {
        return new SecondaryStatValueObject(
            $stats->speedRating,
            $stats->speedRatingBonus,
            $stats->crit,
            $stats->critRating,
            $stats->haste,
            $stats->hasteRating,
            $stats->hasteRatingPercent,
            $stats->mastery,
            $stats->masteryRating
        );
    }

    /**
     * @param \StdClass $stats
     * @return TertiaryStatValueObject
     */
    private function getTertiaryStatValueObject($stats)
    {
        return new TertiaryStatValueObject(
            $stats->leechRating,
            $stats->leechRatingBonus,
            $stats->versatility,
            $stats->versatilityDamageDoneBonus,
            $stats->versatilityHealingDoneBonus,
            $stats->versatilityDamageTakenBonus,
            $stats->avoidanceRating,
            $stats->avoidanceRatingBonus,
            $stats->spellPen,
            $stats->spellCrit,
            $stats->spellCritRating,
            $stats->mana5,
            $stats->mana5Combat
        );
    }

    /**
     * @param \StdClass $stats
     * @return DefensiveStatValueObject
     */
    private function getDefensiveStatValueObject($stats)
    {
        return new DefensiveStatValueObject(
            $stats->armor,
            $stats->dodge,
            $stats->dodgeRating,
            $stats->parry,
            $stats->parryRating,
            $stats->block,
            $stats->blockRating
        );
    }

    /**
     * @param \StdClass $stats
     * @return OffensiveStatValueObject
     */
    private function getOffensiveStatValueObject($stats)
    {
        return new OffensiveStatValueObject(
            $stats->mainHandDmgMin,
            $stats->mainHandDmgMax,
            $stats->mainHandSpeed,
            $stats->mainHandDps,
            $stats->offHandDmgMin,
            $stats->offHandDmgMax,
            $stats->offHandSpeed,
            $stats->offHandDps,
            $stats->rangedDmgMin,
            $stats->rangedDmgMax,
            $stats->rangedSpeed,
            $stats->rangedDps
        );
    }
}
