<?php
/**
 * OptionsAccount
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
 * OptionsAccount Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class OptionsAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OptionsAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user' => 'int',
        'total' => 'string',
        'position_value' => 'string',
        'equity' => 'string',
        'short_enabled' => 'bool',
        'mmp_enabled' => 'bool',
        'liq_triggered' => 'bool',
        'margin_mode' => 'int',
        'unrealised_pnl' => 'string',
        'init_margin' => 'string',
        'maint_margin' => 'string',
        'order_margin' => 'string',
        'ask_order_margin' => 'string',
        'bid_order_margin' => 'string',
        'available' => 'string',
        'point' => 'string',
        'currency' => 'string',
        'orders_limit' => 'int',
        'position_notional_limit' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user' => 'int64',
        'total' => null,
        'position_value' => null,
        'equity' => null,
        'short_enabled' => null,
        'mmp_enabled' => null,
        'liq_triggered' => null,
        'margin_mode' => 'int32',
        'unrealised_pnl' => null,
        'init_margin' => null,
        'maint_margin' => null,
        'order_margin' => null,
        'ask_order_margin' => null,
        'bid_order_margin' => null,
        'available' => null,
        'point' => null,
        'currency' => null,
        'orders_limit' => 'int32',
        'position_notional_limit' => 'int64'
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
        'total' => 'total',
        'position_value' => 'position_value',
        'equity' => 'equity',
        'short_enabled' => 'short_enabled',
        'mmp_enabled' => 'mmp_enabled',
        'liq_triggered' => 'liq_triggered',
        'margin_mode' => 'margin_mode',
        'unrealised_pnl' => 'unrealised_pnl',
        'init_margin' => 'init_margin',
        'maint_margin' => 'maint_margin',
        'order_margin' => 'order_margin',
        'ask_order_margin' => 'ask_order_margin',
        'bid_order_margin' => 'bid_order_margin',
        'available' => 'available',
        'point' => 'point',
        'currency' => 'currency',
        'orders_limit' => 'orders_limit',
        'position_notional_limit' => 'position_notional_limit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
        'total' => 'setTotal',
        'position_value' => 'setPositionValue',
        'equity' => 'setEquity',
        'short_enabled' => 'setShortEnabled',
        'mmp_enabled' => 'setMmpEnabled',
        'liq_triggered' => 'setLiqTriggered',
        'margin_mode' => 'setMarginMode',
        'unrealised_pnl' => 'setUnrealisedPnl',
        'init_margin' => 'setInitMargin',
        'maint_margin' => 'setMaintMargin',
        'order_margin' => 'setOrderMargin',
        'ask_order_margin' => 'setAskOrderMargin',
        'bid_order_margin' => 'setBidOrderMargin',
        'available' => 'setAvailable',
        'point' => 'setPoint',
        'currency' => 'setCurrency',
        'orders_limit' => 'setOrdersLimit',
        'position_notional_limit' => 'setPositionNotionalLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
        'total' => 'getTotal',
        'position_value' => 'getPositionValue',
        'equity' => 'getEquity',
        'short_enabled' => 'getShortEnabled',
        'mmp_enabled' => 'getMmpEnabled',
        'liq_triggered' => 'getLiqTriggered',
        'margin_mode' => 'getMarginMode',
        'unrealised_pnl' => 'getUnrealisedPnl',
        'init_margin' => 'getInitMargin',
        'maint_margin' => 'getMaintMargin',
        'order_margin' => 'getOrderMargin',
        'ask_order_margin' => 'getAskOrderMargin',
        'bid_order_margin' => 'getBidOrderMargin',
        'available' => 'getAvailable',
        'point' => 'getPoint',
        'currency' => 'getCurrency',
        'orders_limit' => 'getOrdersLimit',
        'position_notional_limit' => 'getPositionNotionalLimit'
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

    const MARGIN_MODE_0 = 0;
    const MARGIN_MODE_1 = 1;
    const MARGIN_MODE_2 = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarginModeAllowableValues()
    {
        return [
            self::MARGIN_MODE_0,
            self::MARGIN_MODE_1,
            self::MARGIN_MODE_2,
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['position_value'] = isset($data['position_value']) ? $data['position_value'] : null;
        $this->container['equity'] = isset($data['equity']) ? $data['equity'] : null;
        $this->container['short_enabled'] = isset($data['short_enabled']) ? $data['short_enabled'] : null;
        $this->container['mmp_enabled'] = isset($data['mmp_enabled']) ? $data['mmp_enabled'] : null;
        $this->container['liq_triggered'] = isset($data['liq_triggered']) ? $data['liq_triggered'] : null;
        $this->container['margin_mode'] = isset($data['margin_mode']) ? $data['margin_mode'] : null;
        $this->container['unrealised_pnl'] = isset($data['unrealised_pnl']) ? $data['unrealised_pnl'] : null;
        $this->container['init_margin'] = isset($data['init_margin']) ? $data['init_margin'] : null;
        $this->container['maint_margin'] = isset($data['maint_margin']) ? $data['maint_margin'] : null;
        $this->container['order_margin'] = isset($data['order_margin']) ? $data['order_margin'] : null;
        $this->container['ask_order_margin'] = isset($data['ask_order_margin']) ? $data['ask_order_margin'] : null;
        $this->container['bid_order_margin'] = isset($data['bid_order_margin']) ? $data['bid_order_margin'] : null;
        $this->container['available'] = isset($data['available']) ? $data['available'] : null;
        $this->container['point'] = isset($data['point']) ? $data['point'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['orders_limit'] = isset($data['orders_limit']) ? $data['orders_limit'] : null;
        $this->container['position_notional_limit'] = isset($data['position_notional_limit']) ? $data['position_notional_limit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMarginModeAllowableValues();
        if (!is_null($this->container['margin_mode']) && !in_array($this->container['margin_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'margin_mode', must be one of '%s'",
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
     * Gets total
     *
     * @return string|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string|null $total 账户余额
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets position_value
     *
     * @return string|null
     */
    public function getPositionValue()
    {
        return $this->container['position_value'];
    }

    /**
     * Sets position_value
     *
     * @param string|null $position_value 仓位价值，做多仓位价值为正，做空仓位价值为负
     *
     * @return $this
     */
    public function setPositionValue($position_value)
    {
        $this->container['position_value'] = $position_value;

        return $this;
    }

    /**
     * Gets equity
     *
     * @return string|null
     */
    public function getEquity()
    {
        return $this->container['equity'];
    }

    /**
     * Sets equity
     *
     * @param string|null $equity 账户权益，账户余额与仓位价值的和
     *
     * @return $this
     */
    public function setEquity($equity)
    {
        $this->container['equity'] = $equity;

        return $this;
    }

    /**
     * Gets short_enabled
     *
     * @return bool|null
     */
    public function getShortEnabled()
    {
        return $this->container['short_enabled'];
    }

    /**
     * Sets short_enabled
     *
     * @param bool|null $short_enabled If the account is allowed to short
     *
     * @return $this
     */
    public function setShortEnabled($short_enabled)
    {
        $this->container['short_enabled'] = $short_enabled;

        return $this;
    }

    /**
     * Gets mmp_enabled
     *
     * @return bool|null
     */
    public function getMmpEnabled()
    {
        return $this->container['mmp_enabled'];
    }

    /**
     * Sets mmp_enabled
     *
     * @param bool|null $mmp_enabled 是否启用MMP
     *
     * @return $this
     */
    public function setMmpEnabled($mmp_enabled)
    {
        $this->container['mmp_enabled'] = $mmp_enabled;

        return $this;
    }

    /**
     * Gets liq_triggered
     *
     * @return bool|null
     */
    public function getLiqTriggered()
    {
        return $this->container['liq_triggered'];
    }

    /**
     * Sets liq_triggered
     *
     * @param bool|null $liq_triggered 是否触发仓位强平
     *
     * @return $this
     */
    public function setLiqTriggered($liq_triggered)
    {
        $this->container['liq_triggered'] = $liq_triggered;

        return $this;
    }

    /**
     * Gets margin_mode
     *
     * @return int|null
     */
    public function getMarginMode()
    {
        return $this->container['margin_mode'];
    }

    /**
     * Sets margin_mode
     *
     * @param int|null $margin_mode ｜ 保证金模式： - 0：经典现货保证金模式 - 1：跨币种保证金模式 - 2：组合保证金模式
     *
     * @return $this
     */
    public function setMarginMode($margin_mode)
    {
        $allowedValues = $this->getMarginModeAllowableValues();
        if (!is_null($margin_mode) && !in_array($margin_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'margin_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['margin_mode'] = $margin_mode;

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
     * Gets init_margin
     *
     * @return string|null
     */
    public function getInitMargin()
    {
        return $this->container['init_margin'];
    }

    /**
     * Sets init_margin
     *
     * @param string|null $init_margin Initial position margin
     *
     * @return $this
     */
    public function setInitMargin($init_margin)
    {
        $this->container['init_margin'] = $init_margin;

        return $this;
    }

    /**
     * Gets maint_margin
     *
     * @return string|null
     */
    public function getMaintMargin()
    {
        return $this->container['maint_margin'];
    }

    /**
     * Sets maint_margin
     *
     * @param string|null $maint_margin Position maintenance margin
     *
     * @return $this
     */
    public function setMaintMargin($maint_margin)
    {
        $this->container['maint_margin'] = $maint_margin;

        return $this;
    }

    /**
     * Gets order_margin
     *
     * @return string|null
     */
    public function getOrderMargin()
    {
        return $this->container['order_margin'];
    }

    /**
     * Sets order_margin
     *
     * @param string|null $order_margin Order margin of unfinished orders
     *
     * @return $this
     */
    public function setOrderMargin($order_margin)
    {
        $this->container['order_margin'] = $order_margin;

        return $this;
    }

    /**
     * Gets ask_order_margin
     *
     * @return string|null
     */
    public function getAskOrderMargin()
    {
        return $this->container['ask_order_margin'];
    }

    /**
     * Sets ask_order_margin
     *
     * @param string|null $ask_order_margin 未完成卖单的保证金
     *
     * @return $this
     */
    public function setAskOrderMargin($ask_order_margin)
    {
        $this->container['ask_order_margin'] = $ask_order_margin;

        return $this;
    }

    /**
     * Gets bid_order_margin
     *
     * @return string|null
     */
    public function getBidOrderMargin()
    {
        return $this->container['bid_order_margin'];
    }

    /**
     * Sets bid_order_margin
     *
     * @param string|null $bid_order_margin 未完成买单的保证金
     *
     * @return $this
     */
    public function setBidOrderMargin($bid_order_margin)
    {
        $this->container['bid_order_margin'] = $bid_order_margin;

        return $this;
    }

    /**
     * Gets available
     *
     * @return string|null
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param string|null $available Available balance to transfer out or trade
     *
     * @return $this
     */
    public function setAvailable($available)
    {
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets point
     *
     * @return string|null
     */
    public function getPoint()
    {
        return $this->container['point'];
    }

    /**
     * Sets point
     *
     * @param string|null $point POINT amount
     *
     * @return $this
     */
    public function setPoint($point)
    {
        $this->container['point'] = $point;

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
     * @param string|null $currency Settle currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets orders_limit
     *
     * @return int|null
     */
    public function getOrdersLimit()
    {
        return $this->container['orders_limit'];
    }

    /**
     * Sets orders_limit
     *
     * @param int|null $orders_limit 未完成订单数量上限
     *
     * @return $this
     */
    public function setOrdersLimit($orders_limit)
    {
        $this->container['orders_limit'] = $orders_limit;

        return $this;
    }

    /**
     * Gets position_notional_limit
     *
     * @return int|null
     */
    public function getPositionNotionalLimit()
    {
        return $this->container['position_notional_limit'];
    }

    /**
     * Sets position_notional_limit
     *
     * @param int|null $position_notional_limit 名义价值上限，包含仓位以及未完成订单的名义价值
     *
     * @return $this
     */
    public function setPositionNotionalLimit($position_notional_limit)
    {
        $this->container['position_notional_limit'] = $position_notional_limit;

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

