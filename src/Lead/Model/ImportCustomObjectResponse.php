<?php
/**
 * ImportCustomObjectResponse
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
 * Swagger Codegen version: 2.4.28
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
 * ImportCustomObjectResponse Class Doc Comment
 *
 * @category Class
 * @description Response containing import status information
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<string,?mixed>
 */
class ImportCustomObjectResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportCustomObjectResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batch_id' => 'int',
        'import_time' => 'string',
        'message' => 'string',
        'num_of_objects_processed' => 'int',
        'num_of_rows_failed' => 'int',
        'num_of_rows_with_warning' => 'int',
        'object_api_name' => 'string',
        'operation' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'batch_id' => 'int32',
        'import_time' => null,
        'message' => null,
        'num_of_objects_processed' => 'int32',
        'num_of_rows_failed' => 'int32',
        'num_of_rows_with_warning' => 'int32',
        'object_api_name' => null,
        'operation' => null,
        'status' => null
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
        'batch_id' => 'batchId',
        'import_time' => 'importTime',
        'message' => 'message',
        'num_of_objects_processed' => 'numOfObjectsProcessed',
        'num_of_rows_failed' => 'numOfRowsFailed',
        'num_of_rows_with_warning' => 'numOfRowsWithWarning',
        'object_api_name' => 'objectApiName',
        'operation' => 'operation',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batch_id' => 'setBatchId',
        'import_time' => 'setImportTime',
        'message' => 'setMessage',
        'num_of_objects_processed' => 'setNumOfObjectsProcessed',
        'num_of_rows_failed' => 'setNumOfRowsFailed',
        'num_of_rows_with_warning' => 'setNumOfRowsWithWarning',
        'object_api_name' => 'setObjectApiName',
        'operation' => 'setOperation',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batch_id' => 'getBatchId',
        'import_time' => 'getImportTime',
        'message' => 'getMessage',
        'num_of_objects_processed' => 'getNumOfObjectsProcessed',
        'num_of_rows_failed' => 'getNumOfRowsFailed',
        'num_of_rows_with_warning' => 'getNumOfRowsWithWarning',
        'object_api_name' => 'getObjectApiName',
        'operation' => 'getOperation',
        'status' => 'getStatus'
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
        $this->container['batch_id'] = $data['batch_id'] ?? null;
        $this->container['import_time'] = $data['import_time'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['num_of_objects_processed'] = $data['num_of_objects_processed'] ?? null;
        $this->container['num_of_rows_failed'] = $data['num_of_rows_failed'] ?? null;
        $this->container['num_of_rows_with_warning'] = $data['num_of_rows_with_warning'] ?? null;
        $this->container['object_api_name'] = $data['object_api_name'] ?? null;
        $this->container['operation'] = $data['operation'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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

        if ($this->container['batch_id'] === null) {
            $invalidProperties[] = "'batch_id' can't be null";
        }
        if ($this->container['object_api_name'] === null) {
            $invalidProperties[] = "'object_api_name' can't be null";
        }
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets batch_id
     *
     * @return int
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param int $batch_id Unique integer id of the import batch
     *
     * @return self
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

        return $this;
    }

    /**
     * Gets import_time
     *
     * @return string|null
     */
    public function getImportTime()
    {
        return $this->container['import_time'];
    }

    /**
     * Sets import_time
     *
     * @param string $import_time Time spent on the batch
     *
     * @return self
     */
    public function setImportTime($import_time)
    {
        $this->container['import_time'] = $import_time;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message Status message of the batch
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets num_of_objects_processed
     *
     * @return int|null
     */
    public function getNumOfObjectsProcessed()
    {
        return $this->container['num_of_objects_processed'];
    }

    /**
     * Sets num_of_objects_processed
     *
     * @param int $num_of_objects_processed Number of rows processed so far
     *
     * @return self
     */
    public function setNumOfObjectsProcessed($num_of_objects_processed)
    {
        $this->container['num_of_objects_processed'] = $num_of_objects_processed;

        return $this;
    }

    /**
     * Gets num_of_rows_failed
     *
     * @return int|null
     */
    public function getNumOfRowsFailed()
    {
        return $this->container['num_of_rows_failed'];
    }

    /**
     * Sets num_of_rows_failed
     *
     * @param int $num_of_rows_failed Number of rows failed so far
     *
     * @return self
     */
    public function setNumOfRowsFailed($num_of_rows_failed)
    {
        $this->container['num_of_rows_failed'] = $num_of_rows_failed;

        return $this;
    }

    /**
     * Gets num_of_rows_with_warning
     *
     * @return int|null
     */
    public function getNumOfRowsWithWarning()
    {
        return $this->container['num_of_rows_with_warning'];
    }

    /**
     * Sets num_of_rows_with_warning
     *
     * @param int $num_of_rows_with_warning Number of rows with a warning so far
     *
     * @return self
     */
    public function setNumOfRowsWithWarning($num_of_rows_with_warning)
    {
        $this->container['num_of_rows_with_warning'] = $num_of_rows_with_warning;

        return $this;
    }

    /**
     * Gets object_api_name
     *
     * @return string
     */
    public function getObjectApiName()
    {
        return $this->container['object_api_name'];
    }

    /**
     * Sets object_api_name
     *
     * @param string $object_api_name Object API Name
     *
     * @return self
     */
    public function setObjectApiName($object_api_name)
    {
        $this->container['object_api_name'] = $object_api_name;

        return $this;
    }

    /**
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation Bulk operation type. Can be import or export
     *
     * @return self
     */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;

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
     * @param string $status Status of the batch
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


