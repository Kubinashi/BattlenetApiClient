<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\AuctionApi;

use Kubinashi\BattlenetApi\Model\AuthenticationModel;
use Kubinashi\BattlenetApi\Model\Franchises;
use Kubinashi\BattlenetApi\Model\RequestModel;
use Kubinashi\BattlenetApi\Service\RequestService;

/**
 * @author  Willy Reiche
 * @since   2017-12-09
 * @version 1.0
 */
class AuctionApi
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
     * AuctionApi constructor.
     *
     * @param AuthenticationModel $authenticationModel
     * @param RequestService $requestService
     */
    public function __construct(
        AuthenticationModel $authenticationModel,
        RequestService $requestService
    ) {
        $this->authenticationModel = $authenticationModel;
        $this->requestService = $requestService;
    }

    /**
     * This API resource provides a per-realm list of recently generated auction house data dumps
     *
     * Since the returned JSON string is to huge to decode with native functions I decided to only
     * return the url for retrieving the JSON string
     *
     * @param int $realm
     *
     * @return string
     */
    public function getAuctionDataStatus($realm)
    {
        $responseObject = $this->prepareResponseObject($realm);
        $auctionUrl = $responseObject->files[0]->url;

        return $auctionUrl;
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
            ['data', $field],
            'auction',
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
