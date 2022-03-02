<?php

/**
 * ExportProgramMemberRequest
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
 * ExportProgramMemberRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExportProgramMemberRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExportProgramMemberRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'column_header_names' => '\NecLimDul\MarketoRest\Lead\Model\ColumnHeaderNames',
        'fields' => 'string[]',
        'filter' => '\NecLimDul\MarketoRest\Lead\Model\ExportProgramMemberFilter',
        'format' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'column_header_names' => null,
        'fields' => null,
        'filter' => null,
        'format' => null
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
        'column_header_names' => 'columnHeaderNames',
        'fields' => 'fields',
        'filter' => 'filter',
        'format' => 'format'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'column_header_names' => 'setColumnHeaderNames',
        'fields' => 'setFields',
        'filter' => 'setFilter',
        'format' => 'setFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'column_header_names' => 'getColumnHeaderNames',
        'fields' => 'getFields',
        'filter' => 'getFilter',
        'format' => 'getFormat'
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
        $this->container['column_header_names'] = $data['column_header_names'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['filter'] = $data['filter'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
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

        if ($this->container['fields'] === null) {
            $invalidProperties['fields'] = "'fields' can't be null";
        }
        if ($this->container['filter'] === null) {
            $invalidProperties['filter'] = "'filter' can't be null";
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
     * Gets column_header_names
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\ColumnHeaderNames|null
     */
    public function getColumnHeaderNames(): ?\NecLimDul\MarketoRest\Lead\Model\ColumnHeaderNames
    {
        return $this->container['column_header_names'];
    }

    /**
     * Sets column_header_names
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\ColumnHeaderNames|null $column_header_names File header field names override (corresponds with REST API name)
     *
     * @return self<TKey, TValue>
     */
    public function setColumnHeaderNames(?\NecLimDul\MarketoRest\Lead\Model\ColumnHeaderNames $column_header_names): ExportProgramMemberRequest
    {
        $this->container['column_header_names'] = $column_header_names;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string[]
     */
    public function getFields(): array
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[] $fields Comma-separated list of fields to include in the file
     *
     * @return self<TKey, TValue>
     */
    public function setFields(array $fields): ExportProgramMemberRequest
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\ExportProgramMemberFilter
     */
    public function getFilter(): \NecLimDul\MarketoRest\Lead\Model\ExportProgramMemberFilter
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\ExportProgramMemberFilter $filter Program member record selection criteria. Must be the following: \"programId\"
     *
     * @return self<TKey, TValue>
     */
    public function setFilter(\NecLimDul\MarketoRest\Lead\Model\ExportProgramMemberFilter $filter): ExportProgramMemberRequest
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string|null $format File format to create(\"CSV\", \"TSV\", \"SSV\").  Default is \"CSV\"
     *
     * @return self<TKey, TValue>
     */
    public function setFormat(?string $format): ExportProgramMemberRequest
    {
        $this->container['format'] = $format;

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
