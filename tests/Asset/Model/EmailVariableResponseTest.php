<?php
/**
 * EmailVariableResponseTest
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
use NecLimDul\MarketoRest\Asset\Model\EmailVariableResponse;
use PHPUnit\Framework\TestCase;

/**
 * EmailVariableResponseTest Class Doc Comment
 *
 * @category    Class
 * @description EmailVariableResponse
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\EmailVariableResponse
 */
class EmailVariableResponseTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\EmailVariableResponse
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
        'name' => 'string',
        'value' => 'string',
        'module_scope' => 'bool',
        'module_id' => 'string',
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
        $this->sot = new EmailVariableResponse($data);
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
     * Test "EmailVariableResponse"
     *
     * @covers ::__construct
     */
    public function testEmailVariableResponse(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\EmailVariableResponse::class, $this->sot);
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
     * Test attribute "value"
     *
     * @covers ::__construct
     * @covers ::getValue
     * @covers ::setValue
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "module_scope"
     *
     * @covers ::__construct
     * @covers ::getModuleScope
     * @covers ::setModuleScope
     */
    public function testPropertyModuleScope(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['module_scope'],
            $this->allowedValues['module_scope'] ?? null
        );
        $this->sot->setModuleScope($v);
        $this->assertEquals($v, $this->sot->getModuleScope());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "module_id"
     *
     * @covers ::__construct
     * @covers ::getModuleId
     * @covers ::setModuleId
     */
    public function testPropertyModuleId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['module_id'],
            $this->allowedValues['module_id'] ?? null
        );
        $this->sot->setModuleId($v);
        $this->assertEquals($v, $this->sot->getModuleId());
        // $this->markTestIncomplete('Not implemented');
    }
}
