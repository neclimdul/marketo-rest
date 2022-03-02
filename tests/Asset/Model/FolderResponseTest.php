<?php
/**
 * FolderResponseTest
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
use NecLimDul\MarketoRest\Asset\Model\FolderResponse;
use PHPUnit\Framework\TestCase;

/**
 * FolderResponseTest Class Doc Comment
 *
 * @category    Class
 * @description FolderResponse
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\FolderResponse
 */
class FolderResponseTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\FolderResponse
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'access_zone_id' => 'int',
        'created_at' => '\DateTime',
        'description' => 'string',
        'folder_id' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'folder_type' => 'string',
        'id' => 'int',
        'is_archive' => 'bool',
        'is_system' => 'bool',
        'name' => 'string',
        'parent' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'path' => 'string',
        'updated_at' => '\DateTime',
        'url' => 'string',
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
        'folder_type' => [
            'EMAIL' => 'Email',
            'EMAIL_BATCH_PROGRAM' => 'Email Batch Program',
            'EMAIL_TEMPLATE' => 'Email Template',
            'IMAGE' => 'Image',
            'LANDING_PAGE' => 'Landing Page',
            'LANDING_PAGE_FORM' => 'Landing Page Form',
            'LANDING_PAGE_TEMPLATE' => 'Landing Page Template',
            'MARKETING_EVENT' => 'Marketing Event',
            'MARKETING_FOLDER' => 'Marketing Folder',
            'MARKETING_PROGRAM' => 'Marketing Program',
            'NURTURE_PROGRAM' => 'Nurture Program',
            'REPORT' => 'Report',
            'REVENUE_CYCLE_MODEL' => 'Revenue Cycle Model',
            'ZONE' => 'Zone',
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
        $this->sot = new FolderResponse($data);
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
     * Test "FolderResponse"
     *
     * @covers ::__construct
     */
    public function testFolderResponse(): void
    {
        $this->assertInstanceOf(FolderResponse::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, FolderResponse::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals('int32', $formats['access_zone_id']);
        $this->assertEquals('date-time', $formats['created_at']);
        $this->assertEquals(null, $formats['description']);
        $this->assertEquals(null, $formats['folder_id']);
        $this->assertEquals(null, $formats['folder_type']);
        $this->assertEquals('int32', $formats['id']);
        $this->assertEquals(null, $formats['is_archive']);
        $this->assertEquals(null, $formats['is_system']);
        $this->assertEquals(null, $formats['name']);
        $this->assertEquals(null, $formats['parent']);
        $this->assertEquals(null, $formats['path']);
        $this->assertEquals('date-time', $formats['updated_at']);
        $this->assertEquals(null, $formats['url']);
        $this->assertEquals(null, $formats['workspace']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('accessZoneId', $formats['access_zone_id']);
        $this->assertEquals('createdAt', $formats['created_at']);
        $this->assertEquals('description', $formats['description']);
        $this->assertEquals('folderId', $formats['folder_id']);
        $this->assertEquals('folderType', $formats['folder_type']);
        $this->assertEquals('id', $formats['id']);
        $this->assertEquals('isArchive', $formats['is_archive']);
        $this->assertEquals('isSystem', $formats['is_system']);
        $this->assertEquals('name', $formats['name']);
        $this->assertEquals('parent', $formats['parent']);
        $this->assertEquals('path', $formats['path']);
        $this->assertEquals('updatedAt', $formats['updated_at']);
        $this->assertEquals('url', $formats['url']);
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
        $this->assertEquals('FolderResponse', $this->sot->getModelName());
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
     * Test attribute "access_zone_id"
     *
     * @covers ::__construct
     * @covers ::getAccessZoneId
     * @covers ::setAccessZoneId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyAccessZoneId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['access_zone_id'],
            $this->allowedValues['access_zone_id'] ?? null
        );
        $this->sot->setAccessZoneId($v);
        $this->assertEquals($v, $this->sot->getAccessZoneId());
        $this->sot->setAccessZoneId(null);
        $this->assertNull($this->sot->getAccessZoneId());
        $this->sot->setAccessZoneId($v);

        $this->assertEquals($v, $this->sot['access_zone_id']);
        $v = $this->getFakeValue(
            $this->types['access_zone_id'],
            $this->allowedValues['access_zone_id'] ?? null
        );
        $this->sot['access_zone_id'] = $v;
        $this->assertEquals($v, $this->sot['access_zone_id']);
        $this->assertTrue(isset($this->sot['access_zone_id']));
        unset($this->sot['access_zone_id']);
        $this->assertFalse(isset($this->sot['access_zone_id']));
        $this->sot['access_zone_id'] = $v;
        $this->assertEquals($v, $this->sot['access_zone_id']);
        $this->assertTrue(isset($this->sot['access_zone_id']));
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
     * Test attribute "folder_id"
     *
     * @covers ::__construct
     * @covers ::getFolderId
     * @covers ::setFolderId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyFolderId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['folder_id'],
            $this->allowedValues['folder_id'] ?? null
        );
        $this->sot->setFolderId($v);
        $this->assertEquals($v, $this->sot->getFolderId());

        $this->assertEquals($v, $this->sot['folder_id']);
        $v = $this->getFakeValue(
            $this->types['folder_id'],
            $this->allowedValues['folder_id'] ?? null
        );
        $this->sot['folder_id'] = $v;
        $this->assertEquals($v, $this->sot['folder_id']);
        $this->assertTrue(isset($this->sot['folder_id']));
        unset($this->sot['folder_id']);
        $this->assertFalse(isset($this->sot['folder_id']));
        $this->sot['folder_id'] = $v;
        $this->assertEquals($v, $this->sot['folder_id']);
        $this->assertTrue(isset($this->sot['folder_id']));
    }

    /**
     * Test attribute "folder_type"
     *
     * @covers ::__construct
     * @covers ::getFolderType
     * @covers ::setFolderType
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyFolderType(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['folder_type'],
            $this->allowedValues['folder_type'] ?? null
        );
        $this->sot->setFolderType($v);
        $this->assertEquals($v, $this->sot->getFolderType());

        $this->assertEquals($v, $this->sot['folder_type']);
        $v = $this->getFakeValue(
            $this->types['folder_type'],
            $this->allowedValues['folder_type'] ?? null
        );
        $this->sot['folder_type'] = $v;
        $this->assertEquals($v, $this->sot['folder_type']);
        $this->assertTrue(isset($this->sot['folder_type']));
        unset($this->sot['folder_type']);
        $this->assertFalse(isset($this->sot['folder_type']));
        $this->sot['folder_type'] = $v;
        $this->assertEquals($v, $this->sot['folder_type']);
        $this->assertTrue(isset($this->sot['folder_type']));
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
     * Test attribute "is_system"
     *
     * @covers ::__construct
     * @covers ::getIsSystem
     * @covers ::setIsSystem
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyIsSystem(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_system'],
            $this->allowedValues['is_system'] ?? null
        );
        $this->sot->setIsSystem($v);
        $this->assertEquals($v, $this->sot->getIsSystem());
        $this->sot->setIsSystem(null);
        $this->assertNull($this->sot->getIsSystem());
        $this->sot->setIsSystem($v);

        $this->assertEquals($v, $this->sot['is_system']);
        $v = $this->getFakeValue(
            $this->types['is_system'],
            $this->allowedValues['is_system'] ?? null
        );
        $this->sot['is_system'] = $v;
        $this->assertEquals($v, $this->sot['is_system']);
        $this->assertTrue(isset($this->sot['is_system']));
        unset($this->sot['is_system']);
        $this->assertFalse(isset($this->sot['is_system']));
        $this->sot['is_system'] = $v;
        $this->assertEquals($v, $this->sot['is_system']);
        $this->assertTrue(isset($this->sot['is_system']));
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
     * Test attribute "parent"
     *
     * @covers ::__construct
     * @covers ::getParent
     * @covers ::setParent
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyParent(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['parent'],
            $this->allowedValues['parent'] ?? null
        );
        $this->sot->setParent($v);
        $this->assertEquals($v, $this->sot->getParent());

        $this->assertEquals($v, $this->sot['parent']);
        $v = $this->getFakeValue(
            $this->types['parent'],
            $this->allowedValues['parent'] ?? null
        );
        $this->sot['parent'] = $v;
        $this->assertEquals($v, $this->sot['parent']);
        $this->assertTrue(isset($this->sot['parent']));
        unset($this->sot['parent']);
        $this->assertFalse(isset($this->sot['parent']));
        $this->sot['parent'] = $v;
        $this->assertEquals($v, $this->sot['parent']);
        $this->assertTrue(isset($this->sot['parent']));
    }

    /**
     * Test attribute "path"
     *
     * @covers ::__construct
     * @covers ::getPath
     * @covers ::setPath
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyPath(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['path'],
            $this->allowedValues['path'] ?? null
        );
        $this->sot->setPath($v);
        $this->assertEquals($v, $this->sot->getPath());

        $this->assertEquals($v, $this->sot['path']);
        $v = $this->getFakeValue(
            $this->types['path'],
            $this->allowedValues['path'] ?? null
        );
        $this->sot['path'] = $v;
        $this->assertEquals($v, $this->sot['path']);
        $this->assertTrue(isset($this->sot['path']));
        unset($this->sot['path']);
        $this->assertFalse(isset($this->sot['path']));
        $this->sot['path'] = $v;
        $this->assertEquals($v, $this->sot['path']);
        $this->assertTrue(isset($this->sot['path']));
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
        $this->sot->setWorkspace(null);
        $this->assertNull($this->sot->getWorkspace());
        $this->sot->setWorkspace($v);

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
