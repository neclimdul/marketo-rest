<?php
/**
 * DeleteCustomObjectRequestTest
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
use NecLimDul\MarketoRest\Lead\Model\DeleteCustomObjectRequest;
use PHPUnit\Framework\TestCase;

/**
 * DeleteCustomObjectRequestTest Class Doc Comment
 *
 * @category    Class
 * @description DeleteCustomObjectRequest
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\DeleteCustomObjectRequest
 */
class DeleteCustomObjectRequestTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\DeleteCustomObjectRequest
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
        'delete_by' => 'string',
        'input' => '\NecLimDul\MarketoRest\Lead\Model\CustomObject[]',
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
        $this->sot = new DeleteCustomObjectRequest($data);
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
     * Test "DeleteCustomObjectRequest"
     *
     * @covers ::__construct
     */
    public function testDeleteCustomObjectRequest(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\DeleteCustomObjectRequest::class, $this->sot);
    }

    /**
     * Test attribute "delete_by"
     *
     * @covers ::__construct
     * @covers ::getDeleteBy
     * @covers ::setDeleteBy
     */
    public function testPropertyDeleteBy(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['delete_by'],
            $this->allowedValues['delete_by'] ?? null
        );
        $this->sot->setDeleteBy($v);
        $this->assertEquals($v, $this->sot->getDeleteBy());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "input"
     *
     * @covers ::__construct
     * @covers ::getInput
     * @covers ::setInput
     */
    public function testPropertyInput(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['input'],
            $this->allowedValues['input'] ?? null
        );
        $this->sot->setInput($v);
        $this->assertEquals($v, $this->sot->getInput());
        // $this->markTestIncomplete('Not implemented');
    }
}
