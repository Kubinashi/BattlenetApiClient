<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\RewardItem\Model;

/**
 * @author  Willy Reiche
 * @since   2017-12-06
 * @version 1.0
 */
class RewardItemValueObject
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
     * @var array
     */
    private $tooltipParams;
    /**
     * @var array
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
     * @var array
     */
    private $bonusLists;
    /**
     * @var int
     */
    private $artifactId;
    /**
     * @var int
     */
    private $displayInfoId;
    /**
     * @var int
     */
    private $artifactAppearanceId;
    /**
     * @var array
     */
    private $artifactTraits;
    /**
     * @var array
     */
    private $relics;
    /**
     * @var array
     */
    private $appearance;

    /**
     * RewardItemValueObject constructor.
     * @param int    $id
     * @param string $name
     * @param string $icon
     * @param int    $quality
     * @param int    $itemLevel
     * @param array  $tooltipParams
     * @param array  $stats
     * @param int    $armor
     * @param string $context
     * @param array  $bonusLists
     * @param int    $artifactId
     * @param int    $displayInfoId
     * @param int    $artifactAppearanceId
     * @param array  $artifactTraits
     * @param array  $relics
     * @param array  $appearance
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
        $artifactId,
        $displayInfoId,
        $artifactAppearanceId,
        $artifactTraits,
        $relics,
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
        $this->artifactId = $artifactId;
        $this->displayInfoId = $displayInfoId;
        $this->artifactAppearanceId = $artifactAppearanceId;
        $this->artifactTraits = $artifactTraits;
        $this->relics = $relics;
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
     * @return array
     */
    public function getTooltipParams()
    {
        return $this->tooltipParams;
    }

    /**
     * @return array
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
     * @return array
     */
    public function getBonusLists()
    {
        return $this->bonusLists;
    }

    /**
     * @return int
     */
    public function getArtifactId()
    {
        return $this->artifactId;
    }

    /**
     * @return int
     */
    public function getDisplayInfoId()
    {
        return $this->displayInfoId;
    }

    /**
     * @return int
     */
    public function getArtifactAppearanceId()
    {
        return $this->artifactAppearanceId;
    }

    /**
     * @return array
     */
    public function getArtifactTraits()
    {
        return $this->artifactTraits;
    }

    /**
     * @return array
     */
    public function getRelics()
    {
        return $this->relics;
    }

    /**
     * @return array
     */
    public function getAppearance()
    {
        return $this->appearance;
    }
}
