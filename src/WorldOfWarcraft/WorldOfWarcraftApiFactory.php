<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft;

use Kubinashi\BattlenetApi\Model\AuthenticationModel;
use Kubinashi\BattlenetApi\Service\RequestService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\AchievementApi\AchievementApi;
use Kubinashi\BattlenetApi\WorldOfWarcraft\AuctionApi\AuctionApi;
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

    public function __construct(string $clientId, string $clientSecret, string $locale, string $region)
    {
        self::$authenticationModel = new AuthenticationModel($clientId, $clientSecret, $locale, $region);
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
            strtolower($charName),
            strtolower($realm)
        );
    }

    /**
     * @return AchievementApi
     */
    public static function getAchievementApi()
    {
        return new AchievementApi(
            self::$authenticationModel,
            self::$requestService
        );
    }

    /**
     * @return AuctionApi
     */
    public static function getAuctionApi()
    {
        return new AuctionApi(
            self::$authenticationModel,
            self::$requestService
        );
    }
}