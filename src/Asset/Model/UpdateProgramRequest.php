<?php
/**
 * UpdateProgramRequest
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
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

namespace NecLimDul\MarketoRest\Asset\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * UpdateProgramRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateProgramRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateProgramRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'costs' => '\NecLimDul\MarketoRest\Asset\Model\CostRequest[]',
        'costs_destructive_update' => 'bool',
        'description' => 'string',
        'end_date' => 'string',
        'name' => 'string',
        'start_date' => 'string',
        'tags' => '\NecLimDul\MarketoRest\Asset\Model\TagRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'costs' => null,
        'costs_destructive_update' => null,
        'description' => null,
        'end_date' => null,
        'name' => null,
        'start_date' => null,
        'tags' => null
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
        'costs' => 'costs',
        'costs_destructive_update' => 'costsDestructiveUpdate',
        'description' => 'description',
        'end_date' => 'endDate',
        'name' => 'name',
        'start_date' => 'startDate',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'costs' => 'setCosts',
        'costs_destructive_update' => 'setCostsDestructiveUpdate',
        'description' => 'setDescription',
        'end_date' => 'setEndDate',
        'name' => 'setName',
        'start_date' => 'setStartDate',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'costs' => 'getCosts',
        'costs_destructive_update' => 'getCostsDestructiveUpdate',
        'description' => 'getDescription',
        'end_date' => 'getEndDate',
        'name' => 'getName',
        'start_date' => 'getStartDate',
        'tags' => 'getTags'
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
        $this->container['costs'] = $data['costs'] ?? null;
        $this->container['costs_destructive_update'] = $data['costs_destructive_update'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['end_date'] = $data['end_date'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['start_date'] = $data['start_date'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
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
     * Gets costs
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\CostRequest[]
     */
    public function getCosts()
    {
        return $this->container['costs'];
    }

    /**
     * Sets costs
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\CostRequest[]|null $costs Lists of associated period costs that allow you to append, replace, or delete. To append new costs, simply add them to costs array.  To replace costs (destructive update), pass new costs and set costsDestructiveUpdate to true. To delete costs, do not pass costs parameter and set costsDestructiveUpdate to true
     *
     * @return self<TKey, TValue>
     */
    public function setCosts($costs)
    {
        $this->container['costs'] = $costs;

        return $this;
    }

    /**
     * Gets costs_destructive_update
     *
     * @return bool
     */
    public function getCostsDestructiveUpdate()
    {
        return $this->container['costs_destructive_update'];
    }

    /**
     * Sets costs_destructive_update
     *
     * @param bool|null $costs_destructive_update Set true to destroy existing costs and replace them with the specified costs
     *
     * @return self<TKey, TValue>
     */
    public function setCostsDestructiveUpdate($costs_destructive_update)
    {
        $this->container['costs_destructive_update'] = $costs_destructive_update;

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
     * @param string|null $description Updated description for the program
     *
     * @return self<TKey, TValue>
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string|null $end_date End date of the program.  Applicable to event, email, and webinar type programs
     *
     * @return self<TKey, TValue>
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * @param string|null $name Name of the program
     *
     * @return self<TKey, TValue>
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date Start date of program.  Applicable to event, email and webinar type programs
     *
     * @return self<TKey, TValue>
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\TagRequest[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\TagRequest[]|null $tags List of associated program tags
     *
     * @return self<TKey, TValue>
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * @throws \JsonException
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     * @throws \JsonException
     */
    public function toHeaderValue()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_THROW_ON_ERROR
        );
    }
}


