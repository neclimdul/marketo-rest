<?php

namespace NecLimDul\MarketoRest\Tests;

use NecLimDul\MarketoRest\Configuration;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \NecLimDul\MarketoRest\Configuration
 */
class ConfigurationTest extends TestCase
{

    /**
     * @covers ::__construct
     * @covers ::setBaseUrl
     * @covers ::getBaseUrl
     */
    public function testGetBaseUrl()
    {
        $config = new Configuration([
            'baseUrl' => 'http://example.com',
        ]);
        $this->assertEquals('http://example.com', $config->getBaseUrl());
        $config->setBaseUrl('https://example.com/');
        $this->assertEquals('https://example.com/', $config->getBaseUrl());
    }

    /**
     * @covers ::__construct
     * @covers ::setClientId
     * @covers ::getClientId
     */
    public function testGetClientId()
    {
        $config = new Configuration([
            'clientId' => 'foobar',
        ]);
        $this->assertEquals('foobar', $config->getClientId());
        $config->setClientId('abc123');
        $this->assertEquals('abc123', $config->getClientId());
    }

    /**
     * @covers ::__construct
     * @covers ::setClientId
     * @covers ::setClientSecret
     */
    public function testGetClientSecret()
    {
        $config = new Configuration([
            'clientSecret' => 'foobar',
        ]);
        $this->assertEquals('foobar', $config->getClientSecret());
        $config->setClientSecret('abc123');
        $this->assertEquals('abc123', $config->getClientSecret());
    }

}
