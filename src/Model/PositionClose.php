<?php
/**
 * PositionClose
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
 * PositionClose Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class PositionClose implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PositionClose';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'time' => 'double',
        'contract' => 'string',
        'side' => 'string',
        'pnl' => 'string',
        'pnl_pnl' => 'string',
        'pnl_fund' => 'string',
        'pnl_fee' => 'string',
        'text' => 'string',
        'max_size' => 'string',
        'accum_size' => 'string',
        'first_open_time' => 'int',
        'long_price' => 'string',
        'short_price' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'time' => 'double',
        'contract' => null,
        'side' => null,
        'pnl' => null,
        'pnl_pnl' => null,
        'pnl_fund' => null,
        'pnl_fee' => null,
        'text' => null,
        'max_size' => null,
        'accum_size' => null,
        'first_open_time' => 'int64',
        'long_price' => null,
        'short_price' => null
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
        'side' => 'side',
        'pnl' => 'pnl',
        'pnl_pnl' => 'pnl_pnl',
        'pnl_fund' => 'pnl_fund',
        'pnl_fee' => 'pnl_fee',
        'text' => 'text',
        'max_size' => 'max_size',
        'accum_size' => 'accum_size',
        'first_open_time' => 'first_open_time',
        'long_price' => 'long_price',
        'short_price' => 'short_price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'time' => 'setTime',
        'contract' => 'setContract',
        'side' => 'setSide',
        'pnl' => 'setPnl',
        'pnl_pnl' => 'setPnlPnl',
        'pnl_fund' => 'setPnlFund',
        'pnl_fee' => 'setPnlFee',
        'text' => 'setText',
        'max_size' => 'setMaxSize',
        'accum_size' => 'setAccumSize',
        'first_open_time' => 'setFirstOpenTime',
        'long_price' => 'setLongPrice',
        'short_price' => 'setShortPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'time' => 'getTime',
        'contract' => 'getContract',
        'side' => 'getSide',
        'pnl' => 'getPnl',
        'pnl_pnl' => 'getPnlPnl',
        'pnl_fund' => 'getPnlFund',
        'pnl_fee' => 'getPnlFee',
        'text' => 'getText',
        'max_size' => 'getMaxSize',
        'accum_size' => 'getAccumSize',
        'first_open_time' => 'getFirstOpenTime',
        'long_price' => 'getLongPrice',
        'short_price' => 'getShortPrice'
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

    const SIDE_LONG = 'long';
    const SIDE_SHORT = 'short';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSideAllowableValues()
    {
        return [
            self::SIDE_LONG,
            self::SIDE_SHORT,
        ];
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
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['pnl'] = isset($data['pnl']) ? $data['pnl'] : null;
        $this->container['pnl_pnl'] = isset($data['pnl_pnl']) ? $data['pnl_pnl'] : null;
        $this->container['pnl_fund'] = isset($data['pnl_fund']) ? $data['pnl_fund'] : null;
        $this->container['pnl_fee'] = isset($data['pnl_fee']) ? $data['pnl_fee'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['max_size'] = isset($data['max_size']) ? $data['max_size'] : null;
        $this->container['accum_size'] = isset($data['accum_size']) ? $data['accum_size'] : null;
        $this->container['first_open_time'] = isset($data['first_open_time']) ? $data['first_open_time'] : null;
        $this->container['long_price'] = isset($data['long_price']) ? $data['long_price'] : null;
        $this->container['short_price'] = isset($data['short_price']) ? $data['short_price'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSideAllowableValues();
        if (!is_null($this->container['side']) && !in_array($this->container['side'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'side', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets time
     *
     * @return double|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param double|null $time Position close time
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
     * Gets side
     *
     * @return string|null
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string|null $side Position side, long or short
     *
     * @return $this
     */
    public function setSide($side)
    {
        $allowedValues = $this->getSideAllowableValues();
        if (!is_null($side) && !in_array($side, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'side', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets pnl
     *
     * @return string|null
     */
    public function getPnl()
    {
        return $this->container['pnl'];
    }

    /**
     * Sets pnl
     *
     * @param string|null $pnl PNL
     *
     * @return $this
     */
    public function setPnl($pnl)
    {
        $this->container['pnl'] = $pnl;

        return $this;
    }

    /**
     * Gets pnl_pnl
     *
     * @return string|null
     */
    public function getPnlPnl()
    {
        return $this->container['pnl_pnl'];
    }

    /**
     * Sets pnl_pnl
     *
     * @param string|null $pnl_pnl PNL - Position P/L
     *
     * @return $this
     */
    public function setPnlPnl($pnl_pnl)
    {
        $this->container['pnl_pnl'] = $pnl_pnl;

        return $this;
    }

    /**
     * Gets pnl_fund
     *
     * @return string|null
     */
    public function getPnlFund()
    {
        return $this->container['pnl_fund'];
    }

    /**
     * Sets pnl_fund
     *
     * @param string|null $pnl_fund PNL - Funding Fees
     *
     * @return $this
     */
    public function setPnlFund($pnl_fund)
    {
        $this->container['pnl_fund'] = $pnl_fund;

        return $this;
    }

    /**
     * Gets pnl_fee
     *
     * @return string|null
     */
    public function getPnlFee()
    {
        return $this->container['pnl_fee'];
    }

    /**
     * Sets pnl_fee
     *
     * @param string|null $pnl_fee PNL - Transaction Fees
     *
     * @return $this
     */
    public function setPnlFee($pnl_fee)
    {
        $this->container['pnl_fee'] = $pnl_fee;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text Text of close order
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets max_size
     *
     * @return string|null
     */
    public function getMaxSize()
    {
        return $this->container['max_size'];
    }

    /**
     * Sets max_size
     *
     * @param string|null $max_size Max Trade Size
     *
     * @return $this
     */
    public function setMaxSize($max_size)
    {
        $this->container['max_size'] = $max_size;

        return $this;
    }

    /**
     * Gets accum_size
     *
     * @return string|null
     */
    public function getAccumSize()
    {
        return $this->container['accum_size'];
    }

    /**
     * Sets accum_size
     *
     * @param string|null $accum_size Cumulative closed position volume
     *
     * @return $this
     */
    public function setAccumSize($accum_size)
    {
        $this->container['accum_size'] = $accum_size;

        return $this;
    }

    /**
     * Gets first_open_time
     *
     * @return int|null
     */
    public function getFirstOpenTime()
    {
        return $this->container['first_open_time'];
    }

    /**
     * Sets first_open_time
     *
     * @param int|null $first_open_time First Open Time
     *
     * @return $this
     */
    public function setFirstOpenTime($first_open_time)
    {
        $this->container['first_open_time'] = $first_open_time;

        return $this;
    }

    /**
     * Gets long_price
     *
     * @return string|null
     */
    public function getLongPrice()
    {
        return $this->container['long_price'];
    }

    /**
     * Sets long_price
     *
     * @param string|null $long_price When 'side' is 'long,' it indicates the opening average price; when 'side' is 'short,' it indicates the closing average price.
     *
     * @return $this
     */
    public function setLongPrice($long_price)
    {
        $this->container['long_price'] = $long_price;

        return $this;
    }

    /**
     * Gets short_price
     *
     * @return string|null
     */
    public function getShortPrice()
    {
        return $this->container['short_price'];
    }

    /**
     * Sets short_price
     *
     * @param string|null $short_price When 'side' is 'long,' it indicates the opening average price; when 'side' is 'short,' it indicates the closing average price
     *
     * @return $this
     */
    public function setShortPrice($short_price)
    {
        $this->container['short_price'] = $short_price;

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

