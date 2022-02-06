<?php
/**
 * SmartListRules
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
 * Swagger Codegen version: 2.4.24
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Asset\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * SmartListRules Class Doc Comment
 *
 * @category Class
 * @description JSON representation of smart list rules
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SmartListRules implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmartListRules';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'filter_match_type' => 'string',
        'triggers' => 'string[]',
        'filters' => '\NecLimDul\MarketoRest\Asset\Model\SmartListFilters[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'filter_match_type' => null,
        'triggers' => null,
        'filters' => null
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
        'filter_match_type' => 'filterMatchType',
        'triggers' => 'triggers',
        'filters' => 'filters'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filter_match_type' => 'setFilterMatchType',
        'triggers' => 'setTriggers',
        'filters' => 'setFilters'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filter_match_type' => 'getFilterMatchType',
        'triggers' => 'getTriggers',
        'filters' => 'getFilters'
    ];

    const FILTER_MATCH_TYPE_ALL = 'All';
    const FILTER_MATCH_TYPE_ANY = 'Any';
    const FILTER_MATCH_TYPE_ADVANCED = 'Advanced';
    

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
        $this->container['filter_match_type'] = $data['filter_match_type'] ?? null;
        $this->container['triggers'] = $data['triggers'] ?? null;
        $this->container['filters'] = $data['filters'] ?? null;
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

        if ($this->container['filter_match_type'] === null) {
            $invalidProperties[] = "'filter_match_type' can't be null";
        }
        $allowedValues = $this->getFilterMatchTypeAllowableValues();
        if (!is_null($this->container['filter_match_type']) && !in_array($this->container['filter_match_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'filter_match_type', must be one of '%s'",
                $this->container['filter_match_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['triggers'] === null) {
            $invalidProperties[] = "'triggers' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFilterMatchTypeAllowableValues()
    {
        return [
            self::FILTER_MATCH_TYPE_ALL,
            self::FILTER_MATCH_TYPE_ANY,
            self::FILTER_MATCH_TYPE_ADVANCED,
        ];
    }
    

    /**
     * Gets filter_match_type
     *
     * @return string
     */
    public function getFilterMatchType()
    {
        return $this->container['filter_match_type'];
    }

    /**
     * Sets filter_match_type
     *
     * @param string $filter_match_type Smart list filter match type (rule logic)
     *
     * @return self
     */
    public function setFilterMatchType($filter_match_type)
    {
        $allowedValues = $this->getFilterMatchTypeAllowableValues();
        if (!in_array($filter_match_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'filter_match_type', must be one of '%s'",
                    $filter_match_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['filter_match_type'] = $filter_match_type;

        return $this;
    }

    /**
     * Gets triggers
     *
     * @return string[]
     */
    public function getTriggers()
    {
        return $this->container['triggers'];
    }

    /**
     * Sets triggers
     *
     * @param string[] $triggers List of smart list triggers
     *
     * @return self
     */
    public function setTriggers($triggers)
    {
        $this->container['triggers'] = $triggers;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\SmartListFilters[]
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\SmartListFilters[] $filters List of smart list filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

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


