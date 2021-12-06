<?php
/**
 * Recurrence
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
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
 * Swagger Codegen version: 2.4.24
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Asset\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * Recurrence Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Recurrence implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

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
        'day_of_week' => 'string',
        'week_of_month' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
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
      * Array of additional properties.
      *
      * @var mixed[]
      */
    protected $additionalProperties = [];

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
     * {@inheritdoc}
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

    const INTERVAL_TYPE_DAILY = 'Daily';
    const INTERVAL_TYPE_WEEKLY = 'Weekly';
    const INTERVAL_TYPE_MONTHLY = 'Monthly';
    const DAY_OF_WEEK_MONDAY = 'Monday';
    const DAY_OF_WEEK_TUESDAY = 'Tuesday';
    const DAY_OF_WEEK_WEDNESDAY = 'Wednesday';
    const DAY_OF_WEEK_THURSDAY = 'Thursday';
    const DAY_OF_WEEK_FRIDAY = 'Friday';
    const DAY_OF_WEEK_SATURDAY = 'Saturday';
    const DAY_OF_WEEK_SUNDAY = 'Sunday';
    

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
     * {@inheritdoc}
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * {@inheritdoc}
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * {@inheritdoc}
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * {@inheritdoc}
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * {@inheritdoc}
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
                "invalid value '%s' for 'interval_type', must be one of '%s'",
                $this->container['interval_type'],
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
        $allowedValues = $this->getDayOfWeekAllowableValues();
        if (!is_null($this->container['day_of_week']) && !in_array($this->container['day_of_week'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'day_of_week', must be one of '%s'",
                $this->container['day_of_week'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['week_of_month'] === null) {
            $invalidProperties[] = "'week_of_month' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDayOfWeekAllowableValues()
    {
        return [
            self::DAY_OF_WEEK_MONDAY,
            self::DAY_OF_WEEK_TUESDAY,
            self::DAY_OF_WEEK_WEDNESDAY,
            self::DAY_OF_WEEK_THURSDAY,
            self::DAY_OF_WEEK_FRIDAY,
            self::DAY_OF_WEEK_SATURDAY,
            self::DAY_OF_WEEK_SUNDAY,
        ];
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setIntervalType($interval_type)
    {
        $allowedValues = $this->getIntervalTypeAllowableValues();
        if (!in_array($interval_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'interval_type', must be one of '%s'",
                    $interval_type,
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setDayOfMonth($day_of_month)
    {
        $this->container['day_of_month'] = $day_of_month;

        return $this;
    }

    /**
     * Gets day_of_week
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->container['day_of_week'];
    }

    /**
     * Sets day_of_week
     *
     * @param string $day_of_week Day of the week to recur. May only be set if dayOfMonth is not set, and weekOfMonth is set
     *
     * @return self
     */
    public function setDayOfWeek($day_of_week)
    {
        $allowedValues = $this->getDayOfWeekAllowableValues();
        if (!in_array($day_of_week, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'day_of_week', must be one of '%s'",
                    $day_of_week,
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * @return self
     */
    public function setWeekOfMonth($week_of_month)
    {
        $this->container['week_of_month'] = $week_of_month;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalProperties(array $fields)
    {
        $fields = array_diff_key($fields, static::$attributeMap);
        foreach ($this->additionalProperties as $additional_properties) {
            unset($this->container[$additional_properties]);
        }
        $this->container += $fields;
        $keys = array_keys($fields);
        $this->additionalProperties = array_combine($keys, $keys);
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalProperty($property, $value)
    {
        if (isset(static::$attributeMap[$property])) {
            throw new \InvalidArgumentException();
        }
        $this->additionalProperties[$property] = $property;
        $this->container[$property] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalProperties()
    {
        $container = $this->container;
        return array_map(function($key) use ($container) {
            return $container[$key];
        }, $this->additionalProperties);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * {@inheritdoc}
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
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


