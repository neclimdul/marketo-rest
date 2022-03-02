<?php

/**
 * FormVisibilityRuleDTO
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
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Asset\Model;

use ArrayAccess;
use NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * FormVisibilityRuleDTO Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
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
    protected static $swaggerModelName = 'FormVisibilityRuleDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'alt_label' => 'string',
        'operator' => 'string',
        'picklist_filter_values' => '\NecLimDul\MarketoRest\Asset\Model\PickListDTO[]',
        'subject_field' => 'string',
        'values' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
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
     * Gets alt_label
     *
     * @return string|null
     */
    public function getAltLabel(): ?string
    {
        return $this->container['alt_label'];
    }

    /**
     * Sets alt_label
     *
     * @param string|null $alt_label alt_label
     *
     * @return self<TKey, TValue>
     */
    public function setAltLabel(?string $alt_label): FormVisibilityRuleDTO
    {
        $this->container['alt_label'] = $alt_label;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string|null
     */
    public function getOperator(): ?string
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string|null $operator operator
     *
     * @return self<TKey, TValue>
     */
    public function setOperator(?string $operator): FormVisibilityRuleDTO
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets picklist_filter_values
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\PickListDTO[]|null
     */
    public function getPicklistFilterValues(): ?array
    {
        return $this->container['picklist_filter_values'];
    }

    /**
     * Sets picklist_filter_values
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\PickListDTO[]|null $picklist_filter_values picklist_filter_values
     *
     * @return self<TKey, TValue>
     */
    public function setPicklistFilterValues(?array $picklist_filter_values): FormVisibilityRuleDTO
    {
        $this->container['picklist_filter_values'] = $picklist_filter_values;

        return $this;
    }

    /**
     * Gets subject_field
     *
     * @return string|null
     */
    public function getSubjectField(): ?string
    {
        return $this->container['subject_field'];
    }

    /**
     * Sets subject_field
     *
     * @param string|null $subject_field subject_field
     *
     * @return self<TKey, TValue>
     */
    public function setSubjectField(?string $subject_field): FormVisibilityRuleDTO
    {
        $this->container['subject_field'] = $subject_field;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]|null
     */
    public function getValues(): ?array
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[]|null $values values
     *
     * @return self<TKey, TValue>
     */
    public function setValues(?array $values): FormVisibilityRuleDTO
    {
        $this->container['values'] = $values;

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
