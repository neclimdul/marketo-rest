<?php

namespace NecLimDul\MarketoRest;

class Configuration
{

    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var string
     */
    protected $clientSecret;

    /**
     * @var string
     */
    protected $clientId;

    public function __construct($defaults = [])
    {
        $this->baseUrl = $defaults['baseUrl'] ?? '';
        $this->clientId = $defaults['clientId'] ?? '';
        $this->clientSecret = $defaults['clientSecret'] ?? '';
    }

    /**
     * Set base marketo url.
     *
     * @param string $baseUrl
     */
    public function setBaseUrl(string $baseUrl): void {
        $this->baseUrl = $baseUrl;
    }

    /**
     * Get base marketo url.
     *
     * @return string
     */
    public function getBaseUrl(): string {
        return $this->baseUrl;
    }

    /**
     * Set oauth client id.
     *
     * @param string $clientId
     */
    public function setClientId(string $clientId): void {
        $this->clientId = $clientId;
    }

    /**
     * Get oauth client id.
     *
     * @return string
     */
    public function getClientId(): string {
        return $this->clientId;
    }

    /**
     * Set oauth client secret.
     *
     * @param string $clientSecret
     */
    public function setClientSecret(string $clientSecret): void {
        $this->clientSecret = $clientSecret;
    }

    /**
     * Get oauth client secret.
     *
     * @return string
     */
    public function getClientSecret(): string {
        return $this->clientSecret;
    }

}
