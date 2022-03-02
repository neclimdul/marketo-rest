<?php
/**
 * FormFieldVisibilityRequestTest
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
use NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRequest;
use PHPUnit\Framework\TestCase;

/**
 * FormFieldVisibilityRequestTest Class Doc Comment
 *
 * @category    Class
 * @description FormFieldVisibilityRequest
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRequest
 */
class FormFieldVisibilityRequestTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRequest
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
        'rule_type' => 'string',
        'rules' => '\NecLimDul\MarketoRest\Asset\Model\VisibilityRuleRequest[]',
    ];
    /**
     * @var scalar[][]
     */
    private $allowedValues = [
        'rule_type' => [
            'SHOW' => 'show',
            'ALWAYS_SHOW' => 'alwaysShow',
            'HIDE' => 'hide',
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
        $this->sot = new FormFieldVisibilityRequest($data);
        $this->sot = new FormFieldVisibilityRequest();
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
     * Test "FormFieldVisibilityRequest"
     *
     * @covers ::__construct
     */
    public function testFormFieldVisibilityRequest(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRequest::class, $this->sot);
    }

    /**
     * Test attribute "rule_type"
     *
     * @covers ::__construct
     * @covers ::getRuleType
     * @covers ::setRuleType
     */
    public function testPropertyRuleType(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['rule_type'],
            $this->allowedValues['rule_type'] ?? null
        );
        $this->sot->setRuleType($v);
        $this->assertEquals($v, $this->sot->getRuleType());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "rules"
     *
     * @covers ::__construct
     * @covers ::getRules
     * @covers ::setRules
     */
    public function testPropertyRules(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['rules'],
            $this->allowedValues['rules'] ?? null
        );
        $this->sot->setRules($v);
        $this->assertEquals($v, $this->sot->getRules());
        // $this->markTestIncomplete('Not implemented');
    }
}
