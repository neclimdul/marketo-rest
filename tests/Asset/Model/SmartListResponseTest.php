<?php
/**
 * SmartListResponseTest
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
use NecLimDul\MarketoRest\Asset\Model\SmartListResponse;
use PHPUnit\Framework\TestCase;

/**
 * SmartListResponseTest Class Doc Comment
 *
 * @category    Class
 * @description SmartListResponse
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\SmartListResponse
 */
class SmartListResponseTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\SmartListResponse
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'url' => 'string',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'workspace' => 'string',
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
        $this->sot = new SmartListResponse($data);
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
     * Test "SmartListResponse"
     *
     * @covers ::__construct
     */
    public function testSmartListResponse(): void
    {
        $this->assertInstanceOf(SmartListResponse::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, SmartListResponse::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals('int64', $formats['id']);
        $this->assertEquals(null, $formats['name']);
        $this->assertEquals(null, $formats['description']);
        $this->assertEquals('date-time', $formats['created_at']);
        $this->assertEquals('date-time', $formats['updated_at']);
        $this->assertEquals(null, $formats['url']);
        $this->assertEquals(null, $formats['folder']);
        $this->assertEquals(null, $formats['workspace']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('id', $formats['id']);
        $this->assertEquals('name', $formats['name']);
        $this->assertEquals('description', $formats['description']);
        $this->assertEquals('createdAt', $formats['created_at']);
        $this->assertEquals('updatedAt', $formats['updated_at']);
        $this->assertEquals('url', $formats['url']);
        $this->assertEquals('folder', $formats['folder']);
        $this->assertEquals('workspace', $formats['workspace']);
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
        $this->assertEquals('SmartListResponse', $this->sot->getModelName());
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
     * Test attribute "url"
     *
     * @covers ::__construct
     * @covers ::getUrl
     * @covers ::setUrl
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyUrl(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['url'],
            $this->allowedValues['url'] ?? null
        );
        $this->sot->setUrl($v);
        $this->assertEquals($v, $this->sot->getUrl());

        $this->assertEquals($v, $this->sot['url']);
        $v = $this->getFakeValue(
            $this->types['url'],
            $this->allowedValues['url'] ?? null
        );
        $this->sot['url'] = $v;
        $this->assertEquals($v, $this->sot['url']);
        $this->assertTrue(isset($this->sot['url']));
        unset($this->sot['url']);
        $this->assertFalse(isset($this->sot['url']));
        $this->sot['url'] = $v;
        $this->assertEquals($v, $this->sot['url']);
        $this->assertTrue(isset($this->sot['url']));
    }

    /**
     * Test attribute "folder"
     *
     * @covers ::__construct
     * @covers ::getFolder
     * @covers ::setFolder
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyFolder(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['folder'],
            $this->allowedValues['folder'] ?? null
        );
        $this->sot->setFolder($v);
        $this->assertEquals($v, $this->sot->getFolder());

        $this->assertEquals($v, $this->sot['folder']);
        $v = $this->getFakeValue(
            $this->types['folder'],
            $this->allowedValues['folder'] ?? null
        );
        $this->sot['folder'] = $v;
        $this->assertEquals($v, $this->sot['folder']);
        $this->assertTrue(isset($this->sot['folder']));
        unset($this->sot['folder']);
        $this->assertFalse(isset($this->sot['folder']));
        $this->sot['folder'] = $v;
        $this->assertEquals($v, $this->sot['folder']);
        $this->assertTrue(isset($this->sot['folder']));
    }

    /**
     * Test attribute "workspace"
     *
     * @covers ::__construct
     * @covers ::getWorkspace
     * @covers ::setWorkspace
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyWorkspace(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['workspace'],
            $this->allowedValues['workspace'] ?? null
        );
        $this->sot->setWorkspace($v);
        $this->assertEquals($v, $this->sot->getWorkspace());

        $this->assertEquals($v, $this->sot['workspace']);
        $v = $this->getFakeValue(
            $this->types['workspace'],
            $this->allowedValues['workspace'] ?? null
        );
        $this->sot['workspace'] = $v;
        $this->assertEquals($v, $this->sot['workspace']);
        $this->assertTrue(isset($this->sot['workspace']));
        unset($this->sot['workspace']);
        $this->assertFalse(isset($this->sot['workspace']));
        $this->sot['workspace'] = $v;
        $this->assertEquals($v, $this->sot['workspace']);
        $this->assertTrue(isset($this->sot['workspace']));
    }
}
