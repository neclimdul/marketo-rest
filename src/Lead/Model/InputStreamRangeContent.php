<?php

/**
 * InputStreamRangeContent
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
 * InputStreamRangeContent Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InputStreamRangeContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InputStreamRangeContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'content_type' => 'string',
        'file_range' => '\NecLimDul\MarketoRest\Lead\Model\FileRange',
        'input_stream' => '\NecLimDul\MarketoRest\Lead\Model\InputStream',
        'length' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'content_type' => null,
        'file_range' => null,
        'input_stream' => null,
        'length' => 'int64'
    ];

    /**
      * Array of additional properties.
      *
      * @var string[]
      */
    protected $additionalProperties = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'content_type' => 'contentType',
        'file_range' => 'fileRange',
        'input_stream' => 'inputStream',
        'length' => 'length'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_type' => 'setContentType',
        'file_range' => 'setFileRange',
        'input_stream' => 'setInputStream',
        'length' => 'setLength'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_type' => 'getContentType',
        'file_range' => 'getFileRange',
        'input_stream' => 'getInputStream',
        'length' => 'getLength'
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
        $this->container['content_type'] = $data['content_type'] ?? null;
        $this->container['file_range'] = $data['file_range'] ?? null;
        $this->container['input_stream'] = $data['input_stream'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
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
     * Gets content_type
     *
     * @return string|null
     */
    public function getContentType(): ?string
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string|null $content_type content_type
     *
     * @return self<TKey, TValue>
     */
    public function setContentType(?string $content_type): InputStreamRangeContent
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets file_range
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\FileRange|null
     */
    public function getFileRange(): ?\NecLimDul\MarketoRest\Lead\Model\FileRange
    {
        return $this->container['file_range'];
    }

    /**
     * Sets file_range
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\FileRange|null $file_range file_range
     *
     * @return self<TKey, TValue>
     */
    public function setFileRange(?\NecLimDul\MarketoRest\Lead\Model\FileRange $file_range): InputStreamRangeContent
    {
        $this->container['file_range'] = $file_range;

        return $this;
    }

    /**
     * Gets input_stream
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\InputStream|null
     */
    public function getInputStream(): ?\NecLimDul\MarketoRest\Lead\Model\InputStream
    {
        return $this->container['input_stream'];
    }

    /**
     * Sets input_stream
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\InputStream|null $input_stream input_stream
     *
     * @return self<TKey, TValue>
     */
    public function setInputStream(?\NecLimDul\MarketoRest\Lead\Model\InputStream $input_stream): InputStreamRangeContent
    {
        $this->container['input_stream'] = $input_stream;

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
     * @param int|null $length length
     *
     * @return self<TKey, TValue>
     */
    public function setLength(?int $length): InputStreamRangeContent
    {
        $this->container['length'] = $length;

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
    public function getAdditionalProperties(): array
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
