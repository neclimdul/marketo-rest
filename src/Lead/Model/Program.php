<?php
/**
 * Program
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * The version of the OpenAPI document: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Lead\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * Program Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Program implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Program';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'acquired_by' => 'bool',
        'is_exhausted' => 'bool',
        'membership_date' => 'string',
        'nurture_cadence' => 'string',
        'progression_status' => 'string',
        'reached_success' => 'bool',
        'stream' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'acquired_by' => null,
        'is_exhausted' => null,
        'membership_date' => null,
        'nurture_cadence' => null,
        'progression_status' => null,
        'reached_success' => null,
        'stream' => null,
        'updated_at' => null
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
        'acquired_by' => 'acquiredBy',
        'is_exhausted' => 'isExhausted',
        'membership_date' => 'membershipDate',
        'nurture_cadence' => 'nurtureCadence',
        'progression_status' => 'progressionStatus',
        'reached_success' => 'reachedSuccess',
        'stream' => 'stream',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'acquired_by' => 'setAcquiredBy',
        'is_exhausted' => 'setIsExhausted',
        'membership_date' => 'setMembershipDate',
        'nurture_cadence' => 'setNurtureCadence',
        'progression_status' => 'setProgressionStatus',
        'reached_success' => 'setReachedSuccess',
        'stream' => 'setStream',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'acquired_by' => 'getAcquiredBy',
        'is_exhausted' => 'getIsExhausted',
        'membership_date' => 'getMembershipDate',
        'nurture_cadence' => 'getNurtureCadence',
        'progression_status' => 'getProgressionStatus',
        'reached_success' => 'getReachedSuccess',
        'stream' => 'getStream',
        'updated_at' => 'getUpdatedAt'
    ];

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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['acquired_by'] = $data['acquired_by'] ?? null;
        $this->container['is_exhausted'] = $data['is_exhausted'] ?? null;
        $this->container['membership_date'] = $data['membership_date'] ?? null;
        $this->container['nurture_cadence'] = $data['nurture_cadence'] ?? null;
        $this->container['progression_status'] = $data['progression_status'] ?? null;
        $this->container['reached_success'] = $data['reached_success'] ?? null;
        $this->container['stream'] = $data['stream'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['acquired_by'] === null) {
            $invalidProperties[] = "'acquired_by' can't be null";
        }
        if ($this->container['is_exhausted'] === null) {
            $invalidProperties[] = "'is_exhausted' can't be null";
        }
        if ($this->container['membership_date'] === null) {
            $invalidProperties[] = "'membership_date' can't be null";
        }
        if ($this->container['progression_status'] === null) {
            $invalidProperties[] = "'progression_status' can't be null";
        }
        if ($this->container['reached_success'] === null) {
            $invalidProperties[] = "'reached_success' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique integer id of a program record
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets acquired_by
     *
     * @return bool
     */
    public function getAcquiredBy()
    {
        return $this->container['acquired_by'];
    }

    /**
     * Sets acquired_by
     *
     * @param bool $acquired_by Whether the lead was acquired by the parent program
     *
     * @return self
     */
    public function setAcquiredBy($acquired_by)
    {
        $this->container['acquired_by'] = $acquired_by;

        return $this;
    }

    /**
     * Gets is_exhausted
     *
     * @return bool
     */
    public function getIsExhausted()
    {
        return $this->container['is_exhausted'];
    }

    /**
     * Sets is_exhausted
     *
     * @param bool $is_exhausted Whether the lead is currently exhausted in the stream, if applicable
     *
     * @return self
     */
    public function setIsExhausted($is_exhausted)
    {
        $this->container['is_exhausted'] = $is_exhausted;

        return $this;
    }

    /**
     * Gets membership_date
     *
     * @return string
     */
    public function getMembershipDate()
    {
        return $this->container['membership_date'];
    }

    /**
     * Sets membership_date
     *
     * @param string $membership_date Date the lead first became a member of the program
     *
     * @return self
     */
    public function setMembershipDate($membership_date)
    {
        $this->container['membership_date'] = $membership_date;

        return $this;
    }

    /**
     * Gets nurture_cadence
     *
     * @return string|null
     */
    public function getNurtureCadence()
    {
        return $this->container['nurture_cadence'];
    }

    /**
     * Sets nurture_cadence
     *
     * @param string|null $nurture_cadence Cadence of the parent stream if applicable
     *
     * @return self
     */
    public function setNurtureCadence($nurture_cadence)
    {
        $this->container['nurture_cadence'] = $nurture_cadence;

        return $this;
    }

    /**
     * Gets progression_status
     *
     * @return string
     */
    public function getProgressionStatus()
    {
        return $this->container['progression_status'];
    }

    /**
     * Sets progression_status
     *
     * @param string $progression_status Program status of the lead in the parent program
     *
     * @return self
     */
    public function setProgressionStatus($progression_status)
    {
        $this->container['progression_status'] = $progression_status;

        return $this;
    }

    /**
     * Gets reached_success
     *
     * @return bool
     */
    public function getReachedSuccess()
    {
        return $this->container['reached_success'];
    }

    /**
     * Sets reached_success
     *
     * @param bool $reached_success Whether the lead is in a success-status in the parent program
     *
     * @return self
     */
    public function setReachedSuccess($reached_success)
    {
        $this->container['reached_success'] = $reached_success;

        return $this;
    }

    /**
     * Gets stream
     *
     * @return string|null
     */
    public function getStream()
    {
        return $this->container['stream'];
    }

    /**
     * Sets stream
     *
     * @param string|null $stream Stream that the lead is a member of, if the parent program is an engagement program
     *
     * @return self
     */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at Datetime when the program was most recently updated
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


