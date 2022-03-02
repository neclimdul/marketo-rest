<?php
/**
 * TriggerCampaignDataTest
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
use NecLimDul\MarketoRest\Lead\Model\TriggerCampaignData;
use PHPUnit\Framework\TestCase;

/**
 * TriggerCampaignDataTest Class Doc Comment
 *
 * @category    Class
 * @description TriggerCampaignData
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignData
 */
class TriggerCampaignDataTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignData
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
        'leads' => '\NecLimDul\MarketoRest\Lead\Model\InputLead[]',
        'tokens' => '\NecLimDul\MarketoRest\Lead\Model\Token[]',
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
        $this->sot = new TriggerCampaignData($data);
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
     * Test "TriggerCampaignData"
     *
     * @covers ::__construct
     */
    public function testTriggerCampaignData(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\TriggerCampaignData::class, $this->sot);
    }

    /**
     * Test attribute "leads"
     *
     * @covers ::__construct
     * @covers ::getLeads
     * @covers ::setLeads
     */
    public function testPropertyLeads(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['leads'],
            $this->allowedValues['leads'] ?? null
        );
        $this->sot->setLeads($v);
        $this->assertEquals($v, $this->sot->getLeads());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "tokens"
     *
     * @covers ::__construct
     * @covers ::getTokens
     * @covers ::setTokens
     */
    public function testPropertyTokens(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['tokens'],
            $this->allowedValues['tokens'] ?? null
        );
        $this->sot->setTokens($v);
        $this->assertEquals($v, $this->sot->getTokens());
        // $this->markTestIncomplete('Not implemented');
    }
}
