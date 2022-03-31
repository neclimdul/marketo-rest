<?php

/**
 * CreateLeadField
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
 * CreateLeadField Class Doc Comment
 *
 * @category Class
 * @description Lead field record for create
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<?string, ?mixed>
 */
class CreateLeadField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    public const DATA_TYPE_BOOLEAN = 'boolean';
    public const DATA_TYPE_CURRENCY = 'currency';
    public const DATA_TYPE_DATE = 'date';
    public const DATA_TYPE_DATETIME = 'datetime';
    public const DATA_TYPE_EMAIL = 'email';
    public const DATA_TYPE_FLOAT = 'float';
    public const DATA_TYPE_INTEGER = 'integer';
    public const DATA_TYPE_PERCENT = 'percent';
    public const DATA_TYPE_PHONE = 'phone';
    public const DATA_TYPE_SCORE = 'score';
    public const DATA_TYPE_STRING = 'string';
    public const DATA_TYPE_URL = 'url';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateLeadField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'display_name' => 'string',
        'name' => 'string',
        'description' => 'string',
        'data_type' => 'string',
        'is_hidden' => 'bool',
        'is_html_encoding_in_email' => 'bool',
        'is_sensitive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'display_name' => null,
        'name' => null,
        'description' => null,
        'data_type' => null,
        'is_hidden' => null,
        'is_html_encoding_in_email' => null,
        'is_sensitive' => null
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
        'display_name' => 'displayName',
        'name' => 'name',
        'description' => 'description',
        'data_type' => 'dataType',
        'is_hidden' => 'isHidden',
        'is_html_encoding_in_email' => 'isHtmlEncodingInEmail',
        'is_sensitive' => 'isSensitive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
        'name' => 'setName',
        'description' => 'setDescription',
        'data_type' => 'setDataType',
        'is_hidden' => 'setIsHidden',
        'is_html_encoding_in_email' => 'setIsHtmlEncodingInEmail',
        'is_sensitive' => 'setIsSensitive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
        'name' => 'getName',
        'description' => 'getDescription',
        'data_type' => 'getDataType',
        'is_hidden' => 'getIsHidden',
        'is_html_encoding_in_email' => 'getIsHtmlEncodingInEmail',
        'is_sensitive' => 'getIsSensitive'
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
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['data_type'] = $data['data_type'] ?? null;
        $this->container['is_hidden'] = $data['is_hidden'] ?? null;
        $this->container['is_html_encoding_in_email'] = $data['is_html_encoding_in_email'] ?? null;
        $this->container['is_sensitive'] = $data['is_sensitive'] ?? null;
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

        if ($this->container['display_name'] === null) {
            $invalidProperties['display_name'] = "'display_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties['name'] = "'name' can't be null";
        }
        if ($this->container['data_type'] === null) {
            $invalidProperties['data_type'] = "'data_type' can't be null";
        }
        $allowedValues = $this->getDataTypeAllowableValues();
        if (!is_null($this->container['data_type']) && !in_array($this->container['data_type'], $allowedValues, true)) {
            $invalidProperties['data_type'] = sprintf(
                "invalid value '%s' for 'data_type', must be one of '%s'",
                $this->container['data_type'],
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
    public function getDataTypeAllowableValues(): array
    {
        return [
            self::DATA_TYPE_BOOLEAN,
            self::DATA_TYPE_CURRENCY,
            self::DATA_TYPE_DATE,
            self::DATA_TYPE_DATETIME,
            self::DATA_TYPE_EMAIL,
            self::DATA_TYPE_FLOAT,
            self::DATA_TYPE_INTEGER,
            self::DATA_TYPE_PERCENT,
            self::DATA_TYPE_PHONE,
            self::DATA_TYPE_SCORE,
            self::DATA_TYPE_STRING,
            self::DATA_TYPE_URL,
        ];
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
     * @param string $display_name UI display-name of the field.  Must be unique, cannot contain special characters
     *
     * @return self
     */
    public function setDisplayName(string $display_name): CreateLeadField
    {
        $this->container['display_name'] = $display_name;

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
     * @param string $name API name of the field.  Must be unique, start with a letter, and only contain letters, numbers, or underscore
     *
     * @return self
     */
    public function setName(string $name): CreateLeadField
    {
        $this->container['name'] = $name;

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
     * @param string|null $description Description of the field.  Default is no description
     *
     * @return self
     */
    public function setDescription(?string $description): CreateLeadField
    {
        $this->container['description'] = $description;

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
     * @param string $data_type Datatype of the field
     *
     * @return self
     */
    public function setDataType(string $data_type): CreateLeadField
    {
        $allowedValues = $this->getDataTypeAllowableValues();
        if (!in_array($data_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'data_type', must be one of '%s'",
                    $data_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets is_hidden
     *
     * @return bool|null
     */
    public function getIsHidden(): ?bool
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     * @param bool|null $is_hidden If set to true, the field is hidden.  Default is false
     *
     * @return self
     */
    public function setIsHidden(?bool $is_hidden): CreateLeadField
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }

    /**
     * Gets is_html_encoding_in_email
     *
     * @return bool|null
     */
    public function getIsHtmlEncodingInEmail(): ?bool
    {
        return $this->container['is_html_encoding_in_email'];
    }

    /**
     * Sets is_html_encoding_in_email
     *
     * @param bool|null $is_html_encoding_in_email If set to true, field is encoded as HTML in email.  Default is true
     *
     * @return self
     */
    public function setIsHtmlEncodingInEmail(?bool $is_html_encoding_in_email): CreateLeadField
    {
        $this->container['is_html_encoding_in_email'] = $is_html_encoding_in_email;

        return $this;
    }

    /**
     * Gets is_sensitive
     *
     * @return bool|null
     */
    public function getIsSensitive(): ?bool
    {
        return $this->container['is_sensitive'];
    }

    /**
     * Sets is_sensitive
     *
     * @param bool|null $is_sensitive If set to true, field is marked as sensitive.  Default is false
     *
     * @return self
     */
    public function setIsSensitive(?bool $is_sensitive): CreateLeadField
    {
        $this->container['is_sensitive'] = $is_sensitive;

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
        /** @psalm-suppress PossiblyNullArrayOffset */
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
