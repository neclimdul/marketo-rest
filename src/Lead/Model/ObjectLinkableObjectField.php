<?php
/**
 * ObjectLinkableObjectField
 *
 * PHP version 5
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
 * Swagger Codegen version: 2.4.14
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
 * ObjectLinkableObjectField Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ObjectLinkableObjectField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ObjectLinkableObjectField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'display_name' => 'string',
        'data_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'display_name' => null,
        'data_type' => null
    ];

    /**
      * Array of dynamic properties.
      *
      * @var mixed[]
      */
    protected $additionalProperties = [];

    /**
     * {@inheritdoc}
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
        'name' => 'name',
        'display_name' => 'displayName',
        'data_type' => 'dataType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'display_name' => 'setDisplayName',
        'data_type' => 'setDataType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'display_name' => 'getDisplayName',
        'data_type' => 'getDataType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['data_type'] = isset($data['data_type']) ? $data['data_type'] : null;
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['data_type'] === null) {
            $invalidProperties[] = "'data_type' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Link field API name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name Link field name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type Link field data type
     *
     * @return $this
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

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
        $this->additionalProperties = array_keys($fields);
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
    public function getAdditionalPropertiess()
    {
        // TODO Get values.
        return $this->additionalProperties;
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
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


