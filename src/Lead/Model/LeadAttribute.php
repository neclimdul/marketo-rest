<?php
/**
 * LeadAttribute
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
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

namespace NecLimDul\MarketoRest\Lead\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * LeadAttribute Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LeadAttribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LeadAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'data_type' => 'string',
        'display_name' => 'string',
        'id' => 'int',
        'length' => 'int',
        'rest' => '\NecLimDul\MarketoRest\Lead\Model\LeadMapAttribute',
        'soap' => '\NecLimDul\MarketoRest\Lead\Model\LeadMapAttribute'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'data_type' => null,
        'display_name' => null,
        'id' => 'int32',
        'length' => 'int32',
        'rest' => null,
        'soap' => null
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
        'data_type' => 'dataType',
        'display_name' => 'displayName',
        'id' => 'id',
        'length' => 'length',
        'rest' => 'rest',
        'soap' => 'soap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_type' => 'setDataType',
        'display_name' => 'setDisplayName',
        'id' => 'setId',
        'length' => 'setLength',
        'rest' => 'setRest',
        'soap' => 'setSoap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_type' => 'getDataType',
        'display_name' => 'getDisplayName',
        'id' => 'getId',
        'length' => 'getLength',
        'rest' => 'getRest',
        'soap' => 'getSoap'
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
        $this->container['data_type'] = $data['data_type'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['length'] = $data['length'] ?? null;
        $this->container['rest'] = $data['rest'] ?? null;
        $this->container['soap'] = $data['soap'] ?? null;
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

        if ($this->container['data_type'] === null) {
            $invalidProperties[] = "'data_type' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets data_type
     *
     * @return string
     */
    public function getDataType(): string
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type Datatype of the field
     *
     * @return self<TKey, TValue>
     */
    public function setDataType(string $data_type): LeadAttribute
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name UI display-name of the field
     *
     * @return self<TKey, TValue>
     */
    public function setDisplayName(string $display_name): LeadAttribute
    {
        $this->container['display_name'] = $display_name;

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
     * @param int $id Unique integer id of the field
     *
     * @return self<TKey, TValue>
     */
    public function setId(int $id): LeadAttribute
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int
     */
    public function getLength(): int
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int|null $length Max length of the field.  Only applicable to text, string, and text area.
     *
     * @return self<TKey, TValue>
     */
    public function setLength(?int $length): LeadAttribute
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets rest
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\LeadMapAttribute
     */
    public function getRest(): \NecLimDul\MarketoRest\Lead\Model\LeadMapAttribute
    {
        return $this->container['rest'];
    }

    /**
     * Sets rest
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\LeadMapAttribute|null $rest Description of REST API usage attributes
     *
     * @return self<TKey, TValue>
     */
    public function setRest(?\NecLimDul\MarketoRest\Lead\Model\LeadMapAttribute $rest): LeadAttribute
    {
        $this->container['rest'] = $rest;

        return $this;
    }

    /**
     * Gets soap
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\LeadMapAttribute
     */
    public function getSoap(): \NecLimDul\MarketoRest\Lead\Model\LeadMapAttribute
    {
        return $this->container['soap'];
    }

    /**
     * Sets soap
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\LeadMapAttribute|null $soap Description of SOAP API usage attributes
     *
     * @return self<TKey, TValue>
     */
    public function setSoap(?\NecLimDul\MarketoRest\Lead\Model\LeadMapAttribute $soap): LeadAttribute
    {
        $this->container['soap'] = $soap;

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
            function($key) use ($container) {
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
