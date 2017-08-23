<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class WeaponInfoValueObject
{
    /**
     * @var DamageValueObject
     */
    private $damage;
    /**
     * @var float
     */
    private $weaponSpeed;
    /**
     * @var float
     */
    private $dps;

    /**
     * WeaponInfoValueObject constructor.
     * @param DamageValueObject $damage
     * @param float             $weaponSpeed
     * @param float             $dps
     */
    public function __construct(
        $damage,
        $weaponSpeed,
        $dps
    ) {
        $this->damage = $damage;
        $this->weaponSpeed = $weaponSpeed;
        $this->dps = $dps;
    }

    /**
     * @return DamageValueObject
     */
    public function getDamage()
    {
        return $this->damage;
    }

    /**
     * @return float
     */
    public function getWeaponSpeed()
    {
        return $this->weaponSpeed;
    }

    /**
     * @return float
     */
    public function getDps()
    {
        return $this->dps;
    }
}
