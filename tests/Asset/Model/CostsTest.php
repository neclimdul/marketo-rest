<?php
/**
 * CostsTest
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
use NecLimDul\MarketoRest\Asset\Model\Costs;
use PHPUnit\Framework\TestCase;

/**
 * CostsTest Class Doc Comment
 *
 * @category    Class
 * @description Costs
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\Costs
 */
class CostsTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\Costs
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
        'cost' => 'int',
        'note' => 'string',
        'start_date' => '\DateTime',
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
        $this->sot = new Costs($data);
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
     * Test "Costs"
     *
     * @covers ::__construct
     */
    public function testCosts(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\Costs::class, $this->sot);
    }

    /**
     * Test attribute "cost"
     *
     * @covers ::__construct
     * @covers ::getCost
     * @covers ::setCost
     */
    public function testPropertyCost(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['cost'],
            $this->allowedValues['cost'] ?? null
        );
        $this->sot->setCost($v);
        $this->assertEquals($v, $this->sot->getCost());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "note"
     *
     * @covers ::__construct
     * @covers ::getNote
     * @covers ::setNote
     */
    public function testPropertyNote(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['note'],
            $this->allowedValues['note'] ?? null
        );
        $this->sot->setNote($v);
        $this->assertEquals($v, $this->sot->getNote());
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
}
