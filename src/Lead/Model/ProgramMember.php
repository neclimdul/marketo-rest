<?php

/**
 * ProgramMember
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
 * ProgramMember Class Doc Comment
 *
 * @category Class
 * @description Program member record.  Always contains lead id, but may have any number of other fields, depending on the fields available in the target instance.
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
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
    protected static $swaggerModelName = 'ProgramMember';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
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
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
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
      * @var string[]
      */
    protected $additionalProperties = [];

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

        if ($this->container['seq'] === null) {
            $invalidProperties['seq'] = "'seq' can't be null";
        }
        if ($this->container['lead_id'] === null) {
            $invalidProperties['lead_id'] = "'lead_id' can't be null";
        }
        if ($this->container['reached_success'] === null) {
            $invalidProperties['reached_success'] = "'reached_success' can't be null";
        }
        if ($this->container['program_id'] === null) {
            $invalidProperties['program_id'] = "'program_id' can't be null";
        }
        if ($this->container['acquired_by'] === null) {
            $invalidProperties['acquired_by'] = "'acquired_by' can't be null";
        }
        if ($this->container['membership_date'] === null) {
            $invalidProperties['membership_date'] = "'membership_date' can't be null";
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
     * Gets seq
     *
     * @return int
     */
    public function getSeq(): int
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
    public function setSeq(int $seq): ProgramMember
    {
        $this->container['seq'] = $seq;

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
     * @param int $lead_id Unique integer id of a lead record
     *
     * @return self<TKey, TValue>
     */
    public function setLeadId(int $lead_id): ProgramMember
    {
        $this->container['lead_id'] = $lead_id;

        return $this;
    }

    /**
     * Gets reached_success
     *
     * @return bool
     */
    public function getReachedSuccess(): bool
    {
        return $this->container['reached_success'];
    }

    /**
     * Sets reached_success
     *
     * @param bool $reached_success Boolean indicating if program member has reached success criteria for program
     *
     * @return self<TKey, TValue>
     */
    public function setReachedSuccess(bool $reached_success): ProgramMember
    {
        $this->container['reached_success'] = $reached_success;

        return $this;
    }

    /**
     * Gets program_id
     *
     * @return int
     */
    public function getProgramId(): int
    {
        return $this->container['program_id'];
    }

    /**
     * Sets program_id
     *
     * @param int $program_id Unique integer id of a program
     *
     * @return self<TKey, TValue>
     */
    public function setProgramId(int $program_id): ProgramMember
    {
        $this->container['program_id'] = $program_id;

        return $this;
    }

    /**
     * Gets acquired_by
     *
     * @return bool
     */
    public function getAcquiredBy(): bool
    {
        return $this->container['acquired_by'];
    }

    /**
     * Sets acquired_by
     *
     * @param bool $acquired_by Boolean indicating if program member was acquired by program
     *
     * @return self<TKey, TValue>
     */
    public function setAcquiredBy(bool $acquired_by): ProgramMember
    {
        $this->container['acquired_by'] = $acquired_by;

        return $this;
    }

    /**
     * Gets membership_date
     *
     * @return string
     */
    public function getMembershipDate(): string
    {
        return $this->container['membership_date'];
    }

    /**
     * Sets membership_date
     *
     * @param string $membership_date Date the lead first became a member of the program
     *
     * @return self<TKey, TValue>
     */
    public function setMembershipDate(string $membership_date): ProgramMember
    {
        $this->container['membership_date'] = $membership_date;

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
    public function getAdditionalProperties(): array
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
