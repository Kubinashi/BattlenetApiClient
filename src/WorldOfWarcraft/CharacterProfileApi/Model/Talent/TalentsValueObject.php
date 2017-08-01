<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Talent;

use Kubinashi\BattlenetApi\WorldOfWarcraft\Model\SpellValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-01
 * @version 1.0
 */
class TalentsValueObject
{
    /**
     * @var int
     */
    private $tier;

    /**
     * @var int
     */
    private $column;

    /**
     * @var SpellValueObject
     */
    private $spell;

    /**
     * @var SpecValueObject
     */
    private $spec;

    /**
     * TalentsValueObject constructor.
     * @param int              $tier
     * @param int              $column
     * @param SpellValueObject $spell
     * @param SpecValueObject  $spec
     */
    public function __construct(
        $tier,
        $column,
        SpellValueObject $spell,
        SpecValueObject $spec
    ) {

        $this->tier = $tier;
        $this->column = $column;
        $this->spell = $spell;
        $this->spec = $spec;
    }

    /**
     * @return int
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * @return int
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @return SpellValueObject
     */
    public function getSpell()
    {
        return $this->spell;
    }

    /**
     * @return SpecValueObject
     */
    public function getSpec()
    {
        return $this->spec;
    }
}
