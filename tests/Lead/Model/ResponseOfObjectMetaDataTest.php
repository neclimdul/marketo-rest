<?php
/**
 * ResponseOfObjectMetaDataTest
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
use NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData;
use PHPUnit\Framework\TestCase;

/**
 * ResponseOfObjectMetaDataTest Class Doc Comment
 *
 * @category    Class
 * @description ResponseOfObjectMetaData
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData
 */
class ResponseOfObjectMetaDataTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'errors' => '\NecLimDul\MarketoRest\Lead\Model\Error[]',
        'more_result' => 'bool',
        'next_page_token' => 'string',
        'request_id' => 'string',
        'result' => '\NecLimDul\MarketoRest\Lead\Model\ObjectMetaData[]',
        'success' => 'bool',
        'warnings' => '\NecLimDul\MarketoRest\Lead\Model\Warning[]',
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
        $this->sot = new ResponseOfObjectMetaData($data);
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
     * Test "ResponseOfObjectMetaData"
     *
     * @covers ::__construct
     */
    public function testResponseOfObjectMetaData(): void
    {
        $this->assertInstanceOf(ResponseOfObjectMetaData::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, ResponseOfObjectMetaData::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['errors']);
        $this->assertEquals(null, $formats['more_result']);
        $this->assertEquals(null, $formats['next_page_token']);
        $this->assertEquals(null, $formats['request_id']);
        $this->assertEquals(null, $formats['result']);
        $this->assertEquals(null, $formats['success']);
        $this->assertEquals(null, $formats['warnings']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('errors', $formats['errors']);
        $this->assertEquals('moreResult', $formats['more_result']);
        $this->assertEquals('nextPageToken', $formats['next_page_token']);
        $this->assertEquals('requestId', $formats['request_id']);
        $this->assertEquals('result', $formats['result']);
        $this->assertEquals('success', $formats['success']);
        $this->assertEquals('warnings', $formats['warnings']);
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
        $this->assertEquals('ResponseOfObjectMetaData', $this->sot->getModelName());
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
     * Test attribute "errors"
     *
     * @covers ::__construct
     * @covers ::getErrors
     * @covers ::setErrors
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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

        $this->assertEquals($v, $this->sot['errors']);
        $v = $this->getFakeValue(
            $this->types['errors'],
            $this->allowedValues['errors'] ?? null
        );
        $this->sot['errors'] = $v;
        $this->assertEquals($v, $this->sot['errors']);
        $this->assertTrue(isset($this->sot['errors']));
        unset($this->sot['errors']);
        $this->assertFalse(isset($this->sot['errors']));
        $this->sot['errors'] = $v;
        $this->assertEquals($v, $this->sot['errors']);
        $this->assertTrue(isset($this->sot['errors']));
    }

    /**
     * Test attribute "more_result"
     *
     * @covers ::__construct
     * @covers ::getMoreResult
     * @covers ::setMoreResult
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyMoreResult(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['more_result'],
            $this->allowedValues['more_result'] ?? null
        );
        $this->sot->setMoreResult($v);
        $this->assertEquals($v, $this->sot->getMoreResult());
        $this->sot->setMoreResult(null);
        $this->assertNull($this->sot->getMoreResult());
        $this->sot->setMoreResult($v);

        $this->assertEquals($v, $this->sot['more_result']);
        $v = $this->getFakeValue(
            $this->types['more_result'],
            $this->allowedValues['more_result'] ?? null
        );
        $this->sot['more_result'] = $v;
        $this->assertEquals($v, $this->sot['more_result']);
        $this->assertTrue(isset($this->sot['more_result']));
        unset($this->sot['more_result']);
        $this->assertFalse(isset($this->sot['more_result']));
        $this->sot['more_result'] = $v;
        $this->assertEquals($v, $this->sot['more_result']);
        $this->assertTrue(isset($this->sot['more_result']));
    }

    /**
     * Test attribute "next_page_token"
     *
     * @covers ::__construct
     * @covers ::getNextPageToken
     * @covers ::setNextPageToken
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyNextPageToken(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['next_page_token'],
            $this->allowedValues['next_page_token'] ?? null
        );
        $this->sot->setNextPageToken($v);
        $this->assertEquals($v, $this->sot->getNextPageToken());
        $this->sot->setNextPageToken(null);
        $this->assertNull($this->sot->getNextPageToken());
        $this->sot->setNextPageToken($v);

        $this->assertEquals($v, $this->sot['next_page_token']);
        $v = $this->getFakeValue(
            $this->types['next_page_token'],
            $this->allowedValues['next_page_token'] ?? null
        );
        $this->sot['next_page_token'] = $v;
        $this->assertEquals($v, $this->sot['next_page_token']);
        $this->assertTrue(isset($this->sot['next_page_token']));
        unset($this->sot['next_page_token']);
        $this->assertFalse(isset($this->sot['next_page_token']));
        $this->sot['next_page_token'] = $v;
        $this->assertEquals($v, $this->sot['next_page_token']);
        $this->assertTrue(isset($this->sot['next_page_token']));
    }

    /**
     * Test attribute "request_id"
     *
     * @covers ::__construct
     * @covers ::getRequestId
     * @covers ::setRequestId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyRequestId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['request_id'],
            $this->allowedValues['request_id'] ?? null
        );
        $this->sot->setRequestId($v);
        $this->assertEquals($v, $this->sot->getRequestId());

        $this->assertEquals($v, $this->sot['request_id']);
        $v = $this->getFakeValue(
            $this->types['request_id'],
            $this->allowedValues['request_id'] ?? null
        );
        $this->sot['request_id'] = $v;
        $this->assertEquals($v, $this->sot['request_id']);
        $this->assertTrue(isset($this->sot['request_id']));
        unset($this->sot['request_id']);
        $this->assertFalse(isset($this->sot['request_id']));
        $this->sot['request_id'] = $v;
        $this->assertEquals($v, $this->sot['request_id']);
        $this->assertTrue(isset($this->sot['request_id']));
    }

    /**
     * Test attribute "result"
     *
     * @covers ::__construct
     * @covers ::getResult
     * @covers ::setResult
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyResult(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['result'],
            $this->allowedValues['result'] ?? null
        );
        $this->sot->setResult($v);
        $this->assertEquals($v, $this->sot->getResult());

        $this->assertEquals($v, $this->sot['result']);
        $v = $this->getFakeValue(
            $this->types['result'],
            $this->allowedValues['result'] ?? null
        );
        $this->sot['result'] = $v;
        $this->assertEquals($v, $this->sot['result']);
        $this->assertTrue(isset($this->sot['result']));
        unset($this->sot['result']);
        $this->assertFalse(isset($this->sot['result']));
        $this->sot['result'] = $v;
        $this->assertEquals($v, $this->sot['result']);
        $this->assertTrue(isset($this->sot['result']));
    }

    /**
     * Test attribute "success"
     *
     * @covers ::__construct
     * @covers ::getSuccess
     * @covers ::setSuccess
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertySuccess(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['success'],
            $this->allowedValues['success'] ?? null
        );
        $this->sot->setSuccess($v);
        $this->assertEquals($v, $this->sot->getSuccess());

        $this->assertEquals($v, $this->sot['success']);
        $v = $this->getFakeValue(
            $this->types['success'],
            $this->allowedValues['success'] ?? null
        );
        $this->sot['success'] = $v;
        $this->assertEquals($v, $this->sot['success']);
        $this->assertTrue(isset($this->sot['success']));
        unset($this->sot['success']);
        $this->assertFalse(isset($this->sot['success']));
        $this->sot['success'] = $v;
        $this->assertEquals($v, $this->sot['success']);
        $this->assertTrue(isset($this->sot['success']));
    }

    /**
     * Test attribute "warnings"
     *
     * @covers ::__construct
     * @covers ::getWarnings
     * @covers ::setWarnings
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyWarnings(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['warnings'],
            $this->allowedValues['warnings'] ?? null
        );
        $this->sot->setWarnings($v);
        $this->assertEquals($v, $this->sot->getWarnings());

        $this->assertEquals($v, $this->sot['warnings']);
        $v = $this->getFakeValue(
            $this->types['warnings'],
            $this->allowedValues['warnings'] ?? null
        );
        $this->sot['warnings'] = $v;
        $this->assertEquals($v, $this->sot['warnings']);
        $this->assertTrue(isset($this->sot['warnings']));
        unset($this->sot['warnings']);
        $this->assertFalse(isset($this->sot['warnings']));
        $this->sot['warnings'] = $v;
        $this->assertEquals($v, $this->sot['warnings']);
        $this->assertTrue(isset($this->sot['warnings']));
    }
}
