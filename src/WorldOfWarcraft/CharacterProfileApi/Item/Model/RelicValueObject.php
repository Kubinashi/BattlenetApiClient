<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class RelicValueObject
{
    /**
     * @var int
     */
    private $socket;
    /**
     * @var int
     */
    private $itemId;
    /**
     * @var int
     */
    private $context;
    /**
     * @var int[]
     */
    private $bonusLists;

    /**
     * RelicValueObject constructor.
     * @param int   $socket
     * @param int   $itemId
     * @param int   $context
     * @param int[] $bonusLists
     */
    public function __construct(
        $socket,
        $itemId,
        $context,
        $bonusLists
    ) {
        $this->socket = $socket;
        $this->itemId = $itemId;
        $this->context = $context;
        $this->bonusLists = $bonusLists;
    }

    /**
     * @return int
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return int
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @return int[]
     */
    public function getBonusLists()
    {
        return $this->bonusLists;
    }
}
