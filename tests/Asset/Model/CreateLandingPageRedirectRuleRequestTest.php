<?php
/**
 * CreateLandingPageRedirectRuleRequestTest
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
use NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRedirectRuleRequest;
use PHPUnit\Framework\TestCase;

/**
 * CreateLandingPageRedirectRuleRequestTest Class Doc Comment
 *
 * @category    Class
 * @description CreateLandingPageRedirectRuleRequest
 * @package     NecLimDul\MarketoRest\Asset
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRedirectRuleRequest
 */
class CreateLandingPageRedirectRuleRequestTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRedirectRuleRequest
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
        'hostname' => 'string',
        'redirect_from' => '\NecLimDul\MarketoRest\Asset\Model\RedirectFrom',
        'redirect_to' => '\NecLimDul\MarketoRest\Asset\Model\RedirectTo',
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
        $this->sot = new CreateLandingPageRedirectRuleRequest($data);
        $this->sot = new CreateLandingPageRedirectRuleRequest();
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
     * Test "CreateLandingPageRedirectRuleRequest"
     *
     * @covers ::__construct
     */
    public function testCreateLandingPageRedirectRuleRequest(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRedirectRuleRequest::class, $this->sot);
    }

    /**
     * Test attribute "hostname"
     *
     * @covers ::__construct
     * @covers ::getHostname
     * @covers ::setHostname
     */
    public function testPropertyHostname(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['hostname'],
            $this->allowedValues['hostname'] ?? null
        );
        $this->sot->setHostname($v);
        $this->assertEquals($v, $this->sot->getHostname());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "redirect_from"
     *
     * @covers ::__construct
     * @covers ::getRedirectFrom
     * @covers ::setRedirectFrom
     */
    public function testPropertyRedirectFrom(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['redirect_from'],
            $this->allowedValues['redirect_from'] ?? null
        );
        $this->sot->setRedirectFrom($v);
        $this->assertEquals($v, $this->sot->getRedirectFrom());
        // $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "redirect_to"
     *
     * @covers ::__construct
     * @covers ::getRedirectTo
     * @covers ::setRedirectTo
     */
    public function testPropertyRedirectTo(): void
    {
        // @todo can we assert anything useful about the default?
        $v = $this->getFakeValue(
            $this->types['redirect_to'],
            $this->allowedValues['redirect_to'] ?? null
        );
        $this->sot->setRedirectTo($v);
        $this->assertEquals($v, $this->sot->getRedirectTo());
        // $this->markTestIncomplete('Not implemented');
    }
}
