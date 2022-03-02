<?php
/**
 * RecurrenceTest
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
use NecLimDul\MarketoRest\Asset\Model\Recurrence;
use PHPUnit\Framework\TestCase;

/**
 * RecurrenceTest Class Doc Comment
 *
 * @category    Class
 * @description Recurrence
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\Recurrence
 */
class RecurrenceTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\Recurrence
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
        'start_at' => '\DateTime',
        'end_at' => '\DateTime',
        'interval_type' => 'string',
        'interval' => 'int',
        'weekday_only' => 'bool',
        'weekday_mask' => 'string[]',
        'day_of_month' => 'int',
        'day_of_week' => 'string',
        'week_of_month' => 'int',
    ];
    /**
     * @var scalar[][]
     */
    private $allowedValues = [
        'interval_type' => [
            'DAILY' => 'Daily',
            'WEEKLY' => 'Weekly',
            'MONTHLY' => 'Monthly',
        ],
        'day_of_week' => [
            'MONDAY' => 'Monday',
            'TUESDAY' => 'Tuesday',
            'WEDNESDAY' => 'Wednesday',
            'THURSDAY' => 'Thursday',
            'FRIDAY' => 'Friday',
            'SATURDAY' => 'Saturday',
            'SUNDAY' => 'Sunday',
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
        $this->sot = new Recurrence($data);
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
     * Test "Recurrence"
     *
     * @covers ::__construct
     */
    public function testRecurrence(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\Recurrence::class, $this->sot);
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
     * Test attribute "interval_type"
     *
     * @covers ::__construct
     * @covers ::getIntervalType
     * @covers ::setIntervalType
     */
    public function testPropertyIntervalType(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['interval_type'],
            $this->allowedValues['interval_type'] ?? null
        );
        $this->sot->setIntervalType($v);
        $this->assertEquals($v, $this->sot->getIntervalType());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "interval"
     *
     * @covers ::__construct
     * @covers ::getInterval
     * @covers ::setInterval
     */
    public function testPropertyInterval(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['interval'],
            $this->allowedValues['interval'] ?? null
        );
        $this->sot->setInterval($v);
        $this->assertEquals($v, $this->sot->getInterval());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "weekday_only"
     *
     * @covers ::__construct
     * @covers ::getWeekdayOnly
     * @covers ::setWeekdayOnly
     */
    public function testPropertyWeekdayOnly(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['weekday_only'],
            $this->allowedValues['weekday_only'] ?? null
        );
        $this->sot->setWeekdayOnly($v);
        $this->assertEquals($v, $this->sot->getWeekdayOnly());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "weekday_mask"
     *
     * @covers ::__construct
     * @covers ::getWeekdayMask
     * @covers ::setWeekdayMask
     */
    public function testPropertyWeekdayMask(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['weekday_mask'],
            $this->allowedValues['weekday_mask'] ?? null
        );
        $this->sot->setWeekdayMask($v);
        $this->assertEquals($v, $this->sot->getWeekdayMask());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "day_of_month"
     *
     * @covers ::__construct
     * @covers ::getDayOfMonth
     * @covers ::setDayOfMonth
     */
    public function testPropertyDayOfMonth(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['day_of_month'],
            $this->allowedValues['day_of_month'] ?? null
        );
        $this->sot->setDayOfMonth($v);
        $this->assertEquals($v, $this->sot->getDayOfMonth());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "day_of_week"
     *
     * @covers ::__construct
     * @covers ::getDayOfWeek
     * @covers ::setDayOfWeek
     */
    public function testPropertyDayOfWeek(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['day_of_week'],
            $this->allowedValues['day_of_week'] ?? null
        );
        $this->sot->setDayOfWeek($v);
        $this->assertEquals($v, $this->sot->getDayOfWeek());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "week_of_month"
     *
     * @covers ::__construct
     * @covers ::getWeekOfMonth
     * @covers ::setWeekOfMonth
     */
    public function testPropertyWeekOfMonth(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['week_of_month'],
            $this->allowedValues['week_of_month'] ?? null
        );
        $this->sot->setWeekOfMonth($v);
        $this->assertEquals($v, $this->sot->getWeekOfMonth());
        // $this->markTestIncomplete('Not implemented');
    }
}
