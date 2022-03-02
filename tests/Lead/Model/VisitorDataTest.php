<?php
/**
 * VisitorDataTest
 *
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.26
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace NecLimDul\MarketoRest\Lead\Test\Model;

use Faker\Factory;
use NecLimDul\MarketoRest\Lead\Model\ModelInterface;
use NecLimDul\MarketoRest\Lead\Model\VisitorData;
use PHPUnit\Framework\TestCase;

/**
 * VisitorDataTest Class Doc Comment
 *
 * @category    Class
 * @description Page visit related data.  Used to populate additional activity fields for filtering and triggering.
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\VisitorData
 */
class VisitorDataTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\VisitorData
     */
    private $sot;

    /**
     * @var \Faker\Generator
     */
    private $faker;

    /**
     * @var string[]
     */
    private $types = [
        'page_url' => 'string',
        'query_string' => 'string',
        'lead_client_ip_address' => 'string',
        'user_agent_string' => 'string',
    ];
    /**
     * @var scalar[][]
     */
    private $allowedValues = [
    ];

    public function setUp(): void
    {
        parent::setUp();
        $this->faker = \Faker\Factory::create();
        $data = [];
        foreach ($this->types as $field => $type) {
            $data[$field] = $this->getFakeValue($type, $this->allowedValues[$field] ?? null);
        }
        $this->sot = new VisitorData($data);
    }

    /**
     * @param string $type
     * @param scalar[]|null $values
     * @return mixed
     */
    private function getFakeValue(string $type, ?array $values) {
        if (isset($values)) {
            // @todo random.
            return array_pop($values);
        }

        // @todo look for container hints.
        if (strcasecmp(substr($type, -2), '[]') === 0) {
            $return = [];
            $subType = substr($type, 0, -2);
            for ($i = 0; $i <= rand(0, 9); $i++) {
                $return[] = $this->getFakeValue($subType, $values);
            }
            return $return;
        }
        switch ($type) {
            case 'string':
                return $this->faker->word();
            case 'float':
                return $this->faker->randomFloat();
            case 'int':
                return $this->faker->randomNumber();
            case 'bool':
                return $this->faker->boolean();
            case '\DateTime':
                return $this->faker->dateTimeAD();
            case 'object':
                return new \stdClass();
        }
        if (class_exists($type) && is_subclass_of($type, ModelInterface::class)) {
            return new $type();
        }
        $this->markTestSkipped('This type is not mocked yet: ' . $type);
    }

    /**
     * Test "VisitorData"
     *
     * @covers ::__construct
     */
    public function testVisitorData(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\VisitorData::class, $this->sot);
    }

    /**
     * Test attribute "page_url"
     *
     * @covers ::__construct
     * @covers ::getPageUrl
     * @covers ::setPageUrl
     */
    public function testPropertyPageUrl(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['page_url'],
            $this->allowedValues['page_url'] ?? null
        );
        $this->sot->setPageUrl($v);
        $this->assertEquals($v, $this->sot->getPageUrl());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "query_string"
     *
     * @covers ::__construct
     * @covers ::getQueryString
     * @covers ::setQueryString
     */
    public function testPropertyQueryString(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['query_string'],
            $this->allowedValues['query_string'] ?? null
        );
        $this->sot->setQueryString($v);
        $this->assertEquals($v, $this->sot->getQueryString());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "lead_client_ip_address"
     *
     * @covers ::__construct
     * @covers ::getLeadClientIpAddress
     * @covers ::setLeadClientIpAddress
     */
    public function testPropertyLeadClientIpAddress(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['lead_client_ip_address'],
            $this->allowedValues['lead_client_ip_address'] ?? null
        );
        $this->sot->setLeadClientIpAddress($v);
        $this->assertEquals($v, $this->sot->getLeadClientIpAddress());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "user_agent_string"
     *
     * @covers ::__construct
     * @covers ::getUserAgentString
     * @covers ::setUserAgentString
     */
    public function testPropertyUserAgentString(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['user_agent_string'],
            $this->allowedValues['user_agent_string'] ?? null
        );
        $this->sot->setUserAgentString($v);
        $this->assertEquals($v, $this->sot->getUserAgentString());
        // $this->markTestIncomplete('Not implemented');
    }
}
