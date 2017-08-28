<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Progression\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-28
 * @version 1.0
 */
class RaidValueObject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $lfr;

    /**
     * @var int
     */
    private $normal;

    /**
     * @var int
     */
    private $heroic;

    /**
     * @var int
     */
    private $mythic;

    /**
     * @var int
     */
    private $id;

    /**
     * @var BossValueObject[]
     */
    private $bosses;

    /**
     * RaidValueObject constructor.
     * @param string            $name
     * @param int               $lfr
     * @param int               $normal
     * @param int               $heroic
     * @param int               $mythic
     * @param int               $id
     * @param BossValueObject[] $bosses
     */
    public function __construct(
        $name,
        $lfr,
        $normal,
        $heroic,
        $mythic,
        $id,
        $bosses
    ) {
        $this->name = $name;
        $this->lfr = $lfr;
        $this->normal = $normal;
        $this->heroic = $heroic;
        $this->mythic = $mythic;
        $this->id = $id;
        $this->bosses = $bosses;
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
    public function getLfr()
    {
        return $this->lfr;
    }

    /**
     * @return int
     */
    public function getNormal()
    {
        return $this->normal;
    }

    /**
     * @return int
     */
    public function getHeroic()
    {
        return $this->heroic;
    }

    /**
     * @return int
     */
    public function getMythic()
    {
        return $this->mythic;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return BossValueObject[]
     */
    public function getBosses()
    {
        return $this->bosses;
    }
}
