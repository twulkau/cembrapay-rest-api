<?php
/**
 * RegistrationStatus
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
 * Do not edit the class manually.
 */

namespace CembraPay\RestApi\Model;
use \CembraPay\RestApi\ObjectSerializer;

/**
 * RegistrationStatus Class Doc Comment
 *
 * @category Class
 * @description List of possible registration statuses: - CREATED: registration session created, response not yet sent back. - NOT-STARTED: registration session exists, customer not yet redirected to CembraPay Registration pages. - STARTED: customer is redirected to CembraPay Registration pages but not yet finished registration. - EXPIRED: registration session is expired. - SUCCESS: customer is registered and redirected back to provided return url. - DECLINED: customer registration is declined. - ERROR: error occured during customer registration.
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RegistrationStatus
{
    /**
     * Possible values of this enum
     */
    const CREATED = 'CREATED';
    const NOT_STARTED = 'NOT-STARTED';
    const STARTED = 'STARTED';
    const EXPIRED = 'EXPIRED';
    const SUCCESS = 'SUCCESS';
    const DECLINED = 'DECLINED';
    const ERROR = 'ERROR';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED
            self::NOT_STARTED
            self::STARTED
            self::EXPIRED
            self::SUCCESS
            self::DECLINED
            self::ERROR
        ];
    }
}
