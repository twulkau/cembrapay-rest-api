<?php
/**
 * Order
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
 * Order Class Doc Comment
 *
 * @category Class
 * @description Details about Order.
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'basket_items_google_taxonomies' => 'string[]',
        'basket_items_prices' => 'int[]',
        'downpayment_to_merchant_amount' => 'int',
        'subscription_type' => '\CembraPay\RestApi\Model\SubscriptionType',
        'payout_info' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'basket_items_google_taxonomies' => null,
        'basket_items_prices' => 'int32',
        'downpayment_to_merchant_amount' => 'int32',
        'subscription_type' => null,
        'payout_info' => null
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
        'basket_items_google_taxonomies' => 'basketItemsGoogleTaxonomies',
        'basket_items_prices' => 'basketItemsPrices',
        'downpayment_to_merchant_amount' => 'downpaymentToMerchantAmount',
        'subscription_type' => 'subscriptionType',
        'payout_info' => 'payoutInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'basket_items_google_taxonomies' => 'setBasketItemsGoogleTaxonomies',
        'basket_items_prices' => 'setBasketItemsPrices',
        'downpayment_to_merchant_amount' => 'setDownpaymentToMerchantAmount',
        'subscription_type' => 'setSubscriptionType',
        'payout_info' => 'setPayoutInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'basket_items_google_taxonomies' => 'getBasketItemsGoogleTaxonomies',
        'basket_items_prices' => 'getBasketItemsPrices',
        'downpayment_to_merchant_amount' => 'getDownpaymentToMerchantAmount',
        'subscription_type' => 'getSubscriptionType',
        'payout_info' => 'getPayoutInfo'
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
        $this->container['basket_items_google_taxonomies'] = isset($data['basket_items_google_taxonomies']) ? $data['basket_items_google_taxonomies'] : null;
        $this->container['basket_items_prices'] = isset($data['basket_items_prices']) ? $data['basket_items_prices'] : null;
        $this->container['downpayment_to_merchant_amount'] = isset($data['downpayment_to_merchant_amount']) ? $data['downpayment_to_merchant_amount'] : null;
        $this->container['subscription_type'] = isset($data['subscription_type']) ? $data['subscription_type'] : null;
        $this->container['payout_info'] = isset($data['payout_info']) ? $data['payout_info'] : null;
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
     * Gets basket_items_google_taxonomies
     *
     * @return string[]
     */
    public function getBasketItemsGoogleTaxonomies()
    {
        return $this->container['basket_items_google_taxonomies'];
    }

    /**
     * Sets basket_items_google_taxonomies
     *
     * @param string[] $basket_items_google_taxonomies List of Google Taxonomies for Basket items.
     *
     * @return $this
     */
    public function setBasketItemsGoogleTaxonomies($basket_items_google_taxonomies)
    {
        $this->container['basket_items_google_taxonomies'] = $basket_items_google_taxonomies;

        return $this;
    }

    /**
     * Gets basket_items_prices
     *
     * @return int[]
     */
    public function getBasketItemsPrices()
    {
        return $this->container['basket_items_prices'];
    }

    /**
     * Sets basket_items_prices
     *
     * @param int[] $basket_items_prices List of Prices for Basket items. Sometimes can be only lowest and highest price. Prices in smallest money unit for the Currency (cents for CHF).
     *
     * @return $this
     */
    public function setBasketItemsPrices($basket_items_prices)
    {
        $this->container['basket_items_prices'] = $basket_items_prices;

        return $this;
    }

    /**
     * Gets downpayment_to_merchant_amount
     *
     * @return int
     */
    public function getDownpaymentToMerchantAmount()
    {
        return $this->container['downpayment_to_merchant_amount'];
    }

    /**
     * Sets downpayment_to_merchant_amount
     *
     * @param int $downpayment_to_merchant_amount In case Customer makes downpayment to merchant then it should be provided. This amount is part of the main Amount, so customer will be financed/blocked difference. Amount in smallest money unit for the Currency (cents for CHF).
     *
     * @return $this
     */
    public function setDownpaymentToMerchantAmount($downpayment_to_merchant_amount)
    {
        $this->container['downpayment_to_merchant_amount'] = $downpayment_to_merchant_amount;

        return $this;
    }

    /**
     * Gets subscription_type
     *
     * @return \CembraPay\RestApi\Model\SubscriptionType
     */
    public function getSubscriptionType()
    {
        return $this->container['subscription_type'];
    }

    /**
     * Sets subscription_type
     *
     * @param \CembraPay\RestApi\Model\SubscriptionType $subscription_type subscription_type
     *
     * @return $this
     */
    public function setSubscriptionType($subscription_type)
    {
        $this->container['subscription_type'] = $subscription_type;

        return $this;
    }

    /**
     * Gets payout_info
     *
     * @return string
     */
    public function getPayoutInfo()
    {
        return $this->container['payout_info'];
    }

    /**
     * Sets payout_info
     *
     * @param string $payout_info Additional Identifier that can be submitted during AUT or CHK and will be shown in CembraPay RAF (Reconciliation Advisory File) to merchant
     *
     * @return $this
     */
    public function setPayoutInfo($payout_info)
    {
        $this->container['payout_info'] = $payout_info;

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
