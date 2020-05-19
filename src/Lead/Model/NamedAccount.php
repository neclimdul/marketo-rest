<?php
/**
 * NamedAccount
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
 * NamedAccount Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NamedAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NamedAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'marketo_guid' => 'string',
        'reasons' => '\NecLimDul\MarketoRest\Lead\Model\Reason[]',
        'seq' => 'int',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'marketo_guid' => null,
        'reasons' => null,
        'seq' => 'int32',
        'status' => null
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
        'marketo_guid' => 'marketoGUID',
        'reasons' => 'reasons',
        'seq' => 'seq',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'marketo_guid' => 'setMarketoGuid',
        'reasons' => 'setReasons',
        'seq' => 'setSeq',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'marketo_guid' => 'getMarketoGuid',
        'reasons' => 'getReasons',
        'seq' => 'getSeq',
        'status' => 'getStatus'
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

    const STATUS_CREATED = 'created';
    const STATUS_UPDATED = 'updated';
    const STATUS_DELETED = 'deleted';
    const STATUS_SKIPPED = 'skipped';
    const STATUS_ADDED = 'added';
    const STATUS_REMOVED = 'removed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_UPDATED,
            self::STATUS_DELETED,
            self::STATUS_SKIPPED,
            self::STATUS_ADDED,
            self::STATUS_REMOVED,
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
        $this->container['marketo_guid'] = isset($data['marketo_guid']) ? $data['marketo_guid'] : null;
        $this->container['reasons'] = isset($data['reasons']) ? $data['reasons'] : null;
        $this->container['seq'] = isset($data['seq']) ? $data['seq'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['marketo_guid'] === null) {
            $invalidProperties[] = "'marketo_guid' can't be null";
        }
        if ($this->container['seq'] === null) {
            $invalidProperties[] = "'seq' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets marketo_guid
     *
     * @return string
     */
    public function getMarketoGuid()
    {
        return $this->container['marketo_guid'];
    }

    /**
     * Sets marketo_guid
     *
     * @param string $marketo_guid Unique GUID of the custom object records
     *
     * @return $this
     */
    public function setMarketoGuid($marketo_guid)
    {
        $this->container['marketo_guid'] = $marketo_guid;

        return $this;
    }

    /**
     * Gets reasons
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Reason[]
     */
    public function getReasons()
    {
        return $this->container['reasons'];
    }

    /**
     * Sets reasons
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Reason[] $reasons List of reasons why an operation did not succeed.  Reasons are only present in API responses and should not be submitted
     *
     * @return $this
     */
    public function setReasons($reasons)
    {
        $this->container['reasons'] = $reasons;

        return $this;
    }

    /**
     * Gets seq
     *
     * @return int
     */
    public function getSeq()
    {
        return $this->container['seq'];
    }

    /**
     * Sets seq
     *
     * @param int $seq Integer indicating the sequence of the record in response.  This value is correlated to the order of the records included in the request input.  Seq should only be part of responses and should not be submitted.
     *
     * @return $this
     */
    public function setSeq($seq)
    {
        $this->container['seq'] = $seq;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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

