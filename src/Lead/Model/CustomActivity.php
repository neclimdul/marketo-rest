<?php
/**
 * CustomActivity
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * The version of the OpenAPI document: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Lead\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * CustomActivity Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CustomActivity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activity_date' => 'string',
        'activity_type_id' => 'int',
        'api_name' => 'string',
        'attributes' => '\NecLimDul\MarketoRest\Lead\Model\Attribute[]',
        'errors' => '\NecLimDul\MarketoRest\Lead\Model\Error[]',
        'id' => 'int',
        'lead_id' => 'int',
        'marketo_guid' => 'string',
        'primary_attribute_value' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activity_date' => null,
        'activity_type_id' => 'int32',
        'api_name' => null,
        'attributes' => null,
        'errors' => null,
        'id' => 'int64',
        'lead_id' => 'int64',
        'marketo_guid' => null,
        'primary_attribute_value' => null,
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
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'activity_date' => 'activityDate',
        'activity_type_id' => 'activityTypeId',
        'api_name' => 'apiName',
        'attributes' => 'attributes',
        'errors' => 'errors',
        'id' => 'id',
        'lead_id' => 'leadId',
        'marketo_guid' => 'marketoGUID',
        'primary_attribute_value' => 'primaryAttributeValue',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_date' => 'setActivityDate',
        'activity_type_id' => 'setActivityTypeId',
        'api_name' => 'setApiName',
        'attributes' => 'setAttributes',
        'errors' => 'setErrors',
        'id' => 'setId',
        'lead_id' => 'setLeadId',
        'marketo_guid' => 'setMarketoGuid',
        'primary_attribute_value' => 'setPrimaryAttributeValue',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_date' => 'getActivityDate',
        'activity_type_id' => 'getActivityTypeId',
        'api_name' => 'getApiName',
        'attributes' => 'getAttributes',
        'errors' => 'getErrors',
        'id' => 'getId',
        'lead_id' => 'getLeadId',
        'marketo_guid' => 'getMarketoGuid',
        'primary_attribute_value' => 'getPrimaryAttributeValue',
        'status' => 'getStatus'
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
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    // status enumerated values.
    const STATUS_CREATED = 'created';
    const STATUS_UPDATED = 'updated';
    const STATUS_DELETED = 'deleted';
    const STATUS_SKIPPED = 'skipped';
    const STATUS_ADDED = 'added';
    const STATUS_REMOVED = 'removed';

    /**
     * Gets allowable values of the enum
     *
     * @return array
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
        $this->container['activity_date'] = $data['activity_date'] ?? null;
        $this->container['activity_type_id'] = $data['activity_type_id'] ?? null;
        $this->container['api_name'] = $data['api_name'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['errors'] = $data['errors'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['lead_id'] = $data['lead_id'] ?? null;
        $this->container['marketo_guid'] = $data['marketo_guid'] ?? null;
        $this->container['primary_attribute_value'] = $data['primary_attribute_value'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['activity_date'] === null) {
            $invalidProperties[] = "'activity_date' can't be null";
        }
        if ($this->container['activity_type_id'] === null) {
            $invalidProperties[] = "'activity_type_id' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['errors'] === null) {
            $invalidProperties[] = "'errors' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['lead_id'] === null) {
            $invalidProperties[] = "'lead_id' can't be null";
        }
        if ($this->container['primary_attribute_value'] === null) {
            $invalidProperties[] = "'primary_attribute_value' can't be null";
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
     * Gets activity_date
     *
     * @return string
     */
    public function getActivityDate()
    {
        return $this->container['activity_date'];
    }

    /**
     * Sets activity_date
     *
     * @param string $activity_date Datetime of the activity
     *
     * @return self
     */
    public function setActivityDate($activity_date)
    {
        $this->container['activity_date'] = $activity_date;

        return $this;
    }

    /**
     * Gets activity_type_id
     *
     * @return int
     */
    public function getActivityTypeId()
    {
        return $this->container['activity_type_id'];
    }

    /**
     * Sets activity_type_id
     *
     * @param int $activity_type_id Id of the activity type
     *
     * @return self
     */
    public function setActivityTypeId($activity_type_id)
    {
        $this->container['activity_type_id'] = $activity_type_id;

        return $this;
    }

    /**
     * Gets api_name
     *
     * @return string|null
     */
    public function getApiName()
    {
        return $this->container['api_name'];
    }

    /**
     * Sets api_name
     *
     * @param string|null $api_name api_name
     *
     * @return self
     */
    public function setApiName($api_name)
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Attribute[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Attribute[] $attributes List of secondary attributes
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
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
     * @return self
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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
     * @param int $id Integer id of the activity.  For instances which have been migrated to Activity Service, this field may not be present, and should not be treated as unique.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lead_id
     *
     * @return int
     */
    public function getLeadId()
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     *
     * @param int $lead_id Id of the lead associated to the activity
     *
     * @return self
     */
    public function setLeadId($lead_id)
    {
        $this->container['lead_id'] = $lead_id;

        return $this;
    }

    /**
     * Gets marketo_guid
     *
     * @return string|null
     */
    public function getMarketoGuid()
    {
        return $this->container['marketo_guid'];
    }

    /**
     * Sets marketo_guid
     *
     * @param string|null $marketo_guid Unique id of the activity (128 character string)
     *
     * @return self
     */
    public function setMarketoGuid($marketo_guid)
    {
        $this->container['marketo_guid'] = $marketo_guid;

        return $this;
    }

    /**
     * Gets primary_attribute_value
     *
     * @return string
     */
    public function getPrimaryAttributeValue()
    {
        return $this->container['primary_attribute_value'];
    }

    /**
     * Sets primary_attribute_value
     *
     * @param string $primary_attribute_value Value of the primary attribute
     *
     * @return self
     */
    public function setPrimaryAttributeValue($primary_attribute_value)
    {
        $this->container['primary_attribute_value'] = $primary_attribute_value;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Status of the operation performed on the record
     *
     * @return self
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
     * {@inheritdoc}
     */
    public function setAdditionalProperties(array $fields)
    {
        $fields = array_diff_key($fields, static::$attributeMap);
        foreach ($this->additionalProperties as $additional_properties) {
            unset($this->container[$additional_properties]);
        }
        $this->container += $fields;
        $this->additionalProperties = array_keys($fields);
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
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


