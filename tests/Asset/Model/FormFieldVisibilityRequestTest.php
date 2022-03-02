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
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRequest
 */
class FormFieldVisibilityRequestTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRequest
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'rule_type' => 'string',
        'rules' => '\NecLimDul\MarketoRest\Asset\Model\VisibilityRuleRequest[]',
];

    /**
     * @var \Faker\Generator
     */
    private $faker;

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
     * Test "FormFieldVisibilityRequest"
     *
     * @covers ::__construct
     */
    public function testFormFieldVisibilityRequest(): void
    {
        $this->assertInstanceOf(FormFieldVisibilityRequest::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, FormFieldVisibilityRequest::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['rule_type']);
        $this->assertEquals(null, $formats['rules']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('ruleType', $formats['rule_type']);
        $this->assertEquals('rules', $formats['rules']);
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
        $this->assertEquals('FormFieldVisibilityRequest', $this->sot->getModelName());
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
     * Test attribute "rule_type"
     *
     * @covers ::__construct
     * @covers ::getRuleType
     * @covers ::setRuleType
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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

        $this->assertEquals($v, $this->sot['rule_type']);
        $v = $this->getFakeValue(
            $this->types['rule_type'],
            $this->allowedValues['rule_type'] ?? null
        );
        $this->sot['rule_type'] = $v;
        $this->assertEquals($v, $this->sot['rule_type']);
        $this->assertTrue(isset($this->sot['rule_type']));
        unset($this->sot['rule_type']);
        $this->assertFalse(isset($this->sot['rule_type']));
        $this->sot['rule_type'] = $v;
        $this->assertEquals($v, $this->sot['rule_type']);
        $this->assertTrue(isset($this->sot['rule_type']));
    }

    /**
     * Test attribute "rules"
     *
     * @covers ::__construct
     * @covers ::getRules
     * @covers ::setRules
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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

        $this->assertEquals($v, $this->sot['rules']);
        $v = $this->getFakeValue(
            $this->types['rules'],
            $this->allowedValues['rules'] ?? null
        );
        $this->sot['rules'] = $v;
        $this->assertEquals($v, $this->sot['rules']);
        $this->assertTrue(isset($this->sot['rules']));
        unset($this->sot['rules']);
        $this->assertFalse(isset($this->sot['rules']));
        $this->sot['rules'] = $v;
        $this->assertEquals($v, $this->sot['rules']);
        $this->assertTrue(isset($this->sot['rules']));
    }
}
