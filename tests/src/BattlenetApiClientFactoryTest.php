<?php

namespace Kubinashi\BattlenetApiTests\src;

use Kubinashi\BattlenetApi\BattlenetApiClientFactory;
use Kubinashi\BattlenetApi\WorldOfWarcraft\WorldOfWarcraftApiFactory;
use PHPUnit\Framework\TestCase;

/**
 * @author  Willy Reiche
 * @since   2017-07-22
 * @version 1.0
 */
class BattlenetApiClientFactoryTest extends TestCase
{
    public function testGetWorldOfWarcraftApiFactory()
    {
        $apiKey = uniqid();
        $locale = uniqid();
        $region = uniqid();

        $this->assertEquals(
            new WorldOfWarcraftApiFactory($apiKey, $locale, $region),
            BattlenetApiClientFactory::getWorldOfWarcraftApiFactory($apiKey, $locale, $region)
        );
    }
}
