<?php

/**
 * JsonNode
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
 * JsonNode Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JsonNode implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    public const NODE_TYPE__ARRAY = 'ARRAY';
    public const NODE_TYPE_BINARY = 'BINARY';
    public const NODE_TYPE_BOOLEAN = 'BOOLEAN';
    public const NODE_TYPE_MISSING = 'MISSING';
    public const NODE_TYPE_NULL = 'NULL';
    public const NODE_TYPE_NUMBER = 'NUMBER';
    public const NODE_TYPE_OBJECT = 'OBJECT';
    public const NODE_TYPE_POJO = 'POJO';
    public const NODE_TYPE_STRING = 'STRING';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JsonNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'array' => 'bool',
        'big_decimal' => 'bool',
        'big_integer' => 'bool',
        'binary' => 'bool',
        'boolean' => 'bool',
        'container_node' => 'bool',
        'double' => 'bool',
        'float' => 'bool',
        'floating_point_number' => 'bool',
        'int' => 'bool',
        'integral_number' => 'bool',
        'long' => 'bool',
        'missing_node' => 'bool',
        'node_type' => 'string',
        'null' => 'bool',
        'number' => 'bool',
        'object' => 'bool',
        'pojo' => 'bool',
        'short' => 'bool',
        'textual' => 'bool',
        'value_node' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'array' => null,
        'big_decimal' => null,
        'big_integer' => null,
        'binary' => null,
        'boolean' => null,
        'container_node' => null,
        'double' => null,
        'float' => null,
        'floating_point_number' => null,
        'int' => null,
        'integral_number' => null,
        'long' => null,
        'missing_node' => null,
        'node_type' => null,
        'null' => null,
        'number' => null,
        'object' => null,
        'pojo' => null,
        'short' => null,
        'textual' => null,
        'value_node' => null
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
        'array' => 'array',
        'big_decimal' => 'bigDecimal',
        'big_integer' => 'bigInteger',
        'binary' => 'binary',
        'boolean' => 'boolean',
        'container_node' => 'containerNode',
        'double' => 'double',
        'float' => 'float',
        'floating_point_number' => 'floatingPointNumber',
        'int' => 'int',
        'integral_number' => 'integralNumber',
        'long' => 'long',
        'missing_node' => 'missingNode',
        'node_type' => 'nodeType',
        'null' => 'null',
        'number' => 'number',
        'object' => 'object',
        'pojo' => 'pojo',
        'short' => 'short',
        'textual' => 'textual',
        'value_node' => 'valueNode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'array' => 'setArray',
        'big_decimal' => 'setBigDecimal',
        'big_integer' => 'setBigInteger',
        'binary' => 'setBinary',
        'boolean' => 'setBoolean',
        'container_node' => 'setContainerNode',
        'double' => 'setDouble',
        'float' => 'setFloat',
        'floating_point_number' => 'setFloatingPointNumber',
        'int' => 'setInt',
        'integral_number' => 'setIntegralNumber',
        'long' => 'setLong',
        'missing_node' => 'setMissingNode',
        'node_type' => 'setNodeType',
        'null' => 'setNull',
        'number' => 'setNumber',
        'object' => 'setObject',
        'pojo' => 'setPojo',
        'short' => 'setShort',
        'textual' => 'setTextual',
        'value_node' => 'setValueNode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'array' => 'getArray',
        'big_decimal' => 'getBigDecimal',
        'big_integer' => 'getBigInteger',
        'binary' => 'getBinary',
        'boolean' => 'getBoolean',
        'container_node' => 'getContainerNode',
        'double' => 'getDouble',
        'float' => 'getFloat',
        'floating_point_number' => 'getFloatingPointNumber',
        'int' => 'getInt',
        'integral_number' => 'getIntegralNumber',
        'long' => 'getLong',
        'missing_node' => 'getMissingNode',
        'node_type' => 'getNodeType',
        'null' => 'getNull',
        'number' => 'getNumber',
        'object' => 'getObject',
        'pojo' => 'getPojo',
        'short' => 'getShort',
        'textual' => 'getTextual',
        'value_node' => 'getValueNode'
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
        $this->container['array'] = $data['array'] ?? null;
        $this->container['big_decimal'] = $data['big_decimal'] ?? null;
        $this->container['big_integer'] = $data['big_integer'] ?? null;
        $this->container['binary'] = $data['binary'] ?? null;
        $this->container['boolean'] = $data['boolean'] ?? null;
        $this->container['container_node'] = $data['container_node'] ?? null;
        $this->container['double'] = $data['double'] ?? null;
        $this->container['float'] = $data['float'] ?? null;
        $this->container['floating_point_number'] = $data['floating_point_number'] ?? null;
        $this->container['int'] = $data['int'] ?? null;
        $this->container['integral_number'] = $data['integral_number'] ?? null;
        $this->container['long'] = $data['long'] ?? null;
        $this->container['missing_node'] = $data['missing_node'] ?? null;
        $this->container['node_type'] = $data['node_type'] ?? null;
        $this->container['null'] = $data['null'] ?? null;
        $this->container['number'] = $data['number'] ?? null;
        $this->container['object'] = $data['object'] ?? null;
        $this->container['pojo'] = $data['pojo'] ?? null;
        $this->container['short'] = $data['short'] ?? null;
        $this->container['textual'] = $data['textual'] ?? null;
        $this->container['value_node'] = $data['value_node'] ?? null;
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

        $allowedValues = $this->getNodeTypeAllowableValues();
        if (!is_null($this->container['node_type']) && !in_array($this->container['node_type'], $allowedValues, true)) {
            $invalidProperties['node_type'] = sprintf(
                "invalid value '%s' for 'node_type', must be one of '%s'",
                $this->container['node_type'],
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
    public function getNodeTypeAllowableValues(): array
    {
        return [
            self::NODE_TYPE__ARRAY,
            self::NODE_TYPE_BINARY,
            self::NODE_TYPE_BOOLEAN,
            self::NODE_TYPE_MISSING,
            self::NODE_TYPE_NULL,
            self::NODE_TYPE_NUMBER,
            self::NODE_TYPE_OBJECT,
            self::NODE_TYPE_POJO,
            self::NODE_TYPE_STRING,
        ];
    }

    /**
     * Gets array
     *
     * @return bool|null
     */
    public function getArray(): ?bool
    {
        return $this->container['array'];
    }

    /**
     * Sets array
     *
     * @param bool|null $array array
     *
     * @return self<TKey, TValue>
     */
    public function setArray(?bool $array): JsonNode
    {
        $this->container['array'] = $array;

        return $this;
    }

    /**
     * Gets big_decimal
     *
     * @return bool|null
     */
    public function getBigDecimal(): ?bool
    {
        return $this->container['big_decimal'];
    }

    /**
     * Sets big_decimal
     *
     * @param bool|null $big_decimal big_decimal
     *
     * @return self<TKey, TValue>
     */
    public function setBigDecimal(?bool $big_decimal): JsonNode
    {
        $this->container['big_decimal'] = $big_decimal;

        return $this;
    }

    /**
     * Gets big_integer
     *
     * @return bool|null
     */
    public function getBigInteger(): ?bool
    {
        return $this->container['big_integer'];
    }

    /**
     * Sets big_integer
     *
     * @param bool|null $big_integer big_integer
     *
     * @return self<TKey, TValue>
     */
    public function setBigInteger(?bool $big_integer): JsonNode
    {
        $this->container['big_integer'] = $big_integer;

        return $this;
    }

    /**
     * Gets binary
     *
     * @return bool|null
     */
    public function getBinary(): ?bool
    {
        return $this->container['binary'];
    }

    /**
     * Sets binary
     *
     * @param bool|null $binary binary
     *
     * @return self<TKey, TValue>
     */
    public function setBinary(?bool $binary): JsonNode
    {
        $this->container['binary'] = $binary;

        return $this;
    }

    /**
     * Gets boolean
     *
     * @return bool|null
     */
    public function getBoolean(): ?bool
    {
        return $this->container['boolean'];
    }

    /**
     * Sets boolean
     *
     * @param bool|null $boolean boolean
     *
     * @return self<TKey, TValue>
     */
    public function setBoolean(?bool $boolean): JsonNode
    {
        $this->container['boolean'] = $boolean;

        return $this;
    }

    /**
     * Gets container_node
     *
     * @return bool|null
     */
    public function getContainerNode(): ?bool
    {
        return $this->container['container_node'];
    }

    /**
     * Sets container_node
     *
     * @param bool|null $container_node container_node
     *
     * @return self<TKey, TValue>
     */
    public function setContainerNode(?bool $container_node): JsonNode
    {
        $this->container['container_node'] = $container_node;

        return $this;
    }

    /**
     * Gets double
     *
     * @return bool|null
     */
    public function getDouble(): ?bool
    {
        return $this->container['double'];
    }

    /**
     * Sets double
     *
     * @param bool|null $double double
     *
     * @return self<TKey, TValue>
     */
    public function setDouble(?bool $double): JsonNode
    {
        $this->container['double'] = $double;

        return $this;
    }

    /**
     * Gets float
     *
     * @return bool|null
     */
    public function getFloat(): ?bool
    {
        return $this->container['float'];
    }

    /**
     * Sets float
     *
     * @param bool|null $float float
     *
     * @return self<TKey, TValue>
     */
    public function setFloat(?bool $float): JsonNode
    {
        $this->container['float'] = $float;

        return $this;
    }

    /**
     * Gets floating_point_number
     *
     * @return bool|null
     */
    public function getFloatingPointNumber(): ?bool
    {
        return $this->container['floating_point_number'];
    }

    /**
     * Sets floating_point_number
     *
     * @param bool|null $floating_point_number floating_point_number
     *
     * @return self<TKey, TValue>
     */
    public function setFloatingPointNumber(?bool $floating_point_number): JsonNode
    {
        $this->container['floating_point_number'] = $floating_point_number;

        return $this;
    }

    /**
     * Gets int
     *
     * @return bool|null
     */
    public function getInt(): ?bool
    {
        return $this->container['int'];
    }

    /**
     * Sets int
     *
     * @param bool|null $int int
     *
     * @return self<TKey, TValue>
     */
    public function setInt(?bool $int): JsonNode
    {
        $this->container['int'] = $int;

        return $this;
    }

    /**
     * Gets integral_number
     *
     * @return bool|null
     */
    public function getIntegralNumber(): ?bool
    {
        return $this->container['integral_number'];
    }

    /**
     * Sets integral_number
     *
     * @param bool|null $integral_number integral_number
     *
     * @return self<TKey, TValue>
     */
    public function setIntegralNumber(?bool $integral_number): JsonNode
    {
        $this->container['integral_number'] = $integral_number;

        return $this;
    }

    /**
     * Gets long
     *
     * @return bool|null
     */
    public function getLong(): ?bool
    {
        return $this->container['long'];
    }

    /**
     * Sets long
     *
     * @param bool|null $long long
     *
     * @return self<TKey, TValue>
     */
    public function setLong(?bool $long): JsonNode
    {
        $this->container['long'] = $long;

        return $this;
    }

    /**
     * Gets missing_node
     *
     * @return bool|null
     */
    public function getMissingNode(): ?bool
    {
        return $this->container['missing_node'];
    }

    /**
     * Sets missing_node
     *
     * @param bool|null $missing_node missing_node
     *
     * @return self<TKey, TValue>
     */
    public function setMissingNode(?bool $missing_node): JsonNode
    {
        $this->container['missing_node'] = $missing_node;

        return $this;
    }

    /**
     * Gets node_type
     *
     * @return string|null
     */
    public function getNodeType(): ?string
    {
        return $this->container['node_type'];
    }

    /**
     * Sets node_type
     *
     * @param string|null $node_type node_type
     *
     * @return self<TKey, TValue>
     */
    public function setNodeType(?string $node_type): JsonNode
    {
        $allowedValues = $this->getNodeTypeAllowableValues();
        if (!is_null($node_type) && !in_array($node_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'node_type', must be one of '%s'",
                    $node_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['node_type'] = $node_type;

        return $this;
    }

    /**
     * Gets null
     *
     * @return bool|null
     */
    public function getNull(): ?bool
    {
        return $this->container['null'];
    }

    /**
     * Sets null
     *
     * @param bool|null $null null
     *
     * @return self<TKey, TValue>
     */
    public function setNull(?bool $null): JsonNode
    {
        $this->container['null'] = $null;

        return $this;
    }

    /**
     * Gets number
     *
     * @return bool|null
     */
    public function getNumber(): ?bool
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param bool|null $number number
     *
     * @return self<TKey, TValue>
     */
    public function setNumber(?bool $number): JsonNode
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets object
     *
     * @return bool|null
     */
    public function getObject(): ?bool
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param bool|null $object object
     *
     * @return self<TKey, TValue>
     */
    public function setObject(?bool $object): JsonNode
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets pojo
     *
     * @return bool|null
     */
    public function getPojo(): ?bool
    {
        return $this->container['pojo'];
    }

    /**
     * Sets pojo
     *
     * @param bool|null $pojo pojo
     *
     * @return self<TKey, TValue>
     */
    public function setPojo(?bool $pojo): JsonNode
    {
        $this->container['pojo'] = $pojo;

        return $this;
    }

    /**
     * Gets short
     *
     * @return bool|null
     */
    public function getShort(): ?bool
    {
        return $this->container['short'];
    }

    /**
     * Sets short
     *
     * @param bool|null $short short
     *
     * @return self<TKey, TValue>
     */
    public function setShort(?bool $short): JsonNode
    {
        $this->container['short'] = $short;

        return $this;
    }

    /**
     * Gets textual
     *
     * @return bool|null
     */
    public function getTextual(): ?bool
    {
        return $this->container['textual'];
    }

    /**
     * Sets textual
     *
     * @param bool|null $textual textual
     *
     * @return self<TKey, TValue>
     */
    public function setTextual(?bool $textual): JsonNode
    {
        $this->container['textual'] = $textual;

        return $this;
    }

    /**
     * Gets value_node
     *
     * @return bool|null
     */
    public function getValueNode(): ?bool
    {
        return $this->container['value_node'];
    }

    /**
     * Sets value_node
     *
     * @param bool|null $value_node value_node
     *
     * @return self<TKey, TValue>
     */
    public function setValueNode(?bool $value_node): JsonNode
    {
        $this->container['value_node'] = $value_node;

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
