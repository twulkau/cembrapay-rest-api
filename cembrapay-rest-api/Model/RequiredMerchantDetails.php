<?php
/**
 * RequiredMerchantDetails
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
 * RequiredMerchantDetails Class Doc Comment
 *
 * @category Class
 * @description Additional merchant specific details
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequiredMerchantDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RequiredMerchantDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terminal_id' => 'string',
        'return_url_success' => 'string',
        'return_url_error' => 'string',
        'return_url_cancel' => 'string',
        'transaction_channel' => '\CembraPay\RestApi\Model\TransactionChannel',
        'integration_module' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terminal_id' => null,
        'return_url_success' => null,
        'return_url_error' => null,
        'return_url_cancel' => null,
        'transaction_channel' => null,
        'integration_module' => null
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
        'terminal_id' => 'terminalId',
        'return_url_success' => 'returnUrlSuccess',
        'return_url_error' => 'returnUrlError',
        'return_url_cancel' => 'returnUrlCancel',
        'transaction_channel' => 'transactionChannel',
        'integration_module' => 'integrationModule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminal_id' => 'setTerminalId',
        'return_url_success' => 'setReturnUrlSuccess',
        'return_url_error' => 'setReturnUrlError',
        'return_url_cancel' => 'setReturnUrlCancel',
        'transaction_channel' => 'setTransactionChannel',
        'integration_module' => 'setIntegrationModule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminal_id' => 'getTerminalId',
        'return_url_success' => 'getReturnUrlSuccess',
        'return_url_error' => 'getReturnUrlError',
        'return_url_cancel' => 'getReturnUrlCancel',
        'transaction_channel' => 'getTransactionChannel',
        'integration_module' => 'getIntegrationModule'
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
        $this->container['terminal_id'] = isset($data['terminal_id']) ? $data['terminal_id'] : null;
        $this->container['return_url_success'] = isset($data['return_url_success']) ? $data['return_url_success'] : null;
        $this->container['return_url_error'] = isset($data['return_url_error']) ? $data['return_url_error'] : null;
        $this->container['return_url_cancel'] = isset($data['return_url_cancel']) ? $data['return_url_cancel'] : null;
        $this->container['transaction_channel'] = isset($data['transaction_channel']) ? $data['transaction_channel'] : null;
        $this->container['integration_module'] = isset($data['integration_module']) ? $data['integration_module'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['return_url_success'] === null) {
            $invalidProperties[] = "'return_url_success' can't be null";
        }
        if ($this->container['return_url_error'] === null) {
            $invalidProperties[] = "'return_url_error' can't be null";
        }
        if ($this->container['return_url_cancel'] === null) {
            $invalidProperties[] = "'return_url_cancel' can't be null";
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
     * Gets terminal_id
     *
     * @return string
     */
    public function getTerminalId()
    {
        return $this->container['terminal_id'];
    }

    /**
     * Sets terminal_id
     *
     * @param string $terminal_id In cases when merchant operate in multiple sales locations, the terminal id should uniquely identify each point of sales (each store).
     *
     * @return $this
     */
    public function setTerminalId($terminal_id)
    {
        $this->container['terminal_id'] = $terminal_id;

        return $this;
    }

    /**
     * Gets return_url_success
     *
     * @return string
     */
    public function getReturnUrlSuccess()
    {
        return $this->container['return_url_success'];
    }

    /**
     * Sets return_url_success
     *
     * @param string $return_url_success This is return URL (encoded base64), the customer upon successful completion of transaction on CembraPay, will be redirected back to merchant. Mandatory for REG and CHK requests.
     *
     * @return $this
     */
    public function setReturnUrlSuccess($return_url_success)
    {
        $this->container['return_url_success'] = $return_url_success;

        return $this;
    }

    /**
     * Gets return_url_error
     *
     * @return string
     */
    public function getReturnUrlError()
    {
        return $this->container['return_url_error'];
    }

    /**
     * Sets return_url_error
     *
     * @param string $return_url_error This is return URL (encoded base64), the customer upon ERROR of transaction on CembraPay, will be redirected back to merchant. Mandatory for REG and CHK requests.
     *
     * @return $this
     */
    public function setReturnUrlError($return_url_error)
    {
        $this->container['return_url_error'] = $return_url_error;

        return $this;
    }

    /**
     * Gets return_url_cancel
     *
     * @return string
     */
    public function getReturnUrlCancel()
    {
        return $this->container['return_url_cancel'];
    }

    /**
     * Sets return_url_cancel
     *
     * @param string $return_url_cancel This is return URL (encoded base64), where customer will be redirected in case he cancels transaction via pressing Cancel button on UI. Mandatory for REG and CHK requests.
     *
     * @return $this
     */
    public function setReturnUrlCancel($return_url_cancel)
    {
        $this->container['return_url_cancel'] = $return_url_cancel;

        return $this;
    }

    /**
     * Gets transaction_channel
     *
     * @return \CembraPay\RestApi\Model\TransactionChannel
     */
    public function getTransactionChannel()
    {
        return $this->container['transaction_channel'];
    }

    /**
     * Sets transaction_channel
     *
     * @param \CembraPay\RestApi\Model\TransactionChannel $transaction_channel transaction_channel
     *
     * @return $this
     */
    public function setTransactionChannel($transaction_channel)
    {
        $this->container['transaction_channel'] = $transaction_channel;

        return $this;
    }

    /**
     * Gets integration_module
     *
     * @return string
     */
    public function getIntegrationModule()
    {
        return $this->container['integration_module'];
    }

    /**
     * Sets integration_module
     *
     * @param string $integration_module This is optional field to track Integration versioning on the client/merchant side. Used for debugging and traceability.
     *
     * @return $this
     */
    public function setIntegrationModule($integration_module)
    {
        $this->container['integration_module'] = $integration_module;

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
