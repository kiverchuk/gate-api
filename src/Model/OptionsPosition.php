<?php
/**
 * OptionsPosition
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
 * OptionsPosition Class Doc Comment
 *
 * @category Class
 * @description Options position information
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class OptionsPosition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OptionsPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user' => 'int',
        'underlying' => 'string',
        'underlying_price' => 'string',
        'contract' => 'string',
        'size' => 'int',
        'entry_price' => 'string',
        'mark_price' => 'string',
        'mark_iv' => 'string',
        'realised_pnl' => 'string',
        'unrealised_pnl' => 'string',
        'pending_orders' => 'int',
        'close_order' => '\GateApi\Model\OptionsPositionCloseOrder',
        'delta' => 'string',
        'gamma' => 'string',
        'vega' => 'string',
        'theta' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user' => null,
        'underlying' => null,
        'underlying_price' => null,
        'contract' => null,
        'size' => 'int64',
        'entry_price' => null,
        'mark_price' => null,
        'mark_iv' => null,
        'realised_pnl' => null,
        'unrealised_pnl' => null,
        'pending_orders' => null,
        'close_order' => null,
        'delta' => null,
        'gamma' => null,
        'vega' => null,
        'theta' => null
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
        'user' => 'user',
        'underlying' => 'underlying',
        'underlying_price' => 'underlying_price',
        'contract' => 'contract',
        'size' => 'size',
        'entry_price' => 'entry_price',
        'mark_price' => 'mark_price',
        'mark_iv' => 'mark_iv',
        'realised_pnl' => 'realised_pnl',
        'unrealised_pnl' => 'unrealised_pnl',
        'pending_orders' => 'pending_orders',
        'close_order' => 'close_order',
        'delta' => 'delta',
        'gamma' => 'gamma',
        'vega' => 'vega',
        'theta' => 'theta'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
        'underlying' => 'setUnderlying',
        'underlying_price' => 'setUnderlyingPrice',
        'contract' => 'setContract',
        'size' => 'setSize',
        'entry_price' => 'setEntryPrice',
        'mark_price' => 'setMarkPrice',
        'mark_iv' => 'setMarkIv',
        'realised_pnl' => 'setRealisedPnl',
        'unrealised_pnl' => 'setUnrealisedPnl',
        'pending_orders' => 'setPendingOrders',
        'close_order' => 'setCloseOrder',
        'delta' => 'setDelta',
        'gamma' => 'setGamma',
        'vega' => 'setVega',
        'theta' => 'setTheta'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
        'underlying' => 'getUnderlying',
        'underlying_price' => 'getUnderlyingPrice',
        'contract' => 'getContract',
        'size' => 'getSize',
        'entry_price' => 'getEntryPrice',
        'mark_price' => 'getMarkPrice',
        'mark_iv' => 'getMarkIv',
        'realised_pnl' => 'getRealisedPnl',
        'unrealised_pnl' => 'getUnrealisedPnl',
        'pending_orders' => 'getPendingOrders',
        'close_order' => 'getCloseOrder',
        'delta' => 'getDelta',
        'gamma' => 'getGamma',
        'vega' => 'getVega',
        'theta' => 'getTheta'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['underlying'] = isset($data['underlying']) ? $data['underlying'] : null;
        $this->container['underlying_price'] = isset($data['underlying_price']) ? $data['underlying_price'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['entry_price'] = isset($data['entry_price']) ? $data['entry_price'] : null;
        $this->container['mark_price'] = isset($data['mark_price']) ? $data['mark_price'] : null;
        $this->container['mark_iv'] = isset($data['mark_iv']) ? $data['mark_iv'] : null;
        $this->container['realised_pnl'] = isset($data['realised_pnl']) ? $data['realised_pnl'] : null;
        $this->container['unrealised_pnl'] = isset($data['unrealised_pnl']) ? $data['unrealised_pnl'] : null;
        $this->container['pending_orders'] = isset($data['pending_orders']) ? $data['pending_orders'] : null;
        $this->container['close_order'] = isset($data['close_order']) ? $data['close_order'] : null;
        $this->container['delta'] = isset($data['delta']) ? $data['delta'] : null;
        $this->container['gamma'] = isset($data['gamma']) ? $data['gamma'] : null;
        $this->container['vega'] = isset($data['vega']) ? $data['vega'] : null;
        $this->container['theta'] = isset($data['theta']) ? $data['theta'] : null;
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
     * Gets user
     *
     * @return int|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int|null $user User ID
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets underlying
     *
     * @return string|null
     */
    public function getUnderlying()
    {
        return $this->container['underlying'];
    }

    /**
     * Sets underlying
     *
     * @param string|null $underlying Underlying
     *
     * @return $this
     */
    public function setUnderlying($underlying)
    {
        $this->container['underlying'] = $underlying;

        return $this;
    }

    /**
     * Gets underlying_price
     *
     * @return string|null
     */
    public function getUnderlyingPrice()
    {
        return $this->container['underlying_price'];
    }

    /**
     * Sets underlying_price
     *
     * @param string|null $underlying_price Underlying price (quote currency)
     *
     * @return $this
     */
    public function setUnderlyingPrice($underlying_price)
    {
        $this->container['underlying_price'] = $underlying_price;

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
     * @param string|null $contract Options contract name
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

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
     * @param int|null $size Position size (contract size)
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
     * @param string|null $entry_price Entry size (quote currency)
     *
     * @return $this
     */
    public function setEntryPrice($entry_price)
    {
        $this->container['entry_price'] = $entry_price;

        return $this;
    }

    /**
     * Gets mark_price
     *
     * @return string|null
     */
    public function getMarkPrice()
    {
        return $this->container['mark_price'];
    }

    /**
     * Sets mark_price
     *
     * @param string|null $mark_price Current mark price (quote currency)
     *
     * @return $this
     */
    public function setMarkPrice($mark_price)
    {
        $this->container['mark_price'] = $mark_price;

        return $this;
    }

    /**
     * Gets mark_iv
     *
     * @return string|null
     */
    public function getMarkIv()
    {
        return $this->container['mark_iv'];
    }

    /**
     * Sets mark_iv
     *
     * @param string|null $mark_iv Implied volatility
     *
     * @return $this
     */
    public function setMarkIv($mark_iv)
    {
        $this->container['mark_iv'] = $mark_iv;

        return $this;
    }

    /**
     * Gets realised_pnl
     *
     * @return string|null
     */
    public function getRealisedPnl()
    {
        return $this->container['realised_pnl'];
    }

    /**
     * Sets realised_pnl
     *
     * @param string|null $realised_pnl Realized PNL
     *
     * @return $this
     */
    public function setRealisedPnl($realised_pnl)
    {
        $this->container['realised_pnl'] = $realised_pnl;

        return $this;
    }

    /**
     * Gets unrealised_pnl
     *
     * @return string|null
     */
    public function getUnrealisedPnl()
    {
        return $this->container['unrealised_pnl'];
    }

    /**
     * Sets unrealised_pnl
     *
     * @param string|null $unrealised_pnl Unrealized PNL
     *
     * @return $this
     */
    public function setUnrealisedPnl($unrealised_pnl)
    {
        $this->container['unrealised_pnl'] = $unrealised_pnl;

        return $this;
    }

    /**
     * Gets pending_orders
     *
     * @return int|null
     */
    public function getPendingOrders()
    {
        return $this->container['pending_orders'];
    }

    /**
     * Sets pending_orders
     *
     * @param int|null $pending_orders Current open orders
     *
     * @return $this
     */
    public function setPendingOrders($pending_orders)
    {
        $this->container['pending_orders'] = $pending_orders;

        return $this;
    }

    /**
     * Gets close_order
     *
     * @return \GateApi\Model\OptionsPositionCloseOrder|null
     */
    public function getCloseOrder()
    {
        return $this->container['close_order'];
    }

    /**
     * Sets close_order
     *
     * @param \GateApi\Model\OptionsPositionCloseOrder|null $close_order close_order
     *
     * @return $this
     */
    public function setCloseOrder($close_order)
    {
        $this->container['close_order'] = $close_order;

        return $this;
    }

    /**
     * Gets delta
     *
     * @return string|null
     */
    public function getDelta()
    {
        return $this->container['delta'];
    }

    /**
     * Sets delta
     *
     * @param string|null $delta Delta
     *
     * @return $this
     */
    public function setDelta($delta)
    {
        $this->container['delta'] = $delta;

        return $this;
    }

    /**
     * Gets gamma
     *
     * @return string|null
     */
    public function getGamma()
    {
        return $this->container['gamma'];
    }

    /**
     * Sets gamma
     *
     * @param string|null $gamma Gamma
     *
     * @return $this
     */
    public function setGamma($gamma)
    {
        $this->container['gamma'] = $gamma;

        return $this;
    }

    /**
     * Gets vega
     *
     * @return string|null
     */
    public function getVega()
    {
        return $this->container['vega'];
    }

    /**
     * Sets vega
     *
     * @param string|null $vega Vega
     *
     * @return $this
     */
    public function setVega($vega)
    {
        $this->container['vega'] = $vega;

        return $this;
    }

    /**
     * Gets theta
     *
     * @return string|null
     */
    public function getTheta()
    {
        return $this->container['theta'];
    }

    /**
     * Sets theta
     *
     * @param string|null $theta Theta
     *
     * @return $this
     */
    public function setTheta($theta)
    {
        $this->container['theta'] = $theta;

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


