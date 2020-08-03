<?php

namespace Kubinashi\BattlenetApi;

use Kubinashi\BattlenetApi\WorldOfWarcraft\WorldOfWarcraftApiFactory;

/**
 * @author  Willy Reiche
 * @since   2017-07-20
 * @version 1.0
 */
class BattlenetApiClientFactory
{
    public static function getWorldOfWarcraftApiFactory(string $clientId, string $clientSecret, string $locale, string $region): WorldOfWarcraftApiFactory
    {
        return new WorldOfWarcraftApiFactory($clientId, $clientSecret, $locale, $region);
    }
}
