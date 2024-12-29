<?php
/**
 * CrossMarginRepayment
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * Welcome to Gate.io API  APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * CrossMarginRepayment Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class CrossMarginRepayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CrossMarginRepayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'create_time' => 'int',
        'loan_id' => 'string',
        'currency' => 'string',
        'principal' => 'string',
        'interest' => 'string',
        'repayment_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'create_time' => 'int64',
        'loan_id' => null,
        'currency' => null,
        'principal' => null,
        'interest' => null,
        'repayment_type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'create_time' => 'create_time',
        'loan_id' => 'loan_id',
        'currency' => 'currency',
        'principal' => 'principal',
        'interest' => 'interest',
        'repayment_type' => 'repayment_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'create_time' => 'setCreateTime',
        'loan_id' => 'setLoanId',
        'currency' => 'setCurrency',
        'principal' => 'setPrincipal',
        'interest' => 'setInterest',
        'repayment_type' => 'setRepaymentType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'create_time' => 'getCreateTime',
        'loan_id' => 'getLoanId',
        'currency' => 'getCurrency',
        'principal' => 'getPrincipal',
        'interest' => 'getInterest',
        'repayment_type' => 'getRepaymentType'
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
        return self::$openAPIModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['loan_id'] = isset($data['loan_id']) ? $data['loan_id'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['principal'] = isset($data['principal']) ? $data['principal'] : null;
        $this->container['interest'] = isset($data['interest']) ? $data['interest'] : null;
        $this->container['repayment_type'] = isset($data['repayment_type']) ? $data['repayment_type'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Loan record ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets create_time
     *
     * @return int|null
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time
     *
     * @param int|null $create_time Repayment time
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets loan_id
     *
     * @return string|null
     */
    public function getLoanId()
    {
        return $this->container['loan_id'];
    }

    /**
     * Sets loan_id
     *
     * @param string|null $loan_id Loan record ID
     *
     * @return $this
     */
    public function setLoanId($loan_id)
    {
        $this->container['loan_id'] = $loan_id;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency name
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets principal
     *
     * @return string|null
     */
    public function getPrincipal()
    {
        return $this->container['principal'];
    }

    /**
     * Sets principal
     *
     * @param string|null $principal Repaid principal
     *
     * @return $this
     */
    public function setPrincipal($principal)
    {
        $this->container['principal'] = $principal;

        return $this;
    }

    /**
     * Gets interest
     *
     * @return string|null
     */
    public function getInterest()
    {
        return $this->container['interest'];
    }

    /**
     * Sets interest
     *
     * @param string|null $interest Repaid interest
     *
     * @return $this
     */
    public function setInterest($interest)
    {
        $this->container['interest'] = $interest;

        return $this;
    }

    /**
     * Gets repayment_type
     *
     * @return string|null
     */
    public function getRepaymentType()
    {
        return $this->container['repayment_type'];
    }

    /**
     * Sets repayment_type
     *
     * @param string|null $repayment_type Repayment type: none - no repayment type, manual_repay - manual repayment, auto_repay - automatic repayment, cancel_auto_repay - automatic repayment after cancellation
     *
     * @return $this
     */
    public function setRepaymentType($repayment_type)
    {
        $this->container['repayment_type'] = $repayment_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


