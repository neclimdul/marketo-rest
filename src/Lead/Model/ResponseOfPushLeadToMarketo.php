<?php

/**
 * ResponseOfPushLeadToMarketo
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
 * ResponseOfPushLeadToMarketo Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ResponseOfPushLeadToMarketo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseOfPushLeadToMarketo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'errors' => '\NecLimDul\MarketoRest\Lead\Model\Error[]',
        'request_id' => 'string',
        'result' => '\NecLimDul\MarketoRest\Lead\Model\Lead[]',
        'success' => 'bool',
        'warnings' => '\NecLimDul\MarketoRest\Lead\Model\Warning[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'errors' => null,
        'request_id' => null,
        'result' => null,
        'success' => null,
        'warnings' => null
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
        'errors' => 'errors',
        'request_id' => 'requestId',
        'result' => 'result',
        'success' => 'success',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'errors' => 'setErrors',
        'request_id' => 'setRequestId',
        'result' => 'setResult',
        'success' => 'setSuccess',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'errors' => 'getErrors',
        'request_id' => 'getRequestId',
        'result' => 'getResult',
        'success' => 'getSuccess',
        'warnings' => 'getWarnings'
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
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['request_id'] = $data['request_id'] ?? null;
        $this->container['result'] = $data['result'] ?? null;
        $this->container['success'] = $data['success'] ?? null;
        $this->container['warnings'] = $data['warnings'] ?? null;
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

        if ($this->container['errors'] === null) {
            $invalidProperties[] = "'errors' can't be null";
        }
        if ($this->container['request_id'] === null) {
            $invalidProperties[] = "'request_id' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ($this->container['success'] === null) {
            $invalidProperties[] = "'success' can't be null";
        }
        if ($this->container['warnings'] === null) {
            $invalidProperties[] = "'warnings' can't be null";
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
     * Gets errors
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Error[]
     */
    public function getErrors(): array
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Error[] $errors Array of errors that occurred if the request was unsuccessful
     *
     * @return self<TKey, TValue>
     */
    public function setErrors(array $errors): ResponseOfPushLeadToMarketo
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id Id of the request made
     *
     * @return self<TKey, TValue>
     */
    public function setRequestId(string $request_id): ResponseOfPushLeadToMarketo
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets result
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Lead[]
     */
    public function getResult(): array
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Lead[] $result Array of results for individual records in the operation, may be empty
     *
     * @return self<TKey, TValue>
     */
    public function setResult(array $result): ResponseOfPushLeadToMarketo
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success Whether the request succeeded
     *
     * @return self<TKey, TValue>
     */
    public function setSuccess(bool $success): ResponseOfPushLeadToMarketo
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Warning[]
     */
    public function getWarnings(): array
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Warning[] $warnings Array of warnings given for the operation
     *
     * @return self<TKey, TValue>
     */
    public function setWarnings(array $warnings): ResponseOfPushLeadToMarketo
    {
        $this->container['warnings'] = $warnings;

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
