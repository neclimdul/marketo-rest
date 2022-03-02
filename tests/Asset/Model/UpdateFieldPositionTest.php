<?php
/**
 * UpdateFieldPositionTest
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
use NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition;
use PHPUnit\Framework\TestCase;

/**
 * UpdateFieldPositionTest Class Doc Comment
 *
 * @category    Class
 * @description UpdateFieldPosition
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition
 */
class UpdateFieldPositionTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'column_number' => 'int',
        'field_list' => '\NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition[]',
        'field_name' => 'string',
        'row_number' => 'int',
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
        $this->sot = new UpdateFieldPosition($data);
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
     * Test "UpdateFieldPosition"
     *
     * @covers ::__construct
     */
    public function testUpdateFieldPosition(): void
    {
        $this->assertInstanceOf(UpdateFieldPosition::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, UpdateFieldPosition::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals('int32', $formats['column_number']);
        $this->assertEquals(null, $formats['field_list']);
        $this->assertEquals(null, $formats['field_name']);
        $this->assertEquals('int32', $formats['row_number']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('columnNumber', $formats['column_number']);
        $this->assertEquals('fieldList', $formats['field_list']);
        $this->assertEquals('fieldName', $formats['field_name']);
        $this->assertEquals('rowNumber', $formats['row_number']);
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
        $this->assertEquals('UpdateFieldPosition', $this->sot->getModelName());
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
     * Test attribute "column_number"
     *
     * @covers ::__construct
     * @covers ::getColumnNumber
     * @covers ::setColumnNumber
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyColumnNumber(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['column_number'],
            $this->allowedValues['column_number'] ?? null
        );
        $this->sot->setColumnNumber($v);
        $this->assertEquals($v, $this->sot->getColumnNumber());

        $this->assertEquals($v, $this->sot['column_number']);
        $v = $this->getFakeValue(
            $this->types['column_number'],
            $this->allowedValues['column_number'] ?? null
        );
        $this->sot['column_number'] = $v;
        $this->assertEquals($v, $this->sot['column_number']);
        $this->assertTrue(isset($this->sot['column_number']));
        unset($this->sot['column_number']);
        $this->assertFalse(isset($this->sot['column_number']));
        $this->sot['column_number'] = $v;
        $this->assertEquals($v, $this->sot['column_number']);
        $this->assertTrue(isset($this->sot['column_number']));
    }

    /**
     * Test attribute "field_list"
     *
     * @covers ::__construct
     * @covers ::getFieldList
     * @covers ::setFieldList
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyFieldList(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['field_list'],
            $this->allowedValues['field_list'] ?? null
        );
        $this->sot->setFieldList($v);
        $this->assertEquals($v, $this->sot->getFieldList());
        $this->sot->setFieldList(null);
        $this->assertNull($this->sot->getFieldList());
        $this->sot->setFieldList($v);

        $this->assertEquals($v, $this->sot['field_list']);
        $v = $this->getFakeValue(
            $this->types['field_list'],
            $this->allowedValues['field_list'] ?? null
        );
        $this->sot['field_list'] = $v;
        $this->assertEquals($v, $this->sot['field_list']);
        $this->assertTrue(isset($this->sot['field_list']));
        unset($this->sot['field_list']);
        $this->assertFalse(isset($this->sot['field_list']));
        $this->sot['field_list'] = $v;
        $this->assertEquals($v, $this->sot['field_list']);
        $this->assertTrue(isset($this->sot['field_list']));
    }

    /**
     * Test attribute "field_name"
     *
     * @covers ::__construct
     * @covers ::getFieldName
     * @covers ::setFieldName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyFieldName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['field_name'],
            $this->allowedValues['field_name'] ?? null
        );
        $this->sot->setFieldName($v);
        $this->assertEquals($v, $this->sot->getFieldName());

        $this->assertEquals($v, $this->sot['field_name']);
        $v = $this->getFakeValue(
            $this->types['field_name'],
            $this->allowedValues['field_name'] ?? null
        );
        $this->sot['field_name'] = $v;
        $this->assertEquals($v, $this->sot['field_name']);
        $this->assertTrue(isset($this->sot['field_name']));
        unset($this->sot['field_name']);
        $this->assertFalse(isset($this->sot['field_name']));
        $this->sot['field_name'] = $v;
        $this->assertEquals($v, $this->sot['field_name']);
        $this->assertTrue(isset($this->sot['field_name']));
    }

    /**
     * Test attribute "row_number"
     *
     * @covers ::__construct
     * @covers ::getRowNumber
     * @covers ::setRowNumber
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyRowNumber(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['row_number'],
            $this->allowedValues['row_number'] ?? null
        );
        $this->sot->setRowNumber($v);
        $this->assertEquals($v, $this->sot->getRowNumber());

        $this->assertEquals($v, $this->sot['row_number']);
        $v = $this->getFakeValue(
            $this->types['row_number'],
            $this->allowedValues['row_number'] ?? null
        );
        $this->sot['row_number'] = $v;
        $this->assertEquals($v, $this->sot['row_number']);
        $this->assertTrue(isset($this->sot['row_number']));
        unset($this->sot['row_number']);
        $this->assertFalse(isset($this->sot['row_number']));
        $this->sot['row_number'] = $v;
        $this->assertEquals($v, $this->sot['row_number']);
        $this->assertTrue(isset($this->sot['row_number']));
    }
}
