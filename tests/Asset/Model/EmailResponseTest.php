<?php
/**
 * EmailResponseTest
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
use NecLimDul\MarketoRest\Asset\Model\EmailResponse;
use PHPUnit\Framework\TestCase;

/**
 * EmailResponseTest Class Doc Comment
 *
 * @category    Class
 * @description EmailResponse
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\EmailResponse
 */
class EmailResponseTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\EmailResponse
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'created_at' => '\DateTime',
        'description' => 'string',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'from_email' => '\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField',
        'from_name' => '\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField',
        'id' => 'int',
        'name' => 'string',
        'operational' => 'bool',
        'publish_to_msi' => 'bool',
        'reply_email' => '\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField',
        'status' => 'string',
        'subject' => '\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField',
        'template' => 'int',
        'text_only' => 'bool',
        'updated_at' => '\DateTime',
        'url' => 'string',
        'version' => 'int',
        'web_view' => 'bool',
        'workspace' => 'string',
        'auto_copy_to_text' => 'bool',
        'pre_header' => 'string',
        'cc_fields' => '\NecLimDul\MarketoRest\Asset\Model\EmailCCFields[]',
];

    /**
     * @var \Faker\Generator
     */
    private $faker;

    /**
     * @var scalar[][]
     */
    private $allowedValues = [
        'version' => [
            '1' => 1,
            '2' => 2,
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
        $this->sot = new EmailResponse($data);
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
     * Test "EmailResponse"
     *
     * @covers ::__construct
     */
    public function testEmailResponse(): void
    {
        $this->assertInstanceOf(EmailResponse::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, EmailResponse::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals('date-time', $formats['created_at']);
        $this->assertEquals(null, $formats['description']);
        $this->assertEquals(null, $formats['folder']);
        $this->assertEquals(null, $formats['from_email']);
        $this->assertEquals(null, $formats['from_name']);
        $this->assertEquals('int64', $formats['id']);
        $this->assertEquals(null, $formats['name']);
        $this->assertEquals(null, $formats['operational']);
        $this->assertEquals(null, $formats['publish_to_msi']);
        $this->assertEquals(null, $formats['reply_email']);
        $this->assertEquals(null, $formats['status']);
        $this->assertEquals(null, $formats['subject']);
        $this->assertEquals('int32', $formats['template']);
        $this->assertEquals(null, $formats['text_only']);
        $this->assertEquals('date-time', $formats['updated_at']);
        $this->assertEquals(null, $formats['url']);
        $this->assertEquals('int32', $formats['version']);
        $this->assertEquals(null, $formats['web_view']);
        $this->assertEquals(null, $formats['workspace']);
        $this->assertEquals(null, $formats['auto_copy_to_text']);
        $this->assertEquals(null, $formats['pre_header']);
        $this->assertEquals(null, $formats['cc_fields']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('createdAt', $formats['created_at']);
        $this->assertEquals('description', $formats['description']);
        $this->assertEquals('folder', $formats['folder']);
        $this->assertEquals('fromEmail', $formats['from_email']);
        $this->assertEquals('fromName', $formats['from_name']);
        $this->assertEquals('id', $formats['id']);
        $this->assertEquals('name', $formats['name']);
        $this->assertEquals('operational', $formats['operational']);
        $this->assertEquals('publishToMSI', $formats['publish_to_msi']);
        $this->assertEquals('replyEmail', $formats['reply_email']);
        $this->assertEquals('status', $formats['status']);
        $this->assertEquals('subject', $formats['subject']);
        $this->assertEquals('template', $formats['template']);
        $this->assertEquals('textOnly', $formats['text_only']);
        $this->assertEquals('updatedAt', $formats['updated_at']);
        $this->assertEquals('url', $formats['url']);
        $this->assertEquals('version', $formats['version']);
        $this->assertEquals('webView', $formats['web_view']);
        $this->assertEquals('workspace', $formats['workspace']);
        $this->assertEquals('autoCopyToText', $formats['auto_copy_to_text']);
        $this->assertEquals('preHeader', $formats['pre_header']);
        $this->assertEquals('ccFields', $formats['cc_fields']);
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
        $this->assertEquals('EmailResponse', $this->sot->getModelName());
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
     * Test attribute "created_at"
     *
     * @covers ::__construct
     * @covers ::getCreatedAt
     * @covers ::setCreatedAt
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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
        $this->sot->setCreatedAt(null);
        $this->assertNull($this->sot->getCreatedAt());
        $this->sot->setCreatedAt($v);

        $this->assertEquals($v, $this->sot['created_at']);
        $v = $this->getFakeValue(
            $this->types['created_at'],
            $this->allowedValues['created_at'] ?? null
        );
        $this->sot['created_at'] = $v;
        $this->assertEquals($v, $this->sot['created_at']);
        $this->assertTrue(isset($this->sot['created_at']));
        unset($this->sot['created_at']);
        $this->assertFalse(isset($this->sot['created_at']));
        $this->sot['created_at'] = $v;
        $this->assertEquals($v, $this->sot['created_at']);
        $this->assertTrue(isset($this->sot['created_at']));
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
     * Test attribute "folder"
     *
     * @covers ::__construct
     * @covers ::getFolder
     * @covers ::setFolder
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyFolder(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['folder'],
            $this->allowedValues['folder'] ?? null
        );
        $this->sot->setFolder($v);
        $this->assertEquals($v, $this->sot->getFolder());

        $this->assertEquals($v, $this->sot['folder']);
        $v = $this->getFakeValue(
            $this->types['folder'],
            $this->allowedValues['folder'] ?? null
        );
        $this->sot['folder'] = $v;
        $this->assertEquals($v, $this->sot['folder']);
        $this->assertTrue(isset($this->sot['folder']));
        unset($this->sot['folder']);
        $this->assertFalse(isset($this->sot['folder']));
        $this->sot['folder'] = $v;
        $this->assertEquals($v, $this->sot['folder']);
        $this->assertTrue(isset($this->sot['folder']));
    }

    /**
     * Test attribute "from_email"
     *
     * @covers ::__construct
     * @covers ::getFromEmail
     * @covers ::setFromEmail
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyFromEmail(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['from_email'],
            $this->allowedValues['from_email'] ?? null
        );
        $this->sot->setFromEmail($v);
        $this->assertEquals($v, $this->sot->getFromEmail());

        $this->assertEquals($v, $this->sot['from_email']);
        $v = $this->getFakeValue(
            $this->types['from_email'],
            $this->allowedValues['from_email'] ?? null
        );
        $this->sot['from_email'] = $v;
        $this->assertEquals($v, $this->sot['from_email']);
        $this->assertTrue(isset($this->sot['from_email']));
        unset($this->sot['from_email']);
        $this->assertFalse(isset($this->sot['from_email']));
        $this->sot['from_email'] = $v;
        $this->assertEquals($v, $this->sot['from_email']);
        $this->assertTrue(isset($this->sot['from_email']));
    }

    /**
     * Test attribute "from_name"
     *
     * @covers ::__construct
     * @covers ::getFromName
     * @covers ::setFromName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyFromName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['from_name'],
            $this->allowedValues['from_name'] ?? null
        );
        $this->sot->setFromName($v);
        $this->assertEquals($v, $this->sot->getFromName());

        $this->assertEquals($v, $this->sot['from_name']);
        $v = $this->getFakeValue(
            $this->types['from_name'],
            $this->allowedValues['from_name'] ?? null
        );
        $this->sot['from_name'] = $v;
        $this->assertEquals($v, $this->sot['from_name']);
        $this->assertTrue(isset($this->sot['from_name']));
        unset($this->sot['from_name']);
        $this->assertFalse(isset($this->sot['from_name']));
        $this->sot['from_name'] = $v;
        $this->assertEquals($v, $this->sot['from_name']);
        $this->assertTrue(isset($this->sot['from_name']));
    }

    /**
     * Test attribute "id"
     *
     * @covers ::__construct
     * @covers ::getId
     * @covers ::setId
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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
        $this->sot->setId(null);
        $this->assertNull($this->sot->getId());
        $this->sot->setId($v);

        $this->assertEquals($v, $this->sot['id']);
        $v = $this->getFakeValue(
            $this->types['id'],
            $this->allowedValues['id'] ?? null
        );
        $this->sot['id'] = $v;
        $this->assertEquals($v, $this->sot['id']);
        $this->assertTrue(isset($this->sot['id']));
        unset($this->sot['id']);
        $this->assertFalse(isset($this->sot['id']));
        $this->sot['id'] = $v;
        $this->assertEquals($v, $this->sot['id']);
        $this->assertTrue(isset($this->sot['id']));
    }

    /**
     * Test attribute "name"
     *
     * @covers ::__construct
     * @covers ::getName
     * @covers ::setName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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
        $this->sot->setName(null);
        $this->assertNull($this->sot->getName());
        $this->sot->setName($v);

        $this->assertEquals($v, $this->sot['name']);
        $v = $this->getFakeValue(
            $this->types['name'],
            $this->allowedValues['name'] ?? null
        );
        $this->sot['name'] = $v;
        $this->assertEquals($v, $this->sot['name']);
        $this->assertTrue(isset($this->sot['name']));
        unset($this->sot['name']);
        $this->assertFalse(isset($this->sot['name']));
        $this->sot['name'] = $v;
        $this->assertEquals($v, $this->sot['name']);
        $this->assertTrue(isset($this->sot['name']));
    }

    /**
     * Test attribute "operational"
     *
     * @covers ::__construct
     * @covers ::getOperational
     * @covers ::setOperational
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyOperational(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['operational'],
            $this->allowedValues['operational'] ?? null
        );
        $this->sot->setOperational($v);
        $this->assertEquals($v, $this->sot->getOperational());

        $this->assertEquals($v, $this->sot['operational']);
        $v = $this->getFakeValue(
            $this->types['operational'],
            $this->allowedValues['operational'] ?? null
        );
        $this->sot['operational'] = $v;
        $this->assertEquals($v, $this->sot['operational']);
        $this->assertTrue(isset($this->sot['operational']));
        unset($this->sot['operational']);
        $this->assertFalse(isset($this->sot['operational']));
        $this->sot['operational'] = $v;
        $this->assertEquals($v, $this->sot['operational']);
        $this->assertTrue(isset($this->sot['operational']));
    }

    /**
     * Test attribute "publish_to_msi"
     *
     * @covers ::__construct
     * @covers ::getPublishToMsi
     * @covers ::setPublishToMsi
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyPublishToMsi(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['publish_to_msi'],
            $this->allowedValues['publish_to_msi'] ?? null
        );
        $this->sot->setPublishToMsi($v);
        $this->assertEquals($v, $this->sot->getPublishToMsi());

        $this->assertEquals($v, $this->sot['publish_to_msi']);
        $v = $this->getFakeValue(
            $this->types['publish_to_msi'],
            $this->allowedValues['publish_to_msi'] ?? null
        );
        $this->sot['publish_to_msi'] = $v;
        $this->assertEquals($v, $this->sot['publish_to_msi']);
        $this->assertTrue(isset($this->sot['publish_to_msi']));
        unset($this->sot['publish_to_msi']);
        $this->assertFalse(isset($this->sot['publish_to_msi']));
        $this->sot['publish_to_msi'] = $v;
        $this->assertEquals($v, $this->sot['publish_to_msi']);
        $this->assertTrue(isset($this->sot['publish_to_msi']));
    }

    /**
     * Test attribute "reply_email"
     *
     * @covers ::__construct
     * @covers ::getReplyEmail
     * @covers ::setReplyEmail
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyReplyEmail(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['reply_email'],
            $this->allowedValues['reply_email'] ?? null
        );
        $this->sot->setReplyEmail($v);
        $this->assertEquals($v, $this->sot->getReplyEmail());

        $this->assertEquals($v, $this->sot['reply_email']);
        $v = $this->getFakeValue(
            $this->types['reply_email'],
            $this->allowedValues['reply_email'] ?? null
        );
        $this->sot['reply_email'] = $v;
        $this->assertEquals($v, $this->sot['reply_email']);
        $this->assertTrue(isset($this->sot['reply_email']));
        unset($this->sot['reply_email']);
        $this->assertFalse(isset($this->sot['reply_email']));
        $this->sot['reply_email'] = $v;
        $this->assertEquals($v, $this->sot['reply_email']);
        $this->assertTrue(isset($this->sot['reply_email']));
    }

    /**
     * Test attribute "status"
     *
     * @covers ::__construct
     * @covers ::getStatus
     * @covers ::setStatus
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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

        $this->assertEquals($v, $this->sot['status']);
        $v = $this->getFakeValue(
            $this->types['status'],
            $this->allowedValues['status'] ?? null
        );
        $this->sot['status'] = $v;
        $this->assertEquals($v, $this->sot['status']);
        $this->assertTrue(isset($this->sot['status']));
        unset($this->sot['status']);
        $this->assertFalse(isset($this->sot['status']));
        $this->sot['status'] = $v;
        $this->assertEquals($v, $this->sot['status']);
        $this->assertTrue(isset($this->sot['status']));
    }

    /**
     * Test attribute "subject"
     *
     * @covers ::__construct
     * @covers ::getSubject
     * @covers ::setSubject
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertySubject(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['subject'],
            $this->allowedValues['subject'] ?? null
        );
        $this->sot->setSubject($v);
        $this->assertEquals($v, $this->sot->getSubject());

        $this->assertEquals($v, $this->sot['subject']);
        $v = $this->getFakeValue(
            $this->types['subject'],
            $this->allowedValues['subject'] ?? null
        );
        $this->sot['subject'] = $v;
        $this->assertEquals($v, $this->sot['subject']);
        $this->assertTrue(isset($this->sot['subject']));
        unset($this->sot['subject']);
        $this->assertFalse(isset($this->sot['subject']));
        $this->sot['subject'] = $v;
        $this->assertEquals($v, $this->sot['subject']);
        $this->assertTrue(isset($this->sot['subject']));
    }

    /**
     * Test attribute "template"
     *
     * @covers ::__construct
     * @covers ::getTemplate
     * @covers ::setTemplate
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyTemplate(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['template'],
            $this->allowedValues['template'] ?? null
        );
        $this->sot->setTemplate($v);
        $this->assertEquals($v, $this->sot->getTemplate());

        $this->assertEquals($v, $this->sot['template']);
        $v = $this->getFakeValue(
            $this->types['template'],
            $this->allowedValues['template'] ?? null
        );
        $this->sot['template'] = $v;
        $this->assertEquals($v, $this->sot['template']);
        $this->assertTrue(isset($this->sot['template']));
        unset($this->sot['template']);
        $this->assertFalse(isset($this->sot['template']));
        $this->sot['template'] = $v;
        $this->assertEquals($v, $this->sot['template']);
        $this->assertTrue(isset($this->sot['template']));
    }

    /**
     * Test attribute "text_only"
     *
     * @covers ::__construct
     * @covers ::getTextOnly
     * @covers ::setTextOnly
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyTextOnly(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['text_only'],
            $this->allowedValues['text_only'] ?? null
        );
        $this->sot->setTextOnly($v);
        $this->assertEquals($v, $this->sot->getTextOnly());

        $this->assertEquals($v, $this->sot['text_only']);
        $v = $this->getFakeValue(
            $this->types['text_only'],
            $this->allowedValues['text_only'] ?? null
        );
        $this->sot['text_only'] = $v;
        $this->assertEquals($v, $this->sot['text_only']);
        $this->assertTrue(isset($this->sot['text_only']));
        unset($this->sot['text_only']);
        $this->assertFalse(isset($this->sot['text_only']));
        $this->sot['text_only'] = $v;
        $this->assertEquals($v, $this->sot['text_only']);
        $this->assertTrue(isset($this->sot['text_only']));
    }

    /**
     * Test attribute "updated_at"
     *
     * @covers ::__construct
     * @covers ::getUpdatedAt
     * @covers ::setUpdatedAt
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
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
        $this->sot->setUpdatedAt(null);
        $this->assertNull($this->sot->getUpdatedAt());
        $this->sot->setUpdatedAt($v);

        $this->assertEquals($v, $this->sot['updated_at']);
        $v = $this->getFakeValue(
            $this->types['updated_at'],
            $this->allowedValues['updated_at'] ?? null
        );
        $this->sot['updated_at'] = $v;
        $this->assertEquals($v, $this->sot['updated_at']);
        $this->assertTrue(isset($this->sot['updated_at']));
        unset($this->sot['updated_at']);
        $this->assertFalse(isset($this->sot['updated_at']));
        $this->sot['updated_at'] = $v;
        $this->assertEquals($v, $this->sot['updated_at']);
        $this->assertTrue(isset($this->sot['updated_at']));
    }

    /**
     * Test attribute "url"
     *
     * @covers ::__construct
     * @covers ::getUrl
     * @covers ::setUrl
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyUrl(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['url'],
            $this->allowedValues['url'] ?? null
        );
        $this->sot->setUrl($v);
        $this->assertEquals($v, $this->sot->getUrl());
        $this->sot->setUrl(null);
        $this->assertNull($this->sot->getUrl());
        $this->sot->setUrl($v);

        $this->assertEquals($v, $this->sot['url']);
        $v = $this->getFakeValue(
            $this->types['url'],
            $this->allowedValues['url'] ?? null
        );
        $this->sot['url'] = $v;
        $this->assertEquals($v, $this->sot['url']);
        $this->assertTrue(isset($this->sot['url']));
        unset($this->sot['url']);
        $this->assertFalse(isset($this->sot['url']));
        $this->sot['url'] = $v;
        $this->assertEquals($v, $this->sot['url']);
        $this->assertTrue(isset($this->sot['url']));
    }

    /**
     * Test attribute "version"
     *
     * @covers ::__construct
     * @covers ::getVersion
     * @covers ::setVersion
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyVersion(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['version'],
            $this->allowedValues['version'] ?? null
        );
        $this->sot->setVersion($v);
        $this->assertEquals($v, $this->sot->getVersion());
        $this->sot->setVersion(null);
        $this->assertNull($this->sot->getVersion());
        $this->sot->setVersion($v);

        $this->assertEquals($v, $this->sot['version']);
        $v = $this->getFakeValue(
            $this->types['version'],
            $this->allowedValues['version'] ?? null
        );
        $this->sot['version'] = $v;
        $this->assertEquals($v, $this->sot['version']);
        $this->assertTrue(isset($this->sot['version']));
        unset($this->sot['version']);
        $this->assertFalse(isset($this->sot['version']));
        $this->sot['version'] = $v;
        $this->assertEquals($v, $this->sot['version']);
        $this->assertTrue(isset($this->sot['version']));
    }

    /**
     * Test attribute "web_view"
     *
     * @covers ::__construct
     * @covers ::getWebView
     * @covers ::setWebView
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyWebView(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['web_view'],
            $this->allowedValues['web_view'] ?? null
        );
        $this->sot->setWebView($v);
        $this->assertEquals($v, $this->sot->getWebView());

        $this->assertEquals($v, $this->sot['web_view']);
        $v = $this->getFakeValue(
            $this->types['web_view'],
            $this->allowedValues['web_view'] ?? null
        );
        $this->sot['web_view'] = $v;
        $this->assertEquals($v, $this->sot['web_view']);
        $this->assertTrue(isset($this->sot['web_view']));
        unset($this->sot['web_view']);
        $this->assertFalse(isset($this->sot['web_view']));
        $this->sot['web_view'] = $v;
        $this->assertEquals($v, $this->sot['web_view']);
        $this->assertTrue(isset($this->sot['web_view']));
    }

    /**
     * Test attribute "workspace"
     *
     * @covers ::__construct
     * @covers ::getWorkspace
     * @covers ::setWorkspace
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyWorkspace(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['workspace'],
            $this->allowedValues['workspace'] ?? null
        );
        $this->sot->setWorkspace($v);
        $this->assertEquals($v, $this->sot->getWorkspace());
        $this->sot->setWorkspace(null);
        $this->assertNull($this->sot->getWorkspace());
        $this->sot->setWorkspace($v);

        $this->assertEquals($v, $this->sot['workspace']);
        $v = $this->getFakeValue(
            $this->types['workspace'],
            $this->allowedValues['workspace'] ?? null
        );
        $this->sot['workspace'] = $v;
        $this->assertEquals($v, $this->sot['workspace']);
        $this->assertTrue(isset($this->sot['workspace']));
        unset($this->sot['workspace']);
        $this->assertFalse(isset($this->sot['workspace']));
        $this->sot['workspace'] = $v;
        $this->assertEquals($v, $this->sot['workspace']);
        $this->assertTrue(isset($this->sot['workspace']));
    }

    /**
     * Test attribute "auto_copy_to_text"
     *
     * @covers ::__construct
     * @covers ::getAutoCopyToText
     * @covers ::setAutoCopyToText
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyAutoCopyToText(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['auto_copy_to_text'],
            $this->allowedValues['auto_copy_to_text'] ?? null
        );
        $this->sot->setAutoCopyToText($v);
        $this->assertEquals($v, $this->sot->getAutoCopyToText());

        $this->assertEquals($v, $this->sot['auto_copy_to_text']);
        $v = $this->getFakeValue(
            $this->types['auto_copy_to_text'],
            $this->allowedValues['auto_copy_to_text'] ?? null
        );
        $this->sot['auto_copy_to_text'] = $v;
        $this->assertEquals($v, $this->sot['auto_copy_to_text']);
        $this->assertTrue(isset($this->sot['auto_copy_to_text']));
        unset($this->sot['auto_copy_to_text']);
        $this->assertFalse(isset($this->sot['auto_copy_to_text']));
        $this->sot['auto_copy_to_text'] = $v;
        $this->assertEquals($v, $this->sot['auto_copy_to_text']);
        $this->assertTrue(isset($this->sot['auto_copy_to_text']));
    }

    /**
     * Test attribute "pre_header"
     *
     * @covers ::__construct
     * @covers ::getPreHeader
     * @covers ::setPreHeader
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyPreHeader(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['pre_header'],
            $this->allowedValues['pre_header'] ?? null
        );
        $this->sot->setPreHeader($v);
        $this->assertEquals($v, $this->sot->getPreHeader());

        $this->assertEquals($v, $this->sot['pre_header']);
        $v = $this->getFakeValue(
            $this->types['pre_header'],
            $this->allowedValues['pre_header'] ?? null
        );
        $this->sot['pre_header'] = $v;
        $this->assertEquals($v, $this->sot['pre_header']);
        $this->assertTrue(isset($this->sot['pre_header']));
        unset($this->sot['pre_header']);
        $this->assertFalse(isset($this->sot['pre_header']));
        $this->sot['pre_header'] = $v;
        $this->assertEquals($v, $this->sot['pre_header']);
        $this->assertTrue(isset($this->sot['pre_header']));
    }

    /**
     * Test attribute "cc_fields"
     *
     * @covers ::__construct
     * @covers ::getCcFields
     * @covers ::setCcFields
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyCcFields(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['cc_fields'],
            $this->allowedValues['cc_fields'] ?? null
        );
        $this->sot->setCcFields($v);
        $this->assertEquals($v, $this->sot->getCcFields());
        $this->sot->setCcFields(null);
        $this->assertNull($this->sot->getCcFields());
        $this->sot->setCcFields($v);

        $this->assertEquals($v, $this->sot['cc_fields']);
        $v = $this->getFakeValue(
            $this->types['cc_fields'],
            $this->allowedValues['cc_fields'] ?? null
        );
        $this->sot['cc_fields'] = $v;
        $this->assertEquals($v, $this->sot['cc_fields']);
        $this->assertTrue(isset($this->sot['cc_fields']));
        unset($this->sot['cc_fields']);
        $this->assertFalse(isset($this->sot['cc_fields']));
        $this->sot['cc_fields'] = $v;
        $this->assertEquals($v, $this->sot['cc_fields']);
        $this->assertTrue(isset($this->sot['cc_fields']));
    }
}
