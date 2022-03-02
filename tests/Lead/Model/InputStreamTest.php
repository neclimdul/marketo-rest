<?php
/**
 * InputStreamTest
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
use NecLimDul\MarketoRest\Lead\Model\InputStream;
use PHPUnit\Framework\TestCase;

/**
 * InputStreamTest Class Doc Comment
 *
 * @category    Class
 * @description InputStream
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 *
 * @coversDefault \NecLimDul\MarketoRest\Lead\Model\InputStream
 */
class InputStreamTest extends TestCase
{

    /**
     * @var \NecLimDul\MarketoRest\Lead\Model\InputStream
     */
    private $sot;


    public function setUp(): void
    {
        parent::setUp();
        $this->sot = new InputStream();
    }


    /**
     * Test "InputStream"
     *
     * @covers ::__construct
     */
    public function testInputStream(): void
    {
        $this->assertInstanceOf(\NecLimDul\MarketoRest\Lead\Model\InputStream::class, $this->sot);
    }
}
