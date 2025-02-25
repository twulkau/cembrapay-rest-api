<?php
/**
 * RequestMsgType
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
 * RequestMsgType Class Doc Comment
 *
 * @category Class
 * @description Check suitable value for your request (see request description): - SCR: screening request. - AUT: authorization request. Can be with immediate settlement. - REG: registration request. Starts registration session. - CHK: checkout request. Starts checkout session. - SET: settlement request. - CAN: cancellation request. Cancels unsettled amount partly or fully. - CNT: credit note request. Cancels settled amount partly or fully. - TKL: token lookup request. - TST: transaction status request. - RST: registration status request. - CST: checkout status request. - CFM: authorization confirmation request.
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequestMsgType
{
    /**
     * Possible values of this enum
     */
    const SCR = 'SCR';
    const AUT = 'AUT';
    const REG = 'REG';
    const CHK = 'CHK';
    const SET = 'SET';
    const CAN = 'CAN';
    const CNT = 'CNT';
    const TKL = 'TKL';
    const TST = 'TST';
    const RST = 'RST';
    const CST = 'CST';
    const CFM = 'CFM';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SCR
            self::AUT
            self::REG
            self::CHK
            self::SET
            self::CAN
            self::CNT
            self::TKL
            self::TST
            self::RST
            self::CST
            self::CFM
        ];
    }
}
