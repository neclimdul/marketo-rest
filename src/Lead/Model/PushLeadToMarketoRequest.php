<?php
/**
 * PushLeadToMarketoRequest
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
 * Swagger Codegen version: 2.4.26
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
 * PushLeadToMarketoRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<string,?mixed>
 */
class PushLeadToMarketoRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PushLeadToMarketoRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'input' => '\NecLimDul\MarketoRest\Lead\Model\PushLead[]',
        'lookup_field' => 'string',
        'partition_name' => 'string',
        'program_name' => 'string',
        'program_status' => 'string',
        'reason' => 'string',
        'source' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'input' => null,
        'lookup_field' => null,
        'partition_name' => null,
        'program_name' => null,
        'program_status' => null,
        'reason' => null,
        'source' => null
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
        'input' => 'input',
        'lookup_field' => 'lookupField',
        'partition_name' => 'partitionName',
        'program_name' => 'programName',
        'program_status' => 'programStatus',
        'reason' => 'reason',
        'source' => 'source'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'input' => 'setInput',
        'lookup_field' => 'setLookupField',
        'partition_name' => 'setPartitionName',
        'program_name' => 'setProgramName',
        'program_status' => 'setProgramStatus',
        'reason' => 'setReason',
        'source' => 'setSource'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'input' => 'getInput',
        'lookup_field' => 'getLookupField',
        'partition_name' => 'getPartitionName',
        'program_name' => 'getProgramName',
        'program_status' => 'getProgramStatus',
        'reason' => 'getReason',
        'source' => 'getSource'
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
        $this->container['input'] = $data['input'] ?? null;
        $this->container['lookup_field'] = $data['lookup_field'] ?? null;
        $this->container['partition_name'] = $data['partition_name'] ?? null;
        $this->container['program_name'] = $data['program_name'] ?? null;
        $this->container['program_status'] = $data['program_status'] ?? null;
        $this->container['reason'] = $data['reason'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
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
     * Gets input
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\PushLead[]|null
     */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
     * Sets input
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\PushLead[] $input input
     *
     * @return self
     */
    public function setInput($input)
    {
        $this->container['input'] = $input;

        return $this;
    }

    /**
     * Gets lookup_field
     *
     * @return string|null
     */
    public function getLookupField()
    {
        return $this->container['lookup_field'];
    }

    /**
     * Sets lookup_field
     *
     * @param string $lookup_field lookup_field
     *
     * @return self
     */
    public function setLookupField($lookup_field)
    {
        $this->container['lookup_field'] = $lookup_field;

        return $this;
    }

    /**
     * Gets partition_name
     *
     * @return string|null
     */
    public function getPartitionName()
    {
        return $this->container['partition_name'];
    }

    /**
     * Sets partition_name
     *
     * @param string $partition_name partition_name
     *
     * @return self
     */
    public function setPartitionName($partition_name)
    {
        $this->container['partition_name'] = $partition_name;

        return $this;
    }

    /**
     * Gets program_name
     *
     * @return string|null
     */
    public function getProgramName()
    {
        return $this->container['program_name'];
    }

    /**
     * Sets program_name
     *
     * @param string $program_name program_name
     *
     * @return self
     */
    public function setProgramName($program_name)
    {
        $this->container['program_name'] = $program_name;

        return $this;
    }

    /**
     * Gets program_status
     *
     * @return string|null
     */
    public function getProgramStatus()
    {
        return $this->container['program_status'];
    }

    /**
     * Sets program_status
     *
     * @param string $program_status program_status
     *
     * @return self
     */
    public function setProgramStatus($program_status)
    {
        $this->container['program_status'] = $program_status;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source source
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

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


