<?php
/**
 * TransactionMessage
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
 * TransactionMessage Class Doc Comment
 *
 * @category Class
 * @description Details of single request/response, made for the transaction
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionMessage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'request_msg_type' => 'string',
        'request_msg_id' => 'string',
        'request_msg_date_time' => '\DateTime',
        'request_received_date_time' => '\DateTime',
        'response_msg_id' => 'string',
        'response_msg_date_time' => '\DateTime',
        'processing_status' => '\CembraPay\RestApi\Model\ProcessingStatus',
        'error' => '\CembraPay\RestApi\Model\Error[]',
        'idempotency_key' => 'string',
        'has_instant_settlement' => 'bool',
        'is_full_cancellation' => 'bool',
        'merchant_invoice_ref' => 'string',
        'settlement_id' => 'string',
        'is_final' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'request_msg_type' => null,
        'request_msg_id' => 'uuid',
        'request_msg_date_time' => 'date-time',
        'request_received_date_time' => 'date-time',
        'response_msg_id' => 'uuid',
        'response_msg_date_time' => 'date-time',
        'processing_status' => null,
        'error' => null,
        'idempotency_key' => null,
        'has_instant_settlement' => null,
        'is_full_cancellation' => null,
        'merchant_invoice_ref' => null,
        'settlement_id' => null,
        'is_final' => null
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
        'request_msg_type' => 'requestMsgType',
        'request_msg_id' => 'requestMsgId',
        'request_msg_date_time' => 'requestMsgDateTime',
        'request_received_date_time' => 'requestReceivedDateTime',
        'response_msg_id' => 'responseMsgId',
        'response_msg_date_time' => 'responseMsgDateTime',
        'processing_status' => 'processingStatus',
        'error' => 'error',
        'idempotency_key' => 'idempotencyKey',
        'has_instant_settlement' => 'hasInstantSettlement',
        'is_full_cancellation' => 'isFullCancellation',
        'merchant_invoice_ref' => 'merchantInvoiceRef',
        'settlement_id' => 'settlementId',
        'is_final' => 'isFinal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request_msg_type' => 'setRequestMsgType',
        'request_msg_id' => 'setRequestMsgId',
        'request_msg_date_time' => 'setRequestMsgDateTime',
        'request_received_date_time' => 'setRequestReceivedDateTime',
        'response_msg_id' => 'setResponseMsgId',
        'response_msg_date_time' => 'setResponseMsgDateTime',
        'processing_status' => 'setProcessingStatus',
        'error' => 'setError',
        'idempotency_key' => 'setIdempotencyKey',
        'has_instant_settlement' => 'setHasInstantSettlement',
        'is_full_cancellation' => 'setIsFullCancellation',
        'merchant_invoice_ref' => 'setMerchantInvoiceRef',
        'settlement_id' => 'setSettlementId',
        'is_final' => 'setIsFinal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request_msg_type' => 'getRequestMsgType',
        'request_msg_id' => 'getRequestMsgId',
        'request_msg_date_time' => 'getRequestMsgDateTime',
        'request_received_date_time' => 'getRequestReceivedDateTime',
        'response_msg_id' => 'getResponseMsgId',
        'response_msg_date_time' => 'getResponseMsgDateTime',
        'processing_status' => 'getProcessingStatus',
        'error' => 'getError',
        'idempotency_key' => 'getIdempotencyKey',
        'has_instant_settlement' => 'getHasInstantSettlement',
        'is_full_cancellation' => 'getIsFullCancellation',
        'merchant_invoice_ref' => 'getMerchantInvoiceRef',
        'settlement_id' => 'getSettlementId',
        'is_final' => 'getIsFinal'
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
        $this->container['request_msg_type'] = isset($data['request_msg_type']) ? $data['request_msg_type'] : null;
        $this->container['request_msg_id'] = isset($data['request_msg_id']) ? $data['request_msg_id'] : null;
        $this->container['request_msg_date_time'] = isset($data['request_msg_date_time']) ? $data['request_msg_date_time'] : null;
        $this->container['request_received_date_time'] = isset($data['request_received_date_time']) ? $data['request_received_date_time'] : null;
        $this->container['response_msg_id'] = isset($data['response_msg_id']) ? $data['response_msg_id'] : null;
        $this->container['response_msg_date_time'] = isset($data['response_msg_date_time']) ? $data['response_msg_date_time'] : null;
        $this->container['processing_status'] = isset($data['processing_status']) ? $data['processing_status'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['idempotency_key'] = isset($data['idempotency_key']) ? $data['idempotency_key'] : null;
        $this->container['has_instant_settlement'] = isset($data['has_instant_settlement']) ? $data['has_instant_settlement'] : null;
        $this->container['is_full_cancellation'] = isset($data['is_full_cancellation']) ? $data['is_full_cancellation'] : null;
        $this->container['merchant_invoice_ref'] = isset($data['merchant_invoice_ref']) ? $data['merchant_invoice_ref'] : null;
        $this->container['settlement_id'] = isset($data['settlement_id']) ? $data['settlement_id'] : null;
        $this->container['is_final'] = isset($data['is_final']) ? $data['is_final'] : null;
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
     * Gets request_msg_type
     *
     * @return string
     */
    public function getRequestMsgType()
    {
        return $this->container['request_msg_type'];
    }

    /**
     * Sets request_msg_type
     *
     * @param string $request_msg_type - AUT: authorization request. Can be with immediate settlement. - SET: settlement request. - CAN: cancellation request. Cancels unsettled amount partly or fully. - CNT: credit note request. Cancels settled amount partly or fully. - TKL: token lookup request. - TST: transaction status request. - CST: checkout status request. - CFM: authorization confirmation request.
     *
     * @return $this
     */
    public function setRequestMsgType($request_msg_type)
    {
        $this->container['request_msg_type'] = $request_msg_type;

        return $this;
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
     * Gets request_received_date_time
     *
     * @return \DateTime
     */
    public function getRequestReceivedDateTime()
    {
        return $this->container['request_received_date_time'];
    }

    /**
     * Sets request_received_date_time
     *
     * @param \DateTime $request_received_date_time DateTime when request was received for processing. ISO8601 Date with time in format 'yyyy-MM-ddTHH:mm:ssZ'.
     *
     * @return $this
     */
    public function setRequestReceivedDateTime($request_received_date_time)
    {
        $this->container['request_received_date_time'] = $request_received_date_time;

        return $this;
    }

    /**
     * Gets response_msg_id
     *
     * @return string
     */
    public function getResponseMsgId()
    {
        return $this->container['response_msg_id'];
    }

    /**
     * Sets response_msg_id
     *
     * @param string $response_msg_id Id of response
     *
     * @return $this
     */
    public function setResponseMsgId($response_msg_id)
    {
        $this->container['response_msg_id'] = $response_msg_id;

        return $this;
    }

    /**
     * Gets response_msg_date_time
     *
     * @return \DateTime
     */
    public function getResponseMsgDateTime()
    {
        return $this->container['response_msg_date_time'];
    }

    /**
     * Sets response_msg_date_time
     *
     * @param \DateTime $response_msg_date_time DateTime of response
     *
     * @return $this
     */
    public function setResponseMsgDateTime($response_msg_date_time)
    {
        $this->container['response_msg_date_time'] = $response_msg_date_time;

        return $this;
    }

    /**
     * Gets processing_status
     *
     * @return \CembraPay\RestApi\Model\ProcessingStatus
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     *
     * @param \CembraPay\RestApi\Model\ProcessingStatus $processing_status processing_status
     *
     * @return $this
     */
    public function setProcessingStatus($processing_status)
    {
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \CembraPay\RestApi\Model\Error[]
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \CembraPay\RestApi\Model\Error[] $error List of errors, occured during request processing.
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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
     * Gets has_instant_settlement
     *
     * @return bool
     */
    public function getHasInstantSettlement()
    {
        return $this->container['has_instant_settlement'];
    }

    /**
     * Sets has_instant_settlement
     *
     * @param bool $has_instant_settlement For AUT request, in case Settlement created during AUT. For AUT requests only.
     *
     * @return $this
     */
    public function setHasInstantSettlement($has_instant_settlement)
    {
        $this->container['has_instant_settlement'] = $has_instant_settlement;

        return $this;
    }

    /**
     * Gets is_full_cancellation
     *
     * @return bool
     */
    public function getIsFullCancellation()
    {
        return $this->container['is_full_cancellation'];
    }

    /**
     * Sets is_full_cancellation
     *
     * @param bool $is_full_cancellation For CAN request, in case CreditNote created during Cancellation. For CAN requests only.
     *
     * @return $this
     */
    public function setIsFullCancellation($is_full_cancellation)
    {
        $this->container['is_full_cancellation'] = $is_full_cancellation;

        return $this;
    }

    /**
     * Gets merchant_invoice_ref
     *
     * @return string
     */
    public function getMerchantInvoiceRef()
    {
        return $this->container['merchant_invoice_ref'];
    }

    /**
     * Sets merchant_invoice_ref
     *
     * @param string $merchant_invoice_ref Invoice reference in Merchants system, provided for the settlement in request. For SET requests only.
     *
     * @return $this
     */
    public function setMerchantInvoiceRef($merchant_invoice_ref)
    {
        $this->container['merchant_invoice_ref'] = $merchant_invoice_ref;

        return $this;
    }

    /**
     * Gets settlement_id
     *
     * @return string
     */
    public function getSettlementId()
    {
        return $this->container['settlement_id'];
    }

    /**
     * Sets settlement_id
     *
     * @param string $settlement_id Id of created settlement. This Id must be provided in Credit Note request. For SET requests only.
     *
     * @return $this
     */
    public function setSettlementId($settlement_id)
    {
        $this->container['settlement_id'] = $settlement_id;

        return $this;
    }

    /**
     * Gets is_final
     *
     * @return bool
     */
    public function getIsFinal()
    {
        return $this->container['is_final'];
    }

    /**
     * Sets is_final
     *
     * @param bool $is_final For SET request, in case Cancellation created during Final settlement. For SET requests only.
     *
     * @return $this
     */
    public function setIsFinal($is_final)
    {
        $this->container['is_final'] = $is_final;

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
