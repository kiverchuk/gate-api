<?php
/**
 * ProfitLossRange
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
 * ProfitLossRange Class Doc Comment
 *
 * @category Class
 * @description Profit and loss range
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class ProfitLossRange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProfitLossRange';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'price_percentage' => 'string',
        'implied_volatility_percentage' => 'string',
        'profit_loss' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'price_percentage' => null,
        'implied_volatility_percentage' => null,
        'profit_loss' => null
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
        'price_percentage' => 'price_percentage',
        'implied_volatility_percentage' => 'implied_volatility_percentage',
        'profit_loss' => 'profit_loss'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'price_percentage' => 'setPricePercentage',
        'implied_volatility_percentage' => 'setImpliedVolatilityPercentage',
        'profit_loss' => 'setProfitLoss'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'price_percentage' => 'getPricePercentage',
        'implied_volatility_percentage' => 'getImpliedVolatilityPercentage',
        'profit_loss' => 'getProfitLoss'
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
        $this->container['price_percentage'] = isset($data['price_percentage']) ? $data['price_percentage'] : null;
        $this->container['implied_volatility_percentage'] = isset($data['implied_volatility_percentage']) ? $data['implied_volatility_percentage'] : null;
        $this->container['profit_loss'] = isset($data['profit_loss']) ? $data['profit_loss'] : null;
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
     * Gets price_percentage
     *
     * @return string|null
     */
    public function getPricePercentage()
    {
        return $this->container['price_percentage'];
    }

    /**
     * Sets price_percentage
     *
     * @param string|null $price_percentage Percentage change in price
     *
     * @return $this
     */
    public function setPricePercentage($price_percentage)
    {
        $this->container['price_percentage'] = $price_percentage;

        return $this;
    }

    /**
     * Gets implied_volatility_percentage
     *
     * @return string|null
     */
    public function getImpliedVolatilityPercentage()
    {
        return $this->container['implied_volatility_percentage'];
    }

    /**
     * Sets implied_volatility_percentage
     *
     * @param string|null $implied_volatility_percentage Percentage change in implied volatility
     *
     * @return $this
     */
    public function setImpliedVolatilityPercentage($implied_volatility_percentage)
    {
        $this->container['implied_volatility_percentage'] = $implied_volatility_percentage;

        return $this;
    }

    /**
     * Gets profit_loss
     *
     * @return string|null
     */
    public function getProfitLoss()
    {
        return $this->container['profit_loss'];
    }

    /**
     * Sets profit_loss
     *
     * @param string|null $profit_loss PNL
     *
     * @return $this
     */
    public function setProfitLoss($profit_loss)
    {
        $this->container['profit_loss'] = $profit_loss;

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

