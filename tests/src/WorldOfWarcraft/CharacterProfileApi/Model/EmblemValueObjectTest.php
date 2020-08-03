<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Guild\Model\EmblemValueObject;
use PHPUnit\Framework\TestCase;

class EmblemValueObjectTest extends TestCase
{
    private $backgroundColorId;
    private $backgroundColor;
    private $borderColorId;
    private $borderColor;
    private $border;
    private $iconColorId;
    private $iconColor;
    private $icon;

    public function setUp(): void
    {
        $this->icon = uniqid();
        $this->iconColor = uniqid();
        $this->iconColorId = uniqid();
        $this->border = uniqid();
        $this->borderColor = uniqid();
        $this->borderColorId = uniqid();
        $this->backgroundColor = uniqid();
        $this->backgroundColorId = uniqid();
    }

    public function testGetIcon()
    {
        $object = new EmblemValueObject(
            $this->icon,
            $this->iconColor,
            $this->iconColorId,
            $this->border,
            $this->borderColor,
            $this->borderColorId,
            $this->backgroundColor,
            $this->backgroundColorId
        );

        $this->assertEquals($this->icon, $object->getIcon());
    }

    public function testGetIconColor()
    {
        $object = new EmblemValueObject(
            $this->icon,
            $this->iconColor,
            $this->iconColorId,
            $this->border,
            $this->borderColor,
            $this->borderColorId,
            $this->backgroundColor,
            $this->backgroundColorId
        );

        $this->assertEquals($this->iconColor, $object->getIconColor());
    }

    public function testGetIconColorId()
    {
        $object = new EmblemValueObject(
            $this->icon,
            $this->iconColor,
            $this->iconColorId,
            $this->border,
            $this->borderColor,
            $this->borderColorId,
            $this->backgroundColor,
            $this->backgroundColorId
        );

        $this->assertEquals($this->iconColorId, $object->getIconColorId());
    }

    public function testGetBorder()
    {
        $object = new EmblemValueObject(
            $this->icon,
            $this->iconColor,
            $this->iconColorId,
            $this->border,
            $this->borderColor,
            $this->borderColorId,
            $this->backgroundColor,
            $this->backgroundColorId
        );

        $this->assertEquals($this->border, $object->getBorder());
    }

    public function testGetBorderColor()
    {
        $object = new EmblemValueObject(
            $this->icon,
            $this->iconColor,
            $this->iconColorId,
            $this->border,
            $this->borderColor,
            $this->borderColorId,
            $this->backgroundColor,
            $this->backgroundColorId
        );

        $this->assertEquals($this->borderColor, $object->getBorderColor());
    }

    public function testGetBorderColorId()
    {
        $object = new EmblemValueObject(
            $this->icon,
            $this->iconColor,
            $this->iconColorId,
            $this->border,
            $this->borderColor,
            $this->borderColorId,
            $this->backgroundColor,
            $this->backgroundColorId
        );

        $this->assertEquals($this->borderColorId, $object->getBorderColorId());
    }

    public function testGetBackgroundColor()
    {
        $object = new EmblemValueObject(
            $this->icon,
            $this->iconColor,
            $this->iconColorId,
            $this->border,
            $this->borderColor,
            $this->borderColorId,
            $this->backgroundColor,
            $this->backgroundColorId
        );

        $this->assertEquals($this->backgroundColor, $object->getBackgroundColor());
    }

    public function testGetBackgroundColorId()
    {
        $object = new EmblemValueObject(
            $this->icon,
            $this->iconColor,
            $this->iconColorId,
            $this->border,
            $this->borderColor,
            $this->borderColorId,
            $this->backgroundColor,
            $this->backgroundColorId
        );

        $this->assertEquals($this->backgroundColorId, $object->getBackgroundColorId());
    }
}
