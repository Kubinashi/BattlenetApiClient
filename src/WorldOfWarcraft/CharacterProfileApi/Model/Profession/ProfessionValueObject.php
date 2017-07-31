<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Profession;

/**
 * @author  Willy Reiche
 * @since   2017-07-24
 * @version 1.0
 */
class ProfessionValueObject
{
    /**
     * @var string
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
     * @var string
     */
    private $rank;

    /**
     * @var string
     */
    private $max;

    /**
     * @var string
     */
    private $recipes;

    /**
     * ProfessionValueObject constructor.
     *
     * @param string $id
     * @param string $name
     * @param string $icon
     * @param string $rank
     * @param string $max
     * @param string $recipes
     */
    public function __construct(
        $id,
        $name,
        $icon,
        $rank,
        $max,
        $recipes
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->icon = $icon;
        $this->rank = $rank;
        $this->max = $max;
        $this->recipes = $recipes;
    }

    /**
     * @return string
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
     * @return string
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @return string
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @return string
     */
    public function getRecipes()
    {
        return $this->recipes;
    }
}
