<?php
/**
 * ListOperationOutputDataTest
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
use NecLimDul\MarketoRest\Lead\Model\ListOperationOutputData;
use PHPUnit\Framework\TestCase;

/**
 * ListOperationOutputDataTest Class Doc Comment
 *
 * @category    Class
 * @description ListOperationOutputData
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Lead\Model\ListOperationOutputData
 */
class ListOperationOutputDataTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\ListOperationOutputData
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'id' => 'int',
        'reasons' => '\NecLimDul\MarketoRest\Lead\Model\Reason[]',
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
    ];

    public function setUp(): void
    {
        parent::setUp();
        $this->faker = \Faker\Factory::create();
        $data = [];
        foreach ($this->types as $field => $type) {
            $data[$field] = $this->getFakeValue($type, $this->allowedValues[$field] ?? null);
        }
        $this->sot = new ListOperationOutputData($data);
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
     * Test "ListOperationOutputData"
     *
     * @covers ::__construct
     */
    public function testListOperationOutputData(): void
    {
        $this->assertInstanceOf(ListOperationOutputData::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, ListOperationOutputData::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals('int64', $formats['id']);
        $this->assertEquals(null, $formats['reasons']);
        $this->assertEquals(null, $formats['status']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('id', $formats['id']);
        $this->assertEquals('reasons', $formats['reasons']);
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
        $this->assertEquals('ListOperationOutputData', $this->sot->getModelName());
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
     * Test attribute "reasons"
     *
     * @covers ::__construct
     * @covers ::getReasons
     * @covers ::setReasons
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyReasons(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['reasons'],
            $this->allowedValues['reasons'] ?? null
        );
        $this->sot->setReasons($v);
        $this->assertEquals($v, $this->sot->getReasons());
        $this->sot->setReasons(null);
        $this->assertNull($this->sot->getReasons());
        $this->sot->setReasons($v);

        $this->assertEquals($v, $this->sot['reasons']);
        $v = $this->getFakeValue(
            $this->types['reasons'],
            $this->allowedValues['reasons'] ?? null
        );
        $this->sot['reasons'] = $v;
        $this->assertEquals($v, $this->sot['reasons']);
        $this->assertTrue(isset($this->sot['reasons']));
        unset($this->sot['reasons']);
        $this->assertFalse(isset($this->sot['reasons']));
        $this->sot['reasons'] = $v;
        $this->assertEquals($v, $this->sot['reasons']);
        $this->assertTrue(isset($this->sot['reasons']));
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
        $this->sot->setStatus(null);
        $this->assertNull($this->sot->getStatus());
        $this->sot->setStatus($v);

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
