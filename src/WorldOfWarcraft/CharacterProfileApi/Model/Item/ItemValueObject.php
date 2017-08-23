<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class ItemValueObject
{
    /**
     * @var int
     */
    private $averageItemLevel;
    /**
     * @var int
     */
    private $averageItemLevelEquipped;
    /**
     * @var StandardItemValueObject
     */
    private $head;
    /**
     * @var StandardItemValueObject
     */
    private $neck;
    /**
     * @var StandardItemValueObject
     */
    private $shoulder;
    /**
     * @var StandardItemValueObject
     */
    private $back;
    /**
     * @var StandardItemValueObject
     */
    private $chest;
    /**
     * @var StandardItemValueObject
     */
    private $shirt;
    /**
     * @var StandardItemValueObject
     */
    private $wrist;
    /**
     * @var StandardItemValueObject
     */
    private $hands;
    /**
     * @var StandardItemValueObject
     */
    private $waist;
    /**
     * @var StandardItemValueObject
     */
    private $legs;
    /**
     * @var StandardItemValueObject
     */
    private $feet;
    /**
     * @var StandardItemValueObject
     */
    private $finger1;
    /**
     * @var StandardItemValueObject
     */
    private $finger2;
    /**
     * @var StandardItemValueObject
     */
    private $trinket1;
    /**
     * @var StandardItemValueObject
     */
    private $trinket2;
    /**
     * @var WeaponItemValueObject
     */
    private $mainHand;
    /**
     * @var WeaponItemValueObject
     */
    private $offHand;

    /**
     * ItemValueObject constructor.
     * @param int                     $averageItemLevel
     * @param int                     $averageItemLevelEquipped
     * @param StandardItemValueObject $head
     * @param StandardItemValueObject $neck
     * @param StandardItemValueObject $shoulder
     * @param StandardItemValueObject $back
     * @param StandardItemValueObject $chest
     * @param StandardItemValueObject $shirt
     * @param StandardItemValueObject $wrist
     * @param StandardItemValueObject $hands
     * @param StandardItemValueObject $waist
     * @param StandardItemValueObject $legs
     * @param StandardItemValueObject $feet
     * @param StandardItemValueObject $finger1
     * @param StandardItemValueObject $finger2
     * @param StandardItemValueObject $trinket1
     * @param StandardItemValueObject $trinket2
     * @param WeaponItemValueObject   $mainHand
     * @param WeaponItemValueObject   $offHand
     */
    public function __construct(
        $averageItemLevel,
        $averageItemLevelEquipped,
        $head,
        $neck,
        $shoulder,
        $back,
        $chest,
        $shirt,
        $wrist,
        $hands,
        $waist,
        $legs,
        $feet,
        $finger1,
        $finger2,
        $trinket1,
        $trinket2,
        $mainHand,
        $offHand
    ) {
        $this->averageItemLevel = $averageItemLevel;
        $this->averageItemLevelEquipped = $averageItemLevelEquipped;
        $this->head = $head;
        $this->neck = $neck;
        $this->shoulder = $shoulder;
        $this->back = $back;
        $this->chest = $chest;
        $this->shirt = $shirt;
        $this->wrist = $wrist;
        $this->hands = $hands;
        $this->waist = $waist;
        $this->legs = $legs;
        $this->feet = $feet;
        $this->finger1 = $finger1;
        $this->finger2 = $finger2;
        $this->trinket1 = $trinket1;
        $this->trinket2 = $trinket2;
        $this->mainHand = $mainHand;
        $this->offHand = $offHand;
    }

    /**
     * @return int
     */
    public function getAverageItemLevel()
    {
        return $this->averageItemLevel;
    }

    /**
     * @return int
     */
    public function getAverageItemLevelEquipped()
    {
        return $this->averageItemLevelEquipped;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getNeck()
    {
        return $this->neck;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getShoulder()
    {
        return $this->shoulder;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getBack()
    {
        return $this->back;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getChest()
    {
        return $this->chest;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getShirt()
    {
        return $this->shirt;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getWrist()
    {
        return $this->wrist;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getHands()
    {
        return $this->hands;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getWaist()
    {
        return $this->waist;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getLegs()
    {
        return $this->legs;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getFeet()
    {
        return $this->feet;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getFinger1()
    {
        return $this->finger1;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getFinger2()
    {
        return $this->finger2;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getTrinket1()
    {
        return $this->trinket1;
    }

    /**
     * @return StandardItemValueObject
     */
    public function getTrinket2()
    {
        return $this->trinket2;
    }

    /**
     * @return WeaponItemValueObject
     */
    public function getMainHand()
    {
        return $this->mainHand;
    }

    /**
     * @return WeaponItemValueObject
     */
    public function getOffHand()
    {
        return $this->offHand;
    }
}
