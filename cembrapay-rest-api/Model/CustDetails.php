<?php
/**
 * CustDetails
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
 * CustDetails Class Doc Comment
 *
 * @category Class
 * @description Details of the Customer.  Depending on Customer Type some fields are mandatory and some are not expected. For example CompanyName is not expected if type of Customer is &#x27;P&#x27; (person).
 * @package  CembraPay\RestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'merchant_cust_ref' => 'string',
        'logged_in' => 'bool',
        'cust_type' => '\CembraPay\RestApi\Model\CustomerType',
        'first_name' => 'string',
        'last_name' => 'string',
        'language' => 'string',
        'date_of_birth' => '\DateTime',
        'is_above18' => 'bool',
        'salutation' => '\CembraPay\RestApi\Model\SalutationType',
        'company_reg_num' => 'string',
        'company_name' => 'string',
        'company_department' => 'string',
        'doc_type' => 'string',
        'doc_issuer' => 'string',
        'doc_nr' => 'string',
        'doc_valid_till' => '\DateTime',
        'permit_type' => 'string',
        'in_switzerland_since' => '\DateTime',
        'nationality' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'merchant_cust_ref' => null,
        'logged_in' => null,
        'cust_type' => null,
        'first_name' => null,
        'last_name' => null,
        'language' => null,
        'date_of_birth' => 'date',
        'is_above18' => null,
        'salutation' => null,
        'company_reg_num' => null,
        'company_name' => null,
        'company_department' => null,
        'doc_type' => null,
        'doc_issuer' => null,
        'doc_nr' => null,
        'doc_valid_till' => 'date',
        'permit_type' => null,
        'in_switzerland_since' => 'date',
        'nationality' => null
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
        'merchant_cust_ref' => 'merchantCustRef',
        'logged_in' => 'loggedIn',
        'cust_type' => 'custType',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'language' => 'language',
        'date_of_birth' => 'dateOfBirth',
        'is_above18' => 'isAbove18',
        'salutation' => 'salutation',
        'company_reg_num' => 'companyRegNum',
        'company_name' => 'companyName',
        'company_department' => 'companyDepartment',
        'doc_type' => 'docType',
        'doc_issuer' => 'docIssuer',
        'doc_nr' => 'docNr',
        'doc_valid_till' => 'docValidTill',
        'permit_type' => 'permitType',
        'in_switzerland_since' => 'inSwitzerlandSince',
        'nationality' => 'nationality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchant_cust_ref' => 'setMerchantCustRef',
        'logged_in' => 'setLoggedIn',
        'cust_type' => 'setCustType',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'language' => 'setLanguage',
        'date_of_birth' => 'setDateOfBirth',
        'is_above18' => 'setIsAbove18',
        'salutation' => 'setSalutation',
        'company_reg_num' => 'setCompanyRegNum',
        'company_name' => 'setCompanyName',
        'company_department' => 'setCompanyDepartment',
        'doc_type' => 'setDocType',
        'doc_issuer' => 'setDocIssuer',
        'doc_nr' => 'setDocNr',
        'doc_valid_till' => 'setDocValidTill',
        'permit_type' => 'setPermitType',
        'in_switzerland_since' => 'setInSwitzerlandSince',
        'nationality' => 'setNationality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchant_cust_ref' => 'getMerchantCustRef',
        'logged_in' => 'getLoggedIn',
        'cust_type' => 'getCustType',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'language' => 'getLanguage',
        'date_of_birth' => 'getDateOfBirth',
        'is_above18' => 'getIsAbove18',
        'salutation' => 'getSalutation',
        'company_reg_num' => 'getCompanyRegNum',
        'company_name' => 'getCompanyName',
        'company_department' => 'getCompanyDepartment',
        'doc_type' => 'getDocType',
        'doc_issuer' => 'getDocIssuer',
        'doc_nr' => 'getDocNr',
        'doc_valid_till' => 'getDocValidTill',
        'permit_type' => 'getPermitType',
        'in_switzerland_since' => 'getInSwitzerlandSince',
        'nationality' => 'getNationality'
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
        $this->container['merchant_cust_ref'] = isset($data['merchant_cust_ref']) ? $data['merchant_cust_ref'] : null;
        $this->container['logged_in'] = isset($data['logged_in']) ? $data['logged_in'] : null;
        $this->container['cust_type'] = isset($data['cust_type']) ? $data['cust_type'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['is_above18'] = isset($data['is_above18']) ? $data['is_above18'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['company_reg_num'] = isset($data['company_reg_num']) ? $data['company_reg_num'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['company_department'] = isset($data['company_department']) ? $data['company_department'] : null;
        $this->container['doc_type'] = isset($data['doc_type']) ? $data['doc_type'] : null;
        $this->container['doc_issuer'] = isset($data['doc_issuer']) ? $data['doc_issuer'] : null;
        $this->container['doc_nr'] = isset($data['doc_nr']) ? $data['doc_nr'] : null;
        $this->container['doc_valid_till'] = isset($data['doc_valid_till']) ? $data['doc_valid_till'] : null;
        $this->container['permit_type'] = isset($data['permit_type']) ? $data['permit_type'] : null;
        $this->container['in_switzerland_since'] = isset($data['in_switzerland_since']) ? $data['in_switzerland_since'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchant_cust_ref'] === null) {
            $invalidProperties[] = "'merchant_cust_ref' can't be null";
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
     * @param string $merchant_cust_ref Customer identifier in Merchants system. Mandatory for requests of type SCR, AUT, REG or CHK. Field value is not case-sensitive.
     *
     * @return $this
     */
    public function setMerchantCustRef($merchant_cust_ref)
    {
        $this->container['merchant_cust_ref'] = $merchant_cust_ref;

        return $this;
    }

    /**
     * Gets logged_in
     *
     * @return bool
     */
    public function getLoggedIn()
    {
        return $this->container['logged_in'];
    }

    /**
     * Sets logged_in
     *
     * @param bool $logged_in This field must be set to 'true' in case, if Customer is logged into Merchants system (Customer is known to Merchant).
     *
     * @return $this
     */
    public function setLoggedIn($logged_in)
    {
        $this->container['logged_in'] = $logged_in;

        return $this;
    }

    /**
     * Gets cust_type
     *
     * @return \CembraPay\RestApi\Model\CustomerType
     */
    public function getCustType()
    {
        return $this->container['cust_type'];
    }

    /**
     * Sets cust_type
     *
     * @param \CembraPay\RestApi\Model\CustomerType $cust_type cust_type
     *
     * @return $this
     */
    public function setCustType($cust_type)
    {
        $this->container['cust_type'] = $cust_type;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name of Customer 'P'(person), or Ordering person for Customer 'C'(company). Mandatory for persons.
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name of Customer 'P'(person), or Ordering person for Customer 'C'(company). Mandatory for persons.
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Customers preferable language. ISO639-1 two letters language code.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets date_of_birth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }

    /**
     * Sets date_of_birth
     *
     * @param \DateTime $date_of_birth Customer's date of birth. ISO8601 Date Only in format 'yyyy-MM-dd'.
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {
        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }

    /**
     * Gets is_above18
     *
     * @return bool
     */
    public function getIsAbove18()
    {
        return $this->container['is_above18'];
    }

    /**
     * Sets is_above18
     *
     * @param bool $is_above18 'true' if Customer(person) is known as person above 18 years old - e.g. Customer had approved this in Merchants system.
     *
     * @return $this
     */
    public function setIsAbove18($is_above18)
    {
        $this->container['is_above18'] = $is_above18;

        return $this;
    }

    /**
     * Gets salutation
     *
     * @return \CembraPay\RestApi\Model\SalutationType
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     *
     * @param \CembraPay\RestApi\Model\SalutationType $salutation salutation
     *
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets company_reg_num
     *
     * @return string
     */
    public function getCompanyRegNum()
    {
        return $this->container['company_reg_num'];
    }

    /**
     * Sets company_reg_num
     *
     * @param string $company_reg_num Registration number of Customer(company). Not expected for persons.
     *
     * @return $this
     */
    public function setCompanyRegNum($company_reg_num)
    {
        $this->container['company_reg_num'] = $company_reg_num;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Legal Name of Customer(company). Mandatory for Companies.
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_department
     *
     * @return string
     */
    public function getCompanyDepartment()
    {
        return $this->container['company_department'];
    }

    /**
     * Sets company_department
     *
     * @param string $company_department Department of Customer(company).
     *
     * @return $this
     */
    public function setCompanyDepartment($company_department)
    {
        $this->container['company_department'] = $company_department;

        return $this;
    }

    /**
     * Gets doc_type
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->container['doc_type'];
    }

    /**
     * Sets doc_type
     *
     * @param string $doc_type Type of verified document.
     *
     * @return $this
     */
    public function setDocType($doc_type)
    {
        $this->container['doc_type'] = $doc_type;

        return $this;
    }

    /**
     * Gets doc_issuer
     *
     * @return string
     */
    public function getDocIssuer()
    {
        return $this->container['doc_issuer'];
    }

    /**
     * Sets doc_issuer
     *
     * @param string $doc_issuer Issuer of verified document.
     *
     * @return $this
     */
    public function setDocIssuer($doc_issuer)
    {
        $this->container['doc_issuer'] = $doc_issuer;

        return $this;
    }

    /**
     * Gets doc_nr
     *
     * @return string
     */
    public function getDocNr()
    {
        return $this->container['doc_nr'];
    }

    /**
     * Sets doc_nr
     *
     * @param string $doc_nr Number of verified document.
     *
     * @return $this
     */
    public function setDocNr($doc_nr)
    {
        $this->container['doc_nr'] = $doc_nr;

        return $this;
    }

    /**
     * Gets doc_valid_till
     *
     * @return \DateTime
     */
    public function getDocValidTill()
    {
        return $this->container['doc_valid_till'];
    }

    /**
     * Sets doc_valid_till
     *
     * @param \DateTime $doc_valid_till Validity date of verified document. ISO8601 Date Only in format 'yyyy-MM-dd'..
     *
     * @return $this
     */
    public function setDocValidTill($doc_valid_till)
    {
        $this->container['doc_valid_till'] = $doc_valid_till;

        return $this;
    }

    /**
     * Gets permit_type
     *
     * @return string
     */
    public function getPermitType()
    {
        return $this->container['permit_type'];
    }

    /**
     * Sets permit_type
     *
     * @param string $permit_type Type of Swiss Residence permission. Not expected for Customer(company)
     *
     * @return $this
     */
    public function setPermitType($permit_type)
    {
        $this->container['permit_type'] = $permit_type;

        return $this;
    }

    /**
     * Gets in_switzerland_since
     *
     * @return \DateTime
     */
    public function getInSwitzerlandSince()
    {
        return $this->container['in_switzerland_since'];
    }

    /**
     * Sets in_switzerland_since
     *
     * @param \DateTime $in_switzerland_since Date from which Customer(person) lives in Swizerland. ISO8601 Date Only in format 'yyyy-MM-dd'.. Not expected for Customer(company).
     *
     * @return $this
     */
    public function setInSwitzerlandSince($in_switzerland_since)
    {
        $this->container['in_switzerland_since'] = $in_switzerland_since;

        return $this;
    }

    /**
     * Gets nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
     * Sets nationality
     *
     * @param string $nationality Nationality of Customer(person), ISO3166-1 alpha 2 code (two letters). Not expected for Customer(company)
     *
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;

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
