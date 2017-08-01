<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Talent;

/**
 * @author  Willy Reiche
 * @since   2017-08-01
 * @version 1.0
 */
class TalentValueObject
{
    /**
     * @var bool
     */
    private $selected;

    /**
     * @var TalentsValueObject[]
     */
    private $talentsValueObject;

    /**
     * @var SpecValueObject
     */
    private $specValueObject;

    /**
     * @var string
     */
    private $calcTalent;

    /**
     * @var string
     */
    private $calcSpec;

    /**
     * TalentValueObject constructor.
     * @param bool                 $selected
     * @param TalentsValueObject[] $talentsValueObject
     * @param SpecValueObject      $specValueObject
     * @param string               $calcTalent
     * @param string               $calcSpec
     */
    public function __construct(
        $selected,
        $talentsValueObject,
        $specValueObject,
        $calcTalent,
        $calcSpec
    ) {
        $this->selected = $selected;
        $this->talentsValueObject = $talentsValueObject;
        $this->specValueObject = $specValueObject;
        $this->calcTalent = $calcTalent;
        $this->calcSpec = $calcSpec;
    }

    /**
     * @return bool
     */
    public function isSelected()
    {
        return $this->selected;
    }

    /**
     * @return TalentsValueObject[]
     */
    public function getTalentsValueObject()
    {
        return $this->talentsValueObject;
    }

    /**
     * @return SpecValueObject
     */
    public function getSpecValueObject()
    {
        return $this->specValueObject;
    }

    /**
     * @return string
     */
    public function getCalcTalent()
    {
        return $this->calcTalent;
    }

    /**
     * @return string
     */
    public function getCalcSpec()
    {
        return $this->calcSpec;
    }
}
