<?php
/**
 * Recurrence
 *
 * PHP version 5
 *
 * @category Class
 * @package  MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.14
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MarketoRest\Asset\Model;

use \ArrayAccess;
use \MarketoRest\Asset\ObjectSerializer;

/**
 * Recurrence Class Doc Comment
 *
 * @category Class
 * @package  MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Recurrence implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Recurrence';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_at' => '\DateTime',
        'end_at' => '\DateTime',
        'interval_type' => 'string',
        'interval' => 'int',
        'weekday_only' => 'bool',
        'weekday_mask' => 'string[]',
        'day_of_month' => 'int',
        'day_of_week' => 'int',
        'week_of_month' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_at' => 'date-time',
        'end_at' => 'date-time',
        'interval_type' => null,
        'interval' => 'int32',
        'weekday_only' => null,
        'weekday_mask' => null,
        'day_of_month' => 'int32',
        'day_of_week' => 'int32',
        'week_of_month' => 'int32'
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
        'start_at' => 'startAt',
        'end_at' => 'endAt',
        'interval_type' => 'intervalType',
        'interval' => 'interval',
        'weekday_only' => 'weekdayOnly',
        'weekday_mask' => 'weekdayMask',
        'day_of_month' => 'dayOfMonth',
        'day_of_week' => 'dayOfWeek',
        'week_of_month' => 'weekOfMonth'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_at' => 'setStartAt',
        'end_at' => 'setEndAt',
        'interval_type' => 'setIntervalType',
        'interval' => 'setInterval',
        'weekday_only' => 'setWeekdayOnly',
        'weekday_mask' => 'setWeekdayMask',
        'day_of_month' => 'setDayOfMonth',
        'day_of_week' => 'setDayOfWeek',
        'week_of_month' => 'setWeekOfMonth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_at' => 'getStartAt',
        'end_at' => 'getEndAt',
        'interval_type' => 'getIntervalType',
        'interval' => 'getInterval',
        'weekday_only' => 'getWeekdayOnly',
        'weekday_mask' => 'getWeekdayMask',
        'day_of_month' => 'getDayOfMonth',
        'day_of_week' => 'getDayOfWeek',
        'week_of_month' => 'getWeekOfMonth'
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

    const INTERVAL_TYPE_DAILY = 'Daily';
    const INTERVAL_TYPE_WEEKLY = 'Weekly';
    const INTERVAL_TYPE_MONTHLY = 'Monthly';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIntervalTypeAllowableValues()
    {
        return [
            self::INTERVAL_TYPE_DAILY,
            self::INTERVAL_TYPE_WEEKLY,
            self::INTERVAL_TYPE_MONTHLY,
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
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['end_at'] = isset($data['end_at']) ? $data['end_at'] : null;
        $this->container['interval_type'] = isset($data['interval_type']) ? $data['interval_type'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['weekday_only'] = isset($data['weekday_only']) ? $data['weekday_only'] : null;
        $this->container['weekday_mask'] = isset($data['weekday_mask']) ? $data['weekday_mask'] : null;
        $this->container['day_of_month'] = isset($data['day_of_month']) ? $data['day_of_month'] : null;
        $this->container['day_of_week'] = isset($data['day_of_week']) ? $data['day_of_week'] : null;
        $this->container['week_of_month'] = isset($data['week_of_month']) ? $data['week_of_month'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['start_at'] === null) {
            $invalidProperties[] = "'start_at' can't be null";
        }
        if ($this->container['end_at'] === null) {
            $invalidProperties[] = "'end_at' can't be null";
        }
        if ($this->container['interval_type'] === null) {
            $invalidProperties[] = "'interval_type' can't be null";
        }
        $allowedValues = $this->getIntervalTypeAllowableValues();
        if (!is_null($this->container['interval_type']) && !in_array($this->container['interval_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'interval_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['interval'] === null) {
            $invalidProperties[] = "'interval' can't be null";
        }
        if ($this->container['weekday_only'] === null) {
            $invalidProperties[] = "'weekday_only' can't be null";
        }
        if ($this->container['weekday_mask'] === null) {
            $invalidProperties[] = "'weekday_mask' can't be null";
        }
        if ($this->container['day_of_month'] === null) {
            $invalidProperties[] = "'day_of_month' can't be null";
        }
        if ($this->container['day_of_week'] === null) {
            $invalidProperties[] = "'day_of_week' can't be null";
        }
        if ($this->container['week_of_month'] === null) {
            $invalidProperties[] = "'week_of_month' can't be null";
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
     * Gets start_at
     *
     * @return \DateTime
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param \DateTime $start_at Datetime of the first scheduled campaign to run. Required if setting recurrence. Not required to create a smart campaign that has no recurrence
     *
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets end_at
     *
     * @return \DateTime
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param \DateTime $end_at Datetime after which no further runs will be automatically scheduled
     *
     * @return $this
     */
    public function setEndAt($end_at)
    {
        $this->container['end_at'] = $end_at;

        return $this;
    }

    /**
     * Gets interval_type
     *
     * @return string
     */
    public function getIntervalType()
    {
        return $this->container['interval_type'];
    }

    /**
     * Sets interval_type
     *
     * @param string $interval_type Recurrence interval. Not required to create a smart campaign that has no recurrence
     *
     * @return $this
     */
    public function setIntervalType($interval_type)
    {
        $allowedValues = $this->getIntervalTypeAllowableValues();
        if (!in_array($interval_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'interval_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['interval_type'] = $interval_type;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param int $interval Number of interval units between recurrences
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets weekday_only
     *
     * @return bool
     */
    public function getWeekdayOnly()
    {
        return $this->container['weekday_only'];
    }

    /**
     * Sets weekday_only
     *
     * @param bool $weekday_only Only run smart campaign on weekdays. May only be set if intervalType is 'Daily'.  Defaults to false
     *
     * @return $this
     */
    public function setWeekdayOnly($weekday_only)
    {
        $this->container['weekday_only'] = $weekday_only;

        return $this;
    }

    /**
     * Gets weekday_mask
     *
     * @return string[]
     */
    public function getWeekdayMask()
    {
        return $this->container['weekday_mask'];
    }

    /**
     * Sets weekday_mask
     *
     * @param string[] $weekday_mask String array of empty or one or more of 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'. May only be set if intervalType is 'Weekly'
     *
     * @return $this
     */
    public function setWeekdayMask($weekday_mask)
    {
        $this->container['weekday_mask'] = $weekday_mask;

        return $this;
    }

    /**
     * Gets day_of_month
     *
     * @return int
     */
    public function getDayOfMonth()
    {
        return $this->container['day_of_month'];
    }

    /**
     * Sets day_of_month
     *
     * @param int $day_of_month Day of the month to recur. Permissible range 1-31. May only be set if intervalType is 'Monthly' and dayOfWeek and weekOfMonth are unset.
     *
     * @return $this
     */
    public function setDayOfMonth($day_of_month)
    {
        $this->container['day_of_month'] = $day_of_month;

        return $this;
    }

    /**
     * Gets day_of_week
     *
     * @return int
     */
    public function getDayOfWeek()
    {
        return $this->container['day_of_week'];
    }

    /**
     * Sets day_of_week
     *
     * @param int $day_of_week Day of the week to recur. May only be set if dayOfMonth is not set, and weekOfMonth is set
     *
     * @return $this
     */
    public function setDayOfWeek($day_of_week)
    {
        $this->container['day_of_week'] = $day_of_week;

        return $this;
    }

    /**
     * Gets week_of_month
     *
     * @return int
     */
    public function getWeekOfMonth()
    {
        return $this->container['week_of_month'];
    }

    /**
     * Sets week_of_month
     *
     * @param int $week_of_month Week of the month to recur. Permissible range 1-4. May only be set if dayOfMonth is not set, and dayOfWeek is set
     *
     * @return $this
     */
    public function setWeekOfMonth($week_of_month)
    {
        $this->container['week_of_month'] = $week_of_month;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


