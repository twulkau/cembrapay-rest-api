<?php
/**
 * RegistrationStatusTest
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
 * Swagger Codegen version: 3.0.66
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace CembraPay\RestApi;

use PHPUnit\Framework\TestCase;

/**
 * RegistrationStatusTest Class Doc Comment
 *
 * @category    Class
 * @description List of possible registration statuses: - CREATED: registration session created, response not yet sent back. - NOT-STARTED: registration session exists, customer not yet redirected to CembraPay Registration pages. - STARTED: customer is redirected to CembraPay Registration pages but not yet finished registration. - EXPIRED: registration session is expired. - SUCCESS: customer is registered and redirected back to provided return url. - DECLINED: customer registration is declined. - ERROR: error occured during customer registration.
 * @package     CembraPay\RestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RegistrationStatusTest extends TestCase
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
     * Test "RegistrationStatus"
     */
    public function testRegistrationStatus()
    {
    }
}
