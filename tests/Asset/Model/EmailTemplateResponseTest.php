<?php
/**
 * EmailTemplateResponseTest
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
use NecLimDul\MarketoRest\Asset\Model\EmailTemplateResponse;
use PHPUnit\Framework\TestCase;

/**
 * EmailTemplateResponseTest Class Doc Comment
 *
 * @category    Class
 * @description EmailTemplateResponse
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\EmailTemplateResponse
 */
class EmailTemplateResponseTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\EmailTemplateResponse
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
        'created_at' => '\DateTime',
        'description' => 'string',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'id' => 'int',
        'name' => 'string',
        'status' => 'string',
        'updated_at' => '\DateTime',
        'url' => 'string',
        'version' => 'int',
        'workspace' => 'string',
    ];
    /**
     * @var scalar[][]
     */
    private $allowedValues = [
        'version' => [
            '1' => 1,
            '2' => 2,
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
        $this->sot = new EmailTemplateResponse($data);
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
     * Test "EmailTemplateResponse"
     *
     * @covers ::__construct
     */
    public function testEmailTemplateResponse(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\EmailTemplateResponse::class, $this->sot);
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
     * Test attribute "folder"
     *
     * @covers ::__construct
     * @covers ::getFolder
     * @covers ::setFolder
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
     * Test attribute "status"
     *
     * @covers ::__construct
     * @covers ::getStatus
     * @covers ::setStatus
     */
    public function testPropertyStatus(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['status'],
            $this->allowedValues['status'] ?? null
        );
        $this->sot->setStatus($v);
        $this->assertEquals($v, $this->sot->getStatus());
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
     * Test attribute "version"
     *
     * @covers ::__construct
     * @covers ::getVersion
     * @covers ::setVersion
     */
    public function testPropertyVersion(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['version'],
            $this->allowedValues['version'] ?? null
        );
        $this->sot->setVersion($v);
        $this->assertEquals($v, $this->sot->getVersion());
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
