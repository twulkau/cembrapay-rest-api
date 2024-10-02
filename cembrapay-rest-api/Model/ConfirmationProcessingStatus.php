<?php
/**
 * ConfirmationProcessingStatus
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
 * Do not edit the class manually.
 */

namespace CembraPay\RestApi\Model;
use \CembraPay\RestApi\ObjectSerializer;

/**
 * ConfirmationProcessingStatus Class Doc Comment
 *
 * @category Class
 * @description Processing status of the request - shows outcome of the operation. Possible values are also dependent on type of the Request.  List of possible processing statuses: - SUCCESS: returned for successfully processed requests. - ERROR: returned in case, when error occures during request processing.
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ConfirmationProcessingStatus
{
    /**
     * Possible values of this enum
     */
    const SUCCESS = 'SUCCESS';
    const ERROR = 'ERROR';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUCCESS
            self::ERROR
        ];
    }
}
