<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-01
 * @version 1.0
 */
class TitleValueObject
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
     * TitleValueObject constructor.
     * @param int    $id
     * @param string $name
     */
    public function __construct(
        $id,
        $name
    ) {

        $this->id = $id;
        $this->name = $name;
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
}
