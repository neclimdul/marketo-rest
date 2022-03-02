<?php

/**
 * CustomActivityType
 *
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.26
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Lead\Model;

use ArrayAccess;
use NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * CustomActivityType Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomActivityType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    public const STATUS_DRAFT = 'draft';
    public const STATUS_APPROVED = 'approved';
    public const STATUS_DELETED = 'deleted';
    public const STATUS_APPROVED_WITH_DRAFT = 'approved with draft';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomActivityType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'api_name' => 'string',
        'attributes' => '\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute[]',
        'created_at' => 'string',
        'description' => 'string',
        'filter_name' => 'string',
        'id' => 'int',
        'name' => 'string',
        'primary_attribute' => '\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute',
        'status' => 'string',
        'trigger_name' => 'string',
        'updated_at' => 'string'
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
        'attributes' => null,
        'created_at' => null,
        'description' => null,
        'filter_name' => null,
        'id' => 'int32',
        'name' => null,
        'primary_attribute' => null,
        'status' => null,
        'trigger_name' => null,
        'updated_at' => null
    ];

    /**
      * Array of additional properties.
      *
      * @var mixed[]
      */
    protected $additionalProperties = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'api_name' => 'apiName',
        'attributes' => 'attributes',
        'created_at' => 'createdAt',
        'description' => 'description',
        'filter_name' => 'filterName',
        'id' => 'id',
        'name' => 'name',
        'primary_attribute' => 'primaryAttribute',
        'status' => 'status',
        'trigger_name' => 'triggerName',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_name' => 'setApiName',
        'attributes' => 'setAttributes',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'filter_name' => 'setFilterName',
        'id' => 'setId',
        'name' => 'setName',
        'primary_attribute' => 'setPrimaryAttribute',
        'status' => 'setStatus',
        'trigger_name' => 'setTriggerName',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_name' => 'getApiName',
        'attributes' => 'getAttributes',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'filter_name' => 'getFilterName',
        'id' => 'getId',
        'name' => 'getName',
        'primary_attribute' => 'getPrimaryAttribute',
        'status' => 'getStatus',
        'trigger_name' => 'getTriggerName',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['filter_name'] = $data['filter_name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['primary_attribute'] = $data['primary_attribute'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['trigger_name'] = $data['trigger_name'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties['status'] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets allowable values of the enum.
     *
     * @return scalar[]
     */
    public function getStatusAllowableValues(): array
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_APPROVED,
            self::STATUS_DELETED,
            self::STATUS_APPROVED_WITH_DRAFT,
        ];
    }

    /**
     * Gets api_name
     *
     * @return string|null
     */
    public function getApiName(): ?string
    {
        return $this->container['api_name'];
    }

    /**
     * Sets api_name
     *
     * @param string|null $api_name API Name of the type.  The API name must be unique and alphanumeric, containing at least one letter.  It is highly recommended to prepend a unique namespace of up to sixteen characters to the API name.  Required on creation
     *
     * @return self<TKey, TValue>
     */
    public function setApiName(?string $api_name): CustomActivityType
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute[]|null
     */
    public function getAttributes(): ?array
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute[]|null $attributes List of attributes for the activity type.  May only be added or update through Create or Update Custom Activity Type Attributes
     *
     * @return self<TKey, TValue>
     */
    public function setAttributes(?array $attributes): CustomActivityType
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Datetime when the activity type was created
     *
     * @return self<TKey, TValue>
     */
    public function setCreatedAt(?string $created_at): CustomActivityType
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the activity type
     *
     * @return self<TKey, TValue>
     */
    public function setDescription(?string $description): CustomActivityType
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets filter_name
     *
     * @return string|null
     */
    public function getFilterName(): ?string
    {
        return $this->container['filter_name'];
    }

    /**
     * Sets filter_name
     *
     * @param string|null $filter_name Human-readable name for the associated filter of the activity type.  Required on creation
     *
     * @return self<TKey, TValue>
     */
    public function setFilterName(?string $filter_name): CustomActivityType
    {
        $this->container['filter_name'] = $filter_name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self<TKey, TValue>
     */
    public function setId(?int $id): CustomActivityType
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Human-readable display name of the type.  Required on creation
     *
     * @return self<TKey, TValue>
     */
    public function setName(?string $name): CustomActivityType
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets primary_attribute
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute|null
     */
    public function getPrimaryAttribute(): ?\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute
    {
        return $this->container['primary_attribute'];
    }

    /**
     * Sets primary_attribute
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute|null $primary_attribute Primary Attribute of the activity type.  Required on creation
     *
     * @return self<TKey, TValue>
     */
    public function setPrimaryAttribute(?\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute $primary_attribute): CustomActivityType
    {
        $this->container['primary_attribute'] = $primary_attribute;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status State of the activity type
     *
     * @return self<TKey, TValue>
     */
    public function setStatus(?string $status): CustomActivityType
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets trigger_name
     *
     * @return string|null
     */
    public function getTriggerName(): ?string
    {
        return $this->container['trigger_name'];
    }

    /**
     * Sets trigger_name
     *
     * @param string|null $trigger_name Human-readable name for the associated trigger of the activity type.  Required on creation
     *
     * @return self<TKey, TValue>
     */
    public function setTriggerName(?string $trigger_name): CustomActivityType
    {
        $this->container['trigger_name'] = $trigger_name;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Datetime when the activity type was most recently updated
     *
     * @return self<TKey, TValue>
     */
    public function setUpdatedAt(?string $updated_at): CustomActivityType
    {
        $this->container['updated_at'] = $updated_at;

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
