<?php

namespace Kubinashi\BattlenetApi\Service;

use Kubinashi\BattlenetApi\External\HttpClient;
use Kubinashi\BattlenetApi\Model\RequestModel;

/**
 * @author  Willy Reiche
 * @since   2017-07-20
 * @version 1.0
 */
class RequestService
{
    /**
     * @param RequestModel $requestModel
     * @return string
     */
    public function doRequest(RequestModel $requestModel)
    {
        $apiKey = $requestModel->getApiKey();
        $locale = $requestModel->getLocale();
        $fields = implode('/', $requestModel->getFields());
        $api = $requestModel->getApi();
        $franchise = $requestModel->getFranchise();
        $region = $requestModel->getRegion();
        $addition = $requestModel->getAddition();

        $url = 'https://'.$region.'.api.battle.net/'.$franchise.'/'.$api.'/'.$fields.'?locale='.$locale.'&apikey='.$apiKey;
        if (!empty($addition)) {
            $url = 'https://'.$region.'.api.battle.net/'.$franchise.'/'.$api.'/'.$fields.'?fields='.$addition.'&locale='.$locale.'&apikey='.$apiKey;
        }

        $client = new HttpClient();
        $response = $client->request('get', $url);
        return (string)$response->getBody();
    }
}
