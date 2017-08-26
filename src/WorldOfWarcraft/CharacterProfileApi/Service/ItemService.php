<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Service;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item\ArtifactTraitValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item\DamageValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item\RelicValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item\StandardItemValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item\ItemAppearanceValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item\ItemStatValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item\TooltipParamsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item\WeaponInfoValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Item\WeaponItemValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-08-23
 * @version 1.0
 */
class ItemService
{
    /**
     * @param \StdClass $item
     * @return StandardItemValueObject
     */
    public function getStandardItemValueObject($item)
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
    public function getWeaponItemValueObject($item)
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
