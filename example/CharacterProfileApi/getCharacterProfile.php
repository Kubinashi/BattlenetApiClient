<?php

/**
 * @author  Willy Reiche
 * @since   2017-07-19
 * @version 1.0
 */

use Kubinashi\BattlenetApi\BattlenetApiClientFactory;

require_once(__DIR__ . '/../../vendor/autoload.php');

try {
    $api = BattlenetApiClientFactory::getWorldOfWarcraftApiFactory(
        '6a2fa10f5c8949a4aa5e60ffd3e79e0f',
        '2mV3vTIU411zA9WL46E2QWHP1u5Q7dT1',
        'en_GB',
        'eu'
    )::getCharacterApi('Tharnon', 'antonidas');
    $data = $api->getCharacterProfile();
} catch (\Exception $e) {
    echo $e->getMessage();
}
