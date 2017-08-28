<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Quest\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-28
 * @version 1.0
 */
class QuestsValueObject
{
    /**
     * @var int[]
     */
    private $quests;

    /**
     * QuestsValueObject constructor.
     * @param int[] $quests
     */
    public function __construct($quests)
    {
        $this->quests = $quests;
    }

    /**
     * @return int[]
     */
    public function getQuests()
    {
        return $this->quests;
    }
}
