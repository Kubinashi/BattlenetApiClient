<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model\HunterPet;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Shared\Model\SpecValueObject;
use PHPUnit\Framework\TestCase;

class HunterPetSpecValueObjectTest extends TestCase
{
    private $order;
    private $description;
    private $icon;
    private $backgroundImage;
    private $role;
    private $specName;

    public function setUp(): void
    {
        $this->specName = uniqid();
        $this->role = uniqid();
        $this->backgroundImage = uniqid();
        $this->icon = uniqid();
        $this->description = uniqid();
        $this->order = uniqid();
    }

    public function testGetPetName()
    {
        $object = new SpecValueObject(
            $this->specName,
            $this->role,
            $this->backgroundImage,
            $this->icon,
            $this->description,
            $this->order
        );

        $this->assertEquals($this->specName, $object->getName());
    }

    public function testGetRole()
    {
        $object = new SpecValueObject(
            $this->specName,
            $this->role,
            $this->backgroundImage,
            $this->icon,
            $this->description,
            $this->order
        );

        $this->assertEquals($this->role, $object->getRole());
    }

    public function testGetBackgroundImage()
    {
        $object = new SpecValueObject(
            $this->specName,
            $this->role,
            $this->backgroundImage,
            $this->icon,
            $this->description,
            $this->order
        );

        $this->assertEquals($this->backgroundImage, $object->getBackgroundImage());
    }

    public function testGetIcon()
    {
        $object = new SpecValueObject(
            $this->specName,
            $this->role,
            $this->backgroundImage,
            $this->icon,
            $this->description,
            $this->order
        );

        $this->assertEquals($this->icon, $object->getIcon());
    }

    public function testGetDescription()
    {
        $object = new SpecValueObject(
            $this->specName,
            $this->role,
            $this->backgroundImage,
            $this->icon,
            $this->description,
            $this->order
        );

        $this->assertEquals($this->description, $object->getDescription());
    }

    public function testGetOrder()
    {
        $object = new SpecValueObject(
            $this->specName,
            $this->role,
            $this->backgroundImage,
            $this->icon,
            $this->description,
            $this->order
        );

        $this->assertEquals($this->order, $object->getOrder());
    }
}
