<?php
/**
 * CreditNoteRequest
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
 * CreditNoteRequest Class Doc Comment
 *
 * @category Class
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditNoteRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditNoteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request_msg_id' => 'string',
        'request_msg_date_time' => '\DateTime',
        'idempotency_key' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'transaction_id' => 'string',
        'merchant_order_ref' => 'string',
        'settlement_details' => '\CembraPay\RestApi\Model\CreditNoteSettlementDetails',
        'psp_transaction_id' => 'string',
        'msg_extensions' => '\CembraPay\RestApi\Model\MsgExtension[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request_msg_id' => 'uuid',
        'request_msg_date_time' => 'date-time',
        'idempotency_key' => null,
        'amount' => 'int32',
        'currency' => null,
        'transaction_id' => null,
        'merchant_order_ref' => null,
        'settlement_details' => null,
        'psp_transaction_id' => null,
        'msg_extensions' => null
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
        'idempotency_key' => 'idempotencyKey',
        'amount' => 'amount',
        'currency' => 'currency',
        'transaction_id' => 'transactionId',
        'merchant_order_ref' => 'merchantOrderRef',
        'settlement_details' => 'settlementDetails',
        'psp_transaction_id' => 'pspTransactionId',
        'msg_extensions' => 'msgExtensions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_msg_id' => 'setRequestMsgId',
        'request_msg_date_time' => 'setRequestMsgDateTime',
        'idempotency_key' => 'setIdempotencyKey',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'transaction_id' => 'setTransactionId',
        'merchant_order_ref' => 'setMerchantOrderRef',
        'settlement_details' => 'setSettlementDetails',
        'psp_transaction_id' => 'setPspTransactionId',
        'msg_extensions' => 'setMsgExtensions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_msg_id' => 'getRequestMsgId',
        'request_msg_date_time' => 'getRequestMsgDateTime',
        'idempotency_key' => 'getIdempotencyKey',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'transaction_id' => 'getTransactionId',
        'merchant_order_ref' => 'getMerchantOrderRef',
        'settlement_details' => 'getSettlementDetails',
        'psp_transaction_id' => 'getPspTransactionId',
        'msg_extensions' => 'getMsgExtensions'
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
        $this->container['idempotency_key'] = isset($data['idempotency_key']) ? $data['idempotency_key'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['merchant_order_ref'] = isset($data['merchant_order_ref']) ? $data['merchant_order_ref'] : null;
        $this->container['settlement_details'] = isset($data['settlement_details']) ? $data['settlement_details'] : null;
        $this->container['psp_transaction_id'] = isset($data['psp_transaction_id']) ? $data['psp_transaction_id'] : null;
        $this->container['msg_extensions'] = isset($data['msg_extensions']) ? $data['msg_extensions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['request_msg_id'] === null) {
            $invalidProperties[] = "'request_msg_id' can't be null";
        }
        if ($this->container['request_msg_date_time'] === null) {
            $invalidProperties[] = "'request_msg_date_time' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['merchant_order_ref'] === null) {
            $invalidProperties[] = "'merchant_order_ref' can't be null";
        }
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
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Amount must be in smallest money unit for the Currency (cents for CHF)
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency, ISO4217 3 letters
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param string $transaction_id Id of Transaction. It is mandatory except the cases when Authorization was sent via the old API
     *
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

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
     * @param string $merchant_order_ref Order reference in Merchants system. Field value is not case-sensitive.
     *
     * @return $this
     */
    public function setMerchantOrderRef($merchant_order_ref)
    {
        $this->container['merchant_order_ref'] = $merchant_order_ref;

        return $this;
    }

    /**
     * Gets settlement_details
     *
     * @return \CembraPay\RestApi\Model\CreditNoteSettlementDetails
     */
    public function getSettlementDetails()
    {
        return $this->container['settlement_details'];
    }

    /**
     * Sets settlement_details
     *
     * @param \CembraPay\RestApi\Model\CreditNoteSettlementDetails $settlement_details settlement_details
     *
     * @return $this
     */
    public function setSettlementDetails($settlement_details)
    {
        $this->container['settlement_details'] = $settlement_details;

        return $this;
    }

    /**
     * Gets psp_transaction_id
     *
     * @return string
     */
    public function getPspTransactionId()
    {
        return $this->container['psp_transaction_id'];
    }

    /**
     * Sets psp_transaction_id
     *
     * @param string $psp_transaction_id Id of transaction in PSP system. Must be provided by PSP, when communication with api is made through PSP. Mandatory for CPMI payment method.
     *
     * @return $this
     */
    public function setPspTransactionId($psp_transaction_id)
    {
        $this->container['psp_transaction_id'] = $psp_transaction_id;

        return $this;
    }

    /**
     * Gets msg_extensions
     *
     * @return \CembraPay\RestApi\Model\MsgExtension[]
     */
    public function getMsgExtensions()
    {
        return $this->container['msg_extensions'];
    }

    /**
     * Sets msg_extensions
     *
     * @param \CembraPay\RestApi\Model\MsgExtension[] $msg_extensions List of additional data entries. Only known Keys will be processed. Prior agreement with CembraPay required about data structure and usage
     *
     * @return $this
     */
    public function setMsgExtensions($msg_extensions)
    {
        $this->container['msg_extensions'] = $msg_extensions;

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
