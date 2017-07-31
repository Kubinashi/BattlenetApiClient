<?php

namespace Kubinashi\BattlenetApi\Model;

/**
 * @author  Willy Reiche
 * @since   2017-07-20
 * @version 1.0
 */
class AuthenticationModel
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
    private $region;

    /**
     * AuthenticationModel constructor.
     *
     * @param string $apiKey
     * @param string $locale
     * @param string $region
     */
    public function __construct($apiKey, $locale, $region)
    {
        $this->apiKey = $apiKey;
        $this->locale = $locale;
        $this->region = $region;
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
    public function getRegion()
    {
        return $this->region;
    }
}
