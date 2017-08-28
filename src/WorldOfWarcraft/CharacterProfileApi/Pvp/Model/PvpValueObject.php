<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Pvp\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-28
 * @version 1.0
 */
class PvpValueObject
{
    /**
     * @var BracketValueObject[]
     */
    private $brackets;

    /**
     * PvpValueObject constructor.
     * @param BracketValueObject[] $brackets
     */
    public function __construct($brackets)
    {
        $this->brackets = $brackets;
    }

    /**
     * @return BracketValueObject[]
     */
    public function getBrackets()
    {
        return $this->brackets;
    }
}
