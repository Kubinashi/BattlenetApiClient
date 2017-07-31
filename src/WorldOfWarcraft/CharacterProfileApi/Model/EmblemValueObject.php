<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-22
 * @version 1.0
 */
class EmblemValueObject
{
    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $iconColor;

    /**
     * @var string
     */
    private $iconColorId;

    /**
     * @var string
     */
    private $border;

    /**
     * @var string
     */
    private $borderColor;

    /**
     * @var string
     */
    private $borderColorId;

    /**
     * @var string
     */
    private $backgroundColor;

    /**
     * @var string
     */
    private $backgroundColorId;

    /**
     * EmblemValueObject constructor.
     * @param string $icon
     * @param string $iconColor
     * @param string $iconColorId
     * @param string $border
     * @param string $borderColor
     * @param string $borderColorId
     * @param string $backgroundColor
     * @param string $backgroundColorId
     */
    public function __construct(
        $icon,
        $iconColor,
        $iconColorId,
        $border,
        $borderColor,
        $borderColorId,
        $backgroundColor,
        $backgroundColorId
    ) {
        $this->icon = $icon;
        $this->iconColor = $iconColor;
        $this->iconColorId = $iconColorId;
        $this->border = $border;
        $this->borderColor = $borderColor;
        $this->borderColorId = $borderColorId;
        $this->backgroundColor = $backgroundColor;
        $this->backgroundColorId = $backgroundColorId;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return string
     */
    public function getIconColor()
    {
        return $this->iconColor;
    }

    /**
     * @return string
     */
    public function getIconColorId()
    {
        return $this->iconColorId;
    }

    /**
     * @return string
     */
    public function getBorder()
    {
        return $this->border;
    }

    /**
     * @return string
     */
    public function getBorderColor()
    {
        return $this->borderColor;
    }

    /**
     * @return string
     */
    public function getBorderColorId()
    {
        return $this->borderColorId;
    }

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @return string
     */
    public function getBackgroundColorId()
    {
        return $this->backgroundColorId;
    }
}
