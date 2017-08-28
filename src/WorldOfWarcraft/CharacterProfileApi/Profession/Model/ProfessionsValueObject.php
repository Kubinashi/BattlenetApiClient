<?php

namespace Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Profession\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-24
 * @version 1.0
 */
class ProfessionsValueObject
{
    /**
     * @var ProfessionValueObject[]
     */
    private $primaryProfessions;

    /**
     * @var ProfessionValueObject[]
     */
    private $secondaryProfessions;

    /**
     * ProfessionsValueObject constructor.
     *
     * @param ProfessionValueObject[] $primaryProfessions
     * @param ProfessionValueObject[] $secondaryProfessions
     */
    public function __construct(
        $primaryProfessions,
        $secondaryProfessions
    ) {
        $this->primaryProfessions = $primaryProfessions;
        $this->secondaryProfessions = $secondaryProfessions;
    }

    /**
     * @return ProfessionValueObject[]
     */
    public function getPrimaryProfessions()
    {
        return $this->primaryProfessions;
    }

    /**
     * @return ProfessionValueObject[]
     */
    public function getSecondaryProfessions()
    {
        return $this->secondaryProfessions;
    }
}
