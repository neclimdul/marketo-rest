<?php
/**
 * LandingPageContentResponseTest
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
use NecLimDul\MarketoRest\Asset\Model\LandingPageContentResponse;
use PHPUnit\Framework\TestCase;

/**
 * LandingPageContentResponseTest Class Doc Comment
 *
 * @category    Class
 * @description LandingPageContentResponse
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\LandingPageContentResponse
 */
class LandingPageContentResponseTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\LandingPageContentResponse
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
        'content' => 'object',
        'followup_type' => 'string',
        'followup_value' => 'string',
        'formatting_options' => '\NecLimDul\MarketoRest\Asset\Model\JsonNode',
        'id' => 'object',
        'index' => 'int',
        'type' => 'string',
    ];
    /**
     * @var scalar[][]
     */
    private $allowedValues = [
        'followup_type' => [
            'URL' => 'url',
            'LP' => 'lp',
            'FORM_DEFINED' => 'formDefined',
        ],
        'type' => [
            'IMAGE' => 'Image',
            'SOCIAL_BUTTON' => 'SocialButton',
            'FORM' => 'Form',
            'DYNAMIC_CONTENT' => 'DynamicContent',
            'RECTANGLE' => 'Rectangle',
            'SNIPPET' => 'Snippet',
            'RICH_TEXT' => 'RichText',
            'HTML' => 'HTML',
            'VIDEO' => 'Video',
            'POLL' => 'Poll',
            'REFERRAL_OFFER' => 'ReferralOffer',
            'SWEEPSTAKES' => 'Sweepstakes',
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
        $this->sot = new LandingPageContentResponse($data);
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
     * Test "LandingPageContentResponse"
     *
     * @covers ::__construct
     */
    public function testLandingPageContentResponse(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\LandingPageContentResponse::class, $this->sot);
    }

    /**
     * Test attribute "content"
     *
     * @covers ::__construct
     * @covers ::getContent
     * @covers ::setContent
     */
    public function testPropertyContent(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['content'],
            $this->allowedValues['content'] ?? null
        );
        $this->sot->setContent($v);
        $this->assertEquals($v, $this->sot->getContent());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "followup_type"
     *
     * @covers ::__construct
     * @covers ::getFollowupType
     * @covers ::setFollowupType
     */
    public function testPropertyFollowupType(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['followup_type'],
            $this->allowedValues['followup_type'] ?? null
        );
        $this->sot->setFollowupType($v);
        $this->assertEquals($v, $this->sot->getFollowupType());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "followup_value"
     *
     * @covers ::__construct
     * @covers ::getFollowupValue
     * @covers ::setFollowupValue
     */
    public function testPropertyFollowupValue(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['followup_value'],
            $this->allowedValues['followup_value'] ?? null
        );
        $this->sot->setFollowupValue($v);
        $this->assertEquals($v, $this->sot->getFollowupValue());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "formatting_options"
     *
     * @covers ::__construct
     * @covers ::getFormattingOptions
     * @covers ::setFormattingOptions
     */
    public function testPropertyFormattingOptions(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['formatting_options'],
            $this->allowedValues['formatting_options'] ?? null
        );
        $this->sot->setFormattingOptions($v);
        $this->assertEquals($v, $this->sot->getFormattingOptions());
        // $this->markTestIncomplete('Not implemented');
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
     * Test attribute "index"
     *
     * @covers ::__construct
     * @covers ::getIndex
     * @covers ::setIndex
     */
    public function testPropertyIndex(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['index'],
            $this->allowedValues['index'] ?? null
        );
        $this->sot->setIndex($v);
        $this->assertEquals($v, $this->sot->getIndex());
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
}
