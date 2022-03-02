<?php
/**
 * DateRangeTest
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
use NecLimDul\MarketoRest\Lead\Model\DateRange;
use PHPUnit\Framework\TestCase;

/**
 * DateRangeTest Class Doc Comment
 *
 * @category    Class
 * @description DateRange
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\DateRange
 */
class DateRangeTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\DateRange
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
        'end_at' => 'string',
        'start_at' => 'string',
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
        $this->sot = new DateRange($data);
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
     * Test "DateRange"
     *
     * @covers ::__construct
     */
    public function testDateRange(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\DateRange::class, $this->sot);
    }

    /**
     * Test attribute "end_at"
     *
     * @covers ::__construct
     * @covers ::getEndAt
     * @covers ::setEndAt
     */
    public function testPropertyEndAt(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['end_at'],
            $this->allowedValues['end_at'] ?? null
        );
        $this->sot->setEndAt($v);
        $this->assertEquals($v, $this->sot->getEndAt());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "start_at"
     *
     * @covers ::__construct
     * @covers ::getStartAt
     * @covers ::setStartAt
     */
    public function testPropertyStartAt(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['start_at'],
            $this->allowedValues['start_at'] ?? null
        );
        $this->sot->setStartAt($v);
        $this->assertEquals($v, $this->sot->getStartAt());
        // $this->markTestIncomplete('Not implemented');
    }
}
