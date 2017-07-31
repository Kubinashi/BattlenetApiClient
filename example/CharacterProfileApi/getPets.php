<?php
/**
 * @author  Willy Reiche
 * @since   2017-07-27
 * @version 1.0
 */

use Kubinashi\BattlenetApi\BattlenetApiClientFactory;

require_once(__DIR__ . '/../../vendor/autoload.php');

try {
    $api = BattlenetApiClientFactory::getWorldOfWarcraftApiFactory(
        'yourApiKey',
        'en_GB',
        'eu'
    )::getCharacterApi('yourChar', 'yourRealm');
    $data = $api->getPets();
} catch (\Exception $e) {
    echo $e->getMessage();
}
