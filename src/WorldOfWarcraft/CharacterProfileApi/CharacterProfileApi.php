<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi;

use Kubinashi\BattlenetApi\Model\AuthenticationModel;
use Kubinashi\BattlenetApi\Model\Franchises;
use Kubinashi\BattlenetApi\Model\RequestModel;
use Kubinashi\BattlenetApi\Service\RequestService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Achievement\Model\AchievementsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Appearance\Model\AppearanceValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Collection\Service\CollectionService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Guild\Service\GuildService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\HunterPet\Service\HunterPetService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Audit\Model\AuditValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\CharacterProfile\Model\CharacterProfileValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Feed\FeedObjectFactory;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Quest\Model\QuestsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Reputation\Model\ReputationValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Title\Model\TitleValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\PetSlot\Model\PetSlotsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Profession\Service\ProfessionService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Progression\Service\ProgressionService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Pvp\Service\PvpService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Item\Service\ItemService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Statistic\Service\StatisticService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Stat\Service\StatService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Talent\Service\TalentService;

/**
 * @author  Willy Reiche
 * @since   2017-07-19
 * @version 1.0
 */
class CharacterProfileApi{
    /**
     * @var AuthenticationModel
     */
    private $authenticationModel;

    /**
     * @var RequestService
     */
    private $requestService;

    /**
     * @var string
     */
    private $charName;

    /**
     * @var string
     */
    private $realm;

    /**
     * @param AuthenticationModel $authenticationModel
     * @param RequestService $requestService
     * @param string $charName
     * @param string $realm
     */
    public function __construct(
        AuthenticationModel $authenticationModel,
        RequestService $requestService,
        $charName,
        $realm
    ) {
        $this->requestService = $requestService;
        $this->authenticationModel = $authenticationModel;
        $this->charName = $charName;
        $this->realm = $realm;
    }

    /**
     * The basic character data
     *
     * @return CharacterProfileValueObject
     */
    public function getCharacterProfile()
    {
        $responseObject = $this->prepareResponseObject();

        $characterProfile = new CharacterProfileValueObject(
            $responseObject->lastModified,
            $responseObject->name,
            $responseObject->realm,
            $responseObject->battlegroup,
            $responseObject->class,
            $responseObject->race,
            $responseObject->gender,
            $responseObject->level,
            $responseObject->achievementPoints,
            $responseObject->thumbnail,
            $responseObject->calcClass,
            $responseObject->faction,
            $responseObject->totalHonorableKills
        );

        return $characterProfile;
    }

    /**
     * A map of achievement data including completion timestamps and criteria information
     *
     * @return AchievementsValueObject
     */
    public function getAchievements()
    {
        $responseObject = $this->prepareResponseObject('achievements');

        $achievements = new AchievementsValueObject(
            $responseObject->achievements->achievementsCompleted,
            $responseObject->achievements->achievementsCompletedTimestamp,
            $responseObject->achievements->criteria,
            $responseObject->achievements->criteriaQuantity,
            $responseObject->achievements->criteriaTimestamp,
            $responseObject->achievements->criteriaCreated
        );

        return $achievements;
    }

    /**
     * A map of a character's appearance settings such as which face texture they've selected and whether or not a healm is visible
     *
     * @return AppearanceValueObject
     */
    public function getAppearance()
    {
        $responseObject = $this->prepareResponseObject('appearance');

        $appearance = new AppearanceValueObject(
            $responseObject->appearance->faceVariation,
            $responseObject->appearance->skinColor,
            $responseObject->appearance->hairVariation,
            $responseObject->appearance->hairColor,
            $responseObject->appearance->featureVariation,
            $responseObject->appearance->showHelm,
            $responseObject->appearance->showCloak,
            $responseObject->appearance->customDisplayOptions
        );

        return $appearance;
    }

    /**
     * The activity feed of the character
     * Based on the type you get a different Object to access
     * - Achievement = FeedAchievementValueObject
     * - Bosskill = FeedBosskillValueObject
     * - Loot = FeedLootValueObject
     *
     * @return array
     */
    public function getFeed()
    {
        $responseObject = $this->prepareResponseObject('feed');

        $feedObjectFactory = new FeedObjectFactory();
        $feedObj = [];

        foreach ($responseObject->feed as $feed) {
            $feedObj[] = $feedObjectFactory->getFeedObject($feed);
        }

        return $feedObj;
    }

    /**
     * A summary of the guild that the character belongs to
     *
     * @return Guild\Model\GuildValueObject
     */
    public function getGuild()
    {
        $responseObject = $this->prepareResponseObject('guild');
        $guildService = new GuildService();

        return $guildService->prepareGuildValueObject($responseObject->guild);
    }

    /**
     * A list of all of the combat pets obtained by the character
     *
     * @return HunterPet\Model\HunterPetValueObject[]
     */
    public function getHunterPets()
    {
        $responseObject = $this->prepareResponseObject('hunterPets');
        $hunterPetService = new HunterPetService();

        return $hunterPetService->prepareHunterPets($responseObject);
    }

    /**
     * A list of items equipped by the character.
     * Use of this field will also include the average item level and average item level equipped for the character.
     *
     * @return Item\Model\ItemValueObject
     */
    public function getItems()
    {
        $responseObject = $this->prepareResponseObject('items');
        $itemService = new ItemService();

        return $itemService->prepareItemValueObject($responseObject->items);
    }

    /**
     * A list of all of the mounts obtained by the character
     *
     * @return Collection\Model\CollectionValueObject
     */
    public function getMounts()
    {
        $responseObject = $this->prepareResponseObject('mounts');
        $collectionService = new CollectionService();

        return $collectionService->prepareCollectionValueObject($responseObject->mounts, CollectionService::MOUNT);
    }

    /**
     * A list of the battle pets obtained by the character
     *
     * @return Collection\Model\CollectionValueObject
     */
    public function getPets()
    {
        $responseObject = $this->prepareResponseObject('pets');
        $collectionService = new CollectionService();

        return $collectionService->prepareCollectionValueObject($responseObject->pets, CollectionService::PET);
    }

    /**
     * Data about the current battle pet slots on this characters account
     *
     * @return PetSlotsValueObject[]
     */
    public function getPetSlots()
    {
        $responseObject = $this->prepareResponseObject('petSlots');
        $petSlots = [];

        foreach ($responseObject->petSlots as $petSlot) {
            $petSlots[] = new PetSlotsValueObject(
                $petSlot->slot,
                $petSlot->battlePetGuid,
                $petSlot->isEmpty,
                $petSlot->isLocked,
                $petSlot->abilities
            );
        }

        return $petSlots;
    }

    /**
     * A list of the character's professions. Does not include class professions
     *
     * @return Profession\Model\ProfessionsValueObject
     */
    public function getProfessions()
    {
        $responseObject = $this->prepareResponseObject('professions');
        $professionService = new ProfessionService();

        return $professionService->prepareProfessionsValueObject($responseObject->professions);
    }

    /**
     * A list of raids and bosses indicating raid progression and completeness
     *
     * @return Progression\Model\ProgressionValueObject
     */
    public function getProgression()
    {
        $responseObject = $this->prepareResponseObject('progression');
        $progressionService = new ProgressionService();

        return $progressionService->prepareProgressionValueObject($responseObject);
    }

    /**
     * A map of pvp information including arena team membership and rated battlegrounds information
     *
     * @return Pvp\Model\PvpValueObject
     */
    public function getPvp()
    {
        $responseObject = $this->prepareResponseObject('pvp');
        $pvpService = new PvpService();

        return $pvpService->preparePvpValueObject($responseObject);
    }

    /**
     * A list of quests completed by the character
     *
     * @return QuestsValueObject
     */
    public function getQuests()
    {
        $responseObject = $this->prepareResponseObject('quests');

        $quests = new QuestsValueObject(
            $responseObject->quests
        );

        return $quests;
    }

    /**
     * A list of the factions that the character has an associated reputation with
     *
     * @return ReputationValueObject[]
     */
    public function getReputation()
    {
        $responseObject = $this->prepareResponseObject('reputation');
        $reputations = [];

        foreach ($responseObject->reputation as $reputation) {
            $reputations[] = new ReputationValueObject(
                $reputation->id,
                $reputation->name,
                $reputation->standing,
                $reputation->value,
                $reputation->max
            );
        }

        return $reputations;
    }

    /**
     * A map of character statistics
     *
     * @return Statistic\Model\StatisticsValueObject
     */
    public function getStatistics()
    {
        $responseObject = $this->prepareResponseObject('statistics');
        $statisticsService = new StatisticService();

        $statistics = $statisticsService->getStatistics($responseObject->statistics);

        return $statistics;
    }

    /**
     * A map of character attributes and stats
     *
     * @return Stat\Model\StatValueObject
     */
    public function getStats()
    {
        $responseObject = $this->prepareResponseObject('stats');
        $statService = new StatService();

        $stats = $statService->getStatValueObject($responseObject->stats);

        return $stats;
    }

    /**
     * A list of talent structures
     *
     * @return Talent\Model\TalentValueObject[]
     */
    public function getTalents()
    {
        $responseObject = $this->prepareResponseObject('talents');
        $talentService = new TalentService();

        return $talentService->prepareTalentValueObject($responseObject);
    }

    /**
     * A list of the titles obtained by the character including the currently selected title
     *
     * @return ReputationValueObject[]
     */
    public function getTitles()
    {
        $responseObject = $this->prepareResponseObject('titles');
        $titles = [];

        foreach ($responseObject->titles as $title) {
            $titles[] = new TitleValueObject(
                $title->id,
                $title->name
            );
        }

        return $titles;
    }

    /**
     * Raw character audit data that powers the character audit on the game site
     * It's broken down to the most recent issues so for example no belt buckle
     *
     * @return AuditValueObject
     */
    public function getAudit()
    {
        $responseObject = $this->prepareResponseObject('audit');

        $audit = new AuditValueObject(
            $responseObject->audit->numberOfIssues,
            $responseObject->audit->slots,
            $responseObject->audit->unspentTalentPoints,
            $responseObject->audit->unenchantedItems,
            $responseObject->audit->emptySockets,
            $responseObject->audit->itemsWithEmptySockets,
            $responseObject->audit->appropriateArmorType
        );

        return $audit;
    }

    /**
     * @param string $addition
     * @return RequestModel
     */
    private function prepareRequestModel($addition)
    {
        return new RequestModel(
            $this->authenticationModel->getRegion(),
            $this->authenticationModel->getApiKey(),
            $this->authenticationModel->getLocale(),
            [$this->realm, $this->charName],
            'character',
            Franchises::WORLD_OF_WARCRAFT,
            $addition
        );
    }

    /**
     * @param string $addition
     *
     * @return \StdClass
     */
    private function prepareResponseObject($addition = '')
    {
        $requestModel = $this->prepareRequestModel($addition);
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

        return $responseObject;
    }
}
