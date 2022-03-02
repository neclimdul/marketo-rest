<?php
/**
 * UpdateProgramRequestTest
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
use NecLimDul\MarketoRest\Asset\Model\UpdateProgramRequest;
use PHPUnit\Framework\TestCase;

/**
 * UpdateProgramRequestTest Class Doc Comment
 *
 * @category    Class
 * @description UpdateProgramRequest
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\UpdateProgramRequest
 */
class UpdateProgramRequestTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\UpdateProgramRequest
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
        'costs' => '\NecLimDul\MarketoRest\Asset\Model\CostRequest[]',
        'costs_destructive_update' => 'bool',
        'description' => 'string',
        'end_date' => 'string',
        'name' => 'string',
        'start_date' => 'string',
        'tags' => '\NecLimDul\MarketoRest\Asset\Model\TagRequest[]',
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
        $this->sot = new UpdateProgramRequest($data);
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
     * Test "UpdateProgramRequest"
     *
     * @covers ::__construct
     */
    public function testUpdateProgramRequest(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\UpdateProgramRequest::class, $this->sot);
    }

    /**
     * Test attribute "costs"
     *
     * @covers ::__construct
     * @covers ::getCosts
     * @covers ::setCosts
     */
    public function testPropertyCosts(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['costs'],
            $this->allowedValues['costs'] ?? null
        );
        $this->sot->setCosts($v);
        $this->assertEquals($v, $this->sot->getCosts());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "costs_destructive_update"
     *
     * @covers ::__construct
     * @covers ::getCostsDestructiveUpdate
     * @covers ::setCostsDestructiveUpdate
     */
    public function testPropertyCostsDestructiveUpdate(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['costs_destructive_update'],
            $this->allowedValues['costs_destructive_update'] ?? null
        );
        $this->sot->setCostsDestructiveUpdate($v);
        $this->assertEquals($v, $this->sot->getCostsDestructiveUpdate());
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
     * Test attribute "end_date"
     *
     * @covers ::__construct
     * @covers ::getEndDate
     * @covers ::setEndDate
     */
    public function testPropertyEndDate(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['end_date'],
            $this->allowedValues['end_date'] ?? null
        );
        $this->sot->setEndDate($v);
        $this->assertEquals($v, $this->sot->getEndDate());
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
     * Test attribute "start_date"
     *
     * @covers ::__construct
     * @covers ::getStartDate
     * @covers ::setStartDate
     */
    public function testPropertyStartDate(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['start_date'],
            $this->allowedValues['start_date'] ?? null
        );
        $this->sot->setStartDate($v);
        $this->assertEquals($v, $this->sot->getStartDate());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tags"
     *
     * @covers ::__construct
     * @covers ::getTags
     * @covers ::setTags
     */
    public function testPropertyTags(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['tags'],
            $this->allowedValues['tags'] ?? null
        );
        $this->sot->setTags($v);
        $this->assertEquals($v, $this->sot->getTags());
        // $this->markTestIncomplete('Not implemented');
    }
}
