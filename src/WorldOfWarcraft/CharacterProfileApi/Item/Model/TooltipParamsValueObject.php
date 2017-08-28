<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class TooltipParamsValueObject
{
    /**
     * @var int
     */
    private $transmogItem;
    /**
     * @var int
     */
    private $timewalkerLevel;

    /**
     * TooltipParamsValueObject constructor.
     * @param int $transmogItem
     * @param int $timewalkerLevel
     */
    public function __construct(
        $transmogItem,
        $timewalkerLevel
    ) {
        $this->transmogItem = $transmogItem;
        $this->timewalkerLevel = $timewalkerLevel;
    }

    /**
     * @return int
     */
    public function getTransmogItem()
    {
        return $this->transmogItem;
    }

    /**
     * @return int
     */
    public function getTimewalkerLevel()
    {
        return $this->timewalkerLevel;
    }
}
