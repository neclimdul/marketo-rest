<?php
/**
 * EmailDynamicContentItemTest
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
use NecLimDul\MarketoRest\Asset\Model\EmailDynamicContentItem;
use PHPUnit\Framework\TestCase;

/**
 * EmailDynamicContentItemTest Class Doc Comment
 *
 * @category    Class
 * @description EmailDynamicContentItem
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\EmailDynamicContentItem
 */
class EmailDynamicContentItemTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\EmailDynamicContentItem
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'content' => 'string',
        'id' => 'string',
        'segment_id' => 'string',
        'segment_name' => 'string',
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
    ];

    public function setUp(): void
    {
        parent::setUp();
        $this->faker = \Faker\Factory::create();
        $data = [];
        foreach ($this->types as $field => $type) {
            $data[$field] = $this->getFakeValue($type, $this->allowedValues[$field] ?? null);
        }
        $this->sot = new EmailDynamicContentItem($data);
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
     * Test "EmailDynamicContentItem"
     *
     * @covers ::__construct
     */
    public function testEmailDynamicContentItem(): void
    {
        $this->assertInstanceOf(EmailDynamicContentItem::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, EmailDynamicContentItem::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['content']);
        $this->assertEquals(null, $formats['id']);
        $this->assertEquals(null, $formats['segment_id']);
        $this->assertEquals(null, $formats['segment_name']);
        $this->assertEquals(null, $formats['type']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('content', $formats['content']);
        $this->assertEquals('id', $formats['id']);
        $this->assertEquals('segmentId', $formats['segment_id']);
        $this->assertEquals('segmentName', $formats['segment_name']);
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
        $this->assertEquals('EmailDynamicContentItem', $this->sot->getModelName());
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
     * Test attribute "content"
     *
     * @covers ::__construct
     * @covers ::getContent
     * @covers ::setContent
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyContent(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['content'],
            $this->allowedValues['content'] ?? null
        );
        $this->sot->setContent($v);
        $this->assertEquals($v, $this->sot->getContent());
        $this->sot->setContent(null);
        $this->assertNull($this->sot->getContent());
        $this->sot->setContent($v);

        $this->assertEquals($v, $this->sot['content']);
        $v = $this->getFakeValue(
            $this->types['content'],
            $this->allowedValues['content'] ?? null
        );
        $this->sot['content'] = $v;
        $this->assertEquals($v, $this->sot['content']);
        $this->assertTrue(isset($this->sot['content']));
        unset($this->sot['content']);
        $this->assertFalse(isset($this->sot['content']));
        $this->sot['content'] = $v;
        $this->assertEquals($v, $this->sot['content']);
        $this->assertTrue(isset($this->sot['content']));
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
     * Test attribute "segment_id"
     *
     * @covers ::__construct
     * @covers ::getSegmentId
     * @covers ::setSegmentId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertySegmentId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['segment_id'],
            $this->allowedValues['segment_id'] ?? null
        );
        $this->sot->setSegmentId($v);
        $this->assertEquals($v, $this->sot->getSegmentId());
        $this->sot->setSegmentId(null);
        $this->assertNull($this->sot->getSegmentId());
        $this->sot->setSegmentId($v);

        $this->assertEquals($v, $this->sot['segment_id']);
        $v = $this->getFakeValue(
            $this->types['segment_id'],
            $this->allowedValues['segment_id'] ?? null
        );
        $this->sot['segment_id'] = $v;
        $this->assertEquals($v, $this->sot['segment_id']);
        $this->assertTrue(isset($this->sot['segment_id']));
        unset($this->sot['segment_id']);
        $this->assertFalse(isset($this->sot['segment_id']));
        $this->sot['segment_id'] = $v;
        $this->assertEquals($v, $this->sot['segment_id']);
        $this->assertTrue(isset($this->sot['segment_id']));
    }

    /**
     * Test attribute "segment_name"
     *
     * @covers ::__construct
     * @covers ::getSegmentName
     * @covers ::setSegmentName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertySegmentName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['segment_name'],
            $this->allowedValues['segment_name'] ?? null
        );
        $this->sot->setSegmentName($v);
        $this->assertEquals($v, $this->sot->getSegmentName());
        $this->sot->setSegmentName(null);
        $this->assertNull($this->sot->getSegmentName());
        $this->sot->setSegmentName($v);

        $this->assertEquals($v, $this->sot['segment_name']);
        $v = $this->getFakeValue(
            $this->types['segment_name'],
            $this->allowedValues['segment_name'] ?? null
        );
        $this->sot['segment_name'] = $v;
        $this->assertEquals($v, $this->sot['segment_name']);
        $this->assertTrue(isset($this->sot['segment_name']));
        unset($this->sot['segment_name']);
        $this->assertFalse(isset($this->sot['segment_name']));
        $this->sot['segment_name'] = $v;
        $this->assertEquals($v, $this->sot['segment_name']);
        $this->assertTrue(isset($this->sot['segment_name']));
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
        $this->sot->setType(null);
        $this->assertNull($this->sot->getType());
        $this->sot->setType($v);

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
