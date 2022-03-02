<?php
/**
 * CreateLandingPageRequestTest
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
use NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRequest;
use PHPUnit\Framework\TestCase;

/**
 * CreateLandingPageRequestTest Class Doc Comment
 *
 * @category    Class
 * @description CreateLandingPageRequest
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefaultClass \NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRequest
 */
class CreateLandingPageRequestTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRequest
     */
    private $sot;

    /**
     * @var string[]
     */
    private $types = [
        'custom_head_html' => 'string',
        'description' => 'string',
        'facebook_og_tags' => 'string',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'keywords' => 'string',
        'mobile_enabled' => 'bool',
        'name' => 'string',
        'prefill_form' => 'bool',
        'robots' => 'string',
        'template' => 'int',
        'title' => 'string',
        'url_page_name' => 'string',
        'workspace' => 'string',
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
        $this->sot = new CreateLandingPageRequest($data);
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
     * Test "CreateLandingPageRequest"
     *
     * @covers ::__construct
     */
    public function testCreateLandingPageRequest(): void
    {
        $this->assertInstanceOf(CreateLandingPageRequest::class, $this->sot);
    }

    /**
     * @covers ::swaggerTypes
     */
    public function testSwaggerTypes(): void
    {
        $this->assertEquals($this->types, CreateLandingPageRequest::swaggerTypes());
    }

    /**
     * @covers ::swaggerFormats
     */
    public function testSwaggerFormats(): void
    {
        $formats = $this->sot->swaggerFormats();
        $this->assertEquals(null, $formats['custom_head_html']);
        $this->assertEquals(null, $formats['description']);
        $this->assertEquals(null, $formats['facebook_og_tags']);
        $this->assertEquals(null, $formats['folder']);
        $this->assertEquals(null, $formats['keywords']);
        $this->assertEquals(null, $formats['mobile_enabled']);
        $this->assertEquals(null, $formats['name']);
        $this->assertEquals(null, $formats['prefill_form']);
        $this->assertEquals(null, $formats['robots']);
        $this->assertEquals('int32', $formats['template']);
        $this->assertEquals(null, $formats['title']);
        $this->assertEquals(null, $formats['url_page_name']);
        $this->assertEquals(null, $formats['workspace']);
    }

    /**
     * @covers ::attributeMap
     */
    public function testAttributeMap(): void
    {
        $formats = $this->sot->attributeMap();
        $this->assertEquals('customHeadHTML', $formats['custom_head_html']);
        $this->assertEquals('description', $formats['description']);
        $this->assertEquals('facebookOgTags', $formats['facebook_og_tags']);
        $this->assertEquals('folder', $formats['folder']);
        $this->assertEquals('keywords', $formats['keywords']);
        $this->assertEquals('mobileEnabled', $formats['mobile_enabled']);
        $this->assertEquals('name', $formats['name']);
        $this->assertEquals('prefillForm', $formats['prefill_form']);
        $this->assertEquals('robots', $formats['robots']);
        $this->assertEquals('template', $formats['template']);
        $this->assertEquals('title', $formats['title']);
        $this->assertEquals('urlPageName', $formats['url_page_name']);
        $this->assertEquals('workspace', $formats['workspace']);
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
        $this->assertEquals('CreateLandingPageRequest', $this->sot->getModelName());
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
     * Test attribute "custom_head_html"
     *
     * @covers ::__construct
     * @covers ::getCustomHeadHtml
     * @covers ::setCustomHeadHtml
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyCustomHeadHtml(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['custom_head_html'],
            $this->allowedValues['custom_head_html'] ?? null
        );
        $this->sot->setCustomHeadHtml($v);
        $this->assertEquals($v, $this->sot->getCustomHeadHtml());
        $this->sot->setCustomHeadHtml(null);
        $this->assertNull($this->sot->getCustomHeadHtml());
        $this->sot->setCustomHeadHtml($v);

        $this->assertEquals($v, $this->sot['custom_head_html']);
        $v = $this->getFakeValue(
            $this->types['custom_head_html'],
            $this->allowedValues['custom_head_html'] ?? null
        );
        $this->sot['custom_head_html'] = $v;
        $this->assertEquals($v, $this->sot['custom_head_html']);
        $this->assertTrue(isset($this->sot['custom_head_html']));
        unset($this->sot['custom_head_html']);
        $this->assertFalse(isset($this->sot['custom_head_html']));
        $this->sot['custom_head_html'] = $v;
        $this->assertEquals($v, $this->sot['custom_head_html']);
        $this->assertTrue(isset($this->sot['custom_head_html']));
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
     * Test attribute "facebook_og_tags"
     *
     * @covers ::__construct
     * @covers ::getFacebookOgTags
     * @covers ::setFacebookOgTags
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyFacebookOgTags(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['facebook_og_tags'],
            $this->allowedValues['facebook_og_tags'] ?? null
        );
        $this->sot->setFacebookOgTags($v);
        $this->assertEquals($v, $this->sot->getFacebookOgTags());
        $this->sot->setFacebookOgTags(null);
        $this->assertNull($this->sot->getFacebookOgTags());
        $this->sot->setFacebookOgTags($v);

        $this->assertEquals($v, $this->sot['facebook_og_tags']);
        $v = $this->getFakeValue(
            $this->types['facebook_og_tags'],
            $this->allowedValues['facebook_og_tags'] ?? null
        );
        $this->sot['facebook_og_tags'] = $v;
        $this->assertEquals($v, $this->sot['facebook_og_tags']);
        $this->assertTrue(isset($this->sot['facebook_og_tags']));
        unset($this->sot['facebook_og_tags']);
        $this->assertFalse(isset($this->sot['facebook_og_tags']));
        $this->sot['facebook_og_tags'] = $v;
        $this->assertEquals($v, $this->sot['facebook_og_tags']);
        $this->assertTrue(isset($this->sot['facebook_og_tags']));
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
     * Test attribute "keywords"
     *
     * @covers ::__construct
     * @covers ::getKeywords
     * @covers ::setKeywords
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyKeywords(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['keywords'],
            $this->allowedValues['keywords'] ?? null
        );
        $this->sot->setKeywords($v);
        $this->assertEquals($v, $this->sot->getKeywords());
        $this->sot->setKeywords(null);
        $this->assertNull($this->sot->getKeywords());
        $this->sot->setKeywords($v);

        $this->assertEquals($v, $this->sot['keywords']);
        $v = $this->getFakeValue(
            $this->types['keywords'],
            $this->allowedValues['keywords'] ?? null
        );
        $this->sot['keywords'] = $v;
        $this->assertEquals($v, $this->sot['keywords']);
        $this->assertTrue(isset($this->sot['keywords']));
        unset($this->sot['keywords']);
        $this->assertFalse(isset($this->sot['keywords']));
        $this->sot['keywords'] = $v;
        $this->assertEquals($v, $this->sot['keywords']);
        $this->assertTrue(isset($this->sot['keywords']));
    }

    /**
     * Test attribute "mobile_enabled"
     *
     * @covers ::__construct
     * @covers ::getMobileEnabled
     * @covers ::setMobileEnabled
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyMobileEnabled(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['mobile_enabled'],
            $this->allowedValues['mobile_enabled'] ?? null
        );
        $this->sot->setMobileEnabled($v);
        $this->assertEquals($v, $this->sot->getMobileEnabled());
        $this->sot->setMobileEnabled(null);
        $this->assertNull($this->sot->getMobileEnabled());
        $this->sot->setMobileEnabled($v);

        $this->assertEquals($v, $this->sot['mobile_enabled']);
        $v = $this->getFakeValue(
            $this->types['mobile_enabled'],
            $this->allowedValues['mobile_enabled'] ?? null
        );
        $this->sot['mobile_enabled'] = $v;
        $this->assertEquals($v, $this->sot['mobile_enabled']);
        $this->assertTrue(isset($this->sot['mobile_enabled']));
        unset($this->sot['mobile_enabled']);
        $this->assertFalse(isset($this->sot['mobile_enabled']));
        $this->sot['mobile_enabled'] = $v;
        $this->assertEquals($v, $this->sot['mobile_enabled']);
        $this->assertTrue(isset($this->sot['mobile_enabled']));
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
     * Test attribute "prefill_form"
     *
     * @covers ::__construct
     * @covers ::getPrefillForm
     * @covers ::setPrefillForm
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyPrefillForm(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['prefill_form'],
            $this->allowedValues['prefill_form'] ?? null
        );
        $this->sot->setPrefillForm($v);
        $this->assertEquals($v, $this->sot->getPrefillForm());
        $this->sot->setPrefillForm(null);
        $this->assertNull($this->sot->getPrefillForm());
        $this->sot->setPrefillForm($v);

        $this->assertEquals($v, $this->sot['prefill_form']);
        $v = $this->getFakeValue(
            $this->types['prefill_form'],
            $this->allowedValues['prefill_form'] ?? null
        );
        $this->sot['prefill_form'] = $v;
        $this->assertEquals($v, $this->sot['prefill_form']);
        $this->assertTrue(isset($this->sot['prefill_form']));
        unset($this->sot['prefill_form']);
        $this->assertFalse(isset($this->sot['prefill_form']));
        $this->sot['prefill_form'] = $v;
        $this->assertEquals($v, $this->sot['prefill_form']);
        $this->assertTrue(isset($this->sot['prefill_form']));
    }

    /**
     * Test attribute "robots"
     *
     * @covers ::__construct
     * @covers ::getRobots
     * @covers ::setRobots
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyRobots(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['robots'],
            $this->allowedValues['robots'] ?? null
        );
        $this->sot->setRobots($v);
        $this->assertEquals($v, $this->sot->getRobots());
        $this->sot->setRobots(null);
        $this->assertNull($this->sot->getRobots());
        $this->sot->setRobots($v);

        $this->assertEquals($v, $this->sot['robots']);
        $v = $this->getFakeValue(
            $this->types['robots'],
            $this->allowedValues['robots'] ?? null
        );
        $this->sot['robots'] = $v;
        $this->assertEquals($v, $this->sot['robots']);
        $this->assertTrue(isset($this->sot['robots']));
        unset($this->sot['robots']);
        $this->assertFalse(isset($this->sot['robots']));
        $this->sot['robots'] = $v;
        $this->assertEquals($v, $this->sot['robots']);
        $this->assertTrue(isset($this->sot['robots']));
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
     * Test attribute "title"
     *
     * @covers ::__construct
     * @covers ::getTitle
     * @covers ::setTitle
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyTitle(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['title'],
            $this->allowedValues['title'] ?? null
        );
        $this->sot->setTitle($v);
        $this->assertEquals($v, $this->sot->getTitle());
        $this->sot->setTitle(null);
        $this->assertNull($this->sot->getTitle());
        $this->sot->setTitle($v);

        $this->assertEquals($v, $this->sot['title']);
        $v = $this->getFakeValue(
            $this->types['title'],
            $this->allowedValues['title'] ?? null
        );
        $this->sot['title'] = $v;
        $this->assertEquals($v, $this->sot['title']);
        $this->assertTrue(isset($this->sot['title']));
        unset($this->sot['title']);
        $this->assertFalse(isset($this->sot['title']));
        $this->sot['title'] = $v;
        $this->assertEquals($v, $this->sot['title']);
        $this->assertTrue(isset($this->sot['title']));
    }

    /**
     * Test attribute "url_page_name"
     *
     * @covers ::__construct
     * @covers ::getUrlPageName
     * @covers ::setUrlPageName
     * @covers ::offsetExists
     * @covers ::offsetGet
     * @covers ::offsetSet
     * @covers ::offsetUnset
     */
    public function testPropertyUrlPageName(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['url_page_name'],
            $this->allowedValues['url_page_name'] ?? null
        );
        $this->sot->setUrlPageName($v);
        $this->assertEquals($v, $this->sot->getUrlPageName());
        $this->sot->setUrlPageName(null);
        $this->assertNull($this->sot->getUrlPageName());
        $this->sot->setUrlPageName($v);

        $this->assertEquals($v, $this->sot['url_page_name']);
        $v = $this->getFakeValue(
            $this->types['url_page_name'],
            $this->allowedValues['url_page_name'] ?? null
        );
        $this->sot['url_page_name'] = $v;
        $this->assertEquals($v, $this->sot['url_page_name']);
        $this->assertTrue(isset($this->sot['url_page_name']));
        unset($this->sot['url_page_name']);
        $this->assertFalse(isset($this->sot['url_page_name']));
        $this->sot['url_page_name'] = $v;
        $this->assertEquals($v, $this->sot['url_page_name']);
        $this->assertTrue(isset($this->sot['url_page_name']));
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
}
