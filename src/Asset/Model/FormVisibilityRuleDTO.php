<?php
/**
 * FormVisibilityRuleDTO
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
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

namespace NecLimDul\MarketoRest\Asset\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * FormVisibilityRuleDTO Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FormVisibilityRuleDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FormVisibilityRuleDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alt_label' => 'string',
        'operator' => 'string',
        'picklist_filter_values' => '\NecLimDul\MarketoRest\Asset\Model\PickListDTO[]',
        'subject_field' => 'string',
        'values' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'alt_label' => null,
        'operator' => null,
        'picklist_filter_values' => null,
        'subject_field' => null,
        'values' => null
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
        'alt_label' => 'altLabel',
        'operator' => 'operator',
        'picklist_filter_values' => 'picklistFilterValues',
        'subject_field' => 'subjectField',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alt_label' => 'setAltLabel',
        'operator' => 'setOperator',
        'picklist_filter_values' => 'setPicklistFilterValues',
        'subject_field' => 'setSubjectField',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alt_label' => 'getAltLabel',
        'operator' => 'getOperator',
        'picklist_filter_values' => 'getPicklistFilterValues',
        'subject_field' => 'getSubjectField',
        'values' => 'getValues'
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
        $this->container['alt_label'] = $data['alt_label'] ?? null;
        $this->container['operator'] = $data['operator'] ?? null;
        $this->container['picklist_filter_values'] = $data['picklist_filter_values'] ?? null;
        $this->container['subject_field'] = $data['subject_field'] ?? null;
        $this->container['values'] = $data['values'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
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
     * Gets alt_label
     *
     * @return string|null
     */
    public function getAltLabel()
    {
        return $this->container['alt_label'];
    }

    /**
     * Sets alt_label
     *
     * @param string|null $alt_label alt_label
     *
     * @return self
     */
    public function setAltLabel($alt_label)
    {
        $this->container['alt_label'] = $alt_label;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string|null
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string|null $operator operator
     *
     * @return self
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets picklist_filter_values
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\PickListDTO[]|null
     */
    public function getPicklistFilterValues()
    {
        return $this->container['picklist_filter_values'];
    }

    /**
     * Sets picklist_filter_values
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\PickListDTO[]|null $picklist_filter_values picklist_filter_values
     *
     * @return self
     */
    public function setPicklistFilterValues($picklist_filter_values)
    {
        $this->container['picklist_filter_values'] = $picklist_filter_values;

        return $this;
    }

    /**
     * Gets subject_field
     *
     * @return string|null
     */
    public function getSubjectField()
    {
        return $this->container['subject_field'];
    }

    /**
     * Sets subject_field
     *
     * @param string|null $subject_field subject_field
     *
     * @return self
     */
    public function setSubjectField($subject_field)
    {
        $this->container['subject_field'] = $subject_field;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[]|null $values values
     *
     * @return self
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


