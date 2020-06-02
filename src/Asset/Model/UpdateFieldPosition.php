<?php
/**
 * UpdateFieldPosition
 *
 * PHP version 5
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
 * Swagger Codegen version: 2.4.14
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
 * UpdateFieldPosition Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateFieldPosition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateFieldPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
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
      * @var string[]
      */
    protected static $swaggerFormats = [
        'column_number' => 'int32',
        'field_list' => null,
        'field_name' => null,
        'row_number' => 'int32'
    ];

    /**
      * Array of dynamic properties.
      *
      * @var mixed[]
      */
    protected $dynamicProperties = [];

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
        $this->container['column_number'] = isset($data['column_number']) ? $data['column_number'] : null;
        $this->container['field_list'] = isset($data['field_list']) ? $data['field_list'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['row_number'] = isset($data['row_number']) ? $data['row_number'] : null;
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
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    

    /**
     * Gets column_number
     *
     * @return int
     */
    public function getColumnNumber()
    {
        return $this->container['column_number'];
    }

    /**
     * Sets column_number
     *
     * @param int $column_number Column number of the field
     *
     * @return $this
     */
    public function setColumnNumber($column_number)
    {
        $this->container['column_number'] = $column_number;

        return $this;
    }

    /**
     * Gets field_list
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition[]
     */
    public function getFieldList()
    {
        return $this->container['field_list'];
    }

    /**
     * Sets field_list
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition[] $field_list List of positions inside the fields.  Only valid if the target is a fieldset
     *
     * @return $this
     */
    public function setFieldList($field_list)
    {
        $this->container['field_list'] = $field_list;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name Id of the field
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets row_number
     *
     * @return int
     */
    public function getRowNumber()
    {
        return $this->container['row_number'];
    }

    /**
     * Sets row_number
     *
     * @param int $row_number Row number of the field
     *
     * @return $this
     */
    public function setRowNumber($row_number)
    {
        $this->container['row_number'] = $row_number;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDynamicProperties(array $fields)
    {
        $this->dynamicProperties = $fields;
    }

    /**
     * {@inheritdoc}
     */
    public function setDynamicProperty($property, $value)
    {
        $this->dynamicProperties[$property] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function getDynamicProperties()
    {
        return $this->dynamicProperties;
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
     * {@inheritdoc}
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


