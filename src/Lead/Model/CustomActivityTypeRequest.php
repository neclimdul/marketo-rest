<?php

/**
 * CustomActivityTypeRequest
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
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

namespace NecLimDul\MarketoRest\Lead\Model;

use ArrayAccess;
use NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * CustomActivityTypeRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomActivityTypeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomActivityTypeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'api_name' => 'string',
        'description' => 'string',
        'filter_name' => 'string',
        'name' => 'string',
        'primary_attribute' => '\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute',
        'trigger_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'api_name' => null,
        'description' => null,
        'filter_name' => null,
        'name' => null,
        'primary_attribute' => null,
        'trigger_name' => null
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
        'api_name' => 'apiName',
        'description' => 'description',
        'filter_name' => 'filterName',
        'name' => 'name',
        'primary_attribute' => 'primaryAttribute',
        'trigger_name' => 'triggerName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_name' => 'setApiName',
        'description' => 'setDescription',
        'filter_name' => 'setFilterName',
        'name' => 'setName',
        'primary_attribute' => 'setPrimaryAttribute',
        'trigger_name' => 'setTriggerName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_name' => 'getApiName',
        'description' => 'getDescription',
        'filter_name' => 'getFilterName',
        'name' => 'getName',
        'primary_attribute' => 'getPrimaryAttribute',
        'trigger_name' => 'getTriggerName'
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
        $this->container['api_name'] = $data['api_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['filter_name'] = $data['filter_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['primary_attribute'] = $data['primary_attribute'] ?? null;
        $this->container['trigger_name'] = $data['trigger_name'] ?? null;
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

        if ($this->container['api_name'] === null) {
            $invalidProperties[] = "'api_name' can't be null";
        }
        if ($this->container['filter_name'] === null) {
            $invalidProperties[] = "'filter_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['primary_attribute'] === null) {
            $invalidProperties[] = "'primary_attribute' can't be null";
        }
        if ($this->container['trigger_name'] === null) {
            $invalidProperties[] = "'trigger_name' can't be null";
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
     * Gets api_name
     *
     * @return string
     */
    public function getApiName(): string
    {
        return $this->container['api_name'];
    }

    /**
     * Sets api_name
     *
     * @param string $api_name api_name
     *
     * @return self<TKey, TValue>
     */
    public function setApiName(string $api_name): CustomActivityTypeRequest
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self<TKey, TValue>
     */
    public function setDescription(?string $description): CustomActivityTypeRequest
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets filter_name
     *
     * @return string
     */
    public function getFilterName(): string
    {
        return $this->container['filter_name'];
    }

    /**
     * Sets filter_name
     *
     * @param string $filter_name Human-readable name of the associated filter
     *
     * @return self<TKey, TValue>
     */
    public function setFilterName(string $filter_name): CustomActivityTypeRequest
    {
        $this->container['filter_name'] = $filter_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Human-readable display name of the activity type
     *
     * @return self<TKey, TValue>
     */
    public function setName(string $name): CustomActivityTypeRequest
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets primary_attribute
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute
     */
    public function getPrimaryAttribute(): \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute
    {
        return $this->container['primary_attribute'];
    }

    /**
     * Sets primary_attribute
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute $primary_attribute Primary attribute of the activity type
     *
     * @return self<TKey, TValue>
     */
    public function setPrimaryAttribute(\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute $primary_attribute): CustomActivityTypeRequest
    {
        $this->container['primary_attribute'] = $primary_attribute;

        return $this;
    }

    /**
     * Gets trigger_name
     *
     * @return string
     */
    public function getTriggerName(): string
    {
        return $this->container['trigger_name'];
    }

    /**
     * Sets trigger_name
     *
     * @param string $trigger_name Human-readable name of the associated trigger
     *
     * @return self<TKey, TValue>
     */
    public function setTriggerName(string $trigger_name): CustomActivityTypeRequest
    {
        $this->container['trigger_name'] = $trigger_name;

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
