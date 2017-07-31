<?php
/**
 * @author  Willy Reiche
 * @since   2017-07-23
 * @version 1.0
 */

use Kubinashi\BattlenetApi\WorldOfWarcraft\WorldOfWarcraftApiFactory;

class WorldOfWarcraftApiFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testGetCharacterApi()
    {
        $factory = new WorldOfWarcraftApiFactory('ceq2pkghkhjx4r9asp7xs6jm99p594f8', 'en_GB', 'eu');

        $this->assertInstanceOf('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\CharacterProfileApi', $factory::getCharacterApi('Hanemura', 'Antonidas'));
    }
}
