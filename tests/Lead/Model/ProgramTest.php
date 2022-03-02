<?php
/**
 * ProgramTest
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
use NecLimDul\MarketoRest\Lead\Model\Program;
use PHPUnit\Framework\TestCase;

/**
 * ProgramTest Class Doc Comment
 *
 * @category    Class
 * @description Program
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\Program
 */
class ProgramTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\Program
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
        'id' => 'int',
        'acquired_by' => 'bool',
        'is_exhausted' => 'bool',
        'membership_date' => 'string',
        'nurture_cadence' => 'string',
        'progression_status' => 'string',
        'reached_success' => 'bool',
        'stream' => 'string',
        'updated_at' => 'string',
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
        $this->sot = new Program($data);
        $this->sot = new Program();
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
     * Test "Program"
     *
     * @covers ::__construct
     */
    public function testProgram(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\Program::class, $this->sot);
    }

    /**
     * Test attribute "id"
     *
     * @covers ::__construct
     * @covers ::getId
     * @covers ::setId
     */
    public function testPropertyId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['id'],
            $this->allowedValues['id'] ?? null
        );
        $this->sot->setId($v);
        $this->assertEquals($v, $this->sot->getId());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "acquired_by"
     *
     * @covers ::__construct
     * @covers ::getAcquiredBy
     * @covers ::setAcquiredBy
     */
    public function testPropertyAcquiredBy(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['acquired_by'],
            $this->allowedValues['acquired_by'] ?? null
        );
        $this->sot->setAcquiredBy($v);
        $this->assertEquals($v, $this->sot->getAcquiredBy());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "is_exhausted"
     *
     * @covers ::__construct
     * @covers ::getIsExhausted
     * @covers ::setIsExhausted
     */
    public function testPropertyIsExhausted(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_exhausted'],
            $this->allowedValues['is_exhausted'] ?? null
        );
        $this->sot->setIsExhausted($v);
        $this->assertEquals($v, $this->sot->getIsExhausted());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "membership_date"
     *
     * @covers ::__construct
     * @covers ::getMembershipDate
     * @covers ::setMembershipDate
     */
    public function testPropertyMembershipDate(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['membership_date'],
            $this->allowedValues['membership_date'] ?? null
        );
        $this->sot->setMembershipDate($v);
        $this->assertEquals($v, $this->sot->getMembershipDate());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "nurture_cadence"
     *
     * @covers ::__construct
     * @covers ::getNurtureCadence
     * @covers ::setNurtureCadence
     */
    public function testPropertyNurtureCadence(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['nurture_cadence'],
            $this->allowedValues['nurture_cadence'] ?? null
        );
        $this->sot->setNurtureCadence($v);
        $this->assertEquals($v, $this->sot->getNurtureCadence());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "progression_status"
     *
     * @covers ::__construct
     * @covers ::getProgressionStatus
     * @covers ::setProgressionStatus
     */
    public function testPropertyProgressionStatus(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['progression_status'],
            $this->allowedValues['progression_status'] ?? null
        );
        $this->sot->setProgressionStatus($v);
        $this->assertEquals($v, $this->sot->getProgressionStatus());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "reached_success"
     *
     * @covers ::__construct
     * @covers ::getReachedSuccess
     * @covers ::setReachedSuccess
     */
    public function testPropertyReachedSuccess(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['reached_success'],
            $this->allowedValues['reached_success'] ?? null
        );
        $this->sot->setReachedSuccess($v);
        $this->assertEquals($v, $this->sot->getReachedSuccess());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "stream"
     *
     * @covers ::__construct
     * @covers ::getStream
     * @covers ::setStream
     */
    public function testPropertyStream(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['stream'],
            $this->allowedValues['stream'] ?? null
        );
        $this->sot->setStream($v);
        $this->assertEquals($v, $this->sot->getStream());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "updated_at"
     *
     * @covers ::__construct
     * @covers ::getUpdatedAt
     * @covers ::setUpdatedAt
     */
    public function testPropertyUpdatedAt(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['updated_at'],
            $this->allowedValues['updated_at'] ?? null
        );
        $this->sot->setUpdatedAt($v);
        $this->assertEquals($v, $this->sot->getUpdatedAt());
        // $this->markTestIncomplete('Not implemented');
    }
}
