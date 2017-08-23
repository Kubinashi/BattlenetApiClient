<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class StandardItemValueObject
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $icon;
    /**
     * @var int
     */
    private $quality;
    /**
     * @var int
     */
    private $itemLevel;
    /**
     * @var TooltipParamsValueObject
     */
    private $tooltipParams;
    /**
     * @var ItemStatValueObject[]
     */
    private $stats;
    /**
     * @var int
     */
    private $armor;
    /**
     * @var string
     */
    private $context;
    /**
     * @var int[]
     */
    private $bonusLists;
    /**
     * @var int
     */
    private $displayInfoId;
    /**
     * @var ItemAppearanceValueObject
     */
    private $appearance;

    /**
     * ArmorItemValueObject constructor.
     * @param int                       $id
     * @param string                    $name
     * @param string                    $icon
     * @param int                       $quality
     * @param int                       $itemLevel
     * @param TooltipParamsValueObject  $tooltipParams
     * @param ItemStatValueObject[]     $stats
     * @param int                       $armor
     * @param string                    $context
     * @param int[]                     $bonusLists
     * @param int                       $displayInfoId
     * @param ItemAppearanceValueObject $appearance
     */
    public function __construct(
        $id,
        $name,
        $icon,
        $quality,
        $itemLevel,
        $tooltipParams,
        $stats,
        $armor,
        $context,
        $bonusLists,
        $displayInfoId,
        $appearance
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->icon = $icon;
        $this->quality = $quality;
        $this->itemLevel = $itemLevel;
        $this->tooltipParams = $tooltipParams;
        $this->stats = $stats;
        $this->armor = $armor;
        $this->context = $context;
        $this->bonusLists = $bonusLists;
        $this->displayInfoId = $displayInfoId;
        $this->appearance = $appearance;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * @return int
     */
    public function getItemLevel()
    {
        return $this->itemLevel;
    }

    /**
     * @return TooltipParamsValueObject
     */
    public function getTooltipParams()
    {
        return $this->tooltipParams;
    }

    /**
     * @return ItemStatValueObject[]
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @return int
     */
    public function getArmor()
    {
        return $this->armor;
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

    /**
     * @return int
     */
    public function getDisplayInfoId()
    {
        return $this->displayInfoId;
    }

    /**
     * @return ItemAppearanceValueObject
     */
    public function getAppearance()
    {
        return $this->appearance;
    }
}
