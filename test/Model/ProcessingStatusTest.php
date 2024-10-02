<?php
/**
 * ProcessingStatusTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Transactions Gateway Microservice API
 *
 * Public JSON API integration and operations
 *
 * OpenAPI spec version: 1.0
 * Contact: integration@cembrapay.ch
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace CembraPay\RestApi;

use PHPUnit\Framework\TestCase;

/**
 * ProcessingStatusTest Class Doc Comment
 *
 * @category    Class
 * @description Processing status of the request - shows outcome of the operation. Possible values are also dependent on type of the Request.  List of possible processing statuses: - SCREENING-APPROVED: returned for approved Screenings - SCR request type. - SCREENING-DECLINED: returned for declined Screenings - SCR request type - AUTHORIZED: returned for authorized Authorizations - AUT request type. - DECLINED: returned for declined Authorizations - AUT request type. - SETTLED:  returned when authorization amount is fully used and no more settlements possible - SET request type. - PARTIALLY-SETTLED: returned when authorization amount is not fully used and another settlements are possible - SET request type. - SUCCESS: returned for successfully processed requests - any request types except AUT, SCR. - ERROR: returned in case, when error occures during request processing.
 * @package     CembraPay\RestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProcessingStatusTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "ProcessingStatus"
     */
    public function testProcessingStatus()
    {
    }
}