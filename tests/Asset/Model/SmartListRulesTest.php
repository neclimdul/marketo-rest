<?php
/**
 * SmartListRulesTest
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
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace NecLimDul\MarketoRest\Asset\Test\Model;

use Faker\Factory;
use NecLimDul\MarketoRest\Asset\Model\ModelInterface;
use NecLimDul\MarketoRest\Asset\Model\SmartListRules;
use PHPUnit\Framework\TestCase;

/**
 * SmartListRulesTest Class Doc Comment
 *
 * @category    Class
 * @description JSON representation of smart list rules
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\SmartListRules
 */
class SmartListRulesTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\SmartListRules
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
        'filter_match_type' => 'string',
        'triggers' => 'string[]',
        'filters' => '\NecLimDul\MarketoRest\Asset\Model\SmartListFilters[]',
    ];
    /**
     * @var scalar[][]
     */
    private $allowedValues = [
        'filter_match_type' => [
            'ALL' => 'All',
            'ANY' => 'Any',
            'ADVANCED' => 'Advanced',
        ],
    ];

    public function setUp(): void
    {
        parent::setUp();
        $this->faker = \Faker\Factory::create();
        $data = [];
        foreach ($this->types as $field => $type) {
            $data[$field] = $this->getFakeValue($type, $this->allowedValues[$field] ?? null);
        }
        $this->sot = new SmartListRules($data);
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
     * Test "SmartListRules"
     *
     * @covers ::__construct
     */
    public function testSmartListRules(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\SmartListRules::class, $this->sot);
    }

    /**
     * Test attribute "filter_match_type"
     *
     * @covers ::__construct
     * @covers ::getFilterMatchType
     * @covers ::setFilterMatchType
     */
    public function testPropertyFilterMatchType(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['filter_match_type'],
            $this->allowedValues['filter_match_type'] ?? null
        );
        $this->sot->setFilterMatchType($v);
        $this->assertEquals($v, $this->sot->getFilterMatchType());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "triggers"
     *
     * @covers ::__construct
     * @covers ::getTriggers
     * @covers ::setTriggers
     */
    public function testPropertyTriggers(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['triggers'],
            $this->allowedValues['triggers'] ?? null
        );
        $this->sot->setTriggers($v);
        $this->assertEquals($v, $this->sot->getTriggers());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "filters"
     *
     * @covers ::__construct
     * @covers ::getFilters
     * @covers ::setFilters
     */
    public function testPropertyFilters(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['filters'],
            $this->allowedValues['filters'] ?? null
        );
        $this->sot->setFilters($v);
        $this->assertEquals($v, $this->sot->getFilters());
        // $this->markTestIncomplete('Not implemented');
    }
}
