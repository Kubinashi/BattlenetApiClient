<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Appearance\Model\AppearanceValueObject;
use PHPUnit\Framework\TestCase;

class AppearanceValueObjectTest extends TestCase
{
    private $faceVariation;
    private $skinColor;
    private $hairVariation;
    private $featureVariation;
    private $hairColor;
    private $showHelm;
    private $showCloak;
    private $customDisplayOptions;

    public function setUp(): void
    {
        $this->faceVariation = uniqid();
        $this->skinColor = uniqid();
        $this->hairVariation = uniqid();
        $this->hairColor = uniqid();
        $this->featureVariation = uniqid();
        $this->showHelm = uniqid();
        $this->showCloak = uniqid();
        $this->customDisplayOptions = uniqid();
    }

    public function testGetFaceVariation()
    {
        $object = new AppearanceValueObject(
            $this->faceVariation,
            $this->skinColor,
            $this->hairVariation,
            $this->hairColor,
            $this->featureVariation,
            $this->showHelm,
            $this->showCloak,
            $this->customDisplayOptions
        );

        $this->assertEquals($this->faceVariation, $object->getFaceVariation());
    }

    public function testGetSkinColor()
    {
        $object = new AppearanceValueObject(
            $this->faceVariation,
            $this->skinColor,
            $this->hairVariation,
            $this->hairColor,
            $this->featureVariation,
            $this->showHelm,
            $this->showCloak,
            $this->customDisplayOptions
        );

        $this->assertEquals($this->skinColor, $object->getSkinColor());
    }

    public function testGetHairVariation()
    {
        $object = new AppearanceValueObject(
            $this->faceVariation,
            $this->skinColor,
            $this->hairVariation,
            $this->hairColor,
            $this->featureVariation,
            $this->showHelm,
            $this->showCloak,
            $this->customDisplayOptions
        );

        $this->assertEquals($this->hairVariation, $object->getHairVariation());
    }

    public function testGetHairColor()
    {
        $object = new AppearanceValueObject(
            $this->faceVariation,
            $this->skinColor,
            $this->hairVariation,
            $this->hairColor,
            $this->featureVariation,
            $this->showHelm,
            $this->showCloak,
            $this->customDisplayOptions
        );

        $this->assertEquals($this->hairColor, $object->getHairColor());
    }

    public function testGetFeatureVariation()
    {
        $object = new AppearanceValueObject(
            $this->faceVariation,
            $this->skinColor,
            $this->hairVariation,
            $this->hairColor,
            $this->featureVariation,
            $this->showHelm,
            $this->showCloak,
            $this->customDisplayOptions
        );

        $this->assertEquals($this->featureVariation, $object->getFeatureVariation());
    }

    public function testGetShowHelm()
    {
        $object = new AppearanceValueObject(
            $this->faceVariation,
            $this->skinColor,
            $this->hairVariation,
            $this->hairColor,
            $this->featureVariation,
            $this->showHelm,
            $this->showCloak,
            $this->customDisplayOptions
        );

        $this->assertEquals($this->showHelm, $object->getShowHelm());
    }

    public function testGetShowCloak()
    {
        $object = new AppearanceValueObject(
            $this->faceVariation,
            $this->skinColor,
            $this->hairVariation,
            $this->hairColor,
            $this->featureVariation,
            $this->showHelm,
            $this->showCloak,
            $this->customDisplayOptions
        );

        $this->assertEquals($this->showCloak, $object->getShowCloak());
    }

    public function testGetCustomDisplayOptions()
    {
        $object = new AppearanceValueObject(
            $this->faceVariation,
            $this->skinColor,
            $this->hairVariation,
            $this->hairColor,
            $this->featureVariation,
            $this->showHelm,
            $this->showCloak,
            $this->customDisplayOptions
        );

        $this->assertEquals($this->customDisplayOptions, $object->getCustomDisplayOptions());
    }
}
