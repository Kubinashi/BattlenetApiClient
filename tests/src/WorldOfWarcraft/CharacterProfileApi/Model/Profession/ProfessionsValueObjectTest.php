<?php

namespace Kubinashi\BattlenetApiTests\src\WorldOfWarcraft\CharacterProfileApi\Model\Profession;

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Profession\Model\ProfessionsValueObject;
use PHPUnit\Framework\TestCase;

class ProfessionsValueObjectTest extends TestCase
{
    private $primaryProfessions;
    private $secondaryProfessions;

    public function setUp(): void
    {
        $this->primaryProfessions = $this->getMockBuilder('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Profession\ProfessionValueObject')->disableOriginalConstructor()->getMock();
        $this->secondaryProfessions = $this->getMockBuilder('Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Model\Profession\ProfessionValueObject')->disableOriginalConstructor()->getMock();
    }

    public function testGetPrimaryProfessions()
    {
        $object = new ProfessionsValueObject(
            $this->primaryProfessions,
            $this->secondaryProfessions
        );

        $this->assertEquals($this->primaryProfessions, $object->getPrimaryProfessions());
    }

    public function testGetSecondaryProfessions()
    {
        $object = new ProfessionsValueObject(
            $this->primaryProfessions,
            $this->secondaryProfessions
        );

        $this->assertEquals($this->secondaryProfessions, $object->getSecondaryProfessions());
    }
}
