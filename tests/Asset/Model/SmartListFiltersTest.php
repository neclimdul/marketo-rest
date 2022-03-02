<?php
/**
 * SmartListFiltersTest
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
use NecLimDul\MarketoRest\Asset\Model\SmartListFilters;
use PHPUnit\Framework\TestCase;

/**
 * SmartListFiltersTest Class Doc Comment
 *
 * @category    Class
 * @description JSON representation of smart list filters
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\SmartListFilters
 */
class SmartListFiltersTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\SmartListFilters
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'id' => 'int',
        'name' => 'string',
        'rule_type_id' => 'int',
        'rule_type' => 'string',
        'operator' => 'string',
        'conditions' => '\NecLimDul\MarketoRest\Asset\Model\SmartListConditions[]',
];

    /**
     * @var \Faker\Generator
     */
    private $faker;

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
        $this->sot = new SmartListFilters($data);
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
     * Test "SmartListFilters"
     *
     * @covers ::__construct
     */
    public function testSmartListFilters(): void
    {
        $this->assertInstanceOf(SmartListFilters::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, SmartListFilters::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals('int32', $formats['id']);
        $this->assertEquals(null, $formats['name']);
        $this->assertEquals('int32', $formats['rule_type_id']);
        $this->assertEquals(null, $formats['rule_type']);
        $this->assertEquals(null, $formats['operator']);
        $this->assertEquals(null, $formats['conditions']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('id', $formats['id']);
        $this->assertEquals('name', $formats['name']);
        $this->assertEquals('ruleTypeId', $formats['rule_type_id']);
        $this->assertEquals('ruleType', $formats['rule_type']);
        $this->assertEquals('operator', $formats['operator']);
        $this->assertEquals('conditions', $formats['conditions']);
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
        $this->assertEquals('SmartListFilters', $this->sot->getModelName());
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
     * Test attribute "id"
     *
     * @covers ::__construct
     * @covers ::getId
     * @covers ::setId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['id'],
            $this->allowedValues['id'] ?? null
        );
        $this->sot->setId($v);
        $this->assertEquals($v, $this->sot->getId());

        $this->assertEquals($v, $this->sot['id']);
        $v = $this->getFakeValue(
            $this->types['id'],
            $this->allowedValues['id'] ?? null
        );
        $this->sot['id'] = $v;
        $this->assertEquals($v, $this->sot['id']);
        $this->assertTrue(isset($this->sot['id']));
        unset($this->sot['id']);
        $this->assertFalse(isset($this->sot['id']));
        $this->sot['id'] = $v;
        $this->assertEquals($v, $this->sot['id']);
        $this->assertTrue(isset($this->sot['id']));
    }

    /**
     * Test attribute "name"
     *
     * @covers ::__construct
     * @covers ::getName
     * @covers ::setName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['name'],
            $this->allowedValues['name'] ?? null
        );
        $this->sot->setName($v);
        $this->assertEquals($v, $this->sot->getName());

        $this->assertEquals($v, $this->sot['name']);
        $v = $this->getFakeValue(
            $this->types['name'],
            $this->allowedValues['name'] ?? null
        );
        $this->sot['name'] = $v;
        $this->assertEquals($v, $this->sot['name']);
        $this->assertTrue(isset($this->sot['name']));
        unset($this->sot['name']);
        $this->assertFalse(isset($this->sot['name']));
        $this->sot['name'] = $v;
        $this->assertEquals($v, $this->sot['name']);
        $this->assertTrue(isset($this->sot['name']));
    }

    /**
     * Test attribute "rule_type_id"
     *
     * @covers ::__construct
     * @covers ::getRuleTypeId
     * @covers ::setRuleTypeId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyRuleTypeId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['rule_type_id'],
            $this->allowedValues['rule_type_id'] ?? null
        );
        $this->sot->setRuleTypeId($v);
        $this->assertEquals($v, $this->sot->getRuleTypeId());

        $this->assertEquals($v, $this->sot['rule_type_id']);
        $v = $this->getFakeValue(
            $this->types['rule_type_id'],
            $this->allowedValues['rule_type_id'] ?? null
        );
        $this->sot['rule_type_id'] = $v;
        $this->assertEquals($v, $this->sot['rule_type_id']);
        $this->assertTrue(isset($this->sot['rule_type_id']));
        unset($this->sot['rule_type_id']);
        $this->assertFalse(isset($this->sot['rule_type_id']));
        $this->sot['rule_type_id'] = $v;
        $this->assertEquals($v, $this->sot['rule_type_id']);
        $this->assertTrue(isset($this->sot['rule_type_id']));
    }

    /**
     * Test attribute "rule_type"
     *
     * @covers ::__construct
     * @covers ::getRuleType
     * @covers ::setRuleType
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyRuleType(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['rule_type'],
            $this->allowedValues['rule_type'] ?? null
        );
        $this->sot->setRuleType($v);
        $this->assertEquals($v, $this->sot->getRuleType());

        $this->assertEquals($v, $this->sot['rule_type']);
        $v = $this->getFakeValue(
            $this->types['rule_type'],
            $this->allowedValues['rule_type'] ?? null
        );
        $this->sot['rule_type'] = $v;
        $this->assertEquals($v, $this->sot['rule_type']);
        $this->assertTrue(isset($this->sot['rule_type']));
        unset($this->sot['rule_type']);
        $this->assertFalse(isset($this->sot['rule_type']));
        $this->sot['rule_type'] = $v;
        $this->assertEquals($v, $this->sot['rule_type']);
        $this->assertTrue(isset($this->sot['rule_type']));
    }

    /**
     * Test attribute "operator"
     *
     * @covers ::__construct
     * @covers ::getOperator
     * @covers ::setOperator
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyOperator(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['operator'],
            $this->allowedValues['operator'] ?? null
        );
        $this->sot->setOperator($v);
        $this->assertEquals($v, $this->sot->getOperator());

        $this->assertEquals($v, $this->sot['operator']);
        $v = $this->getFakeValue(
            $this->types['operator'],
            $this->allowedValues['operator'] ?? null
        );
        $this->sot['operator'] = $v;
        $this->assertEquals($v, $this->sot['operator']);
        $this->assertTrue(isset($this->sot['operator']));
        unset($this->sot['operator']);
        $this->assertFalse(isset($this->sot['operator']));
        $this->sot['operator'] = $v;
        $this->assertEquals($v, $this->sot['operator']);
        $this->assertTrue(isset($this->sot['operator']));
    }

    /**
     * Test attribute "conditions"
     *
     * @covers ::__construct
     * @covers ::getConditions
     * @covers ::setConditions
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyConditions(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['conditions'],
            $this->allowedValues['conditions'] ?? null
        );
        $this->sot->setConditions($v);
        $this->assertEquals($v, $this->sot->getConditions());

        $this->assertEquals($v, $this->sot['conditions']);
        $v = $this->getFakeValue(
            $this->types['conditions'],
            $this->allowedValues['conditions'] ?? null
        );
        $this->sot['conditions'] = $v;
        $this->assertEquals($v, $this->sot['conditions']);
        $this->assertTrue(isset($this->sot['conditions']));
        unset($this->sot['conditions']);
        $this->assertFalse(isset($this->sot['conditions']));
        $this->sot['conditions'] = $v;
        $this->assertEquals($v, $this->sot['conditions']);
        $this->assertTrue(isset($this->sot['conditions']));
    }
}
