<?php
/**
 * UpdateFolderRequestTest
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
use NecLimDul\MarketoRest\Asset\Model\UpdateFolderRequest;
use PHPUnit\Framework\TestCase;

/**
 * UpdateFolderRequestTest Class Doc Comment
 *
 * @category    Class
 * @description UpdateFolderRequest
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\UpdateFolderRequest
 */
class UpdateFolderRequestTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\UpdateFolderRequest
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'description' => 'string',
        'is_archive' => 'bool',
        'name' => 'string',
        'type' => 'string',
];

    /**
     * @var \Faker\Generator
     */
    private $faker;

    /**
     * @var scalar[][]
     */
    private $allowedValues = [
        'type' => [
            'FOLDER' => 'Folder',
            'PROGRAM' => 'Program',
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
        $this->sot = new UpdateFolderRequest($data);
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
     * Test "UpdateFolderRequest"
     *
     * @covers ::__construct
     */
    public function testUpdateFolderRequest(): void
    {
        $this->assertInstanceOf(UpdateFolderRequest::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, UpdateFolderRequest::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['description']);
        $this->assertEquals(null, $formats['is_archive']);
        $this->assertEquals(null, $formats['name']);
        $this->assertEquals(null, $formats['type']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('description', $formats['description']);
        $this->assertEquals('isArchive', $formats['is_archive']);
        $this->assertEquals('name', $formats['name']);
        $this->assertEquals('type', $formats['type']);
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
        $this->assertEquals('UpdateFolderRequest', $this->sot->getModelName());
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
     * Test attribute "is_archive"
     *
     * @covers ::__construct
     * @covers ::getIsArchive
     * @covers ::setIsArchive
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyIsArchive(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_archive'],
            $this->allowedValues['is_archive'] ?? null
        );
        $this->sot->setIsArchive($v);
        $this->assertEquals($v, $this->sot->getIsArchive());
        $this->sot->setIsArchive(null);
        $this->assertNull($this->sot->getIsArchive());
        $this->sot->setIsArchive($v);

        $this->assertEquals($v, $this->sot['is_archive']);
        $v = $this->getFakeValue(
            $this->types['is_archive'],
            $this->allowedValues['is_archive'] ?? null
        );
        $this->sot['is_archive'] = $v;
        $this->assertEquals($v, $this->sot['is_archive']);
        $this->assertTrue(isset($this->sot['is_archive']));
        unset($this->sot['is_archive']);
        $this->assertFalse(isset($this->sot['is_archive']));
        $this->sot['is_archive'] = $v;
        $this->assertEquals($v, $this->sot['is_archive']);
        $this->assertTrue(isset($this->sot['is_archive']));
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
        $this->sot->setName(null);
        $this->assertNull($this->sot->getName());
        $this->sot->setName($v);

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
     * Test attribute "type"
     *
     * @covers ::__construct
     * @covers ::getType
     * @covers ::setType
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyType(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['type'],
            $this->allowedValues['type'] ?? null
        );
        $this->sot->setType($v);
        $this->assertEquals($v, $this->sot->getType());

        $this->assertEquals($v, $this->sot['type']);
        $v = $this->getFakeValue(
            $this->types['type'],
            $this->allowedValues['type'] ?? null
        );
        $this->sot['type'] = $v;
        $this->assertEquals($v, $this->sot['type']);
        $this->assertTrue(isset($this->sot['type']));
        unset($this->sot['type']);
        $this->assertFalse(isset($this->sot['type']));
        $this->sot['type'] = $v;
        $this->assertEquals($v, $this->sot['type']);
        $this->assertTrue(isset($this->sot['type']));
    }
}
