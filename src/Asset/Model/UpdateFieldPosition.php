<?php
/**
 * UpdateFieldPosition
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
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

namespace NecLimDul\MarketoRest\Asset\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * UpdateFieldPosition Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateFieldPosition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateFieldPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'column_number' => 'int',
        'field_list' => '\NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition[]',
        'field_name' => 'string',
        'row_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'column_number' => 'int32',
        'field_list' => null,
        'field_name' => null,
        'row_number' => 'int32'
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
        'column_number' => 'columnNumber',
        'field_list' => 'fieldList',
        'field_name' => 'fieldName',
        'row_number' => 'rowNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'column_number' => 'setColumnNumber',
        'field_list' => 'setFieldList',
        'field_name' => 'setFieldName',
        'row_number' => 'setRowNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'column_number' => 'getColumnNumber',
        'field_list' => 'getFieldList',
        'field_name' => 'getFieldName',
        'row_number' => 'getRowNumber'
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
        $this->container['column_number'] = $data['column_number'] ?? null;
        $this->container['field_list'] = $data['field_list'] ?? null;
        $this->container['field_name'] = $data['field_name'] ?? null;
        $this->container['row_number'] = $data['row_number'] ?? null;
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

        if ($this->container['column_number'] === null) {
            $invalidProperties[] = "'column_number' can't be null";
        }
        if ($this->container['field_name'] === null) {
            $invalidProperties[] = "'field_name' can't be null";
        }
        if ($this->container['row_number'] === null) {
            $invalidProperties[] = "'row_number' can't be null";
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
     * Gets column_number
     *
     * @return int
     */
    public function getColumnNumber(): int
    {
        return $this->container['column_number'];
    }

    /**
     * Sets column_number
     *
     * @param int $column_number Column number of the field
     *
     * @return self<TKey, TValue>
     */
    public function setColumnNumber(int $column_number): UpdateFieldPosition
    {
        $this->container['column_number'] = $column_number;

        return $this;
    }

    /**
     * Gets field_list
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition[]
     */
    public function getFieldList(): array
    {
        return $this->container['field_list'];
    }

    /**
     * Sets field_list
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition[]|null $field_list List of positions inside the fields.  Only valid if the target is a fieldset
     *
     * @return self<TKey, TValue>
     */
    public function setFieldList(?array $field_list): UpdateFieldPosition
    {
        $this->container['field_list'] = $field_list;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name Id of the field
     *
     * @return self<TKey, TValue>
     */
    public function setFieldName(string $field_name): UpdateFieldPosition
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets row_number
     *
     * @return int
     */
    public function getRowNumber(): int
    {
        return $this->container['row_number'];
    }

    /**
     * Sets row_number
     *
     * @param int $row_number Row number of the field
     *
     * @return self<TKey, TValue>
     */
    public function setRowNumber(int $row_number): UpdateFieldPosition
    {
        $this->container['row_number'] = $row_number;

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
            function($key) use ($container) {
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
