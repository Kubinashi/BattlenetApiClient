<?php
/**
 * @author  Willy Reiche
 * @since   2017-12-06
 * @version 1.0
 */

use Kubinashi\BattlenetApi\BattlenetApiClientFactory;

require_once(__DIR__ . '/../../vendor/autoload.php');

try {
    $api = BattlenetApiClientFactory::getWorldOfWarcraftApiFactory(
        'yourApiKey',
        'en_GB',
        'eu'
    )::getAuctionApi();
    $data = $api->getAuctionDataStatus('Antonidas');
} catch (\Exception $e) {
    echo $e->getMessage();
}
