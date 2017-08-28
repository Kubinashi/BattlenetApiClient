<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Shared\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-01
 * @version 1.0
 */
class SpecValueObject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $backgroundImage;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $order;

    /**
     * SpecValueObject constructor.
     * @param string $name
     * @param string $role
     * @param string $backgroundImage
     * @param string $icon
     * @param string $description
     * @param int    $order
     */
    public function __construct(
        $name,
        $role,
        $backgroundImage,
        $icon,
        $description,
        $order
    ) {
        $this->name = $name;
        $this->role = $role;
        $this->backgroundImage = $backgroundImage;
        $this->icon = $icon;
        $this->description = $description;
        $this->order = $order;
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
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }
}
