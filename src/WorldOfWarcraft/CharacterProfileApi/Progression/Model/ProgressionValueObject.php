<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Progression\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-28
 * @version 1.0
 */
class ProgressionValueObject
{
    /**
     * @var RaidValueObject[]
     */
    private $raids;

    /**
     * ProgressionValueObject constructor.
     * @param RaidValueObject[] $raids
     */
    public function __construct($raids)
    {
        $this->raids = $raids;
    }

    /**
     * @return RaidValueObject[]
     */
    public function getRaids()
    {
        return $this->raids;
    }
}
