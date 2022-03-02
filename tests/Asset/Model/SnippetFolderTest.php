<?php
/**
 * SnippetFolderTest
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
use NecLimDul\MarketoRest\Asset\Model\SnippetFolder;
use PHPUnit\Framework\TestCase;

/**
 * SnippetFolderTest Class Doc Comment
 *
 * @category    Class
 * @description JSON representation of a folder
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\SnippetFolder
 */
class SnippetFolderTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\SnippetFolder
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
        'value' => 'int',
        'type' => 'string',
        'folder_name' => 'string',
    ];
    /**
     * @var scalar[][]
     */
    private $allowedValues = [
        'type' => [
            'FOLDER' => 'Folder',
            'PROGRAM' => 'Program',
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
        $this->sot = new SnippetFolder($data);
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
     * Test "SnippetFolder"
     *
     * @covers ::__construct
     */
    public function testSnippetFolder(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\SnippetFolder::class, $this->sot);
    }

    /**
     * Test attribute "value"
     *
     * @covers ::__construct
     * @covers ::getValue
     * @covers ::setValue
     */
    public function testPropertyValue(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['value'],
            $this->allowedValues['value'] ?? null
        );
        $this->sot->setValue($v);
        $this->assertEquals($v, $this->sot->getValue());
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

    /**
     * Test attribute "folder_name"
     *
     * @covers ::__construct
     * @covers ::getFolderName
     * @covers ::setFolderName
     */
    public function testPropertyFolderName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['folder_name'],
            $this->allowedValues['folder_name'] ?? null
        );
        $this->sot->setFolderName($v);
        $this->assertEquals($v, $this->sot->getFolderName());
        // $this->markTestIncomplete('Not implemented');
    }
}
