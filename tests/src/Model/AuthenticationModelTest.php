<?php
/**
 * @author  Willy Reiche
 * @since   2017-07-23
 * @version 1.0
 */

use Kubinashi\BattlenetApi\Model\AuthenticationModel;
use PHPUnit\Framework\TestCase;

class AuthenticationModelTest extends TestCase
{
    private $region;
    private $apiKey;
    private $local;

    public function setUp()
    {
        $this->apiKey = uniqid();
        $this->local = uniqid();
        $this->region = uniqid();
    }

    public function testGetApiKey()
    {
        $model = new AuthenticationModel($this->apiKey, $this->local, $this->region);

        $this->assertEquals($this->apiKey, $model->getApiKey());
    }

    public function testGetLocale()
    {
        $model = new AuthenticationModel($this->apiKey, $this->local, $this->region);

        $this->assertEquals($this->local, $model->getLocale());
    }

    public function testGetRegion()
    {
        $model = new AuthenticationModel($this->apiKey, $this->local, $this->region);

        $this->assertEquals($this->region, $model->getRegion());
    }
}
