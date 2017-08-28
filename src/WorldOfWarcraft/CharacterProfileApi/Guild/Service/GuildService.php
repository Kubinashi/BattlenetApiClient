<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Guild\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Guild\Model\EmblemValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Guild\Model\GuildValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-28
 * @version 1.0
 */
class GuildService
{
    /**
     * @param \StdClass $guild
     * @return GuildValueObject
     */
    public function prepareGuildValueObject($guild)
    {
        $emblemValueObject = $this->prepareEmblem($guild->emblem);

        return new GuildValueObject(
            $guild->name,
            $guild->realm,
            $guild->battlegroup,
            $guild->members,
            $emblemValueObject
        );
    }

    /**
     * @param \StdClass $emblem
     * @return EmblemValueObject
     */
    private function prepareEmblem($emblem)
    {
        return new EmblemValueObject (
            $emblem->icon,
            $emblem->iconColor,
            $emblem->iconColorId,
            $emblem->border,
            $emblem->borderColor,
            $emblem->borderColorId,
            $emblem->backgroundColor,
            $emblem->backgroundColorId
        );
    }
}
