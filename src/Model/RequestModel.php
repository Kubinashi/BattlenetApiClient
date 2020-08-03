<?php

namespace Kubinashi\BattlenetApi\Model;

class RequestModel
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
     * @var string
     */
    private $clientSecret;

    /**
     * @var string
     */
    private $type;

    public function __construct(
        string $region,
        string $clientId,
        string $locale,
        array $fields,
        string $api,
        string $franchise,
        string $addition,
        string $clientSecret,
        string $type
    ) {
        $this->region = $region;
        $this->clientId = $clientId;
        $this->locale = $locale;
        $this->api = $api;
        $this->fields = $fields;
        $this->franchise = $franchise;
        $this->addition = $addition;
        $this->clientSecret = $clientSecret;
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
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

    public function getApi(): string
    {
        return $this->api;
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function getFranchise(): string
    {
        return $this->franchise;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function getAddition(): string
    {
        return $this->addition;
    }
}
