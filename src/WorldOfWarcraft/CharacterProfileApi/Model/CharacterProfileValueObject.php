<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-22
 * @version 1.0
 */
class CharacterProfileValueObject
{
    /**
     * @var string
     */
    private $lastModified;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $realm;

    /**
     * @var string
     */
    private $battleGroup;

    /**
     * @var string
     */
    private $class;

    /**
     * @var string
     */
    private $race;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $level;

    /**
     * @var string
     */
    private $achievementPoints;

    /**
     * @var string
     */
    private $thumbnail;

    /**
     * @var string
     */
    private $calcClass;

    /**
     * @var string
     */
    private $faction;

    /**
     * @var string
     */
    private $totalHonorableKills;

    /**
     * CharacterProfileValueObject constructor.
     * @param string $lastModified
     * @param string $name
     * @param string $realm
     * @param string $battleGroup
     * @param string $class
     * @param string $race
     * @param string $gender
     * @param string $level
     * @param string $achievementPoints
     * @param string $thumbnail
     * @param string $calcClass
     * @param string $faction
     * @param string $totalHonorableKills
     */
    public function __construct(
        $lastModified,
        $name,
        $realm,
        $battleGroup,
        $class,
        $race,
        $gender,
        $level,
        $achievementPoints,
        $thumbnail,
        $calcClass,
        $faction,
        $totalHonorableKills
    ) {
        $this->lastModified = $lastModified;
        $this->name = $name;
        $this->realm = $realm;
        $this->battleGroup = $battleGroup;
        $this->class = $class;
        $this->race = $race;
        $this->gender = $gender;
        $this->level = $level;
        $this->achievementPoints = $achievementPoints;
        $this->thumbnail = $thumbnail;
        $this->calcClass = $calcClass;
        $this->faction = $faction;
        $this->totalHonorableKills = $totalHonorableKills;
    }

    /**
     * @return string
     */
    public function getLastModified()
    {
        return $this->lastModified;
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
    public function getRealm()
    {
        return $this->realm;
    }

    /**
     * @return string
     */
    public function getBattleGroup()
    {
        return $this->battleGroup;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function getAchievementPoints()
    {
        return $this->achievementPoints;
    }

    /**
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @return string
     */
    public function getCalcClass()
    {
        return $this->calcClass;
    }

    /**
     * @return string
     */
    public function getFaction()
    {
        return $this->faction;
    }

    /**
     * @return string
     */
    public function getTotalHonorableKills()
    {
        return $this->totalHonorableKills;
    }
}
