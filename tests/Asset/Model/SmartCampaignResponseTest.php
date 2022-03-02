<?php
/**
 * SmartCampaignResponseTest
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
use NecLimDul\MarketoRest\Asset\Model\SmartCampaignResponse;
use PHPUnit\Framework\TestCase;

/**
 * SmartCampaignResponseTest Class Doc Comment
 *
 * @category    Class
 * @description SmartCampaignResponse
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\SmartCampaignResponse
 */
class SmartCampaignResponseTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\SmartCampaignResponse
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'type' => 'string',
        'is_system' => 'bool',
        'is_active' => 'bool',
        'is_requestable' => 'bool',
        'recurrence' => '\NecLimDul\MarketoRest\Asset\Model\Recurrence',
        'qualification_rule_type' => 'string',
        'qualification_rule_interval' => 'int',
        'qualification_rule_unit' => 'string',
        'max_members' => 'int',
        'is_communication_limit_enabled' => 'bool',
        'smart_list_id' => 'int',
        'flow_id' => 'int',
        'parent_program_id' => 'int',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'workspace' => 'string',
        'computed_url' => 'string',
        'status' => 'string',
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
            'BATCH' => 'batch',
            '_DEFAULT' => 'default',
            'TRIGGER' => 'trigger',
        ],
        'qualification_rule_type' => [
            'ONCE' => 'once',
            'ANY' => 'any',
            'INTERVAL' => 'interval',
        ],
        'qualification_rule_unit' => [
            'HOUR' => 'hour',
            'DAY' => 'day',
            'WEEK' => 'week',
            'MONTH' => 'month',
        ],
        'status' => [
            'INACTIVE' => 'Inactive',
            'SINGLE_RUN' => 'Single Run',
            'INVALID' => 'Invalid',
            'RECURRING_RUN' => 'Recurring Run',
            'ACTIVE' => 'Active',
            'REQUESTED' => 'Requested',
            'NEVER_RUN' => 'Never Run',
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
        $this->sot = new SmartCampaignResponse($data);
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
     * Test "SmartCampaignResponse"
     *
     * @covers ::__construct
     */
    public function testSmartCampaignResponse(): void
    {
        $this->assertInstanceOf(SmartCampaignResponse::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, SmartCampaignResponse::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals('int32', $formats['id']);
        $this->assertEquals(null, $formats['name']);
        $this->assertEquals(null, $formats['description']);
        $this->assertEquals(null, $formats['type']);
        $this->assertEquals(null, $formats['is_system']);
        $this->assertEquals(null, $formats['is_active']);
        $this->assertEquals(null, $formats['is_requestable']);
        $this->assertEquals(null, $formats['recurrence']);
        $this->assertEquals(null, $formats['qualification_rule_type']);
        $this->assertEquals(null, $formats['qualification_rule_interval']);
        $this->assertEquals(null, $formats['qualification_rule_unit']);
        $this->assertEquals('int32', $formats['max_members']);
        $this->assertEquals(null, $formats['is_communication_limit_enabled']);
        $this->assertEquals('int32', $formats['smart_list_id']);
        $this->assertEquals('int32', $formats['flow_id']);
        $this->assertEquals('int32', $formats['parent_program_id']);
        $this->assertEquals(null, $formats['folder']);
        $this->assertEquals('date-time', $formats['created_at']);
        $this->assertEquals('date-time', $formats['updated_at']);
        $this->assertEquals(null, $formats['workspace']);
        $this->assertEquals(null, $formats['computed_url']);
        $this->assertEquals(null, $formats['status']);
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
        $this->assertEquals('type', $formats['type']);
        $this->assertEquals('isSystem', $formats['is_system']);
        $this->assertEquals('isActive', $formats['is_active']);
        $this->assertEquals('isRequestable', $formats['is_requestable']);
        $this->assertEquals('recurrence', $formats['recurrence']);
        $this->assertEquals('qualificationRuleType', $formats['qualification_rule_type']);
        $this->assertEquals('qualificationRuleInterval', $formats['qualification_rule_interval']);
        $this->assertEquals('qualificationRuleUnit', $formats['qualification_rule_unit']);
        $this->assertEquals('maxMembers', $formats['max_members']);
        $this->assertEquals('isCommunicationLimitEnabled', $formats['is_communication_limit_enabled']);
        $this->assertEquals('smartListId', $formats['smart_list_id']);
        $this->assertEquals('flowId', $formats['flow_id']);
        $this->assertEquals('parentProgramId', $formats['parent_program_id']);
        $this->assertEquals('folder', $formats['folder']);
        $this->assertEquals('createdAt', $formats['created_at']);
        $this->assertEquals('updatedAt', $formats['updated_at']);
        $this->assertEquals('workspace', $formats['workspace']);
        $this->assertEquals('computedUrl', $formats['computed_url']);
        $this->assertEquals('status', $formats['status']);
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
        $this->assertEquals('SmartCampaignResponse', $this->sot->getModelName());
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
     * Test attribute "is_active"
     *
     * @covers ::__construct
     * @covers ::getIsActive
     * @covers ::setIsActive
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyIsActive(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_active'],
            $this->allowedValues['is_active'] ?? null
        );
        $this->sot->setIsActive($v);
        $this->assertEquals($v, $this->sot->getIsActive());

        $this->assertEquals($v, $this->sot['is_active']);
        $v = $this->getFakeValue(
            $this->types['is_active'],
            $this->allowedValues['is_active'] ?? null
        );
        $this->sot['is_active'] = $v;
        $this->assertEquals($v, $this->sot['is_active']);
        $this->assertTrue(isset($this->sot['is_active']));
        unset($this->sot['is_active']);
        $this->assertFalse(isset($this->sot['is_active']));
        $this->sot['is_active'] = $v;
        $this->assertEquals($v, $this->sot['is_active']);
        $this->assertTrue(isset($this->sot['is_active']));
    }

    /**
     * Test attribute "is_requestable"
     *
     * @covers ::__construct
     * @covers ::getIsRequestable
     * @covers ::setIsRequestable
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyIsRequestable(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_requestable'],
            $this->allowedValues['is_requestable'] ?? null
        );
        $this->sot->setIsRequestable($v);
        $this->assertEquals($v, $this->sot->getIsRequestable());

        $this->assertEquals($v, $this->sot['is_requestable']);
        $v = $this->getFakeValue(
            $this->types['is_requestable'],
            $this->allowedValues['is_requestable'] ?? null
        );
        $this->sot['is_requestable'] = $v;
        $this->assertEquals($v, $this->sot['is_requestable']);
        $this->assertTrue(isset($this->sot['is_requestable']));
        unset($this->sot['is_requestable']);
        $this->assertFalse(isset($this->sot['is_requestable']));
        $this->sot['is_requestable'] = $v;
        $this->assertEquals($v, $this->sot['is_requestable']);
        $this->assertTrue(isset($this->sot['is_requestable']));
    }

    /**
     * Test attribute "recurrence"
     *
     * @covers ::__construct
     * @covers ::getRecurrence
     * @covers ::setRecurrence
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyRecurrence(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['recurrence'],
            $this->allowedValues['recurrence'] ?? null
        );
        $this->sot->setRecurrence($v);
        $this->assertEquals($v, $this->sot->getRecurrence());

        $this->assertEquals($v, $this->sot['recurrence']);
        $v = $this->getFakeValue(
            $this->types['recurrence'],
            $this->allowedValues['recurrence'] ?? null
        );
        $this->sot['recurrence'] = $v;
        $this->assertEquals($v, $this->sot['recurrence']);
        $this->assertTrue(isset($this->sot['recurrence']));
        unset($this->sot['recurrence']);
        $this->assertFalse(isset($this->sot['recurrence']));
        $this->sot['recurrence'] = $v;
        $this->assertEquals($v, $this->sot['recurrence']);
        $this->assertTrue(isset($this->sot['recurrence']));
    }

    /**
     * Test attribute "qualification_rule_type"
     *
     * @covers ::__construct
     * @covers ::getQualificationRuleType
     * @covers ::setQualificationRuleType
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyQualificationRuleType(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['qualification_rule_type'],
            $this->allowedValues['qualification_rule_type'] ?? null
        );
        $this->sot->setQualificationRuleType($v);
        $this->assertEquals($v, $this->sot->getQualificationRuleType());

        $this->assertEquals($v, $this->sot['qualification_rule_type']);
        $v = $this->getFakeValue(
            $this->types['qualification_rule_type'],
            $this->allowedValues['qualification_rule_type'] ?? null
        );
        $this->sot['qualification_rule_type'] = $v;
        $this->assertEquals($v, $this->sot['qualification_rule_type']);
        $this->assertTrue(isset($this->sot['qualification_rule_type']));
        unset($this->sot['qualification_rule_type']);
        $this->assertFalse(isset($this->sot['qualification_rule_type']));
        $this->sot['qualification_rule_type'] = $v;
        $this->assertEquals($v, $this->sot['qualification_rule_type']);
        $this->assertTrue(isset($this->sot['qualification_rule_type']));
    }

    /**
     * Test attribute "qualification_rule_interval"
     *
     * @covers ::__construct
     * @covers ::getQualificationRuleInterval
     * @covers ::setQualificationRuleInterval
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyQualificationRuleInterval(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['qualification_rule_interval'],
            $this->allowedValues['qualification_rule_interval'] ?? null
        );
        $this->sot->setQualificationRuleInterval($v);
        $this->assertEquals($v, $this->sot->getQualificationRuleInterval());

        $this->assertEquals($v, $this->sot['qualification_rule_interval']);
        $v = $this->getFakeValue(
            $this->types['qualification_rule_interval'],
            $this->allowedValues['qualification_rule_interval'] ?? null
        );
        $this->sot['qualification_rule_interval'] = $v;
        $this->assertEquals($v, $this->sot['qualification_rule_interval']);
        $this->assertTrue(isset($this->sot['qualification_rule_interval']));
        unset($this->sot['qualification_rule_interval']);
        $this->assertFalse(isset($this->sot['qualification_rule_interval']));
        $this->sot['qualification_rule_interval'] = $v;
        $this->assertEquals($v, $this->sot['qualification_rule_interval']);
        $this->assertTrue(isset($this->sot['qualification_rule_interval']));
    }

    /**
     * Test attribute "qualification_rule_unit"
     *
     * @covers ::__construct
     * @covers ::getQualificationRuleUnit
     * @covers ::setQualificationRuleUnit
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyQualificationRuleUnit(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['qualification_rule_unit'],
            $this->allowedValues['qualification_rule_unit'] ?? null
        );
        $this->sot->setQualificationRuleUnit($v);
        $this->assertEquals($v, $this->sot->getQualificationRuleUnit());

        $this->assertEquals($v, $this->sot['qualification_rule_unit']);
        $v = $this->getFakeValue(
            $this->types['qualification_rule_unit'],
            $this->allowedValues['qualification_rule_unit'] ?? null
        );
        $this->sot['qualification_rule_unit'] = $v;
        $this->assertEquals($v, $this->sot['qualification_rule_unit']);
        $this->assertTrue(isset($this->sot['qualification_rule_unit']));
        unset($this->sot['qualification_rule_unit']);
        $this->assertFalse(isset($this->sot['qualification_rule_unit']));
        $this->sot['qualification_rule_unit'] = $v;
        $this->assertEquals($v, $this->sot['qualification_rule_unit']);
        $this->assertTrue(isset($this->sot['qualification_rule_unit']));
    }

    /**
     * Test attribute "max_members"
     *
     * @covers ::__construct
     * @covers ::getMaxMembers
     * @covers ::setMaxMembers
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyMaxMembers(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['max_members'],
            $this->allowedValues['max_members'] ?? null
        );
        $this->sot->setMaxMembers($v);
        $this->assertEquals($v, $this->sot->getMaxMembers());

        $this->assertEquals($v, $this->sot['max_members']);
        $v = $this->getFakeValue(
            $this->types['max_members'],
            $this->allowedValues['max_members'] ?? null
        );
        $this->sot['max_members'] = $v;
        $this->assertEquals($v, $this->sot['max_members']);
        $this->assertTrue(isset($this->sot['max_members']));
        unset($this->sot['max_members']);
        $this->assertFalse(isset($this->sot['max_members']));
        $this->sot['max_members'] = $v;
        $this->assertEquals($v, $this->sot['max_members']);
        $this->assertTrue(isset($this->sot['max_members']));
    }

    /**
     * Test attribute "is_communication_limit_enabled"
     *
     * @covers ::__construct
     * @covers ::getIsCommunicationLimitEnabled
     * @covers ::setIsCommunicationLimitEnabled
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyIsCommunicationLimitEnabled(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_communication_limit_enabled'],
            $this->allowedValues['is_communication_limit_enabled'] ?? null
        );
        $this->sot->setIsCommunicationLimitEnabled($v);
        $this->assertEquals($v, $this->sot->getIsCommunicationLimitEnabled());

        $this->assertEquals($v, $this->sot['is_communication_limit_enabled']);
        $v = $this->getFakeValue(
            $this->types['is_communication_limit_enabled'],
            $this->allowedValues['is_communication_limit_enabled'] ?? null
        );
        $this->sot['is_communication_limit_enabled'] = $v;
        $this->assertEquals($v, $this->sot['is_communication_limit_enabled']);
        $this->assertTrue(isset($this->sot['is_communication_limit_enabled']));
        unset($this->sot['is_communication_limit_enabled']);
        $this->assertFalse(isset($this->sot['is_communication_limit_enabled']));
        $this->sot['is_communication_limit_enabled'] = $v;
        $this->assertEquals($v, $this->sot['is_communication_limit_enabled']);
        $this->assertTrue(isset($this->sot['is_communication_limit_enabled']));
    }

    /**
     * Test attribute "smart_list_id"
     *
     * @covers ::__construct
     * @covers ::getSmartListId
     * @covers ::setSmartListId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertySmartListId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['smart_list_id'],
            $this->allowedValues['smart_list_id'] ?? null
        );
        $this->sot->setSmartListId($v);
        $this->assertEquals($v, $this->sot->getSmartListId());

        $this->assertEquals($v, $this->sot['smart_list_id']);
        $v = $this->getFakeValue(
            $this->types['smart_list_id'],
            $this->allowedValues['smart_list_id'] ?? null
        );
        $this->sot['smart_list_id'] = $v;
        $this->assertEquals($v, $this->sot['smart_list_id']);
        $this->assertTrue(isset($this->sot['smart_list_id']));
        unset($this->sot['smart_list_id']);
        $this->assertFalse(isset($this->sot['smart_list_id']));
        $this->sot['smart_list_id'] = $v;
        $this->assertEquals($v, $this->sot['smart_list_id']);
        $this->assertTrue(isset($this->sot['smart_list_id']));
    }

    /**
     * Test attribute "flow_id"
     *
     * @covers ::__construct
     * @covers ::getFlowId
     * @covers ::setFlowId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyFlowId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['flow_id'],
            $this->allowedValues['flow_id'] ?? null
        );
        $this->sot->setFlowId($v);
        $this->assertEquals($v, $this->sot->getFlowId());

        $this->assertEquals($v, $this->sot['flow_id']);
        $v = $this->getFakeValue(
            $this->types['flow_id'],
            $this->allowedValues['flow_id'] ?? null
        );
        $this->sot['flow_id'] = $v;
        $this->assertEquals($v, $this->sot['flow_id']);
        $this->assertTrue(isset($this->sot['flow_id']));
        unset($this->sot['flow_id']);
        $this->assertFalse(isset($this->sot['flow_id']));
        $this->sot['flow_id'] = $v;
        $this->assertEquals($v, $this->sot['flow_id']);
        $this->assertTrue(isset($this->sot['flow_id']));
    }

    /**
     * Test attribute "parent_program_id"
     *
     * @covers ::__construct
     * @covers ::getParentProgramId
     * @covers ::setParentProgramId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyParentProgramId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['parent_program_id'],
            $this->allowedValues['parent_program_id'] ?? null
        );
        $this->sot->setParentProgramId($v);
        $this->assertEquals($v, $this->sot->getParentProgramId());
        $this->sot->setParentProgramId(null);
        $this->assertNull($this->sot->getParentProgramId());
        $this->sot->setParentProgramId($v);

        $this->assertEquals($v, $this->sot['parent_program_id']);
        $v = $this->getFakeValue(
            $this->types['parent_program_id'],
            $this->allowedValues['parent_program_id'] ?? null
        );
        $this->sot['parent_program_id'] = $v;
        $this->assertEquals($v, $this->sot['parent_program_id']);
        $this->assertTrue(isset($this->sot['parent_program_id']));
        unset($this->sot['parent_program_id']);
        $this->assertFalse(isset($this->sot['parent_program_id']));
        $this->sot['parent_program_id'] = $v;
        $this->assertEquals($v, $this->sot['parent_program_id']);
        $this->assertTrue(isset($this->sot['parent_program_id']));
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

    /**
     * Test attribute "computed_url"
     *
     * @covers ::__construct
     * @covers ::getComputedUrl
     * @covers ::setComputedUrl
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyComputedUrl(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['computed_url'],
            $this->allowedValues['computed_url'] ?? null
        );
        $this->sot->setComputedUrl($v);
        $this->assertEquals($v, $this->sot->getComputedUrl());
        $this->sot->setComputedUrl(null);
        $this->assertNull($this->sot->getComputedUrl());
        $this->sot->setComputedUrl($v);

        $this->assertEquals($v, $this->sot['computed_url']);
        $v = $this->getFakeValue(
            $this->types['computed_url'],
            $this->allowedValues['computed_url'] ?? null
        );
        $this->sot['computed_url'] = $v;
        $this->assertEquals($v, $this->sot['computed_url']);
        $this->assertTrue(isset($this->sot['computed_url']));
        unset($this->sot['computed_url']);
        $this->assertFalse(isset($this->sot['computed_url']));
        $this->sot['computed_url'] = $v;
        $this->assertEquals($v, $this->sot['computed_url']);
        $this->assertTrue(isset($this->sot['computed_url']));
    }

    /**
     * Test attribute "status"
     *
     * @covers ::__construct
     * @covers ::getStatus
     * @covers ::setStatus
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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

        $this->assertEquals($v, $this->sot['status']);
        $v = $this->getFakeValue(
            $this->types['status'],
            $this->allowedValues['status'] ?? null
        );
        $this->sot['status'] = $v;
        $this->assertEquals($v, $this->sot['status']);
        $this->assertTrue(isset($this->sot['status']));
        unset($this->sot['status']);
        $this->assertFalse(isset($this->sot['status']));
        $this->sot['status'] = $v;
        $this->assertEquals($v, $this->sot['status']);
        $this->assertTrue(isset($this->sot['status']));
    }
}
