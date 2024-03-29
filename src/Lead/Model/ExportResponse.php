<?php
/**
 * ExportResponse
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
 * ExportResponse Class Doc Comment
 *
 * @category Class
 * @description Response containing export job status information
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<string,?mixed>
 */
class ExportResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExportResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_at' => '\DateTime',
        'error_msg' => 'string',
        'export_id' => 'string',
        'file_size' => 'int',
        'file_checksum' => 'string',
        'finished_at' => '\DateTime',
        'format' => 'string',
        'number_of_records' => 'int',
        'queued_at' => '\DateTime',
        'started_at' => '\DateTime',
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
        'created_at' => 'date-time',
        'error_msg' => null,
        'export_id' => null,
        'file_size' => 'int64',
        'file_checksum' => null,
        'finished_at' => 'date-time',
        'format' => null,
        'number_of_records' => 'int64',
        'queued_at' => 'date-time',
        'started_at' => 'date-time',
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
        'created_at' => 'createdAt',
        'error_msg' => 'errorMsg',
        'export_id' => 'exportId',
        'file_size' => 'fileSize',
        'file_checksum' => 'fileChecksum',
        'finished_at' => 'finishedAt',
        'format' => 'format',
        'number_of_records' => 'numberOfRecords',
        'queued_at' => 'queuedAt',
        'started_at' => 'startedAt',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'error_msg' => 'setErrorMsg',
        'export_id' => 'setExportId',
        'file_size' => 'setFileSize',
        'file_checksum' => 'setFileChecksum',
        'finished_at' => 'setFinishedAt',
        'format' => 'setFormat',
        'number_of_records' => 'setNumberOfRecords',
        'queued_at' => 'setQueuedAt',
        'started_at' => 'setStartedAt',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'error_msg' => 'getErrorMsg',
        'export_id' => 'getExportId',
        'file_size' => 'getFileSize',
        'file_checksum' => 'getFileChecksum',
        'finished_at' => 'getFinishedAt',
        'format' => 'getFormat',
        'number_of_records' => 'getNumberOfRecords',
        'queued_at' => 'getQueuedAt',
        'started_at' => 'getStartedAt',
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['error_msg'] = $data['error_msg'] ?? null;
        $this->container['export_id'] = $data['export_id'] ?? null;
        $this->container['file_size'] = $data['file_size'] ?? null;
        $this->container['file_checksum'] = $data['file_checksum'] ?? null;
        $this->container['finished_at'] = $data['finished_at'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['number_of_records'] = $data['number_of_records'] ?? null;
        $this->container['queued_at'] = $data['queued_at'] ?? null;
        $this->container['started_at'] = $data['started_at'] ?? null;
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

        if ($this->container['export_id'] === null) {
            $invalidProperties[] = "'export_id' can't be null";
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
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Date when the export request was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets error_msg
     *
     * @return string|null
     */
    public function getErrorMsg()
    {
        return $this->container['error_msg'];
    }

    /**
     * Sets error_msg
     *
     * @param string $error_msg Error message in case of \"Failed\" status
     *
     * @return self
     */
    public function setErrorMsg($error_msg)
    {
        $this->container['error_msg'] = $error_msg;

        return $this;
    }

    /**
     * Gets export_id
     *
     * @return string
     */
    public function getExportId()
    {
        return $this->container['export_id'];
    }

    /**
     * Sets export_id
     *
     * @param string $export_id Unique id of the export job
     *
     * @return self
     */
    public function setExportId($export_id)
    {
        $this->container['export_id'] = $export_id;

        return $this;
    }

    /**
     * Gets file_size
     *
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     *
     * @param int $file_size Size of exported file in bytes. This will have a value only when status is \"Completed\", otherwise null
     *
     * @return self
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets file_checksum
     *
     * @return string|null
     */
    public function getFileChecksum()
    {
        return $this->container['file_checksum'];
    }

    /**
     * Sets file_checksum
     *
     * @param string $file_checksum SHA-256 hash of exported file. This will have a value only when status is \"Completed\", otherwise null
     *
     * @return self
     */
    public function setFileChecksum($file_checksum)
    {
        $this->container['file_checksum'] = $file_checksum;

        return $this;
    }

    /**
     * Gets finished_at
     *
     * @return \DateTime|null
     */
    public function getFinishedAt()
    {
        return $this->container['finished_at'];
    }

    /**
     * Sets finished_at
     *
     * @param \DateTime $finished_at Finish time of export job. This will have value only when status is \"Completed\" or \"Failed\", otherwise null
     *
     * @return self
     */
    public function setFinishedAt($finished_at)
    {
        $this->container['finished_at'] = $finished_at;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format Format of file as given in the request (\"CSV\", \"TSV\", \"SSV\")
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets number_of_records
     *
     * @return int|null
     */
    public function getNumberOfRecords()
    {
        return $this->container['number_of_records'];
    }

    /**
     * Sets number_of_records
     *
     * @param int $number_of_records Number of records in the export file.  This will have value only when status is \"Completed\", otherwise null
     *
     * @return self
     */
    public function setNumberOfRecords($number_of_records)
    {
        $this->container['number_of_records'] = $number_of_records;

        return $this;
    }

    /**
     * Gets queued_at
     *
     * @return \DateTime|null
     */
    public function getQueuedAt()
    {
        return $this->container['queued_at'];
    }

    /**
     * Sets queued_at
     *
     * @param \DateTime $queued_at Queue time of export job. This will have value when \"Queued\" status is reached, before that null
     *
     * @return self
     */
    public function setQueuedAt($queued_at)
    {
        $this->container['queued_at'] = $queued_at;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return \DateTime|null
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param \DateTime $started_at Start time of export job. This will have value when \"Processing\" status is reached, before that null
     *
     * @return self
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

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
     * @param string $status Status of the export job (\"Created\",\"Queued\",\"Processing\",\"Canceled\",\"Completed\",\"Failed\")
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


