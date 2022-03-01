<?php

/**
 * SmartListConditions
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
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
 * Swagger Codegen version: 2.4.26
 */

namespace NecLimDul\MarketoRest\Asset\Model;

use ArrayAccess;
use NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * SmartListConditions Class Doc Comment
 *
 * @category Class
 * @description JSON representation of smart list conditions
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SmartListConditions implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmartListConditions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'activity_attribute_id' => 'int',
        'activity_attribute_name' => 'string',
        'operator' => 'string',
        'values' => 'string[]',
        'is_primary' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'activity_attribute_id' => 'int32',
        'activity_attribute_name' => null,
        'operator' => null,
        'values' => null,
        'is_primary' => null
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
        'activity_attribute_id' => 'activityAttributeId',
        'activity_attribute_name' => 'activityAttributeName',
        'operator' => 'operator',
        'values' => 'values',
        'is_primary' => 'isPrimary'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_attribute_id' => 'setActivityAttributeId',
        'activity_attribute_name' => 'setActivityAttributeName',
        'operator' => 'setOperator',
        'values' => 'setValues',
        'is_primary' => 'setIsPrimary'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_attribute_id' => 'getActivityAttributeId',
        'activity_attribute_name' => 'getActivityAttributeName',
        'operator' => 'getOperator',
        'values' => 'getValues',
        'is_primary' => 'getIsPrimary'
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
        $this->container['activity_attribute_id'] = $data['activity_attribute_id'] ?? null;
        $this->container['activity_attribute_name'] = $data['activity_attribute_name'] ?? null;
        $this->container['operator'] = $data['operator'] ?? null;
        $this->container['values'] = $data['values'] ?? null;
        $this->container['is_primary'] = $data['is_primary'] ?? null;
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
    public function getModelName(): string
    {
        return self::$swaggerModelName;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['activity_attribute_id'] === null) {
            $invalidProperties[] = "'activity_attribute_id' can't be null";
        }
        if ($this->container['activity_attribute_name'] === null) {
            $invalidProperties[] = "'activity_attribute_name' can't be null";
        }
        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
        }
        if ($this->container['is_primary'] === null) {
            $invalidProperties[] = "'is_primary' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * {@inheritdoc}
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets activity_attribute_id
     *
     * @return int
     */
    public function getActivityAttributeId(): int
    {
        return $this->container['activity_attribute_id'];
    }

    /**
     * Sets activity_attribute_id
     *
     * @param int $activity_attribute_id Id of the activity attribute
     *
     * @return self<TKey, TValue>
     */
    public function setActivityAttributeId(int $activity_attribute_id): SmartListConditions
    {
        $this->container['activity_attribute_id'] = $activity_attribute_id;

        return $this;
    }

    /**
     * Gets activity_attribute_name
     *
     * @return string
     */
    public function getActivityAttributeName(): string
    {
        return $this->container['activity_attribute_name'];
    }

    /**
     * Sets activity_attribute_name
     *
     * @param string $activity_attribute_name Name of activity attribute
     *
     * @return self<TKey, TValue>
     */
    public function setActivityAttributeName(string $activity_attribute_name): SmartListConditions
    {
        $this->container['activity_attribute_name'] = $activity_attribute_name;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator(): string
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator Value of operator
     *
     * @return self<TKey, TValue>
     */
    public function setOperator(string $operator): SmartListConditions
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]
     */
    public function getValues(): array
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[] $values List of values
     *
     * @return self<TKey, TValue>
     */
    public function setValues(array $values): SmartListConditions
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets is_primary
     *
     * @return bool
     */
    public function getIsPrimary(): bool
    {
        return $this->container['is_primary'];
    }

    /**
     * Sets is_primary
     *
     * @param bool $is_primary Whether the condition is primary or not (first condition of the smart list)
     *
     * @return self<TKey, TValue>
     */
    public function setIsPrimary(bool $is_primary): SmartListConditions
    {
        $this->container['is_primary'] = $is_primary;

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
        $map =
            /**
             * @param array-key $key
             * @return mixed
             */
            function ($key) use ($container) {
                return $container[$key];
            };
        return array_map($map, $this->additionalProperties);
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
}
