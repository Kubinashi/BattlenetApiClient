<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\AchievementApi;

use Kubinashi\BattlenetApi\Model\AuthenticationModel;
use Kubinashi\BattlenetApi\Model\Franchises;
use Kubinashi\BattlenetApi\Model\RequestModel;
use Kubinashi\BattlenetApi\Service\RequestService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\AchievementApi\Achievement\Model\AchievementValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\Criteria\Service\CriteriaService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\Shared\RewardItem\Service\RewardItemService;

/**
 * @author  Willy Reiche
 * @since   2017-12-06
 * @version 1.0
 */
class AchievementApi
{
    /**
     * @var AuthenticationModel
     */
    private $authenticationModel;

    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * AchievementApi constructor.
     *
     * @param AuthenticationModel $authenticationModel
     * @param RequestService      $requestService
     */
    public function __construct(
        AuthenticationModel $authenticationModel,
        RequestService $requestService
    ) {
        $this->authenticationModel = $authenticationModel;
        $this->requestService = $requestService;
    }

    /**
     * This provides data about an individual achievement
     *
     * @param int $id
     *
     * @return AchievementValueObject
     */
    public function getAchievement($id)
    {
        $responseObject = $this->prepareResponseObject($id);
        $rewardItemService = new RewardItemService();
        $criteriaService = new CriteriaService();

        $achievement = new AchievementValueObject(
            $responseObject->id,
            $responseObject->title,
            $responseObject->points,
            $responseObject->description,
            $responseObject->reward,
            $rewardItemService->prepareRewardItemValueObject($responseObject->rewardItems),
            $responseObject->icon,
            $criteriaService->prepareMultipleCriteriaValueObject($responseObject->criteria),
            $responseObject->accoountWide,
            $responseObject->factionId
        );

        return $achievement;
    }

    /**
     * @param string $field
     *
     * @return RequestModel
     */
    private function prepareRequestModel($field)
    {
        return new RequestModel(
            $this->authenticationModel->getRegion(),
            $this->authenticationModel->getClientId(),
            $this->authenticationModel->getLocale(),
            [$field],
            'achievement',
            Franchises::WORLD_OF_WARCRAFT,
            ''
        );
    }

    /**
     * @param string $field
     *
     * @return \StdClass
     */
    private function prepareResponseObject($field)
    {
        $requestModel = $this->prepareRequestModel($field);
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

        return $responseObject;
    }
}
