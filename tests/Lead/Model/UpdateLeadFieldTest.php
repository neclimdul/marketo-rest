<?php
/**
 * UpdateLeadFieldTest
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
use NecLimDul\MarketoRest\Lead\Model\UpdateLeadField;
use PHPUnit\Framework\TestCase;

/**
 * UpdateLeadFieldTest Class Doc Comment
 *
 * @category    Class
 * @description Lead field record for update
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Lead\Model\UpdateLeadField
 */
class UpdateLeadFieldTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\UpdateLeadField
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'display_name' => 'string',
        'description' => 'string',
        'is_hidden' => 'bool',
        'is_html_encoding_in_email' => 'bool',
        'is_sensitive' => 'bool',
];

    /**
     * @var \Faker\Generator
     */
    private $faker;

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
        $this->sot = new UpdateLeadField($data);
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
            $model = new $type();
            $types = $type::swaggerTypes();
            foreach ($model->listInvalidProperties() as $field => $reason) {
                // @todo get allowed values? ((getter))AllowedValues
                // @phpstan-ignore-next-line
                $model[$field] = $this->getFakeValue($types[$field], null);
            }
            return $model;
        }
        $this->markTestSkipped('This type is not mocked yet: ' . $type);
    }

    /**
     * Test "UpdateLeadField"
     *
     * @covers ::__construct
     */
    public function testUpdateLeadField(): void
    {
        $this->assertInstanceOf(UpdateLeadField::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, UpdateLeadField::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['display_name']);
        $this->assertEquals(null, $formats['description']);
        $this->assertEquals(null, $formats['is_hidden']);
        $this->assertEquals(null, $formats['is_html_encoding_in_email']);
        $this->assertEquals(null, $formats['is_sensitive']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('displayName', $formats['display_name']);
        $this->assertEquals('description', $formats['description']);
        $this->assertEquals('isHidden', $formats['is_hidden']);
        $this->assertEquals('isHtmlEncodingInEmail', $formats['is_html_encoding_in_email']);
        $this->assertEquals('isSensitive', $formats['is_sensitive']);
    }

    /**
     * @covers ::getters
     * @covers ::setters
     */
    public function testGettersSetters(): void
    {
        $getters = $this->sot->getters();
        $setters = $this->sot->setters();
        foreach (array_keys($this->types) as $field) {
            $this->assertTrue(isset($setters[$field]));
            $this->assertTrue(isset($getters[$field]));
            $this->assertTrue(
                method_exists($this->sot, $getters[$field]),
                'Getter exists on model.'
            );
            $this->assertTrue(
                method_exists($this->sot, $setters[$field]),
                'Setter exists on model.'
            );
        }
    }

    /**
     * @covers ::getModelName
     */
    public function testGetModelName(): void
    {
        $this->assertEquals('UpdateLeadField', $this->sot->getModelName());
    }

    /**
     * @covers ::listInvalidProperties
     * @covers ::valid
     */
    public function testValid(): void
    {
        $this->markTestIncomplete('TODO');
    }

    /**
     * @covers ::setAdditionalProperties
     * @covers ::setAdditionalProperty
     * @covers ::getAdditionalProperties
     */
    public function testAdditionalProperties(): void
    {
        $this->markTestIncomplete('TODO');
    }

    /**
     * @covers ::jsonSerialize
     * @covers ::__toString
     */
    public function testJson(): void
    {
        // Some minimal tests that json generates well.
        $json = json_encode($this->sot);
        $this->assertIsString($json, 'Json encoded');
        $json = json_decode($json);
        $string = json_decode((string) $this->sot);
        $this->assertEquals(
            $json,
            $string
        );
        $this->assertInstanceOf(\stdClass::class, $json);
        $this->assertInstanceOf(\stdClass::class, $string);
    }

    /**
     * Test attribute "display_name"
     *
     * @covers ::__construct
     * @covers ::getDisplayName
     * @covers ::setDisplayName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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
        $this->sot->setDisplayName(null);
        $this->assertNull($this->sot->getDisplayName());
        $this->sot->setDisplayName($v);

        $this->assertEquals($v, $this->sot['display_name']);
        $v = $this->getFakeValue(
            $this->types['display_name'],
            $this->allowedValues['display_name'] ?? null
        );
        $this->sot['display_name'] = $v;
        $this->assertEquals($v, $this->sot['display_name']);
        $this->assertTrue(isset($this->sot['display_name']));
        unset($this->sot['display_name']);
        $this->assertFalse(isset($this->sot['display_name']));
        $this->sot['display_name'] = $v;
        $this->assertEquals($v, $this->sot['display_name']);
        $this->assertTrue(isset($this->sot['display_name']));
    }

    /**
     * Test attribute "description"
     *
     * @covers ::__construct
     * @covers ::getDescription
     * @covers ::setDescription
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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
        $this->sot->setDescription(null);
        $this->assertNull($this->sot->getDescription());
        $this->sot->setDescription($v);

        $this->assertEquals($v, $this->sot['description']);
        $v = $this->getFakeValue(
            $this->types['description'],
            $this->allowedValues['description'] ?? null
        );
        $this->sot['description'] = $v;
        $this->assertEquals($v, $this->sot['description']);
        $this->assertTrue(isset($this->sot['description']));
        unset($this->sot['description']);
        $this->assertFalse(isset($this->sot['description']));
        $this->sot['description'] = $v;
        $this->assertEquals($v, $this->sot['description']);
        $this->assertTrue(isset($this->sot['description']));
    }

    /**
     * Test attribute "is_hidden"
     *
     * @covers ::__construct
     * @covers ::getIsHidden
     * @covers ::setIsHidden
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyIsHidden(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_hidden'],
            $this->allowedValues['is_hidden'] ?? null
        );
        $this->sot->setIsHidden($v);
        $this->assertEquals($v, $this->sot->getIsHidden());
        $this->sot->setIsHidden(null);
        $this->assertNull($this->sot->getIsHidden());
        $this->sot->setIsHidden($v);

        $this->assertEquals($v, $this->sot['is_hidden']);
        $v = $this->getFakeValue(
            $this->types['is_hidden'],
            $this->allowedValues['is_hidden'] ?? null
        );
        $this->sot['is_hidden'] = $v;
        $this->assertEquals($v, $this->sot['is_hidden']);
        $this->assertTrue(isset($this->sot['is_hidden']));
        unset($this->sot['is_hidden']);
        $this->assertFalse(isset($this->sot['is_hidden']));
        $this->sot['is_hidden'] = $v;
        $this->assertEquals($v, $this->sot['is_hidden']);
        $this->assertTrue(isset($this->sot['is_hidden']));
    }

    /**
     * Test attribute "is_html_encoding_in_email"
     *
     * @covers ::__construct
     * @covers ::getIsHtmlEncodingInEmail
     * @covers ::setIsHtmlEncodingInEmail
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyIsHtmlEncodingInEmail(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_html_encoding_in_email'],
            $this->allowedValues['is_html_encoding_in_email'] ?? null
        );
        $this->sot->setIsHtmlEncodingInEmail($v);
        $this->assertEquals($v, $this->sot->getIsHtmlEncodingInEmail());
        $this->sot->setIsHtmlEncodingInEmail(null);
        $this->assertNull($this->sot->getIsHtmlEncodingInEmail());
        $this->sot->setIsHtmlEncodingInEmail($v);

        $this->assertEquals($v, $this->sot['is_html_encoding_in_email']);
        $v = $this->getFakeValue(
            $this->types['is_html_encoding_in_email'],
            $this->allowedValues['is_html_encoding_in_email'] ?? null
        );
        $this->sot['is_html_encoding_in_email'] = $v;
        $this->assertEquals($v, $this->sot['is_html_encoding_in_email']);
        $this->assertTrue(isset($this->sot['is_html_encoding_in_email']));
        unset($this->sot['is_html_encoding_in_email']);
        $this->assertFalse(isset($this->sot['is_html_encoding_in_email']));
        $this->sot['is_html_encoding_in_email'] = $v;
        $this->assertEquals($v, $this->sot['is_html_encoding_in_email']);
        $this->assertTrue(isset($this->sot['is_html_encoding_in_email']));
    }

    /**
     * Test attribute "is_sensitive"
     *
     * @covers ::__construct
     * @covers ::getIsSensitive
     * @covers ::setIsSensitive
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyIsSensitive(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['is_sensitive'],
            $this->allowedValues['is_sensitive'] ?? null
        );
        $this->sot->setIsSensitive($v);
        $this->assertEquals($v, $this->sot->getIsSensitive());
        $this->sot->setIsSensitive(null);
        $this->assertNull($this->sot->getIsSensitive());
        $this->sot->setIsSensitive($v);

        $this->assertEquals($v, $this->sot['is_sensitive']);
        $v = $this->getFakeValue(
            $this->types['is_sensitive'],
            $this->allowedValues['is_sensitive'] ?? null
        );
        $this->sot['is_sensitive'] = $v;
        $this->assertEquals($v, $this->sot['is_sensitive']);
        $this->assertTrue(isset($this->sot['is_sensitive']));
        unset($this->sot['is_sensitive']);
        $this->assertFalse(isset($this->sot['is_sensitive']));
        $this->sot['is_sensitive'] = $v;
        $this->assertEquals($v, $this->sot['is_sensitive']);
        $this->assertTrue(isset($this->sot['is_sensitive']));
    }
}
