<?php

/**
 * LeadAttribute2Fields
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
 * LeadAttribute2Fields Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LeadAttribute2Fields implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LeadAttribute2Fields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'display_name' => 'string',
        'data_type' => 'string',
        'length' => 'int',
        'updateable' => 'bool',
        'crm_managed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'name' => null,
        'display_name' => null,
        'data_type' => null,
        'length' => null,
        'updateable' => null,
        'crm_managed' => null
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
        'name' => 'name',
        'display_name' => 'displayName',
        'data_type' => 'dataType',
        'length' => 'length',
        'updateable' => 'updateable',
        'crm_managed' => 'crmManaged'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'display_name' => 'setDisplayName',
        'data_type' => 'setDataType',
        'length' => 'setLength',
        'updateable' => 'setUpdateable',
        'crm_managed' => 'setCrmManaged'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'display_name' => 'getDisplayName',
        'data_type' => 'getDataType',
        'length' => 'getLength',
        'updateable' => 'getUpdateable',
        'crm_managed' => 'getCrmManaged'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['data_type'] = $data['data_type'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
        $this->container['updateable'] = $data['updateable'] ?? null;
        $this->container['crm_managed'] = $data['crm_managed'] ?? null;
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

        if ($this->container['name'] === null) {
            $invalidProperties['name'] = "'name' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties['display_name'] = "'display_name' can't be null";
        }
        if ($this->container['data_type'] === null) {
            $invalidProperties['data_type'] = "'data_type' can't be null";
        }
        if ($this->container['updateable'] === null) {
            $invalidProperties['updateable'] = "'updateable' can't be null";
        }
        if ($this->container['crm_managed'] === null) {
            $invalidProperties['crm_managed'] = "'crm_managed' can't be null";
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
     * @param string $name REST API name of field
     *
     * @return self<TKey, TValue>
     */
    public function setName(string $name): LeadAttribute2Fields
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name Display name of field (friendly name)
     *
     * @return self<TKey, TValue>
     */
    public function setDisplayName(string $display_name): LeadAttribute2Fields
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType(): string
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type Data type of field
     *
     * @return self<TKey, TValue>
     */
    public function setDataType(string $data_type): LeadAttribute2Fields
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int|null
     */
    public function getLength(): ?int
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int|null $length Length of field
     *
     * @return self<TKey, TValue>
     */
    public function setLength(?int $length): LeadAttribute2Fields
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets updateable
     *
     * @return bool
     */
    public function getUpdateable(): bool
    {
        return $this->container['updateable'];
    }

    /**
     * Sets updateable
     *
     * @param bool $updateable Is field updateable
     *
     * @return self<TKey, TValue>
     */
    public function setUpdateable(bool $updateable): LeadAttribute2Fields
    {
        $this->container['updateable'] = $updateable;

        return $this;
    }

    /**
     * Gets crm_managed
     *
     * @return bool
     */
    public function getCrmManaged(): bool
    {
        return $this->container['crm_managed'];
    }

    /**
     * Sets crm_managed
     *
     * @param bool $crm_managed Is field managed by CRM
     *
     * @return self<TKey, TValue>
     */
    public function setCrmManaged(bool $crm_managed): LeadAttribute2Fields
    {
        $this->container['crm_managed'] = $crm_managed;

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
