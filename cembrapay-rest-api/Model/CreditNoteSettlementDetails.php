<?php
/**
 * CreditNoteSettlementDetails
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
 * CreditNoteSettlementDetails Class Doc Comment
 *
 * @category Class
 * @description Details of Settlement
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreditNoteSettlementDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreditNoteSettlementDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consumer_invoice_information' => 'string',
        'settlement_id' => 'string',
        'merchant_invoice_ref' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consumer_invoice_information' => null,
        'settlement_id' => null,
        'merchant_invoice_ref' => null
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
        'consumer_invoice_information' => 'consumerInvoiceInformation',
        'settlement_id' => 'settlementId',
        'merchant_invoice_ref' => 'merchantInvoiceRef'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consumer_invoice_information' => 'setConsumerInvoiceInformation',
        'settlement_id' => 'setSettlementId',
        'merchant_invoice_ref' => 'setMerchantInvoiceRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consumer_invoice_information' => 'getConsumerInvoiceInformation',
        'settlement_id' => 'getSettlementId',
        'merchant_invoice_ref' => 'getMerchantInvoiceRef'
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
        $this->container['consumer_invoice_information'] = isset($data['consumer_invoice_information']) ? $data['consumer_invoice_information'] : null;
        $this->container['settlement_id'] = isset($data['settlement_id']) ? $data['settlement_id'] : null;
        $this->container['merchant_invoice_ref'] = isset($data['merchant_invoice_ref']) ? $data['merchant_invoice_ref'] : null;
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
     * Gets consumer_invoice_information
     *
     * @return string
     */
    public function getConsumerInvoiceInformation()
    {
        return $this->container['consumer_invoice_information'];
    }

    /**
     * Sets consumer_invoice_information
     *
     * @param string $consumer_invoice_information This information can be used to display additional information about purchase on the consumers invoice. Usage is restricted to account based products only. Value must be encoded base64
     *
     * @return $this
     */
    public function setConsumerInvoiceInformation($consumer_invoice_information)
    {
        $this->container['consumer_invoice_information'] = $consumer_invoice_information;

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
     * @param string $settlement_id Id of Settlement. It is mandatory except the cases when Settlement was sent via the old API
     *
     * @return $this
     */
    public function setSettlementId($settlement_id)
    {
        $this->container['settlement_id'] = $settlement_id;

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
     * @param string $merchant_invoice_ref Invoice reference in Merchants system. In case Merchant system doesn't have invoices, Order reference can be provided in this field. Field value is not case-sensitive.
     *
     * @return $this
     */
    public function setMerchantInvoiceRef($merchant_invoice_ref)
    {
        $this->container['merchant_invoice_ref'] = $merchant_invoice_ref;

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
