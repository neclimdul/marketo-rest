<?php
/**
 * ExportActivityFilter
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

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Lead\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * ExportActivityFilter Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExportActivityFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExportActivityFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activity_type_ids' => 'int[]',
        'primary_attribute_value_ids' => 'int[]',
        'primary_attribute_values' => 'string[]',
        'created_at' => '\NecLimDul\MarketoRest\Lead\Model\DateRange'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'activity_type_ids' => 'int32',
        'primary_attribute_value_ids' => 'int32',
        'primary_attribute_values' => null,
        'created_at' => null
    ];

    /**
      * Array of additional properties.
      *
      * @var mixed[]
      */
    protected $additionalProperties = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * {@inheritdoc}
     */
    public static function swaggerFormats()
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
        'activity_type_ids' => 'activityTypeIds',
        'primary_attribute_value_ids' => 'primaryAttributeValueIds',
        'primary_attribute_values' => 'primaryAttributeValues',
        'created_at' => 'createdAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_type_ids' => 'setActivityTypeIds',
        'primary_attribute_value_ids' => 'setPrimaryAttributeValueIds',
        'primary_attribute_values' => 'setPrimaryAttributeValues',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_type_ids' => 'getActivityTypeIds',
        'primary_attribute_value_ids' => 'getPrimaryAttributeValueIds',
        'primary_attribute_values' => 'getPrimaryAttributeValues',
        'created_at' => 'getCreatedAt'
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
        $this->container['activity_type_ids'] = $data['activity_type_ids'] ?? null;
        $this->container['primary_attribute_value_ids'] = $data['primary_attribute_value_ids'] ?? null;
        $this->container['primary_attribute_values'] = $data['primary_attribute_values'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * {@inheritdoc}
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * {@inheritdoc}
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * {@inheritdoc}
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * {@inheritdoc}
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    

    /**
     * Gets activity_type_ids
     *
     * @return int[]
     */
    public function getActivityTypeIds()
    {
        return $this->container['activity_type_ids'];
    }

    /**
     * Sets activity_type_ids
     *
     * @param int[] $activity_type_ids List of activity type ids to filter on
     *
     * @return self
     */
    public function setActivityTypeIds($activity_type_ids)
    {
        $this->container['activity_type_ids'] = $activity_type_ids;

        return $this;
    }

    /**
     * Gets primary_attribute_value_ids
     *
     * @return int[]
     */
    public function getPrimaryAttributeValueIds()
    {
        return $this->container['primary_attribute_value_ids'];
    }

    /**
     * Sets primary_attribute_value_ids
     *
     * @param int[] $primary_attribute_value_ids List of primary attribute ids to filter on
     *
     * @return self
     */
    public function setPrimaryAttributeValueIds($primary_attribute_value_ids)
    {
        $this->container['primary_attribute_value_ids'] = $primary_attribute_value_ids;

        return $this;
    }

    /**
     * Gets primary_attribute_values
     *
     * @return string[]
     */
    public function getPrimaryAttributeValues()
    {
        return $this->container['primary_attribute_values'];
    }

    /**
     * Sets primary_attribute_values
     *
     * @param string[] $primary_attribute_values List of primary attribute values to filter on
     *
     * @return self
     */
    public function setPrimaryAttributeValues($primary_attribute_values)
    {
        $this->container['primary_attribute_values'] = $primary_attribute_values;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\DateRange
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\DateRange $created_at Date range to filter new activities on
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalProperties(array $fields)
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
    public function setAdditionalProperty($property, $value)
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
        return array_map(function($key) use ($container) {
            return $container[$key];
        }, $this->additionalProperties);
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
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


