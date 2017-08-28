<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class ArtifactTraitValueObject
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var int
     */
    private $rank;

    /**
     * ArtifactTraitValueObject constructor.
     * @param int $id
     * @param int $rank
     */
    public function __construct(
        $id,
        $rank
    ) {
        $this->id = $id;
        $this->rank = $rank;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getRank()
    {
        return $this->rank;
    }
}
