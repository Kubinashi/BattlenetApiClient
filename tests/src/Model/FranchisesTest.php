<?php

use Kubinashi\BattlenetApi\Model\Franchises;

/**
 * @author  Willy Reiche
 * @since   2017-07-23
 * @version 1.0
 */

class FranchisesTest extends PHPUnit_Framework_TestCase
{
    public function testWorldOfWarcraftConstant()
    {
        $class = new Franchises();
        $reflectionClass = new ReflectionClass($class);
        $this->assertEquals('wow', $reflectionClass->getConstant('WORLD_OF_WARCRAFT'));
    }

    public function testStarcraftConstant()
    {
        $class = new Franchises();
        $reflectionClass = new ReflectionClass($class);
        $this->assertEquals('sc2', $reflectionClass->getConstant('STARCRAFT'));
    }

    public function testDiabloConstant()
    {
        $class = new Franchises();
        $reflectionClass = new ReflectionClass($class);
        $this->assertEquals('d3', $reflectionClass->getConstant('DIABLO'));
    }
}
