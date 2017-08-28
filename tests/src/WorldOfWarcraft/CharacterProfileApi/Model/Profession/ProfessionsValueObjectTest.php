<?php
/**
 * @author  Willy Reiche
 * @since   2017-07-24
 * @version 1.0
 */

use Kubinashi\BattlenetApi\WorldOfWarcraft\CharacterProfileApi\Profession\Model\ProfessionsValueObject;

class ProfessionsValueObjectTest extends PHPUnit_Framework_TestCase
{
    private $primaryProfessions;
    private $secondaryProfessions;

    public function setUp()
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
