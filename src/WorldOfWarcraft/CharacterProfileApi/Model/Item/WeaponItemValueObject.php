<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class WeaponItemValueObject
{
    /**
     * @var WeaponInfoValueObject
     */
    private $weaponInfo;
    /**
     * @var int
     */
    private $artifactId;
    /**
     * @var int
     */
    private $artifactAppearanceId;
    /**
     * @var ArtifactTraitValueObject[]
     */
    private $artifactTraits;
    /**
     * @var RelicValueObject[]
     */
    private $relics;
    /**
     * @var StandardItemValueObject
     */
    private $standardItemValueObject;

    /**
     * WeaponItemValueObject constructor.
     * @param StandardItemValueObject $standardItemValueObject
     * @param WeaponInfoValueObject      $weaponInfo
     * @param int                        $artifactId
     * @param int                        $artifactAppearanceId
     * @param ArtifactTraitValueObject[] $artifactTraits
     * @param RelicValueObject[]         $relics
     */
    public function __construct(
        $standardItemValueObject,
        $weaponInfo,
        $artifactId,
        $artifactAppearanceId,
        $artifactTraits,
        $relics
    ) {
        $this->weaponInfo = $weaponInfo;
        $this->artifactId = $artifactId;
        $this->artifactAppearanceId = $artifactAppearanceId;
        $this->artifactTraits = $artifactTraits;
        $this->relics = $relics;
        $this->standardItemValueObject = $standardItemValueObject;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getStandardItemValueObject()
    {
        return $this->standardItemValueObject;
    }

    /**
     * @return WeaponInfoValueObject
     */
    public function getWeaponInfo()
    {
        return $this->weaponInfo;
    }

    /**
     * @return int
     */
    public function getArtifactId()
    {
        return $this->artifactId;
    }

    /**
     * @return int
     */
    public function getArtifactAppearanceId()
    {
        return $this->artifactAppearanceId;
    }

    /**
     * @return ArtifactTraitValueObject[]
     */
    public function getArtifactTraits()
    {
        return $this->artifactTraits;
    }

    /**
     * @return RelicValueObject[]
     */
    public function getRelics()
    {
        return $this->relics;
    }
}
