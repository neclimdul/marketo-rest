<?php
/**
 * ExportCustomObjectFilterTest
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
use NecLimDul\MarketoRest\Lead\Model\ExportCustomObjectFilter;
use PHPUnit\Framework\TestCase;

/**
 * ExportCustomObjectFilterTest Class Doc Comment
 *
 * @category    Class
 * @description ExportCustomObjectFilter
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Lead\Model\ExportCustomObjectFilter
 */
class ExportCustomObjectFilterTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\ExportCustomObjectFilter
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'updated_at' => '\NecLimDul\MarketoRest\Lead\Model\DateRange',
        'smart_list_id' => 'int',
        'smart_list_name' => 'string',
        'static_list_id' => 'int',
        'static_list_name' => 'string',
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
        $this->sot = new ExportCustomObjectFilter($data);
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
     * Test "ExportCustomObjectFilter"
     *
     * @covers ::__construct
     */
    public function testExportCustomObjectFilter(): void
    {
        $this->assertInstanceOf(ExportCustomObjectFilter::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, ExportCustomObjectFilter::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['updated_at']);
        $this->assertEquals('int32', $formats['smart_list_id']);
        $this->assertEquals(null, $formats['smart_list_name']);
        $this->assertEquals('int32', $formats['static_list_id']);
        $this->assertEquals(null, $formats['static_list_name']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('updatedAt', $formats['updated_at']);
        $this->assertEquals('smartListId', $formats['smart_list_id']);
        $this->assertEquals('smartListName', $formats['smart_list_name']);
        $this->assertEquals('staticListId', $formats['static_list_id']);
        $this->assertEquals('staticListName', $formats['static_list_name']);
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
        $this->assertEquals('ExportCustomObjectFilter', $this->sot->getModelName());
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
     * Test attribute "updated_at"
     *
     * @covers ::__construct
     * @covers ::getUpdatedAt
     * @covers ::setUpdatedAt
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyUpdatedAt(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['updated_at'],
            $this->allowedValues['updated_at'] ?? null
        );
        $this->sot->setUpdatedAt($v);
        $this->assertEquals($v, $this->sot->getUpdatedAt());

        $this->assertEquals($v, $this->sot['updated_at']);
        $v = $this->getFakeValue(
            $this->types['updated_at'],
            $this->allowedValues['updated_at'] ?? null
        );
        $this->sot['updated_at'] = $v;
        $this->assertEquals($v, $this->sot['updated_at']);
        $this->assertTrue(isset($this->sot['updated_at']));
        unset($this->sot['updated_at']);
        $this->assertFalse(isset($this->sot['updated_at']));
        $this->sot['updated_at'] = $v;
        $this->assertEquals($v, $this->sot['updated_at']);
        $this->assertTrue(isset($this->sot['updated_at']));
    }

    /**
     * Test attribute "smart_list_id"
     *
     * @covers ::__construct
     * @covers ::getSmartListId
     * @covers ::setSmartListId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertySmartListId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['smart_list_id'],
            $this->allowedValues['smart_list_id'] ?? null
        );
        $this->sot->setSmartListId($v);
        $this->assertEquals($v, $this->sot->getSmartListId());

        $this->assertEquals($v, $this->sot['smart_list_id']);
        $v = $this->getFakeValue(
            $this->types['smart_list_id'],
            $this->allowedValues['smart_list_id'] ?? null
        );
        $this->sot['smart_list_id'] = $v;
        $this->assertEquals($v, $this->sot['smart_list_id']);
        $this->assertTrue(isset($this->sot['smart_list_id']));
        unset($this->sot['smart_list_id']);
        $this->assertFalse(isset($this->sot['smart_list_id']));
        $this->sot['smart_list_id'] = $v;
        $this->assertEquals($v, $this->sot['smart_list_id']);
        $this->assertTrue(isset($this->sot['smart_list_id']));
    }

    /**
     * Test attribute "smart_list_name"
     *
     * @covers ::__construct
     * @covers ::getSmartListName
     * @covers ::setSmartListName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertySmartListName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['smart_list_name'],
            $this->allowedValues['smart_list_name'] ?? null
        );
        $this->sot->setSmartListName($v);
        $this->assertEquals($v, $this->sot->getSmartListName());

        $this->assertEquals($v, $this->sot['smart_list_name']);
        $v = $this->getFakeValue(
            $this->types['smart_list_name'],
            $this->allowedValues['smart_list_name'] ?? null
        );
        $this->sot['smart_list_name'] = $v;
        $this->assertEquals($v, $this->sot['smart_list_name']);
        $this->assertTrue(isset($this->sot['smart_list_name']));
        unset($this->sot['smart_list_name']);
        $this->assertFalse(isset($this->sot['smart_list_name']));
        $this->sot['smart_list_name'] = $v;
        $this->assertEquals($v, $this->sot['smart_list_name']);
        $this->assertTrue(isset($this->sot['smart_list_name']));
    }

    /**
     * Test attribute "static_list_id"
     *
     * @covers ::__construct
     * @covers ::getStaticListId
     * @covers ::setStaticListId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyStaticListId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['static_list_id'],
            $this->allowedValues['static_list_id'] ?? null
        );
        $this->sot->setStaticListId($v);
        $this->assertEquals($v, $this->sot->getStaticListId());

        $this->assertEquals($v, $this->sot['static_list_id']);
        $v = $this->getFakeValue(
            $this->types['static_list_id'],
            $this->allowedValues['static_list_id'] ?? null
        );
        $this->sot['static_list_id'] = $v;
        $this->assertEquals($v, $this->sot['static_list_id']);
        $this->assertTrue(isset($this->sot['static_list_id']));
        unset($this->sot['static_list_id']);
        $this->assertFalse(isset($this->sot['static_list_id']));
        $this->sot['static_list_id'] = $v;
        $this->assertEquals($v, $this->sot['static_list_id']);
        $this->assertTrue(isset($this->sot['static_list_id']));
    }

    /**
     * Test attribute "static_list_name"
     *
     * @covers ::__construct
     * @covers ::getStaticListName
     * @covers ::setStaticListName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyStaticListName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['static_list_name'],
            $this->allowedValues['static_list_name'] ?? null
        );
        $this->sot->setStaticListName($v);
        $this->assertEquals($v, $this->sot->getStaticListName());

        $this->assertEquals($v, $this->sot['static_list_name']);
        $v = $this->getFakeValue(
            $this->types['static_list_name'],
            $this->allowedValues['static_list_name'] ?? null
        );
        $this->sot['static_list_name'] = $v;
        $this->assertEquals($v, $this->sot['static_list_name']);
        $this->assertTrue(isset($this->sot['static_list_name']));
        unset($this->sot['static_list_name']);
        $this->assertFalse(isset($this->sot['static_list_name']));
        $this->sot['static_list_name'] = $v;
        $this->assertEquals($v, $this->sot['static_list_name']);
        $this->assertTrue(isset($this->sot['static_list_name']));
    }
}
