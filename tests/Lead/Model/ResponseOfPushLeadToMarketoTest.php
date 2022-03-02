<?php
/**
 * ResponseOfPushLeadToMarketoTest
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
use NecLimDul\MarketoRest\Lead\Model\ResponseOfPushLeadToMarketo;
use PHPUnit\Framework\TestCase;

/**
 * ResponseOfPushLeadToMarketoTest Class Doc Comment
 *
 * @category    Class
 * @description ResponseOfPushLeadToMarketo
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\ResponseOfPushLeadToMarketo
 */
class ResponseOfPushLeadToMarketoTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\ResponseOfPushLeadToMarketo
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
        'errors' => '\NecLimDul\MarketoRest\Lead\Model\Error[]',
        'request_id' => 'string',
        'result' => '\NecLimDul\MarketoRest\Lead\Model\Lead[]',
        'success' => 'bool',
        'warnings' => '\NecLimDul\MarketoRest\Lead\Model\Warning[]',
    ];
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
        $this->sot = new ResponseOfPushLeadToMarketo($data);
        $this->sot = new ResponseOfPushLeadToMarketo();
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
     * Test "ResponseOfPushLeadToMarketo"
     *
     * @covers ::__construct
     */
    public function testResponseOfPushLeadToMarketo(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\ResponseOfPushLeadToMarketo::class, $this->sot);
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
     * Test attribute "request_id"
     *
     * @covers ::__construct
     * @covers ::getRequestId
     * @covers ::setRequestId
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "result"
     *
     * @covers ::__construct
     * @covers ::getResult
     * @covers ::setResult
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "success"
     *
     * @covers ::__construct
     * @covers ::getSuccess
     * @covers ::setSuccess
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "warnings"
     *
     * @covers ::__construct
     * @covers ::getWarnings
     * @covers ::setWarnings
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
        // $this->markTestIncomplete('Not implemented');
    }
}
