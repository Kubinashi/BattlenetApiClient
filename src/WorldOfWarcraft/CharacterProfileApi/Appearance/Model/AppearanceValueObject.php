<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Appearance\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-22
 * @version 1.0
 */
class AppearanceValueObject
{
    /**
     * @var string
     */
    private $faceVariation;

    /**
     * @var string
     */
    private $skinColor;

    /**
     * @var string
     */
    private $hairVariation;

    /**
     * @var string
     */
    private $hairColor;

    /**
     * @var string
     */
    private $featureVariation;

    /**
     * @var string
     */
    private $showHelm;

    /**
     * @var string
     */
    private $showCloak;

    /**
     * @var string
     */
    private $customDisplayOptions;

    /**
     * AppearanceValueObject constructor.
     * @param string $faceVariation
     * @param string $skinColor
     * @param string $hairVariation
     * @param string $hairColor
     * @param string $featureVariation
     * @param string $showHelm
     * @param string $showCloak
     * @param string $customDisplayOptions
     */
    public function __construct(
        $faceVariation,
        $skinColor,
        $hairVariation,
        $hairColor,
        $featureVariation,
        $showHelm,
        $showCloak,
        $customDisplayOptions
    ) {
        $this->faceVariation = $faceVariation;
        $this->skinColor = $skinColor;
        $this->hairVariation = $hairVariation;
        $this->hairColor = $hairColor;
        $this->featureVariation = $featureVariation;
        $this->showHelm = $showHelm;
        $this->showCloak = $showCloak;
        $this->customDisplayOptions = $customDisplayOptions;
    }

    /**
     * @return string
     */
    public function getFaceVariation()
    {
        return $this->faceVariation;
    }

    /**
     * @return string
     */
    public function getSkinColor()
    {
        return $this->skinColor;
    }

    /**
     * @return string
     */
    public function getHairVariation()
    {
        return $this->hairVariation;
    }

    /**
     * @return string
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * @return string
     */
    public function getFeatureVariation()
    {
        return $this->featureVariation;
    }

    /**
     * @return string
     */
    public function getShowHelm()
    {
        return $this->showHelm;
    }

    /**
     * @return string
     */
    public function getShowCloak()
    {
        return $this->showCloak;
    }

    /**
     * @return string
     */
    public function getCustomDisplayOptions()
    {
        return $this->customDisplayOptions;
    }
}
