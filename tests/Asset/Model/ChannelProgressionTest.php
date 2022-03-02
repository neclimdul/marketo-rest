<?php
/**
 * ChannelProgressionTest
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
use NecLimDul\MarketoRest\Asset\Model\ChannelProgression;
use PHPUnit\Framework\TestCase;

/**
 * ChannelProgressionTest Class Doc Comment
 *
 * @category    Class
 * @description ChannelProgression
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\ChannelProgression
 */
class ChannelProgressionTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\ChannelProgression
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
        'description' => 'string',
        'hidden' => 'bool',
        'name' => 'string',
        'type' => 'string',
        'step' => 'int',
        'success' => 'bool',
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
        $this->sot = new ChannelProgression($data);
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
     * Test "ChannelProgression"
     *
     * @covers ::__construct
     */
    public function testChannelProgression(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\ChannelProgression::class, $this->sot);
    }

    /**
     * Test attribute "description"
     *
     * @covers ::__construct
     * @covers ::getDescription
     * @covers ::setDescription
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "hidden"
     *
     * @covers ::__construct
     * @covers ::getHidden
     * @covers ::setHidden
     */
    public function testPropertyHidden(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['hidden'],
            $this->allowedValues['hidden'] ?? null
        );
        $this->sot->setHidden($v);
        $this->assertEquals($v, $this->sot->getHidden());
        // $this->markTestIncomplete('Not implemented');
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
     * Test attribute "type"
     *
     * @covers ::__construct
     * @covers ::getType
     * @covers ::setType
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "step"
     *
     * @covers ::__construct
     * @covers ::getStep
     * @covers ::setStep
     */
    public function testPropertyStep(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['step'],
            $this->allowedValues['step'] ?? null
        );
        $this->sot->setStep($v);
        $this->assertEquals($v, $this->sot->getStep());
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
}
