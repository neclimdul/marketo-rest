<?php
/**
 * ObjectRelationTest
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
use NecLimDul\MarketoRest\Lead\Model\ObjectRelation;
use PHPUnit\Framework\TestCase;

/**
 * ObjectRelationTest Class Doc Comment
 *
 * @category    Class
 * @description ObjectRelation
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\ObjectRelation
 */
class ObjectRelationTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\ObjectRelation
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
        'field' => 'string',
        'related_to' => '\NecLimDul\MarketoRest\Lead\Model\RelatedObject',
        'type' => 'string',
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
        $this->sot = new ObjectRelation($data);
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
     * Test "ObjectRelation"
     *
     * @covers ::__construct
     */
    public function testObjectRelation(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\ObjectRelation::class, $this->sot);
    }

    /**
     * Test attribute "field"
     *
     * @covers ::__construct
     * @covers ::getField
     * @covers ::setField
     */
    public function testPropertyField(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['field'],
            $this->allowedValues['field'] ?? null
        );
        $this->sot->setField($v);
        $this->assertEquals($v, $this->sot->getField());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "related_to"
     *
     * @covers ::__construct
     * @covers ::getRelatedTo
     * @covers ::setRelatedTo
     */
    public function testPropertyRelatedTo(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['related_to'],
            $this->allowedValues['related_to'] ?? null
        );
        $this->sot->setRelatedTo($v);
        $this->assertEquals($v, $this->sot->getRelatedTo());
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
}
