<?php
/**
 * ProgramMembership
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
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
 * Swagger Codegen version: 2.4.26
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Lead\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * ProgramMembership Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProgramMembership implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgramMembership';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'acquired_by' => 'bool',
        'is_exhausted' => 'bool',
        'membership_date' => 'string',
        'nurture_cadence' => 'string',
        'progression_status' => 'string',
        'reached_success' => 'bool',
        'stream' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'acquired_by' => null,
        'is_exhausted' => null,
        'membership_date' => null,
        'nurture_cadence' => null,
        'progression_status' => null,
        'reached_success' => null,
        'stream' => null
    ];

    /**
      * Array of additional properties.
      *
      * @var mixed[]
      */
    protected $additionalProperties = [];

    /**
     * {@inheritDoc}
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    /**
     * {@inheritDoc}
     */
    public static function swaggerFormats(): array
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
        'acquired_by' => 'acquiredBy',
        'is_exhausted' => 'isExhausted',
        'membership_date' => 'membershipDate',
        'nurture_cadence' => 'nurtureCadence',
        'progression_status' => 'progressionStatus',
        'reached_success' => 'reachedSuccess',
        'stream' => 'stream'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acquired_by' => 'setAcquiredBy',
        'is_exhausted' => 'setIsExhausted',
        'membership_date' => 'setMembershipDate',
        'nurture_cadence' => 'setNurtureCadence',
        'progression_status' => 'setProgressionStatus',
        'reached_success' => 'setReachedSuccess',
        'stream' => 'setStream'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acquired_by' => 'getAcquiredBy',
        'is_exhausted' => 'getIsExhausted',
        'membership_date' => 'getMembershipDate',
        'nurture_cadence' => 'getNurtureCadence',
        'progression_status' => 'getProgressionStatus',
        'reached_success' => 'getReachedSuccess',
        'stream' => 'getStream'
    ];

    

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
        $this->container['acquired_by'] = $data['acquired_by'] ?? null;
        $this->container['is_exhausted'] = $data['is_exhausted'] ?? null;
        $this->container['membership_date'] = $data['membership_date'] ?? null;
        $this->container['nurture_cadence'] = $data['nurture_cadence'] ?? null;
        $this->container['progression_status'] = $data['progression_status'] ?? null;
        $this->container['reached_success'] = $data['reached_success'] ?? null;
        $this->container['stream'] = $data['stream'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * {@inheritdoc}
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * {@inheritdoc}
     */
    public static function getters(): array
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
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['membership_date'] === null) {
            $invalidProperties[] = "'membership_date' can't be null";
        }
        if ($this->container['progression_status'] === null) {
            $invalidProperties[] = "'progression_status' can't be null";
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
     * @param bool|null $acquired_by Whether the lead was acquired by the parent program
     *
     * @return self<TKey, TValue>
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
     * @param bool|null $is_exhausted Whether the lead is currently exhausted in the stream, if applicable
     *
     * @return self<TKey, TValue>
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
     * @return self<TKey, TValue>
     */
    public function setMembershipDate($membership_date)
    {
        $this->container['membership_date'] = $membership_date;

        return $this;
    }

    /**
     * Gets nurture_cadence
     *
     * @return string
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
     * @return self<TKey, TValue>
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
     * @return self<TKey, TValue>
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
     * @param bool|null $reached_success Whether the lead is in a success-status in the parent program
     *
     * @return self<TKey, TValue>
     */
    public function setReachedSuccess($reached_success)
    {
        $this->container['reached_success'] = $reached_success;

        return $this;
    }

    /**
     * Gets stream
     *
     * @return string
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
     * @return self<TKey, TValue>
     */
    public function setStream($stream)
    {
        $this->container['stream'] = $stream;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalProperties(array $fields): void
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
    public function setAdditionalProperty($property, $value): void
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
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     * @throws \JsonException
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     * @throws \JsonException
     */
    public function toHeaderValue()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_THROW_ON_ERROR
        );
    }
}


