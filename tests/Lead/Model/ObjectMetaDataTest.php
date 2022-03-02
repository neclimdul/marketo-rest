<?php
/**
 * ObjectMetaDataTest
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
use NecLimDul\MarketoRest\Lead\Model\ObjectMetaData;
use PHPUnit\Framework\TestCase;

/**
 * ObjectMetaDataTest Class Doc Comment
 *
 * @category    Class
 * @description ObjectMetaData
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\ObjectMetaData
 */
class ObjectMetaDataTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\ObjectMetaData
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
        'dedupe_fields' => 'string[]',
        'description' => 'string',
        'display_name' => 'string',
        'plural_name' => 'string',
        'fields' => '\NecLimDul\MarketoRest\Lead\Model\ObjectField[]',
        'id_field' => 'string',
        'api_name' => 'string',
        'relationships' => '\NecLimDul\MarketoRest\Lead\Model\ObjectRelation[]',
        'searchable_fields' => 'string[][]',
        'updated_at' => '\DateTime',
        'state' => 'string',
        'version' => 'string',
    ];
    /**
     * @var scalar[][]
     */
    private $allowedValues = [
        'state' => [
            'DRAFT' => 'draft',
            'APPROVED' => 'approved',
            'APPROVED_WITH_DRAFT' => 'approvedWithDraft',
        ],
        'version' => [
            'DRAFT' => 'draft',
            'APPROVED' => 'approved',
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
        $this->sot = new ObjectMetaData($data);
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
     * Test "ObjectMetaData"
     *
     * @covers ::__construct
     */
    public function testObjectMetaData(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\ObjectMetaData::class, $this->sot);
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
     * Test attribute "dedupe_fields"
     *
     * @covers ::__construct
     * @covers ::getDedupeFields
     * @covers ::setDedupeFields
     */
    public function testPropertyDedupeFields(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['dedupe_fields'],
            $this->allowedValues['dedupe_fields'] ?? null
        );
        $this->sot->setDedupeFields($v);
        $this->assertEquals($v, $this->sot->getDedupeFields());
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
     * Test attribute "display_name"
     *
     * @covers ::__construct
     * @covers ::getDisplayName
     * @covers ::setDisplayName
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "plural_name"
     *
     * @covers ::__construct
     * @covers ::getPluralName
     * @covers ::setPluralName
     */
    public function testPropertyPluralName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['plural_name'],
            $this->allowedValues['plural_name'] ?? null
        );
        $this->sot->setPluralName($v);
        $this->assertEquals($v, $this->sot->getPluralName());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "fields"
     *
     * @covers ::__construct
     * @covers ::getFields
     * @covers ::setFields
     */
    public function testPropertyFields(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['fields'],
            $this->allowedValues['fields'] ?? null
        );
        $this->sot->setFields($v);
        $this->assertEquals($v, $this->sot->getFields());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "id_field"
     *
     * @covers ::__construct
     * @covers ::getIdField
     * @covers ::setIdField
     */
    public function testPropertyIdField(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['id_field'],
            $this->allowedValues['id_field'] ?? null
        );
        $this->sot->setIdField($v);
        $this->assertEquals($v, $this->sot->getIdField());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "api_name"
     *
     * @covers ::__construct
     * @covers ::getApiName
     * @covers ::setApiName
     */
    public function testPropertyApiName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['api_name'],
            $this->allowedValues['api_name'] ?? null
        );
        $this->sot->setApiName($v);
        $this->assertEquals($v, $this->sot->getApiName());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "relationships"
     *
     * @covers ::__construct
     * @covers ::getRelationships
     * @covers ::setRelationships
     */
    public function testPropertyRelationships(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['relationships'],
            $this->allowedValues['relationships'] ?? null
        );
        $this->sot->setRelationships($v);
        $this->assertEquals($v, $this->sot->getRelationships());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "searchable_fields"
     *
     * @covers ::__construct
     * @covers ::getSearchableFields
     * @covers ::setSearchableFields
     */
    public function testPropertySearchableFields(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['searchable_fields'],
            $this->allowedValues['searchable_fields'] ?? null
        );
        $this->sot->setSearchableFields($v);
        $this->assertEquals($v, $this->sot->getSearchableFields());
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
     * Test attribute "state"
     *
     * @covers ::__construct
     * @covers ::getState
     * @covers ::setState
     */
    public function testPropertyState(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['state'],
            $this->allowedValues['state'] ?? null
        );
        $this->sot->setState($v);
        $this->assertEquals($v, $this->sot->getState());
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
}
