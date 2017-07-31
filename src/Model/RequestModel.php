<?php

namespace Kubinashi\BattlenetApi\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-20
 * @version 1.0
 */
class RequestModel
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $api;

    /**
     * @var array
     */
    private $fields;

    /**
     * @var string
     */
    private $franchise;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $addition;

    /**
     * RequestModel constructor.
     *
     * @param string $region
     * @param string $apiKey
     * @param string $locale
     * @param array  $fields
     * @param string $api
     * @param string $franchise
     * @param string $addition
     */
    public function __construct(
        $region,
        $apiKey,
        $locale,
        $fields,
        $api,
        $franchise,
        $addition
    ) {
        $this->region = $region;
        $this->apiKey = $apiKey;
        $this->locale = $locale;
        $this->api = $api;
        $this->fields = $fields;
        $this->franchise = $franchise;
        $this->addition = $addition;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return string
     */
    public function getApi()
    {
        return $this->api;
    }

    /**
     * @return array
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @return string
     */
    public function getFranchise()
    {
        return $this->franchise;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getAddition()
    {
        return $this->addition;
    }
}
