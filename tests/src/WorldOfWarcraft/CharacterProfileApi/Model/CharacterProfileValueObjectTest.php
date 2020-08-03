<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\CharacterProfile\Model\CharacterProfileValueObject;
use PHPUnit\Framework\TestCase;

class CharacterProfileValueObjectTest extends TestCase
{
    private $lastModified;
    private $charName;
    private $realm;
    private $totalHonorableKills;
    private $faction;
    private $calcClass;
    private $thumbnail;
    private $achievementPoints;
    private $level;
    private $gender;
    private $race;
    private $class;
    private $battleGroup;

    public function setUp(): void
    {
        $this->lastModified = uniqid();
        $this->charName = uniqid();
        $this->realm = uniqid();
        $this->battleGroup = uniqid();
        $this->class = uniqid();
        $this->race = uniqid();
        $this->gender = uniqid();
        $this->level = uniqid();
        $this->achievementPoints = uniqid();
        $this->thumbnail = uniqid();
        $this->calcClass = uniqid();
        $this->faction = uniqid();
        $this->totalHonorableKills = uniqid();
    }

    public function testGetLastModified()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->lastModified, $object->getLastModified());
    }

    public function testGetCharName()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->charName, $object->getName());
    }

    public function testGetRealm()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->realm, $object->getRealm());
    }

    public function testGetBattlegroup()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->battleGroup, $object->getBattleGroup());
    }

    public function testGetClass()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->class, $object->getClass());
    }

    public function testGetRace()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->race, $object->getRace());
    }

    public function testGetGender()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->gender, $object->getGender());
    }

    public function testGetLevel()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->level, $object->getLevel());
    }

    public function testGetAchievementPoints()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->achievementPoints, $object->getAchievementPoints());
    }

    public function testGetThumbnail()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->thumbnail, $object->getThumbnail());
    }

    public function testGetCalcClass()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->calcClass, $object->getCalcClass());
    }

    public function testGetFaction()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->faction, $object->getFaction());
    }

    public function testGetTotalHonorableKills()
    {
        $object = new CharacterProfileValueObject(
            $this->lastModified,
            $this->charName,
            $this->realm,
            $this->battleGroup,
            $this->class,
            $this->race,
            $this->gender,
            $this->level,
            $this->achievementPoints,
            $this->thumbnail,
            $this->calcClass,
            $this->faction,
            $this->totalHonorableKills
        );

        $this->assertEquals($this->totalHonorableKills, $object->getTotalHonorableKills());
    }
}
