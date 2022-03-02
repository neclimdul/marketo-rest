<?php
/**
 * RedirectFromTest
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
use NecLimDul\MarketoRest\Asset\Model\RedirectFrom;
use PHPUnit\Framework\TestCase;

/**
 * RedirectFromTest Class Doc Comment
 *
 * @category    Class
 * @description JSON representation of &#39;from&#39; redirect landing page rule
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\RedirectFrom
 */
class RedirectFromTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\RedirectFrom
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'type' => 'string',
        'value' => 'string',
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
            'LANDING_PAGE_ID' => 'landingPageId',
            'PATH' => 'path',
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
        $this->sot = new RedirectFrom($data);
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
     * Test "RedirectFrom"
     *
     * @covers ::__construct
     */
    public function testRedirectFrom(): void
    {
        $this->assertInstanceOf(RedirectFrom::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, RedirectFrom::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['type']);
        $this->assertEquals(null, $formats['value']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('type', $formats['type']);
        $this->assertEquals('value', $formats['value']);
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
        $this->assertEquals('RedirectFrom', $this->sot->getModelName());
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
     * Test attribute "value"
     *
     * @covers ::__construct
     * @covers ::getValue
     * @covers ::setValue
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyValue(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['value'],
            $this->allowedValues['value'] ?? null
        );
        $this->sot->setValue($v);
        $this->assertEquals($v, $this->sot->getValue());

        $this->assertEquals($v, $this->sot['value']);
        $v = $this->getFakeValue(
            $this->types['value'],
            $this->allowedValues['value'] ?? null
        );
        $this->sot['value'] = $v;
        $this->assertEquals($v, $this->sot['value']);
        $this->assertTrue(isset($this->sot['value']));
        unset($this->sot['value']);
        $this->assertFalse(isset($this->sot['value']));
        $this->sot['value'] = $v;
        $this->assertEquals($v, $this->sot['value']);
        $this->assertTrue(isset($this->sot['value']));
    }
}
