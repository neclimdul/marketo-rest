<?php
/**
 * ExportLeadFilter
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
 * ExportLeadFilter Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExportLeadFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExportLeadFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_at' => '\NecLimDul\MarketoRest\Lead\Model\DateRange',
        'smart_list_id' => 'int',
        'smart_list_name' => 'string',
        'static_list_id' => 'int',
        'static_list_name' => 'string',
        'updated_at' => '\NecLimDul\MarketoRest\Lead\Model\DateRange'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_at' => null,
        'smart_list_id' => 'int32',
        'smart_list_name' => null,
        'static_list_id' => 'int32',
        'static_list_name' => null,
        'updated_at' => null
    ];

    /**
      * Array of dynamic properties.
      *
      * @var mixed[]
      */
    protected $dynamicProperties = [];

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
        'created_at' => 'createdAt',
        'smart_list_id' => 'smartListId',
        'smart_list_name' => 'smartListName',
        'static_list_id' => 'staticListId',
        'static_list_name' => 'staticListName',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'smart_list_id' => 'setSmartListId',
        'smart_list_name' => 'setSmartListName',
        'static_list_id' => 'setStaticListId',
        'static_list_name' => 'setStaticListName',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'smart_list_id' => 'getSmartListId',
        'smart_list_name' => 'getSmartListName',
        'static_list_id' => 'getStaticListId',
        'static_list_name' => 'getStaticListName',
        'updated_at' => 'getUpdatedAt'
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['smart_list_id'] = isset($data['smart_list_id']) ? $data['smart_list_id'] : null;
        $this->container['smart_list_name'] = isset($data['smart_list_name']) ? $data['smart_list_name'] : null;
        $this->container['static_list_id'] = isset($data['static_list_id']) ? $data['static_list_id'] : null;
        $this->container['static_list_name'] = isset($data['static_list_name']) ? $data['static_list_name'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
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
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
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
     * @param \NecLimDul\MarketoRest\Lead\Model\DateRange $created_at Date range to filter new leads on
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
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
     * @return $this
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
     * @return $this
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
     * @return $this
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
     * @return $this
     */
    public function setStaticListName($static_list_name)
    {
        $this->container['static_list_name'] = $static_list_name;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\DateRange
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\DateRange $updated_at Date range to filter updated leads on
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Set list of dynamic properties for the model.
     *
     * @param mixed[] $fields
     *   List of dynamic properties
     */
    public function setDynamicProperties(array $fields)
    {
        $this->dynamicProperties = $fields;
    }

    /**
     * Set a dynamic property for the model.
     *
     * @param string $property
     *   Property name.
     * @param mixed $value
     *   Value of the property.
     */
    public function setDynamicProperty($property, $value)
    {
        $this->dynamicProperties[$property] = $value;
    }

    /**
     * Get list of dynamic properties for the model.
     *
     * @return mixed[]
     *   List of dynamic properties
     */
    public function getDynamicProperties()
    {
        return $this->dynamicProperties;
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


