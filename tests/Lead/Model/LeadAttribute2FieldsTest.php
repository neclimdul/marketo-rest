<?php
/**
 * LeadAttribute2FieldsTest
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
use NecLimDul\MarketoRest\Lead\Model\LeadAttribute2Fields;
use PHPUnit\Framework\TestCase;

/**
 * LeadAttribute2FieldsTest Class Doc Comment
 *
 * @category    Class
 * @description LeadAttribute2Fields
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Lead\Model\LeadAttribute2Fields
 */
class LeadAttribute2FieldsTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\LeadAttribute2Fields
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'name' => 'string',
        'display_name' => 'string',
        'data_type' => 'string',
        'length' => 'int',
        'updateable' => 'bool',
        'crm_managed' => 'bool',
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
        $this->sot = new LeadAttribute2Fields($data);
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
     * Test "LeadAttribute2Fields"
     *
     * @covers ::__construct
     */
    public function testLeadAttribute2Fields(): void
    {
        $this->assertInstanceOf(LeadAttribute2Fields::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, LeadAttribute2Fields::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['name']);
        $this->assertEquals(null, $formats['display_name']);
        $this->assertEquals(null, $formats['data_type']);
        $this->assertEquals(null, $formats['length']);
        $this->assertEquals(null, $formats['updateable']);
        $this->assertEquals(null, $formats['crm_managed']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('name', $formats['name']);
        $this->assertEquals('displayName', $formats['display_name']);
        $this->assertEquals('dataType', $formats['data_type']);
        $this->assertEquals('length', $formats['length']);
        $this->assertEquals('updateable', $formats['updateable']);
        $this->assertEquals('crmManaged', $formats['crm_managed']);
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
        $this->assertEquals('LeadAttribute2Fields', $this->sot->getModelName());
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
     * Test attribute "display_name"
     *
     * @covers ::__construct
     * @covers ::getDisplayName
     * @covers ::setDisplayName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyDisplayName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['display_name'],
            $this->allowedValues['display_name'] ?? null
        );
        $this->sot->setDisplayName($v);
        $this->assertEquals($v, $this->sot->getDisplayName());

        $this->assertEquals($v, $this->sot['display_name']);
        $v = $this->getFakeValue(
            $this->types['display_name'],
            $this->allowedValues['display_name'] ?? null
        );
        $this->sot['display_name'] = $v;
        $this->assertEquals($v, $this->sot['display_name']);
        $this->assertTrue(isset($this->sot['display_name']));
        unset($this->sot['display_name']);
        $this->assertFalse(isset($this->sot['display_name']));
        $this->sot['display_name'] = $v;
        $this->assertEquals($v, $this->sot['display_name']);
        $this->assertTrue(isset($this->sot['display_name']));
    }

    /**
     * Test attribute "data_type"
     *
     * @covers ::__construct
     * @covers ::getDataType
     * @covers ::setDataType
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyDataType(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['data_type'],
            $this->allowedValues['data_type'] ?? null
        );
        $this->sot->setDataType($v);
        $this->assertEquals($v, $this->sot->getDataType());

        $this->assertEquals($v, $this->sot['data_type']);
        $v = $this->getFakeValue(
            $this->types['data_type'],
            $this->allowedValues['data_type'] ?? null
        );
        $this->sot['data_type'] = $v;
        $this->assertEquals($v, $this->sot['data_type']);
        $this->assertTrue(isset($this->sot['data_type']));
        unset($this->sot['data_type']);
        $this->assertFalse(isset($this->sot['data_type']));
        $this->sot['data_type'] = $v;
        $this->assertEquals($v, $this->sot['data_type']);
        $this->assertTrue(isset($this->sot['data_type']));
    }

    /**
     * Test attribute "length"
     *
     * @covers ::__construct
     * @covers ::getLength
     * @covers ::setLength
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyLength(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['length'],
            $this->allowedValues['length'] ?? null
        );
        $this->sot->setLength($v);
        $this->assertEquals($v, $this->sot->getLength());
        $this->sot->setLength(null);
        $this->assertNull($this->sot->getLength());
        $this->sot->setLength($v);

        $this->assertEquals($v, $this->sot['length']);
        $v = $this->getFakeValue(
            $this->types['length'],
            $this->allowedValues['length'] ?? null
        );
        $this->sot['length'] = $v;
        $this->assertEquals($v, $this->sot['length']);
        $this->assertTrue(isset($this->sot['length']));
        unset($this->sot['length']);
        $this->assertFalse(isset($this->sot['length']));
        $this->sot['length'] = $v;
        $this->assertEquals($v, $this->sot['length']);
        $this->assertTrue(isset($this->sot['length']));
    }

    /**
     * Test attribute "updateable"
     *
     * @covers ::__construct
     * @covers ::getUpdateable
     * @covers ::setUpdateable
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyUpdateable(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['updateable'],
            $this->allowedValues['updateable'] ?? null
        );
        $this->sot->setUpdateable($v);
        $this->assertEquals($v, $this->sot->getUpdateable());

        $this->assertEquals($v, $this->sot['updateable']);
        $v = $this->getFakeValue(
            $this->types['updateable'],
            $this->allowedValues['updateable'] ?? null
        );
        $this->sot['updateable'] = $v;
        $this->assertEquals($v, $this->sot['updateable']);
        $this->assertTrue(isset($this->sot['updateable']));
        unset($this->sot['updateable']);
        $this->assertFalse(isset($this->sot['updateable']));
        $this->sot['updateable'] = $v;
        $this->assertEquals($v, $this->sot['updateable']);
        $this->assertTrue(isset($this->sot['updateable']));
    }

    /**
     * Test attribute "crm_managed"
     *
     * @covers ::__construct
     * @covers ::getCrmManaged
     * @covers ::setCrmManaged
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyCrmManaged(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['crm_managed'],
            $this->allowedValues['crm_managed'] ?? null
        );
        $this->sot->setCrmManaged($v);
        $this->assertEquals($v, $this->sot->getCrmManaged());

        $this->assertEquals($v, $this->sot['crm_managed']);
        $v = $this->getFakeValue(
            $this->types['crm_managed'],
            $this->allowedValues['crm_managed'] ?? null
        );
        $this->sot['crm_managed'] = $v;
        $this->assertEquals($v, $this->sot['crm_managed']);
        $this->assertTrue(isset($this->sot['crm_managed']));
        unset($this->sot['crm_managed']);
        $this->assertFalse(isset($this->sot['crm_managed']));
        $this->sot['crm_managed'] = $v;
        $this->assertEquals($v, $this->sot['crm_managed']);
        $this->assertTrue(isset($this->sot['crm_managed']));
    }
}
