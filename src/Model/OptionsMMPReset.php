<?php
/**
 * OptionsMMPReset
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
 * OptionsMMPReset Class Doc Comment
 *
 * @category Class
 * @description MMP Reset
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class OptionsMMPReset implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OptionsMMPReset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'underlying' => 'string',
        'window' => 'int',
        'frozen_period' => 'int',
        'qty_limit' => 'string',
        'delta_limit' => 'string',
        'trigger_time_ms' => 'int',
        'frozen_until_ms' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'underlying' => null,
        'window' => 'int32',
        'frozen_period' => 'int32',
        'qty_limit' => null,
        'delta_limit' => null,
        'trigger_time_ms' => 'int64',
        'frozen_until_ms' => 'int64'
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
        'underlying' => 'underlying',
        'window' => 'window',
        'frozen_period' => 'frozen_period',
        'qty_limit' => 'qty_limit',
        'delta_limit' => 'delta_limit',
        'trigger_time_ms' => 'trigger_time_ms',
        'frozen_until_ms' => 'frozen_until_ms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'underlying' => 'setUnderlying',
        'window' => 'setWindow',
        'frozen_period' => 'setFrozenPeriod',
        'qty_limit' => 'setQtyLimit',
        'delta_limit' => 'setDeltaLimit',
        'trigger_time_ms' => 'setTriggerTimeMs',
        'frozen_until_ms' => 'setFrozenUntilMs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'underlying' => 'getUnderlying',
        'window' => 'getWindow',
        'frozen_period' => 'getFrozenPeriod',
        'qty_limit' => 'getQtyLimit',
        'delta_limit' => 'getDeltaLimit',
        'trigger_time_ms' => 'getTriggerTimeMs',
        'frozen_until_ms' => 'getFrozenUntilMs'
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
        $this->container['underlying'] = isset($data['underlying']) ? $data['underlying'] : null;
        $this->container['window'] = isset($data['window']) ? $data['window'] : null;
        $this->container['frozen_period'] = isset($data['frozen_period']) ? $data['frozen_period'] : null;
        $this->container['qty_limit'] = isset($data['qty_limit']) ? $data['qty_limit'] : null;
        $this->container['delta_limit'] = isset($data['delta_limit']) ? $data['delta_limit'] : null;
        $this->container['trigger_time_ms'] = isset($data['trigger_time_ms']) ? $data['trigger_time_ms'] : null;
        $this->container['frozen_until_ms'] = isset($data['frozen_until_ms']) ? $data['frozen_until_ms'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['underlying'] === null) {
            $invalidProperties[] = "'underlying' can't be null";
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
     * Gets underlying
     *
     * @return string
     */
    public function getUnderlying()
    {
        return $this->container['underlying'];
    }

    /**
     * Sets underlying
     *
     * @param string $underlying Underlying
     *
     * @return $this
     */
    public function setUnderlying($underlying)
    {
        $this->container['underlying'] = $underlying;

        return $this;
    }

    /**
     * Gets window
     *
     * @return int|null
     */
    public function getWindow()
    {
        return $this->container['window'];
    }

    /**
     * Sets window
     *
     * @param int|null $window 时间窗口（毫秒），1-5000之间，0表示停用MMP
     *
     * @return $this
     */
    public function setWindow($window)
    {
        $this->container['window'] = $window;

        return $this;
    }

    /**
     * Gets frozen_period
     *
     * @return int|null
     */
    public function getFrozenPeriod()
    {
        return $this->container['frozen_period'];
    }

    /**
     * Sets frozen_period
     *
     * @param int|null $frozen_period 冻结时长（毫秒），0表示一直冻结，需要调用重置API解冻
     *
     * @return $this
     */
    public function setFrozenPeriod($frozen_period)
    {
        $this->container['frozen_period'] = $frozen_period;

        return $this;
    }

    /**
     * Gets qty_limit
     *
     * @return string|null
     */
    public function getQtyLimit()
    {
        return $this->container['qty_limit'];
    }

    /**
     * Sets qty_limit
     *
     * @param string|null $qty_limit 成交量上限（正数，至多2位小数）
     *
     * @return $this
     */
    public function setQtyLimit($qty_limit)
    {
        $this->container['qty_limit'] = $qty_limit;

        return $this;
    }

    /**
     * Gets delta_limit
     *
     * @return string|null
     */
    public function getDeltaLimit()
    {
        return $this->container['delta_limit'];
    }

    /**
     * Sets delta_limit
     *
     * @param string|null $delta_limit 净delta值上限（正数，至多2位小数）
     *
     * @return $this
     */
    public function setDeltaLimit($delta_limit)
    {
        $this->container['delta_limit'] = $delta_limit;

        return $this;
    }

    /**
     * Gets trigger_time_ms
     *
     * @return int|null
     */
    public function getTriggerTimeMs()
    {
        return $this->container['trigger_time_ms'];
    }

    /**
     * Sets trigger_time_ms
     *
     * @param int|null $trigger_time_ms 触发冻结时间（毫秒），0表示没有触发冻结
     *
     * @return $this
     */
    public function setTriggerTimeMs($trigger_time_ms)
    {
        $this->container['trigger_time_ms'] = $trigger_time_ms;

        return $this;
    }

    /**
     * Gets frozen_until_ms
     *
     * @return int|null
     */
    public function getFrozenUntilMs()
    {
        return $this->container['frozen_until_ms'];
    }

    /**
     * Sets frozen_until_ms
     *
     * @param int|null $frozen_until_ms 解冻时间（毫秒），如果未配置冻结时长，触发冻结后无解冻时间
     *
     * @return $this
     */
    public function setFrozenUntilMs($frozen_until_ms)
    {
        $this->container['frozen_until_ms'] = $frozen_until_ms;

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


