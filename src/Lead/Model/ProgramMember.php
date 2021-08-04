<?php
/**
 * ProgramMember
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
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
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
 * ProgramMember Class Doc Comment
 *
 * @category Class
 * @description Program member record.  Always contains lead id, but may have any number of other fields, depending on the fields available in the target instance.
 * @package  NecLimDul\MarketoRest\Lead
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProgramMember implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProgramMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seq' => 'int',
        'lead_id' => 'int',
        'reached_success' => 'bool',
        'program_id' => 'int',
        'acquired_by' => 'bool',
        'membership_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seq' => 'int32',
        'lead_id' => 'int32',
        'reached_success' => null,
        'program_id' => 'int32',
        'acquired_by' => null,
        'membership_date' => null
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
        'seq' => 'seq',
        'lead_id' => 'leadId',
        'reached_success' => 'reachedSuccess',
        'program_id' => 'programId',
        'acquired_by' => 'acquiredBy',
        'membership_date' => 'membershipDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seq' => 'setSeq',
        'lead_id' => 'setLeadId',
        'reached_success' => 'setReachedSuccess',
        'program_id' => 'setProgramId',
        'acquired_by' => 'setAcquiredBy',
        'membership_date' => 'setMembershipDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seq' => 'getSeq',
        'lead_id' => 'getLeadId',
        'reached_success' => 'getReachedSuccess',
        'program_id' => 'getProgramId',
        'acquired_by' => 'getAcquiredBy',
        'membership_date' => 'getMembershipDate'
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
        $this->container['seq'] = $data['seq'] ?? null;
        $this->container['lead_id'] = $data['lead_id'] ?? null;
        $this->container['reached_success'] = $data['reached_success'] ?? null;
        $this->container['program_id'] = $data['program_id'] ?? null;
        $this->container['acquired_by'] = $data['acquired_by'] ?? null;
        $this->container['membership_date'] = $data['membership_date'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['seq'] === null) {
            $invalidProperties[] = "'seq' can't be null";
        }
        if ($this->container['lead_id'] === null) {
            $invalidProperties[] = "'lead_id' can't be null";
        }
        if ($this->container['reached_success'] === null) {
            $invalidProperties[] = "'reached_success' can't be null";
        }
        if ($this->container['program_id'] === null) {
            $invalidProperties[] = "'program_id' can't be null";
        }
        if ($this->container['acquired_by'] === null) {
            $invalidProperties[] = "'acquired_by' can't be null";
        }
        if ($this->container['membership_date'] === null) {
            $invalidProperties[] = "'membership_date' can't be null";
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
     * @return self
     */
    public function setSeq($seq)
    {
        $this->container['seq'] = $seq;

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
     * @param int $lead_id Unique integer id of a lead record
     *
     * @return self
     */
    public function setLeadId($lead_id)
    {
        $this->container['lead_id'] = $lead_id;

        return $this;
    }

    /**
     * Gets reached_success
     *
     * @return bool
     */
    public function getReachedSuccess()
    {
        return $this->container['reached_success'];
    }

    /**
     * Sets reached_success
     *
     * @param bool $reached_success Boolean indicating if program member has reached success criteria for program
     *
     * @return self
     */
    public function setReachedSuccess($reached_success)
    {
        $this->container['reached_success'] = $reached_success;

        return $this;
    }

    /**
     * Gets program_id
     *
     * @return int
     */
    public function getProgramId()
    {
        return $this->container['program_id'];
    }

    /**
     * Sets program_id
     *
     * @param int $program_id Unique integer id of a program
     *
     * @return self
     */
    public function setProgramId($program_id)
    {
        $this->container['program_id'] = $program_id;

        return $this;
    }

    /**
     * Gets acquired_by
     *
     * @return bool
     */
    public function getAcquiredBy()
    {
        return $this->container['acquired_by'];
    }

    /**
     * Sets acquired_by
     *
     * @param bool $acquired_by Boolean indicating if program member was acquired by program
     *
     * @return self
     */
    public function setAcquiredBy($acquired_by)
    {
        $this->container['acquired_by'] = $acquired_by;

        return $this;
    }

    /**
     * Gets membership_date
     *
     * @return string
     */
    public function getMembershipDate()
    {
        return $this->container['membership_date'];
    }

    /**
     * Sets membership_date
     *
     * @param string $membership_date Date the lead first became a member of the program
     *
     * @return self
     */
    public function setMembershipDate($membership_date)
    {
        $this->container['membership_date'] = $membership_date;

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


