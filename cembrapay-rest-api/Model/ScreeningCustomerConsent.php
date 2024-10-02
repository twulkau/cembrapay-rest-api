<?php
/**
 * ScreeningCustomerConsent
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
 * ScreeningCustomerConsent Class Doc Comment
 *
 * @category Class
 * @description List of Customer consents. Mandatory for SCR requests. Please reflect the Data Submission to CembraPay in your Data Privacy Statement or T&amp;Cs
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScreeningCustomerConsent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScreeningCustomerConsent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'consent_type' => '\CembraPay\RestApi\Model\ConsentType',
        'consent_provided_at' => '\CembraPay\RestApi\Model\ConsentProvidingChannel',
        'consent_date' => '\DateTime',
        'consent_reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'consent_type' => null,
        'consent_provided_at' => null,
        'consent_date' => 'date-time',
        'consent_reference' => null
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
        'consent_type' => 'consentType',
        'consent_provided_at' => 'consentProvidedAt',
        'consent_date' => 'consentDate',
        'consent_reference' => 'consentReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'consent_type' => 'setConsentType',
        'consent_provided_at' => 'setConsentProvidedAt',
        'consent_date' => 'setConsentDate',
        'consent_reference' => 'setConsentReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'consent_type' => 'getConsentType',
        'consent_provided_at' => 'getConsentProvidedAt',
        'consent_date' => 'getConsentDate',
        'consent_reference' => 'getConsentReference'
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
        $this->container['consent_type'] = isset($data['consent_type']) ? $data['consent_type'] : null;
        $this->container['consent_provided_at'] = isset($data['consent_provided_at']) ? $data['consent_provided_at'] : null;
        $this->container['consent_date'] = isset($data['consent_date']) ? $data['consent_date'] : null;
        $this->container['consent_reference'] = isset($data['consent_reference']) ? $data['consent_reference'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['consent_type'] === null) {
            $invalidProperties[] = "'consent_type' can't be null";
        }
        if ($this->container['consent_provided_at'] === null) {
            $invalidProperties[] = "'consent_provided_at' can't be null";
        }
        if ($this->container['consent_date'] === null) {
            $invalidProperties[] = "'consent_date' can't be null";
        }
        if ($this->container['consent_reference'] === null) {
            $invalidProperties[] = "'consent_reference' can't be null";
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
     * Gets consent_type
     *
     * @return \CembraPay\RestApi\Model\ConsentType
     */
    public function getConsentType()
    {
        return $this->container['consent_type'];
    }

    /**
     * Sets consent_type
     *
     * @param \CembraPay\RestApi\Model\ConsentType $consent_type consent_type
     *
     * @return $this
     */
    public function setConsentType($consent_type)
    {
        $this->container['consent_type'] = $consent_type;

        return $this;
    }

    /**
     * Gets consent_provided_at
     *
     * @return \CembraPay\RestApi\Model\ConsentProvidingChannel
     */
    public function getConsentProvidedAt()
    {
        return $this->container['consent_provided_at'];
    }

    /**
     * Sets consent_provided_at
     *
     * @param \CembraPay\RestApi\Model\ConsentProvidingChannel $consent_provided_at consent_provided_at
     *
     * @return $this
     */
    public function setConsentProvidedAt($consent_provided_at)
    {
        $this->container['consent_provided_at'] = $consent_provided_at;

        return $this;
    }

    /**
     * Gets consent_date
     *
     * @return \DateTime
     */
    public function getConsentDate()
    {
        return $this->container['consent_date'];
    }

    /**
     * Sets consent_date
     *
     * @param \DateTime $consent_date DateTime when Consent was captured. ISO8601 Date with time in format 'yyyy-MM-ddTHH:mm:ssZ'.
     *
     * @return $this
     */
    public function setConsentDate($consent_date)
    {
        $this->container['consent_date'] = $consent_date;

        return $this;
    }

    /**
     * Gets consent_reference
     *
     * @return string
     */
    public function getConsentReference()
    {
        return $this->container['consent_reference'];
    }

    /**
     * Sets consent_reference
     *
     * @param string $consent_reference The reference to the Terms and Conditions of CembraPay, e.g. if link is https://cembrapay.ch/de/terms/CP - reference is CP
     *
     * @return $this
     */
    public function setConsentReference($consent_reference)
    {
        $this->container['consent_reference'] = $consent_reference;

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