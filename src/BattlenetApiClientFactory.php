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
    /**
     * @param string $apiKey
     * @param string $locale
     * @param string $region
     *
     * @return WorldOfWarcraftApiFactory
     */
    public static function getWorldOfWarcraftApiFactory($apiKey, $locale, $region)
    {
        return new WorldOfWarcraftApiFactory($apiKey, $locale, $region);
    }
}
