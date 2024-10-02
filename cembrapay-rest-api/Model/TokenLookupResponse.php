<?php
/**
 * TokenLookupResponse
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

use \ArrayAccess;
use \CembraPay\RestApi\ObjectSerializer;

/**
 * TokenLookupResponse Class Doc Comment
 *
 * @category Class
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TokenLookupResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TokenLookupResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request_msg_id' => 'string',
        'request_msg_date_time' => '\DateTime',
        'reply_msg_id' => 'string',
        'reply_msg_date_time' => '\DateTime',
        'errors' => '\CembraPay\RestApi\Model\Error[]',
        'idempotency_key' => 'string',
        'request_merchant_id' => 'string',
        'transaction_id' => 'string',
        'merchant_cust_ref' => 'string',
        'merchant_order_ref' => 'string',
        'token' => 'string',
        'token_label' => 'string',
        'is_token_deleted' => 'bool',
        'token_deleted_on' => '\DateTime',
        'processing_status' => '\CembraPay\RestApi\Model\TokenLookupProcessingStatus',
        'registration_process_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request_msg_id' => 'uuid',
        'request_msg_date_time' => 'date-time',
        'reply_msg_id' => 'uuid',
        'reply_msg_date_time' => 'date-time',
        'errors' => null,
        'idempotency_key' => null,
        'request_merchant_id' => null,
        'transaction_id' => null,
        'merchant_cust_ref' => null,
        'merchant_order_ref' => null,
        'token' => 'uuid',
        'token_label' => null,
        'is_token_deleted' => null,
        'token_deleted_on' => 'date-time',
        'processing_status' => null,
        'registration_process_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'request_msg_id' => 'requestMsgId',
        'request_msg_date_time' => 'requestMsgDateTime',
        'reply_msg_id' => 'replyMsgId',
        'reply_msg_date_time' => 'replyMsgDateTime',
        'errors' => 'errors',
        'idempotency_key' => 'idempotencyKey',
        'request_merchant_id' => 'requestMerchantId',
        'transaction_id' => 'transactionId',
        'merchant_cust_ref' => 'merchantCustRef',
        'merchant_order_ref' => 'merchantOrderRef',
        'token' => 'token',
        'token_label' => 'tokenLabel',
        'is_token_deleted' => 'isTokenDeleted',
        'token_deleted_on' => 'tokenDeletedOn',
        'processing_status' => 'processingStatus',
        'registration_process_id' => 'registrationProcessId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_msg_id' => 'setRequestMsgId',
        'request_msg_date_time' => 'setRequestMsgDateTime',
        'reply_msg_id' => 'setReplyMsgId',
        'reply_msg_date_time' => 'setReplyMsgDateTime',
        'errors' => 'setErrors',
        'idempotency_key' => 'setIdempotencyKey',
        'request_merchant_id' => 'setRequestMerchantId',
        'transaction_id' => 'setTransactionId',
        'merchant_cust_ref' => 'setMerchantCustRef',
        'merchant_order_ref' => 'setMerchantOrderRef',
        'token' => 'setToken',
        'token_label' => 'setTokenLabel',
        'is_token_deleted' => 'setIsTokenDeleted',
        'token_deleted_on' => 'setTokenDeletedOn',
        'processing_status' => 'setProcessingStatus',
        'registration_process_id' => 'setRegistrationProcessId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_msg_id' => 'getRequestMsgId',
        'request_msg_date_time' => 'getRequestMsgDateTime',
        'reply_msg_id' => 'getReplyMsgId',
        'reply_msg_date_time' => 'getReplyMsgDateTime',
        'errors' => 'getErrors',
        'idempotency_key' => 'getIdempotencyKey',
        'request_merchant_id' => 'getRequestMerchantId',
        'transaction_id' => 'getTransactionId',
        'merchant_cust_ref' => 'getMerchantCustRef',
        'merchant_order_ref' => 'getMerchantOrderRef',
        'token' => 'getToken',
        'token_label' => 'getTokenLabel',
        'is_token_deleted' => 'getIsTokenDeleted',
        'token_deleted_on' => 'getTokenDeletedOn',
        'processing_status' => 'getProcessingStatus',
        'registration_process_id' => 'getRegistrationProcessId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['request_msg_id'] = isset($data['request_msg_id']) ? $data['request_msg_id'] : null;
        $this->container['request_msg_date_time'] = isset($data['request_msg_date_time']) ? $data['request_msg_date_time'] : null;
        $this->container['reply_msg_id'] = isset($data['reply_msg_id']) ? $data['reply_msg_id'] : null;
        $this->container['reply_msg_date_time'] = isset($data['reply_msg_date_time']) ? $data['reply_msg_date_time'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['idempotency_key'] = isset($data['idempotency_key']) ? $data['idempotency_key'] : null;
        $this->container['request_merchant_id'] = isset($data['request_merchant_id']) ? $data['request_merchant_id'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['merchant_cust_ref'] = isset($data['merchant_cust_ref']) ? $data['merchant_cust_ref'] : null;
        $this->container['merchant_order_ref'] = isset($data['merchant_order_ref']) ? $data['merchant_order_ref'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['token_label'] = isset($data['token_label']) ? $data['token_label'] : null;
        $this->container['is_token_deleted'] = isset($data['is_token_deleted']) ? $data['is_token_deleted'] : null;
        $this->container['token_deleted_on'] = isset($data['token_deleted_on']) ? $data['token_deleted_on'] : null;
        $this->container['processing_status'] = isset($data['processing_status']) ? $data['processing_status'] : null;
        $this->container['registration_process_id'] = isset($data['registration_process_id']) ? $data['registration_process_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets request_msg_id
     *
     * @return string
     */
    public function getRequestMsgId()
    {
        return $this->container['request_msg_id'];
    }

    /**
     * Sets request_msg_id
     *
     * @param string $request_msg_id Unique Id of the request
     *
     * @return $this
     */
    public function setRequestMsgId($request_msg_id)
    {
        $this->container['request_msg_id'] = $request_msg_id;

        return $this;
    }

    /**
     * Gets request_msg_date_time
     *
     * @return \DateTime
     */
    public function getRequestMsgDateTime()
    {
        return $this->container['request_msg_date_time'];
    }

    /**
     * Sets request_msg_date_time
     *
     * @param \DateTime $request_msg_date_time DateTime of the request. ISO8601 Date with time in format 'yyyy-MM-ddTHH:mm:ssZ'.
     *
     * @return $this
     */
    public function setRequestMsgDateTime($request_msg_date_time)
    {
        $this->container['request_msg_date_time'] = $request_msg_date_time;

        return $this;
    }

    /**
     * Gets reply_msg_id
     *
     * @return string
     */
    public function getReplyMsgId()
    {
        return $this->container['reply_msg_id'];
    }

    /**
     * Sets reply_msg_id
     *
     * @param string $reply_msg_id Unique Id of the response
     *
     * @return $this
     */
    public function setReplyMsgId($reply_msg_id)
    {
        $this->container['reply_msg_id'] = $reply_msg_id;

        return $this;
    }

    /**
     * Gets reply_msg_date_time
     *
     * @return \DateTime
     */
    public function getReplyMsgDateTime()
    {
        return $this->container['reply_msg_date_time'];
    }

    /**
     * Sets reply_msg_date_time
     *
     * @param \DateTime $reply_msg_date_time DateTime of the response. ISO8601 Date with time in format 'yyyy-MM-ddTHH:mm:ssZ'.
     *
     * @return $this
     */
    public function setReplyMsgDateTime($reply_msg_date_time)
    {
        $this->container['reply_msg_date_time'] = $reply_msg_date_time;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return \CembraPay\RestApi\Model\Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \CembraPay\RestApi\Model\Error[] $errors List of errors, occured during request processing.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets idempotency_key
     *
     * @return string
     */
    public function getIdempotencyKey()
    {
        return $this->container['idempotency_key'];
    }

    /**
     * Sets idempotency_key
     *
     * @param string $idempotency_key Idempotency key, to unique identify operation and support consistent retries
     *
     * @return $this
     */
    public function setIdempotencyKey($idempotency_key)
    {
        $this->container['idempotency_key'] = $idempotency_key;

        return $this;
    }

    /**
     * Gets request_merchant_id
     *
     * @return string
     */
    public function getRequestMerchantId()
    {
        return $this->container['request_merchant_id'];
    }

    /**
     * Sets request_merchant_id
     *
     * @param string $request_merchant_id Unique Id of the Merchant
     *
     * @return $this
     */
    public function setRequestMerchantId($request_merchant_id)
    {
        $this->container['request_merchant_id'] = $request_merchant_id;

        return $this;
    }

    /**
     * Gets transaction_id
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     *
     * @param string $transaction_id Id of Transaction. Required for SET, CAN, CNT, TST
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets merchant_cust_ref
     *
     * @return string
     */
    public function getMerchantCustRef()
    {
        return $this->container['merchant_cust_ref'];
    }

    /**
     * Sets merchant_cust_ref
     *
     * @param string $merchant_cust_ref Customer identifier in Merchants system
     *
     * @return $this
     */
    public function setMerchantCustRef($merchant_cust_ref)
    {
        $this->container['merchant_cust_ref'] = $merchant_cust_ref;

        return $this;
    }

    /**
     * Gets merchant_order_ref
     *
     * @return string
     */
    public function getMerchantOrderRef()
    {
        return $this->container['merchant_order_ref'];
    }

    /**
     * Sets merchant_order_ref
     *
     * @param string $merchant_order_ref Order reference in Merchants system. Required for AUT, CHK, SET, CAN and CNT requests. Field value is not case-sensitive
     *
     * @return $this
     */
    public function setMerchantOrderRef($merchant_order_ref)
    {
        $this->container['merchant_order_ref'] = $merchant_order_ref;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token Token can be provided instead or together with Customer details in SCR, AUT or CHK requests.
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets token_label
     *
     * @return string
     */
    public function getTokenLabel()
    {
        return $this->container['token_label'];
    }

    /**
     * Sets token_label
     *
     * @param string $token_label This is used to describe Token for customers. Can be stored by merchant. Format for Transactional Products \"CembraPay\", Format for Account Products \"CembraPay**9478\" <- Last 4 digits of CembraPay account.
     *
     * @return $this
     */
    public function setTokenLabel($token_label)
    {
        $this->container['token_label'] = $token_label;

        return $this;
    }

    /**
     * Gets is_token_deleted
     *
     * @return bool
     */
    public function getIsTokenDeleted()
    {
        return $this->container['is_token_deleted'];
    }

    /**
     * Sets is_token_deleted
     *
     * @param bool $is_token_deleted If Token is invalid then this is set to true
     *
     * @return $this
     */
    public function setIsTokenDeleted($is_token_deleted)
    {
        $this->container['is_token_deleted'] = $is_token_deleted;

        return $this;
    }

    /**
     * Gets token_deleted_on
     *
     * @return \DateTime
     */
    public function getTokenDeletedOn()
    {
        return $this->container['token_deleted_on'];
    }

    /**
     * Sets token_deleted_on
     *
     * @param \DateTime $token_deleted_on Token deleted on ISO8601 Date with time in format 'yyyy-MM-ddTHH:mm:ssZ'.
     *
     * @return $this
     */
    public function setTokenDeletedOn($token_deleted_on)
    {
        $this->container['token_deleted_on'] = $token_deleted_on;

        return $this;
    }

    /**
     * Gets processing_status
     *
     * @return \CembraPay\RestApi\Model\TokenLookupProcessingStatus
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     *
     * @param \CembraPay\RestApi\Model\TokenLookupProcessingStatus $processing_status processing_status
     *
     * @return $this
     */
    public function setProcessingStatus($processing_status)
    {
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets registration_process_id
     *
     * @return string
     */
    public function getRegistrationProcessId()
    {
        return $this->container['registration_process_id'];
    }

    /**
     * Sets registration_process_id
     *
     * @param string $registration_process_id Unique identifier of Registration session. Required for RST requests.
     *
     * @return $this
     */
    public function setRegistrationProcessId($registration_process_id)
    {
        $this->container['registration_process_id'] = $registration_process_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
