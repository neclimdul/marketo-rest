<?php

/**
 * ScheduleCampaignData
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
 * ScheduleCampaignData Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ScheduleCampaignData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScheduleCampaignData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'clone_to_program_name' => 'string',
        'run_at' => '\DateTime',
        'tokens' => '\NecLimDul\MarketoRest\Lead\Model\Token[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'clone_to_program_name' => null,
        'run_at' => 'date-time',
        'tokens' => null
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
        'clone_to_program_name' => 'cloneToProgramName',
        'run_at' => 'runAt',
        'tokens' => 'tokens'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clone_to_program_name' => 'setCloneToProgramName',
        'run_at' => 'setRunAt',
        'tokens' => 'setTokens'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clone_to_program_name' => 'getCloneToProgramName',
        'run_at' => 'getRunAt',
        'tokens' => 'getTokens'
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
        $this->container['clone_to_program_name'] = $data['clone_to_program_name'] ?? null;
        $this->container['run_at'] = $data['run_at'] ?? null;
        $this->container['tokens'] = $data['tokens'] ?? null;
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
     * Gets clone_to_program_name
     *
     * @return string|null
     */
    public function getCloneToProgramName(): ?string
    {
        return $this->container['clone_to_program_name'];
    }

    /**
     * Sets clone_to_program_name
     *
     * @param string|null $clone_to_program_name Name of the resulting program.  When set, this attribute will cause the campaign, parent program, and all of its assets, to be created with the resulting new name.  The parent program will be cloned and the newly created campaign will be scheduled.  The resulting program is created underneath the parent.  Programs with snippets, push notifications, in-app messages, static lists, reports, and social assets may not be cloned in this way
     *
     * @return self<TKey, TValue>
     */
    public function setCloneToProgramName(?string $clone_to_program_name): ScheduleCampaignData
    {
        $this->container['clone_to_program_name'] = $clone_to_program_name;

        return $this;
    }

    /**
     * Gets run_at
     *
     * @return \DateTime|null
     */
    public function getRunAt(): ?\DateTime
    {
        return $this->container['run_at'];
    }

    /**
     * Sets run_at
     *
     * @param \DateTime|null $run_at Datetime to run the campaign at.  If unset, the campaign will be run five minutes after the call is made
     *
     * @return self<TKey, TValue>
     */
    public function setRunAt(?\DateTime $run_at): ScheduleCampaignData
    {
        $this->container['run_at'] = $run_at;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Token[]|null
     */
    public function getTokens(): ?array
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Token[]|null $tokens List of my tokens to replace during the run of the target campaign.  The tokens must be available in a parent program or folder to be replaced during the run
     *
     * @return self<TKey, TValue>
     */
    public function setTokens(?array $tokens): ScheduleCampaignData
    {
        $this->container['tokens'] = $tokens;

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
