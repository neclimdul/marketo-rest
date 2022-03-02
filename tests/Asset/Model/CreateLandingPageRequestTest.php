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
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRequest
 */
class CreateLandingPageRequestTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRequest
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
            return new $type();
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
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRequest::class, $this->sot);
    }

    /**
     * Test attribute "custom_head_html"
     *
     * @covers ::__construct
     * @covers ::getCustomHeadHtml
     * @covers ::setCustomHeadHtml
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
     * Test attribute "facebook_og_tags"
     *
     * @covers ::__construct
     * @covers ::getFacebookOgTags
     * @covers ::setFacebookOgTags
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "folder"
     *
     * @covers ::__construct
     * @covers ::getFolder
     * @covers ::setFolder
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "keywords"
     *
     * @covers ::__construct
     * @covers ::getKeywords
     * @covers ::setKeywords
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "mobile_enabled"
     *
     * @covers ::__construct
     * @covers ::getMobileEnabled
     * @covers ::setMobileEnabled
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
     * Test attribute "prefill_form"
     *
     * @covers ::__construct
     * @covers ::getPrefillForm
     * @covers ::setPrefillForm
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "robots"
     *
     * @covers ::__construct
     * @covers ::getRobots
     * @covers ::setRobots
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "template"
     *
     * @covers ::__construct
     * @covers ::getTemplate
     * @covers ::setTemplate
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "title"
     *
     * @covers ::__construct
     * @covers ::getTitle
     * @covers ::setTitle
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "url_page_name"
     *
     * @covers ::__construct
     * @covers ::getUrlPageName
     * @covers ::setUrlPageName
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
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "workspace"
     *
     * @covers ::__construct
     * @covers ::getWorkspace
     * @covers ::setWorkspace
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
        // $this->markTestIncomplete('Not implemented');
    }
}
