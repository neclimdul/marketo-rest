<?php
/**
 * NamedAccountList
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
 * NamedAccountList Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class NamedAccountList implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NamedAccountList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'created_at' => 'string',
        'marketo_guid' => 'string',
        'name' => 'string',
        'reasons' => '\NecLimDul\MarketoRest\Lead\Model\Reason[]',
        'seq' => 'int',
        'status' => 'string',
        'type' => 'string',
        'updateable' => 'bool',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'created_at' => null,
        'marketo_guid' => null,
        'name' => null,
        'reasons' => null,
        'seq' => 'int32',
        'status' => null,
        'type' => null,
        'updateable' => null,
        'updated_at' => null
    ];

    /**
      * Array of additional properties.
      *
      * @var mixed[]
      */
    protected $additionalProperties = [];

    /**
     * {@inheritDoc}
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    /**
     * {@inheritDoc}
     */
    public static function swaggerFormats(): array
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
        'marketo_guid' => 'marketoGUID',
        'name' => 'name',
        'reasons' => 'reasons',
        'seq' => 'seq',
        'status' => 'status',
        'type' => 'type',
        'updateable' => 'updateable',
        'updated_at' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'marketo_guid' => 'setMarketoGuid',
        'name' => 'setName',
        'reasons' => 'setReasons',
        'seq' => 'setSeq',
        'status' => 'setStatus',
        'type' => 'setType',
        'updateable' => 'setUpdateable',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'marketo_guid' => 'getMarketoGuid',
        'name' => 'getName',
        'reasons' => 'getReasons',
        'seq' => 'getSeq',
        'status' => 'getStatus',
        'type' => 'getType',
        'updateable' => 'getUpdateable',
        'updated_at' => 'getUpdatedAt'
    ];

    const STATUS_CREATED = 'created';
    const STATUS_UPDATED = 'updated';
    const STATUS_DELETED = 'deleted';
    const STATUS_SKIPPED = 'skipped';
    const STATUS_ADDED = 'added';
    const STATUS_REMOVED = 'removed';
    

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
        $this->container['marketo_guid'] = $data['marketo_guid'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['reasons'] = $data['reasons'] ?? null;
        $this->container['seq'] = $data['seq'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['updateable'] = $data['updateable'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * {@inheritdoc}
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * {@inheritdoc}
     */
    public static function getters(): array
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
    public function listInvalidProperties(): array
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
            self::STATUS_CREATED,
            self::STATUS_UPDATED,
            self::STATUS_DELETED,
            self::STATUS_SKIPPED,
            self::STATUS_ADDED,
            self::STATUS_REMOVED,
        ];
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
     * @param string|null $created_at Datetime when the named account list was created
     *
     * @return self<TKey, TValue>
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
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
     * @return self<TKey, TValue>
     */
    public function setMarketoGuid($marketo_guid)
    {
        $this->container['marketo_guid'] = $marketo_guid;

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
     * @param string|null $name Name of named account list
     *
     * @return self<TKey, TValue>
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param \NecLimDul\MarketoRest\Lead\Model\Reason[]|null $reasons List of reasons why an operation did not succeed.  Reasons are only present in API responses and should not be submitted
     *
     * @return self<TKey, TValue>
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
     * @return self<TKey, TValue>
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
     * @param string|null $status status
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of named account list (\"default\" if created by user or API, \"external\" if managed by CRM-View)
     *
     * @return self<TKey, TValue>
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets updateable
     *
     * @return bool
     */
    public function getUpdateable()
    {
        return $this->container['updateable'];
    }

    /**
     * Sets updateable
     *
     * @param bool|null $updateable Whether the list is updateable (true if created by user or API, false if managed by CRM-View)
     *
     * @return self<TKey, TValue>
     */
    public function setUpdateable($updateable)
    {
        $this->container['updateable'] = $updateable;

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
     * @param string|null $updated_at Datetime when the named account list was most recently updated
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


