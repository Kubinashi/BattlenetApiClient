<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class ItemStatValueObject
{
    /**
     * @var int
     */
    private $stat;
    /**
     * @var int
     */
    private $amount;

    /**
     * ItemStatValueObject constructor.
     * @param int $stat
     * @param int $amount
     */
    public function __construct(
        $stat,
        $amount
    ) {
        $this->stat = $stat;
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getStat()
    {
        return $this->stat;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
