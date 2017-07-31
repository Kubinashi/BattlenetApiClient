<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft;

use Kubinashi\BattlenetApi\Model\AuthenticationModel;
use Kubinashi\BattlenetApi\Service\RequestService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\CharacterProfileApi;

/**
 * @author  Willy Reiche
 * @since   2017-07-21
 * @version 1.0
 */
class WorldOfWarcraftApiFactory
{
    /**
     * @var AuthenticationModel
     */
    private static $authenticationModel;

    /**
     * @var RequestService
     */
    private static $requestService;

    /**
     * WorldOfWarcraftApi constructor.
     *
     * @param string $apiKey
     * @param string $locale
     * @param string $region
     */
    public function __construct($apiKey, $locale, $region)
    {
        self::$authenticationModel = new AuthenticationModel($apiKey, $locale, $region);
        self::$requestService = new RequestService();
    }

    /**
     * @param string $charName
     * @param string $realm
     *
     * @return CharacterProfileApi
     */
    public static function getCharacterApi($charName, $realm)
    {
        return new CharacterProfileApi(
            self::$authenticationModel,
            self::$requestService,
            $charName,
            $realm
        );
    }
}