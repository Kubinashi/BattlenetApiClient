<?php
/**
 * @author  Willy Reiche
 * @since   2017-07-24
 * @version 1.0
 */

use Kubinashi\BattlenetApi\Model\AuthenticationModel;
use Kubinashi\BattlenetApi\Service\RequestService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\CharacterProfileApi;

class CharacterProfileApiTest extends PHPUnit_Framework_TestCase
{
    private $charName;
    private $realm;
    private $authenticationModel;
    private $requestService;

    public function setUp()
    {
        $this->charName = 'Hanemura';
        $this->realm = 'Antonidas';
        $this->authenticationModel = new AuthenticationModel(
            'ceq2pkghkhjx4r9asp7xs6jm99p594f8',
            'en_GB',
            'eu'
        );
        $this->requestService = new RequestService();
    }

    public function testGetAchievements()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Achievement\Model\AchievementsValueObject', $api->getAchievements());
    }

    public function testGetCharacterProfile()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\CharacterProfile\Model\CharacterProfileValueObject', $api->getCharacterProfile());
    }

    public function testGetAppearance()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Appearance\Model\AppearanceValueObject', $api->getAppearance());
    }

    public function testGetGuild()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Guild\Model\GuildValueObject', $api->getGuild());
    }

    public function testGetHunterPets()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            'Varothar',
            'Eredar'
        );

        $this->assertContainsOnlyInstancesOf('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\HunterPet\Model\HunterPetValueObject', $api->getHunterPets());
    }

    public function testGetProfessions()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Profession\Model\ProfessionsValueObject', $api->getProfessions());
    }

    public function testGetMounts()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\CollectionValueObject', $api->getMounts());
    }

    public function testGetPets()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\CollectionValueObject', $api->getPets());
    }
}
