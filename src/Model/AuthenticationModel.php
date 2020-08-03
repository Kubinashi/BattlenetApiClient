<?php

namespace Kubinashi\BattlenetApi\Model;

class AuthenticationModel
{
    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $clientSecret;

    public function __construct(string $clientId, string $clientSecret, string $locale, string $region)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->locale = $locale;
        $this->region = $region;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getLocale(): string
    {
        return $this->locale;
    }

    public function getRegion(): string
    {
        return $this->region;
    }
}
