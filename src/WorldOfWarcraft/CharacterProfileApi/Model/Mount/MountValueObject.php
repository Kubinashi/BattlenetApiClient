<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Mount;

/**
 * @author  Willy Reiche
 * @since   2017-07-25
 * @version 1.0
 */
class MountValueObject
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $spellId;

    /**
     * @var int
     */
    private $creatureId;

    /**
     * @var int
     */
    private $itemId;

    /**
     * @var int
     */
    private $qualityId;

    /**
     * @var string
     */
    private $icon;

    /**
     * @var bool
     */
    private $isGrounded;

    /**
     * @var bool
     */
    private $isFlying;

    /**
     * @var bool
     */
    private $isAquatic;

    /**
     * @var bool
     */
    private $isJumping;

    /**
     * MountValueObject constructor.
     * @param string $name
     * @param int    $spellId
     * @param int    $creatureId
     * @param int    $itemId
     * @param int    $qualityId
     * @param string $icon
     * @param bool   $isGrounded
     * @param bool   $isFlying
     * @param bool   $isAquatic
     * @param bool   $isJumping
     */
    public function __construct(
        $name,
        $spellId,
        $creatureId,
        $itemId,
        $qualityId,
        $icon,
        $isGrounded,
        $isFlying,
        $isAquatic,
        $isJumping
    ) {
        $this->name = $name;
        $this->spellId = $spellId;
        $this->creatureId = $creatureId;
        $this->itemId = $itemId;
        $this->qualityId = $qualityId;
        $this->icon = $icon;
        $this->isGrounded = $isGrounded;
        $this->isFlying = $isFlying;
        $this->isAquatic = $isAquatic;
        $this->isJumping = $isJumping;
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
    public function getSpellId()
    {
        return $this->spellId;
    }

    /**
     * @return int
     */
    public function getCreatureId()
    {
        return $this->creatureId;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @return int
     */
    public function getQualityId()
    {
        return $this->qualityId;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return bool
     */
    public function isGrounded()
    {
        return $this->isGrounded;
    }

    /**
     * @return bool
     */
    public function isFlying()
    {
        return $this->isFlying;
    }

    /**
     * @return bool
     */
    public function isAquatic()
    {
        return $this->isAquatic;
    }

    /**
     * @return bool
     */
    public function isJumping()
    {
        return $this->isJumping;
    }
}
