<?php

/**
 * VisitorData
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
 * VisitorData Class Doc Comment
 *
 * @category Class
 * @description Page visit related data.  Used to populate additional activity fields for filtering and triggering.
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VisitorData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VisitorData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'page_url' => 'string',
        'query_string' => 'string',
        'lead_client_ip_address' => 'string',
        'user_agent_string' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'page_url' => null,
        'query_string' => null,
        'lead_client_ip_address' => null,
        'user_agent_string' => null
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
        'page_url' => 'pageURL',
        'query_string' => 'queryString',
        'lead_client_ip_address' => 'leadClientIpAddress',
        'user_agent_string' => 'userAgentString'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'page_url' => 'setPageUrl',
        'query_string' => 'setQueryString',
        'lead_client_ip_address' => 'setLeadClientIpAddress',
        'user_agent_string' => 'setUserAgentString'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'page_url' => 'getPageUrl',
        'query_string' => 'getQueryString',
        'lead_client_ip_address' => 'getLeadClientIpAddress',
        'user_agent_string' => 'getUserAgentString'
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
        $this->container['page_url'] = $data['page_url'] ?? null;
        $this->container['query_string'] = $data['query_string'] ?? null;
        $this->container['lead_client_ip_address'] = $data['lead_client_ip_address'] ?? null;
        $this->container['user_agent_string'] = $data['user_agent_string'] ?? null;
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
     * Gets page_url
     *
     * @return string
     */
    public function getPageUrl(): string
    {
        return $this->container['page_url'];
    }

    /**
     * Sets page_url
     *
     * @param string|null $page_url Web page that hosts the form.  Must be a fully formed URL
     *
     * @return self<TKey, TValue>
     */
    public function setPageUrl(?string $page_url): VisitorData
    {
        $this->container['page_url'] = $page_url;

        return $this;
    }

    /**
     * Gets query_string
     *
     * @return string
     */
    public function getQueryString(): string
    {
        return $this->container['query_string'];
    }

    /**
     * Sets query_string
     *
     * @param string|null $query_string Web page query string.  Contains one or more ampersand delimited key=value pairs
     *
     * @return self<TKey, TValue>
     */
    public function setQueryString(?string $query_string): VisitorData
    {
        $this->container['query_string'] = $query_string;

        return $this;
    }

    /**
     * Gets lead_client_ip_address
     *
     * @return string
     */
    public function getLeadClientIpAddress(): string
    {
        return $this->container['lead_client_ip_address'];
    }

    /**
     * Sets lead_client_ip_address
     *
     * @param string|null $lead_client_ip_address Client IP address.  IPv4 format.  Used to populate inferred fields on upserted lead record.
     *
     * @return self<TKey, TValue>
     */
    public function setLeadClientIpAddress(?string $lead_client_ip_address): VisitorData
    {
        $this->container['lead_client_ip_address'] = $lead_client_ip_address;

        return $this;
    }

    /**
     * Gets user_agent_string
     *
     * @return string
     */
    public function getUserAgentString(): string
    {
        return $this->container['user_agent_string'];
    }

    /**
     * Sets user_agent_string
     *
     * @param string|null $user_agent_string User agent of browser hosting the form
     *
     * @return self<TKey, TValue>
     */
    public function setUserAgentString(?string $user_agent_string): VisitorData
    {
        $this->container['user_agent_string'] = $user_agent_string;

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
