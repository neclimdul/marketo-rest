<?php
/**
 * UpdateCustomObjectTypeFieldRequestTest
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
use NecLimDul\MarketoRest\Lead\Model\UpdateCustomObjectTypeFieldRequest;
use PHPUnit\Framework\TestCase;

/**
 * UpdateCustomObjectTypeFieldRequestTest Class Doc Comment
 *
 * @category    Class
 * @description UpdateCustomObjectTypeFieldRequest
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\UpdateCustomObjectTypeFieldRequest
 */
class UpdateCustomObjectTypeFieldRequestTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\UpdateCustomObjectTypeFieldRequest
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
        'display_name' => 'string',
        'data_type' => 'string',
        'description' => 'string',
        'is_dedupe_field' => 'bool',
        'related_to' => '\NecLimDul\MarketoRest\Lead\Model\CustomObjectTypeFieldRelatedTo',
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
        $this->sot = new UpdateCustomObjectTypeFieldRequest($data);
        $this->sot = new UpdateCustomObjectTypeFieldRequest();
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
     * Test "UpdateCustomObjectTypeFieldRequest"
     *
     * @covers ::__construct
     */
    public function testUpdateCustomObjectTypeFieldRequest(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\UpdateCustomObjectTypeFieldRequest::class, $this->sot);
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
     * Test attribute "display_name"
     *
     * @covers ::__construct
     * @covers ::getDisplayName
     * @covers ::setDisplayName
     */
    public function testPropertyDisplayName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['display_name'],
            $this->allowedValues['display_name'] ?? null
        );
        $this->sot->setDisplayName($v);
        $this->assertEquals($v, $this->sot->getDisplayName());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "data_type"
     *
     * @covers ::__construct
     * @covers ::getDataType
     * @covers ::setDataType
     */
    public function testPropertyDataType(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['data_type'],
            $this->allowedValues['data_type'] ?? null
        );
        $this->sot->setDataType($v);
        $this->assertEquals($v, $this->sot->getDataType());
        // $this->markTestIncomplete('Not implemented');
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
     * Test attribute "is_dedupe_field"
     *
     * @covers ::__construct
     * @covers ::getIsDedupeField
     * @covers ::setIsDedupeField
     */
    public function testPropertyIsDedupeField(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_dedupe_field'],
            $this->allowedValues['is_dedupe_field'] ?? null
        );
        $this->sot->setIsDedupeField($v);
        $this->assertEquals($v, $this->sot->getIsDedupeField());
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
}
