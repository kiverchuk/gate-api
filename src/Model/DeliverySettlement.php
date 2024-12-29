<?php
/**
 * DeliverySettlement
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
 * DeliverySettlement Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class DeliverySettlement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliverySettlement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'time' => 'int',
        'contract' => 'string',
        'leverage' => 'string',
        'size' => 'int',
        'margin' => 'string',
        'entry_price' => 'string',
        'settle_price' => 'string',
        'profit' => 'string',
        'fee' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'time' => 'int64',
        'contract' => null,
        'leverage' => null,
        'size' => 'int64',
        'margin' => null,
        'entry_price' => null,
        'settle_price' => null,
        'profit' => null,
        'fee' => null
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
        'time' => 'time',
        'contract' => 'contract',
        'leverage' => 'leverage',
        'size' => 'size',
        'margin' => 'margin',
        'entry_price' => 'entry_price',
        'settle_price' => 'settle_price',
        'profit' => 'profit',
        'fee' => 'fee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time' => 'setTime',
        'contract' => 'setContract',
        'leverage' => 'setLeverage',
        'size' => 'setSize',
        'margin' => 'setMargin',
        'entry_price' => 'setEntryPrice',
        'settle_price' => 'setSettlePrice',
        'profit' => 'setProfit',
        'fee' => 'setFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time' => 'getTime',
        'contract' => 'getContract',
        'leverage' => 'getLeverage',
        'size' => 'getSize',
        'margin' => 'getMargin',
        'entry_price' => 'getEntryPrice',
        'settle_price' => 'getSettlePrice',
        'profit' => 'getProfit',
        'fee' => 'getFee'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['leverage'] = isset($data['leverage']) ? $data['leverage'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['entry_price'] = isset($data['entry_price']) ? $data['entry_price'] : null;
        $this->container['settle_price'] = isset($data['settle_price']) ? $data['settle_price'] : null;
        $this->container['profit'] = isset($data['profit']) ? $data['profit'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
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
     * Gets time
     *
     * @return int|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param int|null $time Liquidation time
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return string|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string|null $contract Futures contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets leverage
     *
     * @return string|null
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage
     *
     * @param string|null $leverage Position leverage
     *
     * @return $this
     */
    public function setLeverage($leverage)
    {
        $this->container['leverage'] = $leverage;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Position size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return string|null
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param string|null $margin Position margin
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets entry_price
     *
     * @return string|null
     */
    public function getEntryPrice()
    {
        return $this->container['entry_price'];
    }

    /**
     * Sets entry_price
     *
     * @param string|null $entry_price Average entry price
     *
     * @return $this
     */
    public function setEntryPrice($entry_price)
    {
        $this->container['entry_price'] = $entry_price;

        return $this;
    }

    /**
     * Gets settle_price
     *
     * @return string|null
     */
    public function getSettlePrice()
    {
        return $this->container['settle_price'];
    }

    /**
     * Sets settle_price
     *
     * @param string|null $settle_price Settled price
     *
     * @return $this
     */
    public function setSettlePrice($settle_price)
    {
        $this->container['settle_price'] = $settle_price;

        return $this;
    }

    /**
     * Gets profit
     *
     * @return string|null
     */
    public function getProfit()
    {
        return $this->container['profit'];
    }

    /**
     * Sets profit
     *
     * @param string|null $profit Profit
     *
     * @return $this
     */
    public function setProfit($profit)
    {
        $this->container['profit'] = $profit;

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
     * @param string|null $fee Fee deducted
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

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


