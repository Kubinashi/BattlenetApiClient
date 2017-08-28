<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Progression\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-28
 * @version 1.0
 */
class BossValueObject
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $lfrKills;

    /**
     * @var int
     */
    private $lfrTimestamp;

    /**
     * @var int
     */
    private $normalKills;

    /**
     * @var int
     */
    private $normalTimestamp;

    /**
     * @var int
     */
    private $heroicKills;

    /**
     * @var int
     */
    private $heroicTimestamp;

    /**
     * @var int
     */
    private $mythicKills;

    /**
     * @var int
     */
    private $mythicTimestamp;

    /**
     * BossValueObject constructor.
     * @param int    $id
     * @param string $name
     * @param int    $lfrKills
     * @param int    $lfrTimestamp
     * @param int    $normalKills
     * @param int    $normalTimestamp
     * @param int    $heroicKills
     * @param int    $heroicTimestamp
     * @param int    $mythicKills
     * @param int    $mythicTimestamp
     */
    public function __construct(
        $id,
        $name,
        $lfrKills,
        $lfrTimestamp,
        $normalKills,
        $normalTimestamp,
        $heroicKills,
        $heroicTimestamp,
        $mythicKills,
        $mythicTimestamp
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->lfrKills = $lfrKills;
        $this->lfrTimestamp = $lfrTimestamp;
        $this->normalKills = $normalKills;
        $this->normalTimestamp = $normalTimestamp;
        $this->heroicKills = $heroicKills;
        $this->heroicTimestamp = $heroicTimestamp;
        $this->mythicKills = $mythicKills;
        $this->mythicTimestamp = $mythicTimestamp;
    }

    /**
     * @return int
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
     * @return int
     */
    public function getLfrKills()
    {
        return $this->lfrKills;
    }

    /**
     * @return int
     */
    public function getLfrTimestamp()
    {
        return $this->lfrTimestamp;
    }

    /**
     * @return int
     */
    public function getNormalKills()
    {
        return $this->normalKills;
    }

    /**
     * @return int
     */
    public function getNormalTimestamp()
    {
        return $this->normalTimestamp;
    }

    /**
     * @return int
     */
    public function getHeroicKills()
    {
        return $this->heroicKills;
    }

    /**
     * @return int
     */
    public function getHeroicTimestamp()
    {
        return $this->heroicTimestamp;
    }

    /**
     * @return int
     */
    public function getMythicKills()
    {
        return $this->mythicKills;
    }

    /**
     * @return int
     */
    public function getMythicTimestamp()
    {
        return $this->mythicTimestamp;
    }
}
