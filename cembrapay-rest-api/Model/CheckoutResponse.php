<?php
/**
 * CheckoutResponse
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

use \ArrayAccess;
use \CembraPay\RestApi\ObjectSerializer;

/**
 * CheckoutResponse Class Doc Comment
 *
 * @category Class
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckoutResponse';

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
        'request_msg_type' => '\CembraPay\RestApi\Model\RequestMsgType',
        'checkout_process_id' => 'string',
        'redirect_url_checkout' => 'string',
        'processing_status' => '\CembraPay\RestApi\Model\CheckoutProcessingStatus',
        'checkout_status' => '\CembraPay\RestApi\Model\CheckoutStatusResponseData'
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
        'request_msg_type' => null,
        'checkout_process_id' => null,
        'redirect_url_checkout' => null,
        'processing_status' => null,
        'checkout_status' => null
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
        'request_msg_type' => 'requestMsgType',
        'checkout_process_id' => 'checkoutProcessId',
        'redirect_url_checkout' => 'redirectUrlCheckout',
        'processing_status' => 'processingStatus',
        'checkout_status' => 'checkoutStatus'
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
        'request_msg_type' => 'setRequestMsgType',
        'checkout_process_id' => 'setCheckoutProcessId',
        'redirect_url_checkout' => 'setRedirectUrlCheckout',
        'processing_status' => 'setProcessingStatus',
        'checkout_status' => 'setCheckoutStatus'
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
        'request_msg_type' => 'getRequestMsgType',
        'checkout_process_id' => 'getCheckoutProcessId',
        'redirect_url_checkout' => 'getRedirectUrlCheckout',
        'processing_status' => 'getProcessingStatus',
        'checkout_status' => 'getCheckoutStatus'
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
        $this->container['request_msg_type'] = isset($data['request_msg_type']) ? $data['request_msg_type'] : null;
        $this->container['checkout_process_id'] = isset($data['checkout_process_id']) ? $data['checkout_process_id'] : null;
        $this->container['redirect_url_checkout'] = isset($data['redirect_url_checkout']) ? $data['redirect_url_checkout'] : null;
        $this->container['processing_status'] = isset($data['processing_status']) ? $data['processing_status'] : null;
        $this->container['checkout_status'] = isset($data['checkout_status']) ? $data['checkout_status'] : null;
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
     * Gets request_msg_type
     *
     * @return \CembraPay\RestApi\Model\RequestMsgType
     */
    public function getRequestMsgType()
    {
        return $this->container['request_msg_type'];
    }

    /**
     * Sets request_msg_type
     *
     * @param \CembraPay\RestApi\Model\RequestMsgType $request_msg_type request_msg_type
     *
     * @return $this
     */
    public function setRequestMsgType($request_msg_type)
    {
        $this->container['request_msg_type'] = $request_msg_type;

        return $this;
    }

    /**
     * Gets checkout_process_id
     *
     * @return string
     */
    public function getCheckoutProcessId()
    {
        return $this->container['checkout_process_id'];
    }

    /**
     * Sets checkout_process_id
     *
     * @param string $checkout_process_id Unique identifier of Checkout session. Required for CHK and CST requests.
     *
     * @return $this
     */
    public function setCheckoutProcessId($checkout_process_id)
    {
        $this->container['checkout_process_id'] = $checkout_process_id;

        return $this;
    }

    /**
     * Gets redirect_url_checkout
     *
     * @return string
     */
    public function getRedirectUrlCheckout()
    {
        return $this->container['redirect_url_checkout'];
    }

    /**
     * Sets redirect_url_checkout
     *
     * @param string $redirect_url_checkout URL that must be used for redirecting customer to CembraPay Checkout pages.
     *
     * @return $this
     */
    public function setRedirectUrlCheckout($redirect_url_checkout)
    {
        $this->container['redirect_url_checkout'] = $redirect_url_checkout;

        return $this;
    }

    /**
     * Gets processing_status
     *
     * @return \CembraPay\RestApi\Model\CheckoutProcessingStatus
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     *
     * @param \CembraPay\RestApi\Model\CheckoutProcessingStatus $processing_status processing_status
     *
     * @return $this
     */
    public function setProcessingStatus($processing_status)
    {
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets checkout_status
     *
     * @return \CembraPay\RestApi\Model\CheckoutStatusResponseData
     */
    public function getCheckoutStatus()
    {
        return $this->container['checkout_status'];
    }

    /**
     * Sets checkout_status
     *
     * @param \CembraPay\RestApi\Model\CheckoutStatusResponseData $checkout_status checkout_status
     *
     * @return $this
     */
    public function setCheckoutStatus($checkout_status)
    {
        $this->container['checkout_status'] = $checkout_status;

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
