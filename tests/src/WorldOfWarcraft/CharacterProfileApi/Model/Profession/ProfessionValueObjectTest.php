<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model\Profession;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Profession\Model\ProfessionValueObject;
use PHPUnit\Framework\TestCase;

class ProfessionValueObjectTest extends TestCase
{
    private $recipes;
    private $max;
    private $rank;
    private $icon;
    private $professionName;
    private $id;

    public function setUp(): void
    {
        $this->id = uniqid();
        $this->professionName = uniqid();
        $this->icon = uniqid();
        $this->rank = uniqid();
        $this->max = uniqid();
        $this->recipes = uniqid();
    }

    public function testGetId()
    {
        $object = new ProfessionValueObject(
            $this->id,
            $this->professionName,
            $this->icon,
            $this->rank,
            $this->max,
            $this->recipes
        );

        $this->assertEquals($this->id, $object->getId());
    }

    public function testGetName()
    {
        $object = new ProfessionValueObject(
            $this->id,
            $this->professionName,
            $this->icon,
            $this->rank,
            $this->max,
            $this->recipes
        );

        $this->assertEquals($this->professionName, $object->getName());
    }

    public function testGetIcon()
    {
        $object = new ProfessionValueObject(
            $this->id,
            $this->professionName,
            $this->icon,
            $this->rank,
            $this->max,
            $this->recipes
        );

        $this->assertEquals($this->icon, $object->getIcon());
    }

    public function testGetRank()
    {
        $object = new ProfessionValueObject(
            $this->id,
            $this->professionName,
            $this->icon,
            $this->rank,
            $this->max,
            $this->recipes
        );

        $this->assertEquals($this->rank, $object->getRank());
    }

    public function testGetMax()
    {
        $object = new ProfessionValueObject(
            $this->id,
            $this->professionName,
            $this->icon,
            $this->rank,
            $this->max,
            $this->recipes
        );

        $this->assertEquals($this->max, $object->getMax());
    }

    public function testGetRecipes()
    {
        $object = new ProfessionValueObject(
            $this->id,
            $this->professionName,
            $this->icon,
            $this->rank,
            $this->max,
            $this->recipes
        );

        $this->assertEquals($this->recipes, $object->getRecipes());
    }
}
