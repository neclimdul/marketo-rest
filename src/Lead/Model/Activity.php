<?php

/**
 * Activity
 *
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.26
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Lead\Model;

use ArrayAccess;
use NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * Activity Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Activity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Activity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'activity_date' => '\DateTime',
        'activity_type_id' => 'int',
        'attributes' => '\NecLimDul\MarketoRest\Lead\Model\Attribute[]',
        'campaign_id' => 'int',
        'id' => 'int',
        'lead_id' => 'int',
        'marketo_guid' => 'string',
        'primary_attribute_value' => 'string',
        'primary_attribute_value_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'activity_date' => 'date-time',
        'activity_type_id' => 'int32',
        'attributes' => null,
        'campaign_id' => 'int64',
        'id' => 'int64',
        'lead_id' => 'int64',
        'marketo_guid' => null,
        'primary_attribute_value' => null,
        'primary_attribute_value_id' => 'int64'
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
        'activity_date' => 'activityDate',
        'activity_type_id' => 'activityTypeId',
        'attributes' => 'attributes',
        'campaign_id' => 'campaignId',
        'id' => 'id',
        'lead_id' => 'leadId',
        'marketo_guid' => 'marketoGUID',
        'primary_attribute_value' => 'primaryAttributeValue',
        'primary_attribute_value_id' => 'primaryAttributeValueId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activity_date' => 'setActivityDate',
        'activity_type_id' => 'setActivityTypeId',
        'attributes' => 'setAttributes',
        'campaign_id' => 'setCampaignId',
        'id' => 'setId',
        'lead_id' => 'setLeadId',
        'marketo_guid' => 'setMarketoGuid',
        'primary_attribute_value' => 'setPrimaryAttributeValue',
        'primary_attribute_value_id' => 'setPrimaryAttributeValueId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activity_date' => 'getActivityDate',
        'activity_type_id' => 'getActivityTypeId',
        'attributes' => 'getAttributes',
        'campaign_id' => 'getCampaignId',
        'id' => 'getId',
        'lead_id' => 'getLeadId',
        'marketo_guid' => 'getMarketoGuid',
        'primary_attribute_value' => 'getPrimaryAttributeValue',
        'primary_attribute_value_id' => 'getPrimaryAttributeValueId'
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
        $this->container['activity_date'] = $data['activity_date'] ?? null;
        $this->container['activity_type_id'] = $data['activity_type_id'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['campaign_id'] = $data['campaign_id'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['lead_id'] = $data['lead_id'] ?? null;
        $this->container['marketo_guid'] = $data['marketo_guid'] ?? null;
        $this->container['primary_attribute_value'] = $data['primary_attribute_value'] ?? null;
        $this->container['primary_attribute_value_id'] = $data['primary_attribute_value_id'] ?? null;
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
    public function getModelName(): string
    {
        return self::$swaggerModelName;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['lead_id'] === null) {
            $invalidProperties[] = "'lead_id' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * {@inheritdoc}
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets activity_date
     *
     * @return \DateTime
     */
    public function getActivityDate(): \DateTime
    {
        return $this->container['activity_date'];
    }

    /**
     * Sets activity_date
     *
     * @param \DateTime $activity_date Datetime of the activity
     *
     * @return self<TKey, TValue>
     */
    public function setActivityDate(\DateTime $activity_date): Activity
    {
        $this->container['activity_date'] = $activity_date;

        return $this;
    }

    /**
     * Gets activity_type_id
     *
     * @return int
     */
    public function getActivityTypeId(): int
    {
        return $this->container['activity_type_id'];
    }

    /**
     * Sets activity_type_id
     *
     * @param int $activity_type_id Id of the activity type
     *
     * @return self<TKey, TValue>
     */
    public function setActivityTypeId(int $activity_type_id): Activity
    {
        $this->container['activity_type_id'] = $activity_type_id;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Attribute[]
     */
    public function getAttributes(): array
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Attribute[] $attributes List of secondary attributes
     *
     * @return self<TKey, TValue>
     */
    public function setAttributes(array $attributes): Activity
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId(): int
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int|null $campaign_id Id of the associated Smart Campaign, if applicable
     *
     * @return self<TKey, TValue>
     */
    public function setCampaignId(?int $campaign_id): Activity
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Integer id of the activity. This value could exceed Int.MAX. For instances which have been migrated to Activity Service, this field may not be present, and should not be treated as unique.
     *
     * @return self<TKey, TValue>
     */
    public function setId(int $id): Activity
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lead_id
     *
     * @return int
     */
    public function getLeadId(): int
    {
        return $this->container['lead_id'];
    }

    /**
     * Sets lead_id
     *
     * @param int $lead_id Id of the lead associated to the activity
     *
     * @return self<TKey, TValue>
     */
    public function setLeadId(int $lead_id): Activity
    {
        $this->container['lead_id'] = $lead_id;

        return $this;
    }

    /**
     * Gets marketo_guid
     *
     * @return string
     */
    public function getMarketoGuid(): string
    {
        return $this->container['marketo_guid'];
    }

    /**
     * Sets marketo_guid
     *
     * @param string|null $marketo_guid Unique id of the activity (128 character string)
     *
     * @return self<TKey, TValue>
     */
    public function setMarketoGuid(?string $marketo_guid): Activity
    {
        $this->container['marketo_guid'] = $marketo_guid;

        return $this;
    }

    /**
     * Gets primary_attribute_value
     *
     * @return string
     */
    public function getPrimaryAttributeValue(): string
    {
        return $this->container['primary_attribute_value'];
    }

    /**
     * Sets primary_attribute_value
     *
     * @param string|null $primary_attribute_value Value of the primary attribute
     *
     * @return self<TKey, TValue>
     */
    public function setPrimaryAttributeValue(?string $primary_attribute_value): Activity
    {
        $this->container['primary_attribute_value'] = $primary_attribute_value;

        return $this;
    }

    /**
     * Gets primary_attribute_value_id
     *
     * @return int
     */
    public function getPrimaryAttributeValueId(): int
    {
        return $this->container['primary_attribute_value_id'];
    }

    /**
     * Sets primary_attribute_value_id
     *
     * @param int|null $primary_attribute_value_id Id of the primary attribute field
     *
     * @return self<TKey, TValue>
     */
    public function setPrimaryAttributeValueId(?int $primary_attribute_value_id): Activity
    {
        $this->container['primary_attribute_value_id'] = $primary_attribute_value_id;

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
        $map =
            /**
             * @param array-key $key
             * @return mixed
             */
            function ($key) use ($container) {
                return $container[$key];
            };
        return array_map($map, $this->additionalProperties);
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
     * @throws \JsonException
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }
}
