<?php
/**
 * ImportLeadResponseTest
 *
 * PHP version 7
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

// namespace NecLimDul\MarketoRest\Lead;
namespace NecLimDul\MarketoRest\Lead\Model;

use PHPUnit\Framework\TestCase;

/**
 * ImportLeadResponseTest Class Doc Comment
 *
 * @category    Class
 * @description Response containing import status information
 * @package     NecLimDul\MarketoRest\Lead
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ImportLeadResponseTest extends TestCase
{

    /**
     * Test "ImportLeadResponse"
     */
    public function testImportLeadResponse()
    {
        $class = new ImportLeadResponse();
        $this->assertTrue(TRUE);
    }

    /**
     * Test attribute "batch_id"
     */
    public function testPropertyBatchId()
    {
        $class = new ImportLeadResponse();
        $this->assertTrue(TRUE);
    }

    /**
     * Test attribute "import_id"
     */
    public function testPropertyImportId()
    {
        $class = new ImportLeadResponse();
        $this->assertTrue(TRUE);
    }

    /**
     * Test attribute "message"
     */
    public function testPropertyMessage()
    {
        $class = new ImportLeadResponse();
        $this->assertTrue(TRUE);
    }

    /**
     * Test attribute "num_of_leads_processed"
     */
    public function testPropertyNumOfLeadsProcessed()
    {
        $class = new ImportLeadResponse();
        $this->assertTrue(TRUE);
    }

    /**
     * Test attribute "num_of_rows_failed"
     */
    public function testPropertyNumOfRowsFailed()
    {
        $class = new ImportLeadResponse();
        $this->assertTrue(TRUE);
    }

    /**
     * Test attribute "num_of_rows_with_warning"
     */
    public function testPropertyNumOfRowsWithWarning()
    {
        $class = new ImportLeadResponse();
        $this->assertTrue(TRUE);
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        $class = new ImportLeadResponse();
        $this->assertTrue(TRUE);
    }
}
