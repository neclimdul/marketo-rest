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
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\FolderResponse
 */
class FolderResponseTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\FolderResponse
     */
    private $sot;

    /**
     * @var \Faker\Generator
     */
    private $faker;

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
        $this->sot = new FolderResponse();
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
            return new $type();
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
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\FolderResponse::class, $this->sot);
    }

    /**
     * Test attribute "access_zone_id"
     *
     * @covers ::__construct
     * @covers ::getAccessZoneId
     * @covers ::setAccessZoneId
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "created_at"
     *
     * @covers ::__construct
     * @covers ::getCreatedAt
     * @covers ::setCreatedAt
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "description"
     *
     * @covers ::__construct
     * @covers ::getDescription
     * @covers ::setDescription
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "folder_id"
     *
     * @covers ::__construct
     * @covers ::getFolderId
     * @covers ::setFolderId
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "folder_type"
     *
     * @covers ::__construct
     * @covers ::getFolderType
     * @covers ::setFolderType
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "id"
     *
     * @covers ::__construct
     * @covers ::getId
     * @covers ::setId
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "is_archive"
     *
     * @covers ::__construct
     * @covers ::getIsArchive
     * @covers ::setIsArchive
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "is_system"
     *
     * @covers ::__construct
     * @covers ::getIsSystem
     * @covers ::setIsSystem
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "name"
     *
     * @covers ::__construct
     * @covers ::getName
     * @covers ::setName
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "parent"
     *
     * @covers ::__construct
     * @covers ::getParent
     * @covers ::setParent
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "path"
     *
     * @covers ::__construct
     * @covers ::getPath
     * @covers ::setPath
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "updated_at"
     *
     * @covers ::__construct
     * @covers ::getUpdatedAt
     * @covers ::setUpdatedAt
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "url"
     *
     * @covers ::__construct
     * @covers ::getUrl
     * @covers ::setUrl
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "workspace"
     *
     * @covers ::__construct
     * @covers ::getWorkspace
     * @covers ::setWorkspace
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
        // $this->markTestIncomplete('Not implemented');
    }
}
