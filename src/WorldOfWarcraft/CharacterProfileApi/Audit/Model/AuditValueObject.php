<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Audit\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-27
 * @version 1.0
 */
class AuditValueObject
{
    /**
     * @var int
     */
    private $numberOfIssues;
    /**
     * @var int[]
     */
    private $slots;
    /**
     * @var int
     */
    private $unspentTalentPoints;
    /**
     * @var int[]
     */
    private $unenchantedItems;
    /**
     * @var int
     */
    private $emptySockets;
    /**
     * @var int[]
     */
    private $itemsWithEmptySockets;
    /**
     * @var int
     */
    private $appropriateArmorType;

    /**
     * AuditValueObject constructor.
     * @param int   $numberOfIssues
     * @param int[] $slots
     * @param int   $unspentTalentPoints
     * @param int[] $unenchantedItems
     * @param int   $emptySockets
     * @param int[] $itemsWithEmptySockets
     * @param  int  $appropriateArmorType
     */
    public function __construct(
        $numberOfIssues,
        $slots,
        $unspentTalentPoints,
        $unenchantedItems,
        $emptySockets,
        $itemsWithEmptySockets,
        $appropriateArmorType
    ) {
        $this->numberOfIssues = $numberOfIssues;
        $this->slots = $slots;
        $this->unspentTalentPoints = $unspentTalentPoints;
        $this->unenchantedItems = $unenchantedItems;
        $this->emptySockets = $emptySockets;
        $this->itemsWithEmptySockets = $itemsWithEmptySockets;
        $this->appropriateArmorType = $appropriateArmorType;
    }

    /**
     * @return int
     */
    public function getNumberOfIssues()
    {
        return $this->numberOfIssues;
    }

    /**
     * @return int[]
     */
    public function getSlots()
    {
        return $this->slots;
    }

    /**
     * @return int
     */
    public function getUnspentTalentPoints()
    {
        return $this->unspentTalentPoints;
    }

    /**
     * @return int[]
     */
    public function getUnenchantedItems()
    {
        return $this->unenchantedItems;
    }

    /**
     * @return int
     */
    public function getEmptySockets()
    {
        return $this->emptySockets;
    }

    /**
     * @return int[]
     */
    public function getItemsWithEmptySockets()
    {
        return $this->itemsWithEmptySockets;
    }

    /**
     * @return int
     */
    public function getAppropriateArmorType()
    {
        return $this->appropriateArmorType;
    }
}
