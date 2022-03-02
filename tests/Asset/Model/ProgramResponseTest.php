<?php
/**
 * ProgramResponseTest
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
use NecLimDul\MarketoRest\Asset\Model\ProgramResponse;
use PHPUnit\Framework\TestCase;

/**
 * ProgramResponseTest Class Doc Comment
 *
 * @category    Class
 * @description ProgramResponse
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\ProgramResponse
 */
class ProgramResponseTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\ProgramResponse
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'channel' => 'string',
        'costs' => '\NecLimDul\MarketoRest\Asset\Model\Costs[]',
        'created_at' => '\DateTime',
        'description' => 'string',
        'end_date' => '\DateTime',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'id' => 'int',
        'name' => 'string',
        'sfdc_id' => 'string',
        'sfdc_name' => 'string',
        'start_date' => '\DateTime',
        'status' => 'string',
        'tags' => '\NecLimDul\MarketoRest\Asset\Model\Tags[]',
        'type' => 'string',
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
        'status' => [
            'LOCKED' => 'locked',
            'UNLOCKED' => 'unlocked',
            'ON' => 'on',
            'OFF' => 'off',
        ],
        'type' => [
            '_DEFAULT' => 'default',
            'EVENT' => 'event',
            'WEBINAR' => 'webinar',
            'NURTURE' => 'nurture',
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
        $this->sot = new ProgramResponse($data);
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
     * Test "ProgramResponse"
     *
     * @covers ::__construct
     */
    public function testProgramResponse(): void
    {
        $this->assertInstanceOf(ProgramResponse::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, ProgramResponse::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['channel']);
        $this->assertEquals(null, $formats['costs']);
        $this->assertEquals('date-time', $formats['created_at']);
        $this->assertEquals(null, $formats['description']);
        $this->assertEquals('date-time', $formats['end_date']);
        $this->assertEquals(null, $formats['folder']);
        $this->assertEquals('int64', $formats['id']);
        $this->assertEquals(null, $formats['name']);
        $this->assertEquals(null, $formats['sfdc_id']);
        $this->assertEquals(null, $formats['sfdc_name']);
        $this->assertEquals('date-time', $formats['start_date']);
        $this->assertEquals(null, $formats['status']);
        $this->assertEquals(null, $formats['tags']);
        $this->assertEquals(null, $formats['type']);
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
        $this->assertEquals('channel', $formats['channel']);
        $this->assertEquals('costs', $formats['costs']);
        $this->assertEquals('createdAt', $formats['created_at']);
        $this->assertEquals('description', $formats['description']);
        $this->assertEquals('endDate', $formats['end_date']);
        $this->assertEquals('folder', $formats['folder']);
        $this->assertEquals('id', $formats['id']);
        $this->assertEquals('name', $formats['name']);
        $this->assertEquals('sfdcId', $formats['sfdc_id']);
        $this->assertEquals('sfdcName', $formats['sfdc_name']);
        $this->assertEquals('startDate', $formats['start_date']);
        $this->assertEquals('status', $formats['status']);
        $this->assertEquals('tags', $formats['tags']);
        $this->assertEquals('type', $formats['type']);
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
        $this->assertEquals('ProgramResponse', $this->sot->getModelName());
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
     * Test attribute "channel"
     *
     * @covers ::__construct
     * @covers ::getChannel
     * @covers ::setChannel
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyChannel(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['channel'],
            $this->allowedValues['channel'] ?? null
        );
        $this->sot->setChannel($v);
        $this->assertEquals($v, $this->sot->getChannel());

        $this->assertEquals($v, $this->sot['channel']);
        $v = $this->getFakeValue(
            $this->types['channel'],
            $this->allowedValues['channel'] ?? null
        );
        $this->sot['channel'] = $v;
        $this->assertEquals($v, $this->sot['channel']);
        $this->assertTrue(isset($this->sot['channel']));
        unset($this->sot['channel']);
        $this->assertFalse(isset($this->sot['channel']));
        $this->sot['channel'] = $v;
        $this->assertEquals($v, $this->sot['channel']);
        $this->assertTrue(isset($this->sot['channel']));
    }

    /**
     * Test attribute "costs"
     *
     * @covers ::__construct
     * @covers ::getCosts
     * @covers ::setCosts
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyCosts(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['costs'],
            $this->allowedValues['costs'] ?? null
        );
        $this->sot->setCosts($v);
        $this->assertEquals($v, $this->sot->getCosts());

        $this->assertEquals($v, $this->sot['costs']);
        $v = $this->getFakeValue(
            $this->types['costs'],
            $this->allowedValues['costs'] ?? null
        );
        $this->sot['costs'] = $v;
        $this->assertEquals($v, $this->sot['costs']);
        $this->assertTrue(isset($this->sot['costs']));
        unset($this->sot['costs']);
        $this->assertFalse(isset($this->sot['costs']));
        $this->sot['costs'] = $v;
        $this->assertEquals($v, $this->sot['costs']);
        $this->assertTrue(isset($this->sot['costs']));
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
        $this->sot->setCreatedAt(null);
        $this->assertNull($this->sot->getCreatedAt());
        $this->sot->setCreatedAt($v);

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
     * Test attribute "end_date"
     *
     * @covers ::__construct
     * @covers ::getEndDate
     * @covers ::setEndDate
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyEndDate(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['end_date'],
            $this->allowedValues['end_date'] ?? null
        );
        $this->sot->setEndDate($v);
        $this->assertEquals($v, $this->sot->getEndDate());
        $this->sot->setEndDate(null);
        $this->assertNull($this->sot->getEndDate());
        $this->sot->setEndDate($v);

        $this->assertEquals($v, $this->sot['end_date']);
        $v = $this->getFakeValue(
            $this->types['end_date'],
            $this->allowedValues['end_date'] ?? null
        );
        $this->sot['end_date'] = $v;
        $this->assertEquals($v, $this->sot['end_date']);
        $this->assertTrue(isset($this->sot['end_date']));
        unset($this->sot['end_date']);
        $this->assertFalse(isset($this->sot['end_date']));
        $this->sot['end_date'] = $v;
        $this->assertEquals($v, $this->sot['end_date']);
        $this->assertTrue(isset($this->sot['end_date']));
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
        $this->sot->setId(null);
        $this->assertNull($this->sot->getId());
        $this->sot->setId($v);

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
     * Test attribute "sfdc_id"
     *
     * @covers ::__construct
     * @covers ::getSfdcId
     * @covers ::setSfdcId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertySfdcId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['sfdc_id'],
            $this->allowedValues['sfdc_id'] ?? null
        );
        $this->sot->setSfdcId($v);
        $this->assertEquals($v, $this->sot->getSfdcId());
        $this->sot->setSfdcId(null);
        $this->assertNull($this->sot->getSfdcId());
        $this->sot->setSfdcId($v);

        $this->assertEquals($v, $this->sot['sfdc_id']);
        $v = $this->getFakeValue(
            $this->types['sfdc_id'],
            $this->allowedValues['sfdc_id'] ?? null
        );
        $this->sot['sfdc_id'] = $v;
        $this->assertEquals($v, $this->sot['sfdc_id']);
        $this->assertTrue(isset($this->sot['sfdc_id']));
        unset($this->sot['sfdc_id']);
        $this->assertFalse(isset($this->sot['sfdc_id']));
        $this->sot['sfdc_id'] = $v;
        $this->assertEquals($v, $this->sot['sfdc_id']);
        $this->assertTrue(isset($this->sot['sfdc_id']));
    }

    /**
     * Test attribute "sfdc_name"
     *
     * @covers ::__construct
     * @covers ::getSfdcName
     * @covers ::setSfdcName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertySfdcName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['sfdc_name'],
            $this->allowedValues['sfdc_name'] ?? null
        );
        $this->sot->setSfdcName($v);
        $this->assertEquals($v, $this->sot->getSfdcName());
        $this->sot->setSfdcName(null);
        $this->assertNull($this->sot->getSfdcName());
        $this->sot->setSfdcName($v);

        $this->assertEquals($v, $this->sot['sfdc_name']);
        $v = $this->getFakeValue(
            $this->types['sfdc_name'],
            $this->allowedValues['sfdc_name'] ?? null
        );
        $this->sot['sfdc_name'] = $v;
        $this->assertEquals($v, $this->sot['sfdc_name']);
        $this->assertTrue(isset($this->sot['sfdc_name']));
        unset($this->sot['sfdc_name']);
        $this->assertFalse(isset($this->sot['sfdc_name']));
        $this->sot['sfdc_name'] = $v;
        $this->assertEquals($v, $this->sot['sfdc_name']);
        $this->assertTrue(isset($this->sot['sfdc_name']));
    }

    /**
     * Test attribute "start_date"
     *
     * @covers ::__construct
     * @covers ::getStartDate
     * @covers ::setStartDate
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyStartDate(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['start_date'],
            $this->allowedValues['start_date'] ?? null
        );
        $this->sot->setStartDate($v);
        $this->assertEquals($v, $this->sot->getStartDate());
        $this->sot->setStartDate(null);
        $this->assertNull($this->sot->getStartDate());
        $this->sot->setStartDate($v);

        $this->assertEquals($v, $this->sot['start_date']);
        $v = $this->getFakeValue(
            $this->types['start_date'],
            $this->allowedValues['start_date'] ?? null
        );
        $this->sot['start_date'] = $v;
        $this->assertEquals($v, $this->sot['start_date']);
        $this->assertTrue(isset($this->sot['start_date']));
        unset($this->sot['start_date']);
        $this->assertFalse(isset($this->sot['start_date']));
        $this->sot['start_date'] = $v;
        $this->assertEquals($v, $this->sot['start_date']);
        $this->assertTrue(isset($this->sot['start_date']));
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

    /**
     * Test attribute "tags"
     *
     * @covers ::__construct
     * @covers ::getTags
     * @covers ::setTags
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyTags(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['tags'],
            $this->allowedValues['tags'] ?? null
        );
        $this->sot->setTags($v);
        $this->assertEquals($v, $this->sot->getTags());

        $this->assertEquals($v, $this->sot['tags']);
        $v = $this->getFakeValue(
            $this->types['tags'],
            $this->allowedValues['tags'] ?? null
        );
        $this->sot['tags'] = $v;
        $this->assertEquals($v, $this->sot['tags']);
        $this->assertTrue(isset($this->sot['tags']));
        unset($this->sot['tags']);
        $this->assertFalse(isset($this->sot['tags']));
        $this->sot['tags'] = $v;
        $this->assertEquals($v, $this->sot['tags']);
        $this->assertTrue(isset($this->sot['tags']));
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
        $this->sot->setUpdatedAt(null);
        $this->assertNull($this->sot->getUpdatedAt());
        $this->sot->setUpdatedAt($v);

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
        $this->sot->setUrl(null);
        $this->assertNull($this->sot->getUrl());
        $this->sot->setUrl($v);

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
