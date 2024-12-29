<?php
/**
 * BrokerCommission1
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
 * BrokerCommission1 Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class BrokerCommission1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BrokerCommission_1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'commission_time' => 'int',
        'user_id' => 'int',
        'group_name' => 'string',
        'amount' => 'string',
        'fee' => 'string',
        'fee_asset' => 'string',
        'rebate_fee' => 'string',
        'source' => 'string',
        'currency_pair' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'commission_time' => 'int64',
        'user_id' => 'int64',
        'group_name' => null,
        'amount' => null,
        'fee' => null,
        'fee_asset' => null,
        'rebate_fee' => null,
        'source' => null,
        'currency_pair' => null
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
        'commission_time' => 'commission_time',
        'user_id' => 'user_id',
        'group_name' => 'group_name',
        'amount' => 'amount',
        'fee' => 'fee',
        'fee_asset' => 'fee_asset',
        'rebate_fee' => 'rebate_fee',
        'source' => 'source',
        'currency_pair' => 'currency_pair'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commission_time' => 'setCommissionTime',
        'user_id' => 'setUserId',
        'group_name' => 'setGroupName',
        'amount' => 'setAmount',
        'fee' => 'setFee',
        'fee_asset' => 'setFeeAsset',
        'rebate_fee' => 'setRebateFee',
        'source' => 'setSource',
        'currency_pair' => 'setCurrencyPair'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commission_time' => 'getCommissionTime',
        'user_id' => 'getUserId',
        'group_name' => 'getGroupName',
        'amount' => 'getAmount',
        'fee' => 'getFee',
        'fee_asset' => 'getFeeAsset',
        'rebate_fee' => 'getRebateFee',
        'source' => 'getSource',
        'currency_pair' => 'getCurrencyPair'
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
        $this->container['commission_time'] = isset($data['commission_time']) ? $data['commission_time'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['group_name'] = isset($data['group_name']) ? $data['group_name'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['fee_asset'] = isset($data['fee_asset']) ? $data['fee_asset'] : null;
        $this->container['rebate_fee'] = isset($data['rebate_fee']) ? $data['rebate_fee'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['currency_pair'] = isset($data['currency_pair']) ? $data['currency_pair'] : null;
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
     * Gets commission_time
     *
     * @return int|null
     */
    public function getCommissionTime()
    {
        return $this->container['commission_time'];
    }

    /**
     * Sets commission_time
     *
     * @param int|null $commission_time Commission Time. (unix timestamp)
     *
     * @return $this
     */
    public function setCommissionTime($commission_time)
    {
        $this->container['commission_time'] = $commission_time;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id User ID
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string|null $group_name Group name
     *
     * @return $this
     */
    public function setGroupName($group_name)
    {
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount The amount of commission rebates
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string|null $fee Fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets fee_asset
     *
     * @return string|null
     */
    public function getFeeAsset()
    {
        return $this->container['fee_asset'];
    }

    /**
     * Sets fee_asset
     *
     * @param string|null $fee_asset Fee currency
     *
     * @return $this
     */
    public function setFeeAsset($fee_asset)
    {
        $this->container['fee_asset'] = $fee_asset;

        return $this;
    }

    /**
     * Gets rebate_fee
     *
     * @return string|null
     */
    public function getRebateFee()
    {
        return $this->container['rebate_fee'];
    }

    /**
     * Sets rebate_fee
     *
     * @param string|null $rebate_fee The income from rebates, converted to USDT
     *
     * @return $this
     */
    public function setRebateFee($rebate_fee)
    {
        $this->container['rebate_fee'] = $rebate_fee;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source Rebate Type: Spot、Futures、Options
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets currency_pair
     *
     * @return string|null
     */
    public function getCurrencyPair()
    {
        return $this->container['currency_pair'];
    }

    /**
     * Sets currency_pair
     *
     * @param string|null $currency_pair Currency pair
     *
     * @return $this
     */
    public function setCurrencyPair($currency_pair)
    {
        $this->container['currency_pair'] = $currency_pair;

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


