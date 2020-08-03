<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\CharacterProfileApi;
use Kubinashi\BattlenetApi\WorldOfWarcraft\WorldOfWarcraftApiFactory;
use PHPUnit\Framework\TestCase;

class WorldOfWarcraftApiFactoryTest extends TestCase
{
    public function testGetCharacterApi()
    {
        $factory = new WorldOfWarcraftApiFactory('ceq2pkghkhjx4r9asp7xs6jm99p594f8', 'en_GB', 'eu');

        $this->assertInstanceOf(CharacterProfileApi::class, $factory::getCharacterApi('Hanemura', 'Antonidas'));
    }
}
