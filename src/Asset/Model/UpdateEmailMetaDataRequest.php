<?php

/**
 * UpdateEmailMetaDataRequest
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
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Asset\Model;

use ArrayAccess;
use NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * UpdateEmailMetaDataRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateEmailMetaDataRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateEmailMetaDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'name' => 'string',
        'pre_header' => 'string',
        'operational' => 'bool',
        'published' => 'bool',
        'text_only' => 'bool',
        'web_view' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'description' => null,
        'name' => null,
        'pre_header' => null,
        'operational' => null,
        'published' => null,
        'text_only' => null,
        'web_view' => null
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
        'description' => 'description',
        'name' => 'name',
        'pre_header' => 'preHeader',
        'operational' => 'operational',
        'published' => 'published',
        'text_only' => 'textOnly',
        'web_view' => 'webView'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'name' => 'setName',
        'pre_header' => 'setPreHeader',
        'operational' => 'setOperational',
        'published' => 'setPublished',
        'text_only' => 'setTextOnly',
        'web_view' => 'setWebView'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'name' => 'getName',
        'pre_header' => 'getPreHeader',
        'operational' => 'getOperational',
        'published' => 'getPublished',
        'text_only' => 'getTextOnly',
        'web_view' => 'getWebView'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['pre_header'] = $data['pre_header'] ?? null;
        $this->container['operational'] = $data['operational'] ?? null;
        $this->container['published'] = $data['published'] ?? null;
        $this->container['text_only'] = $data['text_only'] ?? null;
        $this->container['web_view'] = $data['web_view'] ?? null;
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
     * @param string|null $description Description of the asset
     *
     * @return self<TKey, TValue>
     */
    public function setDescription(?string $description): UpdateEmailMetaDataRequest
    {
        $this->container['description'] = $description;

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
     * @param string|null $name Name of the Email
     *
     * @return self<TKey, TValue>
     */
    public function setName(?string $name): UpdateEmailMetaDataRequest
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pre_header
     *
     * @return string
     */
    public function getPreHeader(): string
    {
        return $this->container['pre_header'];
    }

    /**
     * Sets pre_header
     *
     * @param string|null $pre_header Preheader text for the email
     *
     * @return self<TKey, TValue>
     */
    public function setPreHeader(?string $pre_header): UpdateEmailMetaDataRequest
    {
        $this->container['pre_header'] = $pre_header;

        return $this;
    }

    /**
     * Gets operational
     *
     * @return bool
     */
    public function getOperational(): bool
    {
        return $this->container['operational'];
    }

    /**
     * Sets operational
     *
     * @param bool|null $operational Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false
     *
     * @return self<TKey, TValue>
     */
    public function setOperational(?bool $operational): UpdateEmailMetaDataRequest
    {
        $this->container['operational'] = $operational;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool
     */
    public function getPublished(): bool
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool|null $published Whether the email has been published to Sales Insight.  Default false
     *
     * @return self<TKey, TValue>
     */
    public function setPublished(?bool $published): UpdateEmailMetaDataRequest
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets text_only
     *
     * @return bool
     */
    public function getTextOnly(): bool
    {
        return $this->container['text_only'];
    }

    /**
     * Sets text_only
     *
     * @param bool|null $text_only Setting to include text-only version of email when sent
     *
     * @return self<TKey, TValue>
     */
    public function setTextOnly(?bool $text_only): UpdateEmailMetaDataRequest
    {
        $this->container['text_only'] = $text_only;

        return $this;
    }

    /**
     * Gets web_view
     *
     * @return bool
     */
    public function getWebView(): bool
    {
        return $this->container['web_view'];
    }

    /**
     * Sets web_view
     *
     * @param bool|null $web_view Whether the email has been enabled to allow the 'View as Web Page' when received
     *
     * @return self<TKey, TValue>
     */
    public function setWebView(?bool $web_view): UpdateEmailMetaDataRequest
    {
        $this->container['web_view'] = $web_view;

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
