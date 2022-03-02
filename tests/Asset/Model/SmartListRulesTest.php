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
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\SmartListRules
 */
class SmartListRulesTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\SmartListRules
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'filter_match_type' => 'string',
        'triggers' => 'string[]',
        'filters' => '\NecLimDul\MarketoRest\Asset\Model\SmartListFilters[]',
];

    /**
     * @var \Faker\Generator
     */
    private $faker;

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
            $model = new $type();
            $types = $type::swaggerTypes();
            foreach ($model->listInvalidProperties() as $field => $reason) {
                // @todo get allowed values? ((getter))AllowedValues
                // @phpstan-ignore-next-line
                $model[$field] = $this->getFakeValue($types[$field], null);
            }
            return $model;
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
        $this->assertInstanceOf(SmartListRules::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, SmartListRules::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['filter_match_type']);
        $this->assertEquals(null, $formats['triggers']);
        $this->assertEquals(null, $formats['filters']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('filterMatchType', $formats['filter_match_type']);
        $this->assertEquals('triggers', $formats['triggers']);
        $this->assertEquals('filters', $formats['filters']);
    }

    /**
     * @covers ::getters
     * @covers ::setters
     */
    public function testGettersSetters(): void
    {
        $getters = $this->sot->getters();
        $setters = $this->sot->setters();
        foreach (array_keys($this->types) as $field) {
            $this->assertTrue(isset($setters[$field]));
            $this->assertTrue(isset($getters[$field]));
            $this->assertTrue(
                method_exists($this->sot, $getters[$field]),
                'Getter exists on model.'
            );
            $this->assertTrue(
                method_exists($this->sot, $setters[$field]),
                'Setter exists on model.'
            );
        }
    }

    /**
     * @covers ::getModelName
     */
    public function testGetModelName(): void
    {
        $this->assertEquals('SmartListRules', $this->sot->getModelName());
    }

    /**
     * @covers ::listInvalidProperties
     * @covers ::valid
     */
    public function testValid(): void
    {
        $this->markTestIncomplete('TODO');
    }

    /**
     * @covers ::setAdditionalProperties
     * @covers ::setAdditionalProperty
     * @covers ::getAdditionalProperties
     */
    public function testAdditionalProperties(): void
    {
        $this->markTestIncomplete('TODO');
    }

    /**
     * @covers ::jsonSerialize
     * @covers ::__toString
     */
    public function testJson(): void
    {
        // Some minimal tests that json generates well.
        $json = json_encode($this->sot);
        $this->assertIsString($json, 'Json encoded');
        $json = json_decode($json);
        $string = json_decode((string) $this->sot);
        $this->assertEquals(
            $json,
            $string
        );
        $this->assertInstanceOf(\stdClass::class, $json);
        $this->assertInstanceOf(\stdClass::class, $string);
    }

    /**
     * Test attribute "filter_match_type"
     *
     * @covers ::__construct
     * @covers ::getFilterMatchType
     * @covers ::setFilterMatchType
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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

        $this->assertEquals($v, $this->sot['filter_match_type']);
        $v = $this->getFakeValue(
            $this->types['filter_match_type'],
            $this->allowedValues['filter_match_type'] ?? null
        );
        $this->sot['filter_match_type'] = $v;
        $this->assertEquals($v, $this->sot['filter_match_type']);
        $this->assertTrue(isset($this->sot['filter_match_type']));
        unset($this->sot['filter_match_type']);
        $this->assertFalse(isset($this->sot['filter_match_type']));
        $this->sot['filter_match_type'] = $v;
        $this->assertEquals($v, $this->sot['filter_match_type']);
        $this->assertTrue(isset($this->sot['filter_match_type']));
    }

    /**
     * Test attribute "triggers"
     *
     * @covers ::__construct
     * @covers ::getTriggers
     * @covers ::setTriggers
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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

        $this->assertEquals($v, $this->sot['triggers']);
        $v = $this->getFakeValue(
            $this->types['triggers'],
            $this->allowedValues['triggers'] ?? null
        );
        $this->sot['triggers'] = $v;
        $this->assertEquals($v, $this->sot['triggers']);
        $this->assertTrue(isset($this->sot['triggers']));
        unset($this->sot['triggers']);
        $this->assertFalse(isset($this->sot['triggers']));
        $this->sot['triggers'] = $v;
        $this->assertEquals($v, $this->sot['triggers']);
        $this->assertTrue(isset($this->sot['triggers']));
    }

    /**
     * Test attribute "filters"
     *
     * @covers ::__construct
     * @covers ::getFilters
     * @covers ::setFilters
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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

        $this->assertEquals($v, $this->sot['filters']);
        $v = $this->getFakeValue(
            $this->types['filters'],
            $this->allowedValues['filters'] ?? null
        );
        $this->sot['filters'] = $v;
        $this->assertEquals($v, $this->sot['filters']);
        $this->assertTrue(isset($this->sot['filters']));
        unset($this->sot['filters']);
        $this->assertFalse(isset($this->sot['filters']));
        $this->sot['filters'] = $v;
        $this->assertEquals($v, $this->sot['filters']);
        $this->assertTrue(isset($this->sot['filters']));
    }
}
