<?php
/**
 * UpdateFormMetaDataRequestTest
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
use NecLimDul\MarketoRest\Asset\Model\UpdateFormMetaDataRequest;
use PHPUnit\Framework\TestCase;

/**
 * UpdateFormMetaDataRequestTest Class Doc Comment
 *
 * @category    Class
 * @description UpdateFormMetaDataRequest
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\UpdateFormMetaDataRequest
 */
class UpdateFormMetaDataRequestTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\UpdateFormMetaDataRequest
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
        'custom_css' => 'string',
        'description' => 'string',
        'font_family' => 'string',
        'font_size' => 'string',
        'known_visitor' => '\NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO',
        'label_position' => 'string',
        'language' => 'string',
        'locale' => 'string',
        'name' => 'string',
        'progressive_profiling' => 'bool',
        'theme' => 'string',
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
        $this->sot = new UpdateFormMetaDataRequest($data);
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
     * Test "UpdateFormMetaDataRequest"
     *
     * @covers ::__construct
     */
    public function testUpdateFormMetaDataRequest(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\UpdateFormMetaDataRequest::class, $this->sot);
    }

    /**
     * Test attribute "custom_css"
     *
     * @covers ::__construct
     * @covers ::getCustomCss
     * @covers ::setCustomCss
     */
    public function testPropertyCustomCss(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['custom_css'],
            $this->allowedValues['custom_css'] ?? null
        );
        $this->sot->setCustomCss($v);
        $this->assertEquals($v, $this->sot->getCustomCss());
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
     * Test attribute "font_family"
     *
     * @covers ::__construct
     * @covers ::getFontFamily
     * @covers ::setFontFamily
     */
    public function testPropertyFontFamily(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['font_family'],
            $this->allowedValues['font_family'] ?? null
        );
        $this->sot->setFontFamily($v);
        $this->assertEquals($v, $this->sot->getFontFamily());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "font_size"
     *
     * @covers ::__construct
     * @covers ::getFontSize
     * @covers ::setFontSize
     */
    public function testPropertyFontSize(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['font_size'],
            $this->allowedValues['font_size'] ?? null
        );
        $this->sot->setFontSize($v);
        $this->assertEquals($v, $this->sot->getFontSize());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "known_visitor"
     *
     * @covers ::__construct
     * @covers ::getKnownVisitor
     * @covers ::setKnownVisitor
     */
    public function testPropertyKnownVisitor(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['known_visitor'],
            $this->allowedValues['known_visitor'] ?? null
        );
        $this->sot->setKnownVisitor($v);
        $this->assertEquals($v, $this->sot->getKnownVisitor());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "label_position"
     *
     * @covers ::__construct
     * @covers ::getLabelPosition
     * @covers ::setLabelPosition
     */
    public function testPropertyLabelPosition(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['label_position'],
            $this->allowedValues['label_position'] ?? null
        );
        $this->sot->setLabelPosition($v);
        $this->assertEquals($v, $this->sot->getLabelPosition());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "language"
     *
     * @covers ::__construct
     * @covers ::getLanguage
     * @covers ::setLanguage
     */
    public function testPropertyLanguage(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['language'],
            $this->allowedValues['language'] ?? null
        );
        $this->sot->setLanguage($v);
        $this->assertEquals($v, $this->sot->getLanguage());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "locale"
     *
     * @covers ::__construct
     * @covers ::getLocale
     * @covers ::setLocale
     */
    public function testPropertyLocale(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['locale'],
            $this->allowedValues['locale'] ?? null
        );
        $this->sot->setLocale($v);
        $this->assertEquals($v, $this->sot->getLocale());
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
     * Test attribute "progressive_profiling"
     *
     * @covers ::__construct
     * @covers ::getProgressiveProfiling
     * @covers ::setProgressiveProfiling
     */
    public function testPropertyProgressiveProfiling(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['progressive_profiling'],
            $this->allowedValues['progressive_profiling'] ?? null
        );
        $this->sot->setProgressiveProfiling($v);
        $this->assertEquals($v, $this->sot->getProgressiveProfiling());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "theme"
     *
     * @covers ::__construct
     * @covers ::getTheme
     * @covers ::setTheme
     */
    public function testPropertyTheme(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['theme'],
            $this->allowedValues['theme'] ?? null
        );
        $this->sot->setTheme($v);
        $this->assertEquals($v, $this->sot->getTheme());
        // $this->markTestIncomplete('Not implemented');
    }
}
