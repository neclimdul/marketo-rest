<?php

/**
 * ResponseOfIdentity
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
 * @package  NecLimDul\MarketoRest\Identity
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Identity\Model;

use ArrayAccess;
use NecLimDul\MarketoRest\Identity\ObjectSerializer;

/**
 * ResponseOfIdentity Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Identity
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ResponseOfIdentity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    public const TOKEN_TYPE_BEARER = 'bearer';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseOfIdentity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'access_token' => 'string',
        'scope' => 'string',
        'expires_in' => 'int',
        'token_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'access_token' => null,
        'scope' => null,
        'expires_in' => null,
        'token_type' => null
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
        'access_token' => 'access_token',
        'scope' => 'scope',
        'expires_in' => 'expires_in',
        'token_type' => 'token_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'access_token' => 'setAccessToken',
        'scope' => 'setScope',
        'expires_in' => 'setExpiresIn',
        'token_type' => 'setTokenType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'access_token' => 'getAccessToken',
        'scope' => 'getScope',
        'expires_in' => 'getExpiresIn',
        'token_type' => 'getTokenType'
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
        $this->container['access_token'] = $data['access_token'] ?? null;
        $this->container['scope'] = $data['scope'] ?? null;
        $this->container['expires_in'] = $data['expires_in'] ?? null;
        $this->container['token_type'] = $data['token_type'] ?? null;
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

        if ($this->container['access_token'] === null) {
            $invalidProperties['access_token'] = "'access_token' can't be null";
        }
        if ($this->container['scope'] === null) {
            $invalidProperties['scope'] = "'scope' can't be null";
        }
        if ($this->container['expires_in'] === null) {
            $invalidProperties['expires_in'] = "'expires_in' can't be null";
        }
        if ($this->container['token_type'] === null) {
            $invalidProperties['token_type'] = "'token_type' can't be null";
        }
        $allowedValues = $this->getTokenTypeAllowableValues();
        if (!is_null($this->container['token_type']) && !in_array($this->container['token_type'], $allowedValues, true)) {
            $invalidProperties['token_type'] = sprintf(
                "invalid value '%s' for 'token_type', must be one of '%s'",
                $this->container['token_type'],
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
    public function getTokenTypeAllowableValues(): array
    {
        return [
            self::TOKEN_TYPE_BEARER,
        ];
    }

    /**
     * Gets access_token
     *
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string $access_token The token that you pass with subsequent calls to authenticate with the target instance
     *
     * @return self<TKey, TValue>
     */
    public function setAccessToken(string $access_token): ResponseOfIdentity
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope(): string
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope The owning API-only user of the custom service that was used to authenticate
     *
     * @return self<TKey, TValue>
     */
    public function setScope(string $scope): ResponseOfIdentity
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets expires_in
     *
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     *
     * @param int $expires_in Remaining lifespan of the current token in seconds
     *
     * @return self<TKey, TValue>
     */
    public function setExpiresIn(int $expires_in): ResponseOfIdentity
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string $token_type The OAuth authentication method
     *
     * @return self<TKey, TValue>
     */
    public function setTokenType(string $token_type): ResponseOfIdentity
    {
        $allowedValues = $this->getTokenTypeAllowableValues();
        if (!in_array($token_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'token_type', must be one of '%s'",
                    $token_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['token_type'] = $token_type;

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
