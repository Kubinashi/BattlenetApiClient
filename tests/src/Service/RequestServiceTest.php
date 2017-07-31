<?php
/**
 * @author  Willy Reiche
 * @since   2017-07-23
 * @version 1.0
 */

use Kubinashi\BattlenetApi\Service\RequestService;
use PHPUnit\Framework\TestCase;

class RequestServiceTest extends TestCase
{
    public function testDoRequestWithoutAddition()
    {
        $model = new \Kubinashi\BattlenetApi\Model\RequestModel(
            'eu',
            'ceq2pkghkhjx4r9asp7xs6jm99p594f8',
            'en_GB',
            ['Antonidas', 'Hanemura'],
            'character',
            \Kubinashi\BattlenetApi\Model\Franchises::WORLD_OF_WARCRAFT,
            ''
        );

        $service = new RequestService();

        $this->assertJson($service->doRequest($model));
    }

    public function testDoRequestWithAddition()
    {
        $model = new \Kubinashi\BattlenetApi\Model\RequestModel(
            'eu',
            'ceq2pkghkhjx4r9asp7xs6jm99p594f8',
            'en_GB',
            ['Antonidas', 'Hanemura'],
            'character',
            \Kubinashi\BattlenetApi\Model\Franchises::WORLD_OF_WARCRAFT,
            'guild'
        );

        $service = new RequestService();

        $this->assertJson($service->doRequest($model));
    }
}
