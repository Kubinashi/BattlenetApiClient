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
        $clientId = $requestModel->getClientId();
        $clientSecret = $requestModel->getClientSecret();
        $locale = $requestModel->getLocale();
        $fields = implode('/', $requestModel->getFields());
        $api = $requestModel->getApi();
        $franchise = $requestModel->getFranchise();
        $region = $requestModel->getRegion();
        $addition = $requestModel->getAddition();

        $accessToken = $this->getAccessToken($clientId, $clientSecret, $region);

        $url = 'https://'.$region.'.api.battle.net/'.$franchise.'/'.$api.'/'.$fields.'?locale='.$locale.'&apikey='.$clientId;
        if (!empty($addition)) {
            $url = 'https://'.$region.'.api.battle.net/'.$franchise.'/'.$api.'/'.$fields.'?fields='.$addition.'&locale='.$locale.'&apikey='.$clientId;
        }

        $client = new HttpClient();
        $response = $client->request('get', $url);
        return (string)$response->getBody();
    }

    private function getAccessToken(string $clientId, string $clientSecret, string $region): string
    {
        $tokenUrl = sprintf(
            'https://%s.battle.net/oauth/token',
            $region
        );

        $client = new HttpClient();
        $result = $client->post(
            $tokenUrl,
            [
                'auth' => [$clientId, $clientSecret],
                'query' => ['grant_type' => 'client_credentials'],
                'verify' => false,
                'http_errors' => false
            ]
        );

        return json_decode((string)$result->getBody())->access_token;
    }
}
