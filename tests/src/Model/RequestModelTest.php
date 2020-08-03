<?php
/**
 * @author  Willy Reiche
 * @since   2017-07-23
 * @version 1.0
 */

use Kubinashi\BattlenetApi\Model\RequestModel;
use PHPUnit\Framework\TestCase;

class RequestModelTest extends TestCase
{
    private $apiKey;
    private $local;
    private $region;
    private $fields;
    private $api;
    private $franchise;
    private $addition;

    public function setUp(): void
    {
        $this->apiKey = uniqid();
        $this->local = uniqid();
        $this->region = uniqid();
        $this->fields = [];
        $this->api = uniqid();
        $this->franchise = uniqid();
        $this->addition = uniqid();
    }

    public function testGetApiKey()
    {
        $model = new RequestModel($this->region, $this->apiKey, $this->local, $this->fields, $this->api, $this->franchise, $this->addition);

        $this->assertEquals($this->apiKey, $model->getClientId());
    }

    public function testGetLocale()
    {
        $model = new RequestModel($this->region, $this->apiKey, $this->local, $this->fields, $this->api, $this->franchise, $this->addition);

        $this->assertEquals($this->local, $model->getLocale());
    }

    public function testGetRegion()
    {
        $model = new RequestModel($this->region, $this->apiKey, $this->local, $this->fields, $this->api, $this->franchise, $this->addition);

        $this->assertEquals($this->region, $model->getRegion());
    }

    public function testGetFields()
    {
        $model = new RequestModel($this->region, $this->apiKey, $this->local, $this->fields, $this->api, $this->franchise, $this->addition);

        $this->assertEquals($this->fields, $model->getFields());
    }

    public function testGetApi()
    {
        $model = new RequestModel($this->region, $this->apiKey, $this->local, $this->fields, $this->api, $this->franchise, $this->addition);

        $this->assertEquals($this->api, $model->getApi());
    }

    public function testGetFranchise()
    {
        $model = new RequestModel($this->region, $this->apiKey, $this->local, $this->fields, $this->api, $this->franchise, $this->addition);

        $this->assertEquals($this->franchise, $model->getFranchise());
    }

    public function testGetAddition()
    {
        $model = new RequestModel($this->region, $this->apiKey, $this->local, $this->fields, $this->api, $this->franchise, $this->addition);

        $this->assertEquals($this->addition, $model->getAddition());
    }
}
