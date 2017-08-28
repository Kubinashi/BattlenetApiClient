<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model\ArtifactTraitValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model\DamageValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model\ItemAppearanceValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model\ItemStatValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model\ItemValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model\RelicValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model\StandardItemValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model\TooltipParamsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model\WeaponInfoValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Model\WeaponItemValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class ItemService
{
    public function prepareItemValueObject($items)
    {
        return new ItemValueObject(
            $items->averageItemLevel,
            $items->averageItemLevelEquipped,
            $this->getStandardItemValueObject($items->head),
            $this->getStandardItemValueObject($items->neck),
            $this->getStandardItemValueObject($items->shoulder),
            $this->getStandardItemValueObject($items->back),
            $this->getStandardItemValueObject($items->chest),
            $this->getStandardItemValueObject($items->shirt),
            $this->getStandardItemValueObject($items->wrist),
            $this->getStandardItemValueObject($items->hands),
            $this->getStandardItemValueObject($items->waist),
            $this->getStandardItemValueObject($items->legs),
            $this->getStandardItemValueObject($items->feet),
            $this->getStandardItemValueObject($items->finger1),
            $this->getStandardItemValueObject($items->finger2),
            $this->getStandardItemValueObject($items->trinket1),
            $this->getStandardItemValueObject($items->trinket2),
            $this->getWeaponItemValueObject($items->mainHand),
            $this->getWeaponItemValueObject($items->offHand)
        );
    }

    /**
     * @param \StdClass $item
     * @return StandardItemValueObject
     */
    private function getStandardItemValueObject($item)
    {
        $tooltipParams = $this->getTooltipParamsValueObject($item);
        $stats = $this->getItemStatValueObjects($item);
        $appearance = $this->getItemAppearanceValueObject($item);

        $armorItemValueObject = new StandardItemValueObject(
            $item->id,
            $item->name,
            $item->icon,
            $item->quality,
            $item->itemLevel,
            $tooltipParams,
            $stats,
            $item->armor,
            $item->context,
            $item->bonusLists,
            $item->displayInfoId,
            $appearance
        );

        return $armorItemValueObject;
    }

    /**
     * @param \StdClass $item
     * @return WeaponItemValueObject
     */
    private function getWeaponItemValueObject($item)
    {
        $weaponInfo = $this->getWeaponInfoValueObject($item->weaponInfo);
        $artifactTraits = $this->getArtifactTraitValueObjects($item->artifactTraits);
        $relics = $this->getRelicValueObjects($item->relics);

        $armorItemValueObject = new WeaponItemValueObject(
            $this->getStandardItemValueObject($item),
            $weaponInfo,
            $item->artifactId,
            $item->artifactAppearanceId,
            $artifactTraits,
            $relics
        );

        return $armorItemValueObject;
    }

    /**
     * @param \StdClass $item
     * @return TooltipParamsValueObject
     */
    private function getTooltipParamsValueObject($item)
    {
        $tooltipParams = new TooltipParamsValueObject(
            $item->tooltipParams->timewalkerLevel,
            $item->tooltipParams->transmogItem
        );

        return $tooltipParams;
    }

    /**
     * @param \StdClass $item
     * @return array
     */
    private function getItemStatValueObjects($item)
    {
        $stats = [];

        foreach ($item->stats as $stat) {
            $stats[] = new ItemStatValueObject(
                $stat->stat,
                $stat->amount
            );
        }

        return $stats;
    }

    /**
     * @param \StdClass $item
     * @return ItemAppearanceValueObject
     */
    private function getItemAppearanceValueObject($item)
    {
        $appearance = new ItemAppearanceValueObject(
            $item->appearance->itemId,
            $item->appearance->itemAppearanceModId
        );

        return $appearance;
    }

    /**
     * @param \StdClass $info
     * @return WeaponInfoValueObject
     */
    private function getWeaponInfoValueObject($info)
    {
        $damageValueObject = new DamageValueObject(
            $info->damage->min,
            $info->damage->max,
            $info->damage->exactMin,
            $info->damage->exactMax
        );

        $weaponInfo = new WeaponInfoValueObject(
            $damageValueObject,
            $info->weaponSpeed,
            $info->dps
        );

        return $weaponInfo;
    }

    /**
     * @param \StdClass $item
     * @return ArtifactTraitValueObject[]
     */
    private function getArtifactTraitValueObjects($item)
    {
        $itemArtifactTraits = [];

        foreach ($item->artifactTraits as $artifactTrait) {
            $itemArtifactTraits[] = new ArtifactTraitValueObject(
                $artifactTrait->id,
                $artifactTrait->rank
            );
        }

        return $itemArtifactTraits;
    }

    /**
     * @param \StdClass $item
     * @return RelicValueObject[]
     */
    private function getRelicValueObjects($item)
    {
        $itemRelics = [];

        foreach ($item->relics as $relic) {
            $itemRelics[] = new RelicValueObject(
                $relic->socket,
                $relic->itemId,
                $relic->context,
                $relic->bonusLists
            );
        }

        return $itemRelics;
    }
}
