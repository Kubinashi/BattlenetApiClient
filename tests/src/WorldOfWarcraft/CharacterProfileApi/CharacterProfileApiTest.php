<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi;

use Kubinashi\BattlenetApi\Model\AuthenticationModel;
use Kubinashi\BattlenetApi\Service\RequestService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Achievement\Model\AchievementsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Appearance\Model\AppearanceValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\CharacterProfile\Model\CharacterProfileValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\CharacterProfileApi;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Model\CollectionValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Guild\Model\GuildValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\HunterPet\Model\HunterPetValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Profession\Model\ProfessionsValueObject;
use PHPUnit\Framework\TestCase;

class CharacterProfileApiTest extends TestCase
{
    private $charName;
    private $realm;
    private $authenticationModel;
    private $requestService;

    public function setUp(): void
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

        $this->assertInstanceOf(AchievementsValueObject::class, $api->getAchievements());
    }

    public function testGetCharacterProfile()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf(CharacterProfileValueObject::class, $api->getCharacterProfile());
    }

    public function testGetAppearance()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf(AppearanceValueObject::class, $api->getAppearance());
    }

    public function testGetGuild()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf(GuildValueObject::class, $api->getGuild());
    }

    public function testGetHunterPets()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            'Varothar',
            'Eredar'
        );

        $this->assertContainsOnlyInstancesOf(HunterPetValueObject::class, $api->getHunterPets());
    }

    public function testGetProfessions()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf(ProfessionsValueObject::class, $api->getProfessions());
    }

    public function testGetMounts()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf(CollectionValueObject::class, $api->getMounts());
    }

    public function testGetPets()
    {
        $api = new CharacterProfileApi(
            $this->authenticationModel,
            $this->requestService,
            $this->charName,
            $this->realm
        );

        $this->assertInstanceOf(CollectionValueObject::class, $api->getPets());
    }
}
