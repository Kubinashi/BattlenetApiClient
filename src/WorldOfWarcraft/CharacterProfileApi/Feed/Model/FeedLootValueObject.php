<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Feed\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-22
 * @version 1.0
 */
class FeedLootValueObject
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $timestamp;

    /**
     * @var int
     */
    private $itemId;

    /**
     * @var string
     */
    private $context;

    /**
     * @var int[]
     */
    private $bonusLists;

    /**
     * LootValueObject constructor.
     * @param string $type
     * @param int    $timestamp
     * @param int    $itemId
     * @param string $context
     * @param int[]  $bonusLists
     */
    public function __construct(
        $type,
        $timestamp,
        $itemId,
        $context,
        $bonusLists
    ) {
        $this->type = $type;
        $this->timestamp = $timestamp;
        $this->itemId = $itemId;
        $this->context = $context;
        $this->bonusLists = $bonusLists;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return string
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
