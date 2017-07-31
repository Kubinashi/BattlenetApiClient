<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Mount;

/**
 * @author  Willy Reiche
 * @since   2017-07-25
 * @version 1.0
 */
class MountsValueObject
{
    /**
     * @var int
     */
    private $numCollected;

    /**
     * @var int
     */
    private $numNotCollected;

    /**
     * @var MountValueObject[]
     */
    private $collectedMounts;

    /**
     * MountsValueObject constructor.
     * @param int                $numCollected
     * @param int                $numNotCollected
     * @param MountValueObject[] $collectedMounts
     */
    public function __construct(
        $numCollected,
        $numNotCollected,
        $collectedMounts
    ) {
        $this->numCollected = $numCollected;
        $this->numNotCollected = $numNotCollected;
        $this->collectedMounts = $collectedMounts;
    }

    /**
     * @return int
     */
    public function getNumCollected()
    {
        return $this->numCollected;
    }

    /**
     * @return int
     */
    public function getNumNotCollected()
    {
        return $this->numNotCollected;
    }

    /**
     * @return MountValueObject[]
     */
    public function getCollectedMounts()
    {
        return $this->collectedMounts;
    }
}
