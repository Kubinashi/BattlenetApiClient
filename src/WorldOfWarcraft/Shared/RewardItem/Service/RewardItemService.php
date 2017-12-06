<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\RewardItem\Service;
use Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\RewardItem\Model\RewardItemValueObject;

/**
 * @author  Willy Reiche
 * @since   2017-12-06
 * @version 1.0
 */
class RewardItemService
{
    /**
     * @param \StdClass[] $rewardItems
     *
     * @return RewardItemValueObject[]
     */
    public function prepareRewardItemValueObject($rewardItems)
    {
        $rewardItemValueObjects = [];

        foreach ($rewardItems as $rewardItem) {
            $rewardItemValueObjects[] = new RewardItemValueObject(
                $rewardItem->id,
                $rewardItem->name,
                $rewardItem->icon,
                $rewardItem->quality,
                $rewardItem->itemLevel,
                $rewardItem->tooltipParams,
                $rewardItem->stats,
                $rewardItem->armor,
                $rewardItem->context,
                $rewardItem->bonusLists,
                $rewardItem->artifactId,
                $rewardItem->displayInfoId,
                $rewardItem->artifactAppearanceId,
                $rewardItem->artifactTraits,
                $rewardItem->relics,
                $rewardItem->appearance
            );
        }

        return $rewardItemValueObjects;
    }
}
