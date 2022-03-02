<?php
/**
 * CustomActivityTest
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
use NecLimDul\MarketoRest\Lead\Model\CustomActivity;
use PHPUnit\Framework\TestCase;

/**
 * CustomActivityTest Class Doc Comment
 *
 * @category    Class
 * @description CustomActivity
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\CustomActivity
 */
class CustomActivityTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\CustomActivity
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
        'activity_date' => 'string',
        'activity_type_id' => 'int',
        'api_name' => 'string',
        'attributes' => '\NecLimDul\MarketoRest\Lead\Model\Attribute[]',
        'errors' => '\NecLimDul\MarketoRest\Lead\Model\Error[]',
        'id' => 'int',
        'lead_id' => 'int',
        'marketo_guid' => 'string',
        'primary_attribute_value' => 'string',
        'status' => 'string',
    ];
    /**
     * @var scalar[][]
     */
    private $allowedValues = [
        'status' => [
            'CREATED' => 'created',
            'UPDATED' => 'updated',
            'DELETED' => 'deleted',
            'SKIPPED' => 'skipped',
            'ADDED' => 'added',
            'REMOVED' => 'removed',
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
        $this->sot = new CustomActivity($data);
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
     * Test "CustomActivity"
     *
     * @covers ::__construct
     */
    public function testCustomActivity(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\CustomActivity::class, $this->sot);
    }

    /**
     * Test attribute "activity_date"
     *
     * @covers ::__construct
     * @covers ::getActivityDate
     * @covers ::setActivityDate
     */
    public function testPropertyActivityDate(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['activity_date'],
            $this->allowedValues['activity_date'] ?? null
        );
        $this->sot->setActivityDate($v);
        $this->assertEquals($v, $this->sot->getActivityDate());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "activity_type_id"
     *
     * @covers ::__construct
     * @covers ::getActivityTypeId
     * @covers ::setActivityTypeId
     */
    public function testPropertyActivityTypeId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['activity_type_id'],
            $this->allowedValues['activity_type_id'] ?? null
        );
        $this->sot->setActivityTypeId($v);
        $this->assertEquals($v, $this->sot->getActivityTypeId());
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
     * Test attribute "attributes"
     *
     * @covers ::__construct
     * @covers ::getAttributes
     * @covers ::setAttributes
     */
    public function testPropertyAttributes(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['attributes'],
            $this->allowedValues['attributes'] ?? null
        );
        $this->sot->setAttributes($v);
        $this->assertEquals($v, $this->sot->getAttributes());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "errors"
     *
     * @covers ::__construct
     * @covers ::getErrors
     * @covers ::setErrors
     */
    public function testPropertyErrors(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['errors'],
            $this->allowedValues['errors'] ?? null
        );
        $this->sot->setErrors($v);
        $this->assertEquals($v, $this->sot->getErrors());
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
     * Test attribute "lead_id"
     *
     * @covers ::__construct
     * @covers ::getLeadId
     * @covers ::setLeadId
     */
    public function testPropertyLeadId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['lead_id'],
            $this->allowedValues['lead_id'] ?? null
        );
        $this->sot->setLeadId($v);
        $this->assertEquals($v, $this->sot->getLeadId());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "marketo_guid"
     *
     * @covers ::__construct
     * @covers ::getMarketoGuid
     * @covers ::setMarketoGuid
     */
    public function testPropertyMarketoGuid(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['marketo_guid'],
            $this->allowedValues['marketo_guid'] ?? null
        );
        $this->sot->setMarketoGuid($v);
        $this->assertEquals($v, $this->sot->getMarketoGuid());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "primary_attribute_value"
     *
     * @covers ::__construct
     * @covers ::getPrimaryAttributeValue
     * @covers ::setPrimaryAttributeValue
     */
    public function testPropertyPrimaryAttributeValue(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['primary_attribute_value'],
            $this->allowedValues['primary_attribute_value'] ?? null
        );
        $this->sot->setPrimaryAttributeValue($v);
        $this->assertEquals($v, $this->sot->getPrimaryAttributeValue());
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
}
