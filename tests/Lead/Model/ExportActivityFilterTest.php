<?php
/**
 * ExportActivityFilterTest
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
use NecLimDul\MarketoRest\Lead\Model\ExportActivityFilter;
use PHPUnit\Framework\TestCase;

/**
 * ExportActivityFilterTest Class Doc Comment
 *
 * @category    Class
 * @description ExportActivityFilter
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Lead\Model\ExportActivityFilter
 */
class ExportActivityFilterTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\ExportActivityFilter
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'activity_type_ids' => 'int[]',
        'primary_attribute_value_ids' => 'int[]',
        'primary_attribute_values' => 'string[]',
        'created_at' => '\NecLimDul\MarketoRest\Lead\Model\DateRange',
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
        $this->sot = new ExportActivityFilter($data);
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
     * Test "ExportActivityFilter"
     *
     * @covers ::__construct
     */
    public function testExportActivityFilter(): void
    {
        $this->assertInstanceOf(ExportActivityFilter::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, ExportActivityFilter::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals('int32', $formats['activity_type_ids']);
        $this->assertEquals('int32', $formats['primary_attribute_value_ids']);
        $this->assertEquals(null, $formats['primary_attribute_values']);
        $this->assertEquals(null, $formats['created_at']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('activityTypeIds', $formats['activity_type_ids']);
        $this->assertEquals('primaryAttributeValueIds', $formats['primary_attribute_value_ids']);
        $this->assertEquals('primaryAttributeValues', $formats['primary_attribute_values']);
        $this->assertEquals('createdAt', $formats['created_at']);
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
        $this->assertEquals('ExportActivityFilter', $this->sot->getModelName());
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
     * Test attribute "activity_type_ids"
     *
     * @covers ::__construct
     * @covers ::getActivityTypeIds
     * @covers ::setActivityTypeIds
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyActivityTypeIds(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['activity_type_ids'],
            $this->allowedValues['activity_type_ids'] ?? null
        );
        $this->sot->setActivityTypeIds($v);
        $this->assertEquals($v, $this->sot->getActivityTypeIds());
        $this->sot->setActivityTypeIds(null);
        $this->assertNull($this->sot->getActivityTypeIds());
        $this->sot->setActivityTypeIds($v);

        $this->assertEquals($v, $this->sot['activity_type_ids']);
        $v = $this->getFakeValue(
            $this->types['activity_type_ids'],
            $this->allowedValues['activity_type_ids'] ?? null
        );
        $this->sot['activity_type_ids'] = $v;
        $this->assertEquals($v, $this->sot['activity_type_ids']);
        $this->assertTrue(isset($this->sot['activity_type_ids']));
        unset($this->sot['activity_type_ids']);
        $this->assertFalse(isset($this->sot['activity_type_ids']));
        $this->sot['activity_type_ids'] = $v;
        $this->assertEquals($v, $this->sot['activity_type_ids']);
        $this->assertTrue(isset($this->sot['activity_type_ids']));
    }

    /**
     * Test attribute "primary_attribute_value_ids"
     *
     * @covers ::__construct
     * @covers ::getPrimaryAttributeValueIds
     * @covers ::setPrimaryAttributeValueIds
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyPrimaryAttributeValueIds(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['primary_attribute_value_ids'],
            $this->allowedValues['primary_attribute_value_ids'] ?? null
        );
        $this->sot->setPrimaryAttributeValueIds($v);
        $this->assertEquals($v, $this->sot->getPrimaryAttributeValueIds());
        $this->sot->setPrimaryAttributeValueIds(null);
        $this->assertNull($this->sot->getPrimaryAttributeValueIds());
        $this->sot->setPrimaryAttributeValueIds($v);

        $this->assertEquals($v, $this->sot['primary_attribute_value_ids']);
        $v = $this->getFakeValue(
            $this->types['primary_attribute_value_ids'],
            $this->allowedValues['primary_attribute_value_ids'] ?? null
        );
        $this->sot['primary_attribute_value_ids'] = $v;
        $this->assertEquals($v, $this->sot['primary_attribute_value_ids']);
        $this->assertTrue(isset($this->sot['primary_attribute_value_ids']));
        unset($this->sot['primary_attribute_value_ids']);
        $this->assertFalse(isset($this->sot['primary_attribute_value_ids']));
        $this->sot['primary_attribute_value_ids'] = $v;
        $this->assertEquals($v, $this->sot['primary_attribute_value_ids']);
        $this->assertTrue(isset($this->sot['primary_attribute_value_ids']));
    }

    /**
     * Test attribute "primary_attribute_values"
     *
     * @covers ::__construct
     * @covers ::getPrimaryAttributeValues
     * @covers ::setPrimaryAttributeValues
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyPrimaryAttributeValues(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['primary_attribute_values'],
            $this->allowedValues['primary_attribute_values'] ?? null
        );
        $this->sot->setPrimaryAttributeValues($v);
        $this->assertEquals($v, $this->sot->getPrimaryAttributeValues());
        $this->sot->setPrimaryAttributeValues(null);
        $this->assertNull($this->sot->getPrimaryAttributeValues());
        $this->sot->setPrimaryAttributeValues($v);

        $this->assertEquals($v, $this->sot['primary_attribute_values']);
        $v = $this->getFakeValue(
            $this->types['primary_attribute_values'],
            $this->allowedValues['primary_attribute_values'] ?? null
        );
        $this->sot['primary_attribute_values'] = $v;
        $this->assertEquals($v, $this->sot['primary_attribute_values']);
        $this->assertTrue(isset($this->sot['primary_attribute_values']));
        unset($this->sot['primary_attribute_values']);
        $this->assertFalse(isset($this->sot['primary_attribute_values']));
        $this->sot['primary_attribute_values'] = $v;
        $this->assertEquals($v, $this->sot['primary_attribute_values']);
        $this->assertTrue(isset($this->sot['primary_attribute_values']));
    }

    /**
     * Test attribute "created_at"
     *
     * @covers ::__construct
     * @covers ::getCreatedAt
     * @covers ::setCreatedAt
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyCreatedAt(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['created_at'],
            $this->allowedValues['created_at'] ?? null
        );
        $this->sot->setCreatedAt($v);
        $this->assertEquals($v, $this->sot->getCreatedAt());

        $this->assertEquals($v, $this->sot['created_at']);
        $v = $this->getFakeValue(
            $this->types['created_at'],
            $this->allowedValues['created_at'] ?? null
        );
        $this->sot['created_at'] = $v;
        $this->assertEquals($v, $this->sot['created_at']);
        $this->assertTrue(isset($this->sot['created_at']));
        unset($this->sot['created_at']);
        $this->assertFalse(isset($this->sot['created_at']));
        $this->sot['created_at'] = $v;
        $this->assertEquals($v, $this->sot['created_at']);
        $this->assertTrue(isset($this->sot['created_at']));
    }
}
