<?php
/**
 * JsonNode
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
 * JsonNode Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JsonNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JsonNode';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
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
      * @var string[]
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

    const NODE_TYPE__ARRAY = 'ARRAY';
    const NODE_TYPE_BINARY = 'BINARY';
    const NODE_TYPE_BOOLEAN = 'BOOLEAN';
    const NODE_TYPE_MISSING = 'MISSING';
    const NODE_TYPE_NULL = 'NULL';
    const NODE_TYPE_NUMBER = 'NUMBER';
    const NODE_TYPE_OBJECT = 'OBJECT';
    const NODE_TYPE_POJO = 'POJO';
    const NODE_TYPE_STRING = 'STRING';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNodeTypeAllowableValues()
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
        $this->container['array'] = isset($data['array']) ? $data['array'] : null;
        $this->container['big_decimal'] = isset($data['big_decimal']) ? $data['big_decimal'] : null;
        $this->container['big_integer'] = isset($data['big_integer']) ? $data['big_integer'] : null;
        $this->container['binary'] = isset($data['binary']) ? $data['binary'] : null;
        $this->container['boolean'] = isset($data['boolean']) ? $data['boolean'] : null;
        $this->container['container_node'] = isset($data['container_node']) ? $data['container_node'] : null;
        $this->container['double'] = isset($data['double']) ? $data['double'] : null;
        $this->container['float'] = isset($data['float']) ? $data['float'] : null;
        $this->container['floating_point_number'] = isset($data['floating_point_number']) ? $data['floating_point_number'] : null;
        $this->container['int'] = isset($data['int']) ? $data['int'] : null;
        $this->container['integral_number'] = isset($data['integral_number']) ? $data['integral_number'] : null;
        $this->container['long'] = isset($data['long']) ? $data['long'] : null;
        $this->container['missing_node'] = isset($data['missing_node']) ? $data['missing_node'] : null;
        $this->container['node_type'] = isset($data['node_type']) ? $data['node_type'] : null;
        $this->container['null'] = isset($data['null']) ? $data['null'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['pojo'] = isset($data['pojo']) ? $data['pojo'] : null;
        $this->container['short'] = isset($data['short']) ? $data['short'] : null;
        $this->container['textual'] = isset($data['textual']) ? $data['textual'] : null;
        $this->container['value_node'] = isset($data['value_node']) ? $data['value_node'] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getNodeTypeAllowableValues();
        if (!is_null($this->container['node_type']) && !in_array($this->container['node_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'node_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets array
     *
     * @return bool
     */
    public function getArray()
    {
        return $this->container['array'];
    }

    /**
     * Sets array
     *
     * @param bool $array array
     *
     * @return $this
     */
    public function setArray($array)
    {
        $this->container['array'] = $array;

        return $this;
    }

    /**
     * Gets big_decimal
     *
     * @return bool
     */
    public function getBigDecimal()
    {
        return $this->container['big_decimal'];
    }

    /**
     * Sets big_decimal
     *
     * @param bool $big_decimal big_decimal
     *
     * @return $this
     */
    public function setBigDecimal($big_decimal)
    {
        $this->container['big_decimal'] = $big_decimal;

        return $this;
    }

    /**
     * Gets big_integer
     *
     * @return bool
     */
    public function getBigInteger()
    {
        return $this->container['big_integer'];
    }

    /**
     * Sets big_integer
     *
     * @param bool $big_integer big_integer
     *
     * @return $this
     */
    public function setBigInteger($big_integer)
    {
        $this->container['big_integer'] = $big_integer;

        return $this;
    }

    /**
     * Gets binary
     *
     * @return bool
     */
    public function getBinary()
    {
        return $this->container['binary'];
    }

    /**
     * Sets binary
     *
     * @param bool $binary binary
     *
     * @return $this
     */
    public function setBinary($binary)
    {
        $this->container['binary'] = $binary;

        return $this;
    }

    /**
     * Gets boolean
     *
     * @return bool
     */
    public function getBoolean()
    {
        return $this->container['boolean'];
    }

    /**
     * Sets boolean
     *
     * @param bool $boolean boolean
     *
     * @return $this
     */
    public function setBoolean($boolean)
    {
        $this->container['boolean'] = $boolean;

        return $this;
    }

    /**
     * Gets container_node
     *
     * @return bool
     */
    public function getContainerNode()
    {
        return $this->container['container_node'];
    }

    /**
     * Sets container_node
     *
     * @param bool $container_node container_node
     *
     * @return $this
     */
    public function setContainerNode($container_node)
    {
        $this->container['container_node'] = $container_node;

        return $this;
    }

    /**
     * Gets double
     *
     * @return bool
     */
    public function getDouble()
    {
        return $this->container['double'];
    }

    /**
     * Sets double
     *
     * @param bool $double double
     *
     * @return $this
     */
    public function setDouble($double)
    {
        $this->container['double'] = $double;

        return $this;
    }

    /**
     * Gets float
     *
     * @return bool
     */
    public function getFloat()
    {
        return $this->container['float'];
    }

    /**
     * Sets float
     *
     * @param bool $float float
     *
     * @return $this
     */
    public function setFloat($float)
    {
        $this->container['float'] = $float;

        return $this;
    }

    /**
     * Gets floating_point_number
     *
     * @return bool
     */
    public function getFloatingPointNumber()
    {
        return $this->container['floating_point_number'];
    }

    /**
     * Sets floating_point_number
     *
     * @param bool $floating_point_number floating_point_number
     *
     * @return $this
     */
    public function setFloatingPointNumber($floating_point_number)
    {
        $this->container['floating_point_number'] = $floating_point_number;

        return $this;
    }

    /**
     * Gets int
     *
     * @return bool
     */
    public function getInt()
    {
        return $this->container['int'];
    }

    /**
     * Sets int
     *
     * @param bool $int int
     *
     * @return $this
     */
    public function setInt($int)
    {
        $this->container['int'] = $int;

        return $this;
    }

    /**
     * Gets integral_number
     *
     * @return bool
     */
    public function getIntegralNumber()
    {
        return $this->container['integral_number'];
    }

    /**
     * Sets integral_number
     *
     * @param bool $integral_number integral_number
     *
     * @return $this
     */
    public function setIntegralNumber($integral_number)
    {
        $this->container['integral_number'] = $integral_number;

        return $this;
    }

    /**
     * Gets long
     *
     * @return bool
     */
    public function getLong()
    {
        return $this->container['long'];
    }

    /**
     * Sets long
     *
     * @param bool $long long
     *
     * @return $this
     */
    public function setLong($long)
    {
        $this->container['long'] = $long;

        return $this;
    }

    /**
     * Gets missing_node
     *
     * @return bool
     */
    public function getMissingNode()
    {
        return $this->container['missing_node'];
    }

    /**
     * Sets missing_node
     *
     * @param bool $missing_node missing_node
     *
     * @return $this
     */
    public function setMissingNode($missing_node)
    {
        $this->container['missing_node'] = $missing_node;

        return $this;
    }

    /**
     * Gets node_type
     *
     * @return string
     */
    public function getNodeType()
    {
        return $this->container['node_type'];
    }

    /**
     * Sets node_type
     *
     * @param string $node_type node_type
     *
     * @return $this
     */
    public function setNodeType($node_type)
    {
        $allowedValues = $this->getNodeTypeAllowableValues();
        if (!is_null($node_type) && !in_array($node_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'node_type', must be one of '%s'",
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
     * @return bool
     */
    public function getNull()
    {
        return $this->container['null'];
    }

    /**
     * Sets null
     *
     * @param bool $null null
     *
     * @return $this
     */
    public function setNull($null)
    {
        $this->container['null'] = $null;

        return $this;
    }

    /**
     * Gets number
     *
     * @return bool
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param bool $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets object
     *
     * @return bool
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param bool $object object
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets pojo
     *
     * @return bool
     */
    public function getPojo()
    {
        return $this->container['pojo'];
    }

    /**
     * Sets pojo
     *
     * @param bool $pojo pojo
     *
     * @return $this
     */
    public function setPojo($pojo)
    {
        $this->container['pojo'] = $pojo;

        return $this;
    }

    /**
     * Gets short
     *
     * @return bool
     */
    public function getShort()
    {
        return $this->container['short'];
    }

    /**
     * Sets short
     *
     * @param bool $short short
     *
     * @return $this
     */
    public function setShort($short)
    {
        $this->container['short'] = $short;

        return $this;
    }

    /**
     * Gets textual
     *
     * @return bool
     */
    public function getTextual()
    {
        return $this->container['textual'];
    }

    /**
     * Sets textual
     *
     * @param bool $textual textual
     *
     * @return $this
     */
    public function setTextual($textual)
    {
        $this->container['textual'] = $textual;

        return $this;
    }

    /**
     * Gets value_node
     *
     * @return bool
     */
    public function getValueNode()
    {
        return $this->container['value_node'];
    }

    /**
     * Sets value_node
     *
     * @param bool $value_node value_node
     *
     * @return $this
     */
    public function setValueNode($value_node)
    {
        $this->container['value_node'] = $value_node;

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


