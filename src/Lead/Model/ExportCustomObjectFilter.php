<?php
/**
 * ExportCustomObjectFilter
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * The version of the OpenAPI document: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Lead\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * ExportCustomObjectFilter Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExportCustomObjectFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExportCustomObjectFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'smart_list_id' => 'int',
        'smart_list_name' => 'string',
        'static_list_id' => 'int',
        'static_list_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'smart_list_id' => 'int32',
        'smart_list_name' => null,
        'static_list_id' => 'int32',
        'static_list_name' => null
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
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'smart_list_id' => 'smartListId',
        'smart_list_name' => 'smartListName',
        'static_list_id' => 'staticListId',
        'static_list_name' => 'staticListName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'smart_list_id' => 'setSmartListId',
        'smart_list_name' => 'setSmartListName',
        'static_list_id' => 'setStaticListId',
        'static_list_name' => 'setStaticListName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'smart_list_id' => 'getSmartListId',
        'smart_list_name' => 'getSmartListName',
        'static_list_id' => 'getStaticListId',
        'static_list_name' => 'getStaticListName'
    ];

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
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

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
        $this->container['smart_list_id'] = $data['smart_list_id'] ?? null;
        $this->container['smart_list_name'] = $data['smart_list_name'] ?? null;
        $this->container['static_list_id'] = $data['static_list_id'] ?? null;
        $this->container['static_list_name'] = $data['static_list_name'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['smart_list_id'] === null) {
            $invalidProperties[] = "'smart_list_id' can't be null";
        }
        if ($this->container['smart_list_name'] === null) {
            $invalidProperties[] = "'smart_list_name' can't be null";
        }
        if ($this->container['static_list_id'] === null) {
            $invalidProperties[] = "'static_list_id' can't be null";
        }
        if ($this->container['static_list_name'] === null) {
            $invalidProperties[] = "'static_list_name' can't be null";
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
     * Gets smart_list_id
     *
     * @return int
     */
    public function getSmartListId()
    {
        return $this->container['smart_list_id'];
    }

    /**
     * Sets smart_list_id
     *
     * @param int $smart_list_id Id of smart list to retrieve leads from
     *
     * @return self
     */
    public function setSmartListId($smart_list_id)
    {
        $this->container['smart_list_id'] = $smart_list_id;

        return $this;
    }

    /**
     * Gets smart_list_name
     *
     * @return string
     */
    public function getSmartListName()
    {
        return $this->container['smart_list_name'];
    }

    /**
     * Sets smart_list_name
     *
     * @param string $smart_list_name Name of smart list to retrieve leads from
     *
     * @return self
     */
    public function setSmartListName($smart_list_name)
    {
        $this->container['smart_list_name'] = $smart_list_name;

        return $this;
    }

    /**
     * Gets static_list_id
     *
     * @return int
     */
    public function getStaticListId()
    {
        return $this->container['static_list_id'];
    }

    /**
     * Sets static_list_id
     *
     * @param int $static_list_id Id of static list to retrieve leads from
     *
     * @return self
     */
    public function setStaticListId($static_list_id)
    {
        $this->container['static_list_id'] = $static_list_id;

        return $this;
    }

    /**
     * Gets static_list_name
     *
     * @return string
     */
    public function getStaticListName()
    {
        return $this->container['static_list_name'];
    }

    /**
     * Sets static_list_name
     *
     * @param string $static_list_name Name of static list to retrieve leads from
     *
     * @return self
     */
    public function setStaticListName($static_list_name)
    {
        $this->container['static_list_name'] = $static_list_name;

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
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * {@inheritdoc}
     */
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


