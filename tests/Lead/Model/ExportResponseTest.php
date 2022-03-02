<?php
/**
 * ExportResponseTest
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
use NecLimDul\MarketoRest\Lead\Model\ExportResponse;
use PHPUnit\Framework\TestCase;

/**
 * ExportResponseTest Class Doc Comment
 *
 * @category    Class
 * @description Response containing export job status information
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\ExportResponse
 */
class ExportResponseTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\ExportResponse
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
        'created_at' => '\DateTime',
        'error_msg' => 'string',
        'export_id' => 'string',
        'file_size' => 'int',
        'file_checksum' => 'string',
        'finished_at' => '\DateTime',
        'format' => 'string',
        'number_of_records' => 'int',
        'queued_at' => '\DateTime',
        'started_at' => '\DateTime',
        'status' => 'string',
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
        $this->sot = new ExportResponse($data);
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
     * Test "ExportResponse"
     *
     * @covers ::__construct
     */
    public function testExportResponse(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\ExportResponse::class, $this->sot);
    }

    /**
     * Test attribute "created_at"
     *
     * @covers ::__construct
     * @covers ::getCreatedAt
     * @covers ::setCreatedAt
     */
    public function testPropertyCreatedAt(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['created_at'],
            $this->allowedValues['created_at'] ?? null
        );
        $this->sot->setCreatedAt($v);
        $this->assertEquals($v, $this->sot->getCreatedAt());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "error_msg"
     *
     * @covers ::__construct
     * @covers ::getErrorMsg
     * @covers ::setErrorMsg
     */
    public function testPropertyErrorMsg(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['error_msg'],
            $this->allowedValues['error_msg'] ?? null
        );
        $this->sot->setErrorMsg($v);
        $this->assertEquals($v, $this->sot->getErrorMsg());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "export_id"
     *
     * @covers ::__construct
     * @covers ::getExportId
     * @covers ::setExportId
     */
    public function testPropertyExportId(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['export_id'],
            $this->allowedValues['export_id'] ?? null
        );
        $this->sot->setExportId($v);
        $this->assertEquals($v, $this->sot->getExportId());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "file_size"
     *
     * @covers ::__construct
     * @covers ::getFileSize
     * @covers ::setFileSize
     */
    public function testPropertyFileSize(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['file_size'],
            $this->allowedValues['file_size'] ?? null
        );
        $this->sot->setFileSize($v);
        $this->assertEquals($v, $this->sot->getFileSize());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "file_checksum"
     *
     * @covers ::__construct
     * @covers ::getFileChecksum
     * @covers ::setFileChecksum
     */
    public function testPropertyFileChecksum(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['file_checksum'],
            $this->allowedValues['file_checksum'] ?? null
        );
        $this->sot->setFileChecksum($v);
        $this->assertEquals($v, $this->sot->getFileChecksum());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "finished_at"
     *
     * @covers ::__construct
     * @covers ::getFinishedAt
     * @covers ::setFinishedAt
     */
    public function testPropertyFinishedAt(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['finished_at'],
            $this->allowedValues['finished_at'] ?? null
        );
        $this->sot->setFinishedAt($v);
        $this->assertEquals($v, $this->sot->getFinishedAt());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "format"
     *
     * @covers ::__construct
     * @covers ::getFormat
     * @covers ::setFormat
     */
    public function testPropertyFormat(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['format'],
            $this->allowedValues['format'] ?? null
        );
        $this->sot->setFormat($v);
        $this->assertEquals($v, $this->sot->getFormat());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "number_of_records"
     *
     * @covers ::__construct
     * @covers ::getNumberOfRecords
     * @covers ::setNumberOfRecords
     */
    public function testPropertyNumberOfRecords(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['number_of_records'],
            $this->allowedValues['number_of_records'] ?? null
        );
        $this->sot->setNumberOfRecords($v);
        $this->assertEquals($v, $this->sot->getNumberOfRecords());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "queued_at"
     *
     * @covers ::__construct
     * @covers ::getQueuedAt
     * @covers ::setQueuedAt
     */
    public function testPropertyQueuedAt(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['queued_at'],
            $this->allowedValues['queued_at'] ?? null
        );
        $this->sot->setQueuedAt($v);
        $this->assertEquals($v, $this->sot->getQueuedAt());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "started_at"
     *
     * @covers ::__construct
     * @covers ::getStartedAt
     * @covers ::setStartedAt
     */
    public function testPropertyStartedAt(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['started_at'],
            $this->allowedValues['started_at'] ?? null
        );
        $this->sot->setStartedAt($v);
        $this->assertEquals($v, $this->sot->getStartedAt());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "status"
     *
     * @covers ::__construct
     * @covers ::getStatus
     * @covers ::setStatus
     */
    public function testPropertyStatus(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['status'],
            $this->allowedValues['status'] ?? null
        );
        $this->sot->setStatus($v);
        $this->assertEquals($v, $this->sot->getStatus());
        // $this->markTestIncomplete('Not implemented');
    }
}
