<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class ItemAppearanceValueObject
{
    /**
     * @var int
     */
    private $itemId;
    /**
     * @var int
     */
    private $itemAAppearanceModId;

    /**
     * ItemAppearanceValueObject constructor.
     * @param int $itemId
     * @param int $itemAAppearanceModId
     */
    public function __construct(
        $itemId,
        $itemAAppearanceModId
    ) {
        $this->itemId = $itemId;
        $this->itemAAppearanceModId = $itemAAppearanceModId;
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
    public function getItemAAppearanceModId()
    {
        return $this->itemAAppearanceModId;
    }
}
