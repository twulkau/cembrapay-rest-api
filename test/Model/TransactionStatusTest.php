<?php
/**
 * TransactionStatusTest
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
 * TransactionStatusTest Class Doc Comment
 *
 * @category    Class
 * @description Status of the transaction List of possible transaction statuses: - CREATED: transaction is created during incoming request processing, however request processing is not yet finished. - SCREENING-DECLINED: screening request was declined for this transaction. - SCREENING-APPROVED: screening request was approved for this transaction. - AUTHORIZED: authorization was approved for this transaction. - DECLINED: authorization was declined for this transaction. Final status of transaction. - EXPIRED: transaction was expired. Final status of transaction. Final status of transaction. - PARTIALLY-SETTLED: at least one not canceled settlement exists. Transaction still has Authorized/Not Settled amount left. - SETTLED: at least one not cancelled settlement exists. Transaction has no Authorized/Not Settled amount left. Final status of transaction. - CANCELLED: all settlements are cancelled (if any). Transaction has no Authorized/Not Settled amount left. Final status of transaction. - CHECKOUT-IN-PROGRESS: checkout session for transaction created. - PENDING-CONFIRMATION: authorization for this transaction is awaiting confirmation.
 * @package     CembraPay\RestApi
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TransactionStatusTest extends TestCase
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
     * Test "TransactionStatus"
     */
    public function testTransactionStatus()
    {
    }
}