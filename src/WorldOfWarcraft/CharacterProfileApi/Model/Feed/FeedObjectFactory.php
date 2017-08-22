<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Feed;
use Kubinashi\BattlenetApi\WorldOfWarcraft\Model\AchievementValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\Criteria\Service\CriteriaService;

/**
 * @author  Willy Reiche
 * @since   2017-08-22
 * @version 1.0
 */
class FeedObjectFactory
{
    /**
     * @var CriteriaService
     */
    private $criteriaService;

    /**
     * FeedObjectFactory constructor.
     */
    public function __construct()
    {
        $this->criteriaService = new CriteriaService();
    }

    /**
     * @param \StdClass $feed
     * @return FeedLootValueObject
     */
    public function getFeedObject($feed)
    {
        $feedObj = null;

        switch ($feed->type) {
            case 'LOOT':
                $feedObj = new FeedLootValueObject(
                    $feed->type,
                    $feed->timestamp,
                    $feed->itemId,
                    $feed->context,
                    $feed->bonusLists
                );
                break;
            case 'BOSSKILL':
                $achievement = $this->prepareAchievementValueObject($feed->achievement);

                $feedObj = new FeedBosskillValueObject(
                    $feed->type,
                    $feed->timestamp,
                    $achievement,
                    $feed->featOfStrength,
                    $this->criteriaService->prepareCriteriaValueObject($feed->criteria),
                    $feed->quantity,
                    $feed->name
                );
                break;
            case 'ACHIEVEMENT':
                $achievement = $this->prepareAchievementValueObject($feed->achievement);

                $feedObj = new FeedAchievementValueObject(
                    $feed->type,
                    $feed->timestamp,
                    $achievement,
                    $feed->featOfStrength
                );
                break;
        }

        return $feedObj;
    }

    /**
     * @param \StdClass $achievement
     * @return AchievementValueObject
     */
    private function prepareAchievementValueObject($achievement)
    {
        $criteria = [];

        foreach ($achievement->criteria as $singleCriteria) {
            $criteria[] = $this->criteriaService->prepareCriteriaValueObject($singleCriteria);
        }

        return new AchievementValueObject(
            $achievement->id,
            $achievement->title,
            $achievement->points,
            $achievement->description,
            $achievement->rewardItems,
            $achievement->icon,
            $criteria,
            $achievement->accountWide,
            $achievement->factionId
        );
    }
}
