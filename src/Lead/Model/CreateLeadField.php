<?php
/**
 * CreateLeadField
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
 * Swagger Codegen version: 2.4.24
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
 * CreateLeadField Class Doc Comment
 *
 * @category Class
 * @description Lead field record for create
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateLeadField implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateLeadField';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'display_name' => 'string',
        'name' => 'string',
        'description' => 'string',
        'data_type' => 'string',
        'is_hidden' => 'bool',
        'is_html_encoding_in_email' => 'bool',
        'is_sensitive' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'display_name' => null,
        'name' => null,
        'description' => null,
        'data_type' => null,
        'is_hidden' => null,
        'is_html_encoding_in_email' => null,
        'is_sensitive' => null
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
        'display_name' => 'displayName',
        'name' => 'name',
        'description' => 'description',
        'data_type' => 'dataType',
        'is_hidden' => 'isHidden',
        'is_html_encoding_in_email' => 'isHtmlEncodingInEmail',
        'is_sensitive' => 'isSensitive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_name' => 'setDisplayName',
        'name' => 'setName',
        'description' => 'setDescription',
        'data_type' => 'setDataType',
        'is_hidden' => 'setIsHidden',
        'is_html_encoding_in_email' => 'setIsHtmlEncodingInEmail',
        'is_sensitive' => 'setIsSensitive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_name' => 'getDisplayName',
        'name' => 'getName',
        'description' => 'getDescription',
        'data_type' => 'getDataType',
        'is_hidden' => 'getIsHidden',
        'is_html_encoding_in_email' => 'getIsHtmlEncodingInEmail',
        'is_sensitive' => 'getIsSensitive'
    ];

    const DATA_TYPE_BOOLEAN = 'boolean';
    const DATA_TYPE_CURRENCY = 'currency';
    const DATA_TYPE_DATE = 'date';
    const DATA_TYPE_DATETIME = 'datetime';
    const DATA_TYPE_EMAIL = 'email';
    const DATA_TYPE_FLOAT = 'float';
    const DATA_TYPE_INTEGER = 'integer';
    const DATA_TYPE_PERCENT = 'percent';
    const DATA_TYPE_PHONE = 'phone';
    const DATA_TYPE_SCORE = 'score';
    const DATA_TYPE_STRING = 'string';
    const DATA_TYPE_URL = 'url';
    

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
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['data_type'] = $data['data_type'] ?? null;
        $this->container['is_hidden'] = $data['is_hidden'] ?? null;
        $this->container['is_html_encoding_in_email'] = $data['is_html_encoding_in_email'] ?? null;
        $this->container['is_sensitive'] = $data['is_sensitive'] ?? null;
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

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['data_type'] === null) {
            $invalidProperties[] = "'data_type' can't be null";
        }
        $allowedValues = $this->getDataTypeAllowableValues();
        if (!is_null($this->container['data_type']) && !in_array($this->container['data_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'data_type', must be one of '%s'",
                $this->container['data_type'],
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
    public function getDataTypeAllowableValues()
    {
        return [
            self::DATA_TYPE_BOOLEAN,
            self::DATA_TYPE_CURRENCY,
            self::DATA_TYPE_DATE,
            self::DATA_TYPE_DATETIME,
            self::DATA_TYPE_EMAIL,
            self::DATA_TYPE_FLOAT,
            self::DATA_TYPE_INTEGER,
            self::DATA_TYPE_PERCENT,
            self::DATA_TYPE_PHONE,
            self::DATA_TYPE_SCORE,
            self::DATA_TYPE_STRING,
            self::DATA_TYPE_URL,
        ];
    }
    

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name UI display-name of the field.  Must be unique, cannot contain special characters
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

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
     * @param string $name API name of the field.  Must be unique, start with a letter, and only contain letters, numbers, or underscore
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $description Description of the field.  Default is no description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type Datatype of the field
     *
     * @return self
     */
    public function setDataType($data_type)
    {
        $allowedValues = $this->getDataTypeAllowableValues();
        if (!in_array($data_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'data_type', must be one of '%s'",
                    $data_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets is_hidden
     *
     * @return bool
     */
    public function getIsHidden()
    {
        return $this->container['is_hidden'];
    }

    /**
     * Sets is_hidden
     *
     * @param bool $is_hidden If set to true, the field is hidden.  Default is false
     *
     * @return self
     */
    public function setIsHidden($is_hidden)
    {
        $this->container['is_hidden'] = $is_hidden;

        return $this;
    }

    /**
     * Gets is_html_encoding_in_email
     *
     * @return bool
     */
    public function getIsHtmlEncodingInEmail()
    {
        return $this->container['is_html_encoding_in_email'];
    }

    /**
     * Sets is_html_encoding_in_email
     *
     * @param bool $is_html_encoding_in_email If set to true, field is encoded as HTML in email.  Default is true
     *
     * @return self
     */
    public function setIsHtmlEncodingInEmail($is_html_encoding_in_email)
    {
        $this->container['is_html_encoding_in_email'] = $is_html_encoding_in_email;

        return $this;
    }

    /**
     * Gets is_sensitive
     *
     * @return bool
     */
    public function getIsSensitive()
    {
        return $this->container['is_sensitive'];
    }

    /**
     * Sets is_sensitive
     *
     * @param bool $is_sensitive If set to true, field is marked as sensitive.  Default is false
     *
     * @return self
     */
    public function setIsSensitive($is_sensitive)
    {
        $this->container['is_sensitive'] = $is_sensitive;

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


