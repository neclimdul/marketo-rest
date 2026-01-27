<?php

namespace NecLimDul\MarketoRest\Tests;

use NecLimDul\MarketoRest\Configuration;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Configuration::class)]
class ConfigurationTest extends TestCase
{

    /**
     * @legacy-covers ::__construct
     * @legacy-covers ::setBaseUrl
     * @legacy-covers ::getBaseUrl
     */
    public function testGetBaseUrl(): void
    {
        $config = new Configuration([
            'baseUrl' => 'http://example.com',
        ]);
        $this->assertEquals('http://example.com', $config->getBaseUrl());
        $config->setBaseUrl('https://example.com/');
        $this->assertEquals('https://example.com/', $config->getBaseUrl());
    }

    /**
     * @legacy-covers ::__construct
     * @legacy-covers ::setClientId
     * @legacy-covers ::getClientId
     */
    public function testGetClientId(): void
    {
        $config = new Configuration([
            'clientId' => 'foobar',
        ]);
        $this->assertEquals('foobar', $config->getClientId());
        $config->setClientId('abc123');
        $this->assertEquals('abc123', $config->getClientId());
    }

    /**
     * @legacy-covers ::__construct
     * @legacy-covers ::setClientId
     * @legacy-covers ::setClientSecret
     */
    public function testGetClientSecret(): void
    {
        $config = new Configuration([
            'clientSecret' => 'foobar',
        ]);
        $this->assertEquals('foobar', $config->getClientSecret());
        $config->setClientSecret('abc123');
        $this->assertEquals('abc123', $config->getClientSecret());
    }

}
