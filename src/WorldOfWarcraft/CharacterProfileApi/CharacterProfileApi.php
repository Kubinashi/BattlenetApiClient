<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi;

use Kubinashi\BattlenetApi\Model\AuthenticationModel;
use Kubinashi\BattlenetApi\Model\Franchises;
use Kubinashi\BattlenetApi\Model\RequestModel;
use Kubinashi\BattlenetApi\Service\RequestService;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\AchievementsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\AppearanceValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\CharacterProfileValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\EmblemValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\GuildValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\HunterPet\HunterPetSpecValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\HunterPet\HunterPetValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Mount\MountsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Mount\MountValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Pet\PetStatValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Pet\PetsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Pet\PetValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\PetSlotsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Profession\ProfessionsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Profession\ProfessionValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Progression\BossValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Progression\ProgressionValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Progression\RaidValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Pvp\BracketValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Pvp\PvpValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\QuestsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\ReputationValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Talent\SpecValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Talent\TalentsValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Talent\TalentValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\TitleValueObject;
use Kubinashi\BattlenetApi\WorldOfWarcraft\Model\SpellValueObject;

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
        $requestModel = $this->prepareRequestModel();
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

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
        $requestModel = $this->prepareRequestModel('achievements');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

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
        $requestModel = $this->prepareRequestModel('appearance');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

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
     * A summary of the guild that the character belongs to
     *
     * @return GuildValueObject
     */
    public function getGuild()
    {
        $requestModel = $this->prepareRequestModel('guild');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

        $emblemValueObject = $this->prepareEmblem($responseObject->guild->emblem);

        $guild = new GuildValueObject(
            $responseObject->guild->name,
            $responseObject->guild->realm,
            $responseObject->guild->battlegroup,
            $responseObject->guild->members,
            $emblemValueObject
        );

        return $guild;
    }

    /**
     * A list of all of the combat pets obtained by the character
     *
     * @return HunterPetValueObject[]
     */
    public function getHunterPets()
    {
        $requestModel = $this->prepareRequestModel('hunterPets');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

        return $this->prepareHunterPets($responseObject);
    }

    /**
     * A list of all of the mounts obtained by the character
     *
     * @return MountsValueObject
     */
    public function getMounts()
    {
        $requestModel = $this->prepareRequestModel('mounts');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

        $collectedMounts = [];
        foreach ($responseObject->mounts->collected as $mount) {
            $collectedMounts[] = $this->prepareMountValueObject($mount);
        }

        $mounts = new MountsValueObject(
            $responseObject->mounts->numCollected,
            $responseObject->mounts->numNotCollected,
            $collectedMounts
        );

        return $mounts;
    }

    /**
     * A list of the battle pets obtained by the character
     *
     * @return PetsValueObject
     */
    public function getPets()
    {
        $requestModel = $this->prepareRequestModel('pets');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

        $collectedPets = [];
        foreach ($responseObject->pets->collected as $pet) {
            $collectedPets[] = $this->preparePetValueObject($pet);
        }

        $pets = new PetsValueObject(
            $responseObject->pets->numCollected,
            $responseObject->pets->numNotCollected,
            $collectedPets
        );

        return $pets;
    }

    /**
     * Data about the current battle pet slots on this characters account
     *
     * @return PetSlotsValueObject[]
     */
    public function getPetSlots()
    {
        $requestModel = $this->prepareRequestModel('petSlots');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);
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
     * @return ProfessionsValueObject
     */
    public function getProfessions()
    {
        $requestModel = $this->prepareRequestModel('professions');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

        $primaryProfessions = $this->prepareProfessionValueObject($responseObject->professions->primary);
        $secondaryProfessions = $this->prepareProfessionValueObject($responseObject->professions->secondary);

        $professions = new ProfessionsValueObject(
            $primaryProfessions,
            $secondaryProfessions
        );

        return $professions;
    }

    /**
     * A list of raids and bosses indicating raid progression and completeness
     *
     * @return ProgressionValueObject
     */
    public function getProgression()
    {
        $requestModel = $this->prepareRequestModel('progression');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

        $raids = $this->prepareRaidValueObject($responseObject);

        $progression = new ProgressionValueObject(
            $raids
        );

        return $progression;
    }

    /**
     * A map of pvp information including arena team membership and rated battlegrounds information
     *
     * @return PvpValueObject
     */
    public function getPvp()
    {
        $requestModel = $this->prepareRequestModel('pvp');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

        $brackets = $this->prepareBracketValueObject($responseObject);

        $progression = new PvpValueObject(
            $brackets
        );

        return $progression;
    }

    /**
     * A list of quests completed by the character
     *
     * @return QuestsValueObject
     */
    public function getQuests()
    {
        $requestModel = $this->prepareRequestModel('quests');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);

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
        $requestModel = $this->prepareRequestModel('reputation');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);
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
     * A list of talent structures
     *
     * @return TalentsValueObject[]
     */
    public function getTalents()
    {
        $requestModel = $this->prepareRequestModel('talents');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);
        $talents = [];

        foreach ($responseObject->talents as $talent) {
            if (empty($talent->calcSpec)) {
                continue;
            }

            $selected = false;
            if (isset($talent->selected)) {
                $selected = true;
            }

            $talentsValueObject = $this->prepareTalentsValueObject($talent);
            $specValueObject = $this->prepareSpecValueObject($talent->spec);

            $talents[] = new TalentValueObject(
                $selected,
                $talentsValueObject,
                $specValueObject,
                $talent->calcTalent,
                $talent->calcSpec
            );
        }

        return $talents;
    }

    /**
     * A list of the titles obtained by the character including the currently selected title
     *
     * @return ReputationValueObject[]
     */
    public function getTitles()
    {
        $requestModel = $this->prepareRequestModel('titles');
        $response = $this->requestService->doRequest($requestModel);
        $responseObject = json_decode($response);
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
     * @param string $addition
     * @return RequestModel
     */
    private function prepareRequestModel($addition = '')
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
     * @param \StdClass $spec
     * @return HunterPetSpecValueObject
     */
    private function prepareHunterPetSpecValueObject(\StdClass $spec)
    {
        return new HunterPetSpecValueObject(
            $spec->name,
            $spec->role,
            $spec->backgroundImage,
            $spec->icon,
            $spec->description,
            $spec->order
        );
    }

    /**
     * @param array $professions
     *
     * @return array
     */
    private function prepareProfessionValueObject($professions) {
        $characterProfessions = [];

        foreach ($professions as $profession) {
            $characterProfessions[] = new ProfessionValueObject(
                $profession->id,
                $profession->name,
                $profession->icon,
                $profession->rank,
                $profession->max,
                $profession->recipes
            );
        }

        return $characterProfessions;
    }

    /**
     * @param \StdClass $emblem
     * @return EmblemValueObject
     */
    private function prepareEmblem($emblem)
    {
        return new EmblemValueObject (
            $emblem->icon,
            $emblem->iconColor,
            $emblem->iconColorId,
            $emblem->border,
            $emblem->borderColor,
            $emblem->borderColorId,
            $emblem->backgroundColor,
            $emblem->backgroundColorId
        );
    }

    /**
     * @param \StdClass $mount
     * @return MountValueObject
     */
    private function prepareMountValueObject(\StdClass $mount)
    {
        return new MountValueObject(
            $mount->name,
            $mount->spellId,
            $mount->creatureId,
            $mount->itemId,
            $mount->qualityId,
            $mount->icon,
            $mount->isGround,
            $mount->isFlying,
            $mount->isAquatic,
            $mount->isJumping
        );
    }

    /**
     * @param \StdClass $responseObject
     * @return HunterPetValueObject[]
     */
    private function prepareHunterPets(\StdClass $responseObject)
    {
        $hunterPets = [];
        foreach ($responseObject->hunterPets as $hunterPet) {
            $hunterPetSpecValueObject = null;
            if (isset($hunterPet->spec)) {
                $hunterPetSpecValueObject = $this->prepareHunterPetSpecValueObject($hunterPet->spec);
            }

            $hunterPets[] = new HunterPetValueObject(
                $hunterPet->name,
                $hunterPet->creature,
                $hunterPet->slot,
                $hunterPet->calcSpec,
                $hunterPet->familyId,
                $hunterPet->familyName,
                $hunterPetSpecValueObject
            );
        }

        return $hunterPets;
    }

    /**
     * @param \StdClass $pet
     * @return PetValueObject
     */
    private function preparePetValueObject($pet)
    {
        $petStatValueObject = $this->preparePetStatsValueObject($pet->stats);

        return new PetValueObject(
            $pet->name,
            $pet->spellId,
            $pet->creatureId,
            $pet->itemId,
            $pet->qualityId,
            $pet->icon,
            $petStatValueObject,
            $pet->battlePetGuid,
            $pet->isFavorite,
            $pet->isFirstAbilitySlotSelected,
            $pet->isSecondAbilitySlotSelected,
            $pet->isThirdAbilitySlotSelected,
            $pet->creatureName,
            $pet->canBattle
        );
    }

    /**
     * @param \StdClass $stats
     * @return PetStatValueObject
     */
    private function preparePetStatsValueObject($stats)
    {
        return new PetStatValueObject(
            $stats->speciesId,
            $stats->breedId,
            $stats->petQualityId,
            $stats->level,
            $stats->health,
            $stats->power,
            $stats->speed
        );
    }

    /**
     * @param \StdClass $raid
     * @return BossValueObject[]
     */
    private function prepareBossValueObject($raid)
    {
        $bosses = [];
        foreach ($raid->bosses as $boss) {
            $bosses[] = new BossValueObject(
                $boss->id,
                $boss->name,
                $boss->lfrKills,
                $boss->lfrTimestamp,
                $boss->normalKills,
                $boss->normalTimestamp,
                $boss->heroicKills,
                $boss->heroicTimestamp,
                $boss->mythicKills,
                $boss->mythicTimestamp
            );
        }

        return $bosses;
    }

    /**
     * @param \StdClass $responseObject
     * @return RaidValueObject[]
     */
    private function prepareRaidValueObject($responseObject)
    {
        $raids = [];

        foreach ($responseObject->progression->raids as $raid) {
            $bosses = $this->prepareBossValueObject($raid);

            $raids[] = new RaidValueObject(
                $raid->name,
                $raid->lfr,
                $raid->normal,
                $raid->heroic,
                $raid->mythic,
                $raid->id,
                $bosses
            );
        }

        return $raids;
    }

    /**
     * @param \StdClass $responseObject
     * @return BracketValueObject[]
     */
    private function prepareBracketValueObject($responseObject)
    {
        $brackets = [];

        foreach ($responseObject->pvp->brackets as $bracket) {
            $brackets[] = new BracketValueObject(
                $bracket->slug,
                $bracket->rating,
                $bracket->weeklyPlayed,
                $bracket->weeklyWon,
                $bracket->weeklyLost,
                $bracket->seasonPlayed,
                $bracket->seasonWon,
                $bracket->seasonLost
            );
        }

        return $brackets;
    }

    /**
     * @param $talent
     * @return TalentsValueObject[]
     */
    private function prepareTalentsValueObject($talent)
    {
        $talents = [];
        foreach ($talent->talents as $talent) {
            $cooldown = "";
            if (isset($talent->spell->cooldown)) {
                $cooldown = $talent->spell->cooldown;
            }

            $spell = new SpellValueObject(
                $talent->spell->id,
                $talent->spell->name,
                $talent->spell->icon,
                $talent->spell->description,
                $talent->spell->castTime,
                $cooldown
            );

            $spec = $this->prepareSpecValueObject($talent->spec);

            $talents[] = new TalentsValueObject(
                $talent->tier,
                $talent->column,
                $spell,
                $spec
            );
        }

        return $talents;
    }

    /**
     * @param \StdClass $spec
     * @return SpecValueObject
     */
    private function prepareSpecValueObject($spec)
    {
        return new SpecValueObject(
            $spec->name,
            $spec->role,
            $spec->backgroundImage,
            $spec->icon,
            $spec->description,
            $spec->order
        );
    }
}
