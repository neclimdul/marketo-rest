<?php
/**
 * AddCustomObjectTypeFieldTest
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
use NecLimDul\MarketoRest\Lead\Model\AddCustomObjectTypeField;
use PHPUnit\Framework\TestCase;

/**
 * AddCustomObjectTypeFieldTest Class Doc Comment
 *
 * @category    Class
 * @description AddCustomObjectTypeField
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Lead\Model\AddCustomObjectTypeField
 */
class AddCustomObjectTypeFieldTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\AddCustomObjectTypeField
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'name' => 'string',
        'display_name' => 'string',
        'data_type' => 'string',
        'description' => 'string',
        'is_dedupe_field' => 'bool',
        'related_to' => '\NecLimDul\MarketoRest\Lead\Model\CustomObjectTypeFieldRelatedTo',
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
        $this->sot = new AddCustomObjectTypeField($data);
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
     * Test "AddCustomObjectTypeField"
     *
     * @covers ::__construct
     */
    public function testAddCustomObjectTypeField(): void
    {
        $this->assertInstanceOf(AddCustomObjectTypeField::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, AddCustomObjectTypeField::swaggerTypes());
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
        $this->assertEquals(null, $formats['description']);
        $this->assertEquals(null, $formats['is_dedupe_field']);
        $this->assertEquals(null, $formats['related_to']);
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
        $this->assertEquals('description', $formats['description']);
        $this->assertEquals('isDedupeField', $formats['is_dedupe_field']);
        $this->assertEquals('relatedTo', $formats['related_to']);
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
        $this->assertEquals('AddCustomObjectTypeField', $this->sot->getModelName());
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
     * Test attribute "description"
     *
     * @covers ::__construct
     * @covers ::getDescription
     * @covers ::setDescription
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyDescription(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['description'],
            $this->allowedValues['description'] ?? null
        );
        $this->sot->setDescription($v);
        $this->assertEquals($v, $this->sot->getDescription());
        $this->sot->setDescription(null);
        $this->assertNull($this->sot->getDescription());
        $this->sot->setDescription($v);

        $this->assertEquals($v, $this->sot['description']);
        $v = $this->getFakeValue(
            $this->types['description'],
            $this->allowedValues['description'] ?? null
        );
        $this->sot['description'] = $v;
        $this->assertEquals($v, $this->sot['description']);
        $this->assertTrue(isset($this->sot['description']));
        unset($this->sot['description']);
        $this->assertFalse(isset($this->sot['description']));
        $this->sot['description'] = $v;
        $this->assertEquals($v, $this->sot['description']);
        $this->assertTrue(isset($this->sot['description']));
    }

    /**
     * Test attribute "is_dedupe_field"
     *
     * @covers ::__construct
     * @covers ::getIsDedupeField
     * @covers ::setIsDedupeField
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyIsDedupeField(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_dedupe_field'],
            $this->allowedValues['is_dedupe_field'] ?? null
        );
        $this->sot->setIsDedupeField($v);
        $this->assertEquals($v, $this->sot->getIsDedupeField());
        $this->sot->setIsDedupeField(null);
        $this->assertNull($this->sot->getIsDedupeField());
        $this->sot->setIsDedupeField($v);

        $this->assertEquals($v, $this->sot['is_dedupe_field']);
        $v = $this->getFakeValue(
            $this->types['is_dedupe_field'],
            $this->allowedValues['is_dedupe_field'] ?? null
        );
        $this->sot['is_dedupe_field'] = $v;
        $this->assertEquals($v, $this->sot['is_dedupe_field']);
        $this->assertTrue(isset($this->sot['is_dedupe_field']));
        unset($this->sot['is_dedupe_field']);
        $this->assertFalse(isset($this->sot['is_dedupe_field']));
        $this->sot['is_dedupe_field'] = $v;
        $this->assertEquals($v, $this->sot['is_dedupe_field']);
        $this->assertTrue(isset($this->sot['is_dedupe_field']));
    }

    /**
     * Test attribute "related_to"
     *
     * @covers ::__construct
     * @covers ::getRelatedTo
     * @covers ::setRelatedTo
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyRelatedTo(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['related_to'],
            $this->allowedValues['related_to'] ?? null
        );
        $this->sot->setRelatedTo($v);
        $this->assertEquals($v, $this->sot->getRelatedTo());
        $this->sot->setRelatedTo(null);
        $this->assertNull($this->sot->getRelatedTo());
        $this->sot->setRelatedTo($v);

        $this->assertEquals($v, $this->sot['related_to']);
        $v = $this->getFakeValue(
            $this->types['related_to'],
            $this->allowedValues['related_to'] ?? null
        );
        $this->sot['related_to'] = $v;
        $this->assertEquals($v, $this->sot['related_to']);
        $this->assertTrue(isset($this->sot['related_to']));
        unset($this->sot['related_to']);
        $this->assertFalse(isset($this->sot['related_to']));
        $this->sot['related_to'] = $v;
        $this->assertEquals($v, $this->sot['related_to']);
        $this->assertTrue(isset($this->sot['related_to']));
    }
}
