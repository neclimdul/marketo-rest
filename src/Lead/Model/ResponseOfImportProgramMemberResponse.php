<?php
/**
 * ResponseOfImportProgramMemberResponse
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
 * ResponseOfImportProgramMemberResponse Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResponseOfImportProgramMemberResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResponseOfImportProgramMemberResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'errors' => '\NecLimDul\MarketoRest\Lead\Model\Error[]',
        'request_id' => 'string',
        'result' => '\NecLimDul\MarketoRest\Lead\Model\ImportProgramMemberResponse[]',
        'success' => 'bool',
        'warnings' => '\NecLimDul\MarketoRest\Lead\Model\Warning[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'errors' => null,
        'request_id' => null,
        'result' => null,
        'success' => null,
        'warnings' => null
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
        'errors' => 'errors',
        'request_id' => 'requestId',
        'result' => 'result',
        'success' => 'success',
        'warnings' => 'warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'errors' => 'setErrors',
        'request_id' => 'setRequestId',
        'result' => 'setResult',
        'success' => 'setSuccess',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'errors' => 'getErrors',
        'request_id' => 'getRequestId',
        'result' => 'getResult',
        'success' => 'getSuccess',
        'warnings' => 'getWarnings'
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
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['request_id'] = isset($data['request_id']) ? $data['request_id'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['errors'] === null) {
            $invalidProperties[] = "'errors' can't be null";
        }
        if ($this->container['request_id'] === null) {
            $invalidProperties[] = "'request_id' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ($this->container['success'] === null) {
            $invalidProperties[] = "'success' can't be null";
        }
        if ($this->container['warnings'] === null) {
            $invalidProperties[] = "'warnings' can't be null";
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
     * Gets errors
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Error[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Error[] $errors Array of errors that occurred if the request was unsuccessful
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets request_id
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['request_id'];
    }

    /**
     * Sets request_id
     *
     * @param string $request_id Id of the request made
     *
     * @return $this
     */
    public function setRequestId($request_id)
    {
        $this->container['request_id'] = $request_id;

        return $this;
    }

    /**
     * Gets result
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\ImportProgramMemberResponse[]
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\ImportProgramMemberResponse[] $result Array of results for individual records in the operation, may be empty
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets success
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     *
     * @param bool $success Whether the request succeeded
     *
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets warnings
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Warning[]
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Warning[] $warnings Array of warnings given for the operation
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {
        $this->container['warnings'] = $warnings;

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


