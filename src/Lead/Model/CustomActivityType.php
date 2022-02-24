<?php
/**
 * CustomActivityType
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
 * CustomActivityType Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomActivityType implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomActivityType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'api_name' => 'string',
        'attributes' => '\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute[]',
        'created_at' => 'string',
        'description' => 'string',
        'filter_name' => 'string',
        'id' => 'int',
        'name' => 'string',
        'primary_attribute' => '\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute',
        'status' => 'string',
        'trigger_name' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'api_name' => null,
        'attributes' => null,
        'created_at' => null,
        'description' => null,
        'filter_name' => null,
        'id' => 'int32',
        'name' => null,
        'primary_attribute' => null,
        'status' => null,
        'trigger_name' => null,
        'updated_at' => null
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
        'api_name' => 'apiName',
        'attributes' => 'attributes',
        'created_at' => 'createdAt',
        'description' => 'description',
        'filter_name' => 'filterName',
        'id' => 'id',
        'name' => 'name',
        'primary_attribute' => 'primaryAttribute',
        'status' => 'status',
        'trigger_name' => 'triggerName',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'api_name' => 'setApiName',
        'attributes' => 'setAttributes',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'filter_name' => 'setFilterName',
        'id' => 'setId',
        'name' => 'setName',
        'primary_attribute' => 'setPrimaryAttribute',
        'status' => 'setStatus',
        'trigger_name' => 'setTriggerName',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'api_name' => 'getApiName',
        'attributes' => 'getAttributes',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'filter_name' => 'getFilterName',
        'id' => 'getId',
        'name' => 'getName',
        'primary_attribute' => 'getPrimaryAttribute',
        'status' => 'getStatus',
        'trigger_name' => 'getTriggerName',
        'updated_at' => 'getUpdatedAt'
    ];

    const STATUS_DRAFT = 'draft';
    const STATUS_APPROVED = 'approved';
    const STATUS_DELETED = 'deleted';
    const STATUS_APPROVED_WITH_DRAFT = 'approved with draft';
    

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
        $this->container['api_name'] = $data['api_name'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['filter_name'] = $data['filter_name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['primary_attribute'] = $data['primary_attribute'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['trigger_name'] = $data['trigger_name'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets allowable values of the enum.
     *
     * @return scalar[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_APPROVED,
            self::STATUS_DELETED,
            self::STATUS_APPROVED_WITH_DRAFT,
        ];
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
     * @param string|null $api_name API Name of the type.  The API name must be unique and alphanumeric, containing at least one letter.  It is highly recommended to prepend a unique namespace of up to sixteen characters to the API name.  Required on creation
     *
     * @return self<TKey, TValue>
     */
    public function setApiName($api_name)
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute[]|null $attributes List of attributes for the activity type.  May only be added or update through Create or Update Custom Activity Type Attributes
     *
     * @return self<TKey, TValue>
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string|null $created_at Datetime when the activity type was created
     *
     * @return self<TKey, TValue>
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param string|null $description Description of the activity type
     *
     * @return self<TKey, TValue>
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
     * @param string|null $filter_name Human-readable name for the associated filter of the activity type.  Required on creation
     *
     * @return self<TKey, TValue>
     */
    public function setFilterName($filter_name)
    {
        $this->container['filter_name'] = $filter_name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self<TKey, TValue>
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string|null $name Human-readable display name of the type.  Required on creation
     *
     * @return self<TKey, TValue>
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
     * @param \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute|null $primary_attribute Primary Attribute of the activity type.  Required on creation
     *
     * @return self<TKey, TValue>
     */
    public function setPrimaryAttribute($primary_attribute)
    {
        $this->container['primary_attribute'] = $primary_attribute;

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
     * @param string|null $status State of the activity type
     *
     * @return self<TKey, TValue>
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
     * @param string|null $trigger_name Human-readable name for the associated trigger of the activity type.  Required on creation
     *
     * @return self<TKey, TValue>
     */
    public function setTriggerName($trigger_name)
    {
        $this->container['trigger_name'] = $trigger_name;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string|null $updated_at Datetime when the activity type was most recently updated
     *
     * @return self<TKey, TValue>
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalProperties(array $fields): void
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
    public function setAdditionalProperty($property, $value): void
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


