<?php
/**
 * CustomActivityTypeRequest
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
 * CustomActivityTypeRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomActivityTypeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomActivityTypeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_name' => 'string',
        'description' => 'string',
        'filter_name' => 'string',
        'name' => 'string',
        'primary_attribute' => '\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute',
        'trigger_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'api_name' => null,
        'description' => null,
        'filter_name' => null,
        'name' => null,
        'primary_attribute' => null,
        'trigger_name' => null
    ];

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
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
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
        'api_name' => 'apiName',
        'description' => 'description',
        'filter_name' => 'filterName',
        'name' => 'name',
        'primary_attribute' => 'primaryAttribute',
        'trigger_name' => 'triggerName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_name' => 'setApiName',
        'description' => 'setDescription',
        'filter_name' => 'setFilterName',
        'name' => 'setName',
        'primary_attribute' => 'setPrimaryAttribute',
        'trigger_name' => 'setTriggerName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_name' => 'getApiName',
        'description' => 'getDescription',
        'filter_name' => 'getFilterName',
        'name' => 'getName',
        'primary_attribute' => 'getPrimaryAttribute',
        'trigger_name' => 'getTriggerName'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
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
        return self::$swaggerModelName;
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
        $this->container['api_name'] = isset($data['api_name']) ? $data['api_name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['filter_name'] = isset($data['filter_name']) ? $data['filter_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['primary_attribute'] = isset($data['primary_attribute']) ? $data['primary_attribute'] : null;
        $this->container['trigger_name'] = isset($data['trigger_name']) ? $data['trigger_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['api_name'] === null) {
            $invalidProperties[] = "'api_name' can't be null";
        }
        if ($this->container['filter_name'] === null) {
            $invalidProperties[] = "'filter_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['primary_attribute'] === null) {
            $invalidProperties[] = "'primary_attribute' can't be null";
        }
        if ($this->container['trigger_name'] === null) {
            $invalidProperties[] = "'trigger_name' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets api_name
     *
     * @return string
     */
    public function getApiName()
    {
        return $this->container['api_name'];
    }

    /**
     * Sets api_name
     *
     * @param string $api_name api_name
     *
     * @return $this
     */
    public function setApiName($api_name)
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets filter_name
     *
     * @return string
     */
    public function getFilterName()
    {
        return $this->container['filter_name'];
    }

    /**
     * Sets filter_name
     *
     * @param string $filter_name Human-readable name of the associated filter
     *
     * @return $this
     */
    public function setFilterName($filter_name)
    {
        $this->container['filter_name'] = $filter_name;

        return $this;
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
     * @param string $name Human-readable display name of the activity type
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets primary_attribute
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute
     */
    public function getPrimaryAttribute()
    {
        return $this->container['primary_attribute'];
    }

    /**
     * Sets primary_attribute
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute $primary_attribute Primary attribute of the activity type
     *
     * @return $this
     */
    public function setPrimaryAttribute($primary_attribute)
    {
        $this->container['primary_attribute'] = $primary_attribute;

        return $this;
    }

    /**
     * Gets trigger_name
     *
     * @return string
     */
    public function getTriggerName()
    {
        return $this->container['trigger_name'];
    }

    /**
     * Sets trigger_name
     *
     * @param string $trigger_name Human-readable name of the associated trigger
     *
     * @return $this
     */
    public function setTriggerName($trigger_name)
    {
        $this->container['trigger_name'] = $trigger_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
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
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
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


