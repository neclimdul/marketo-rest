<?php
/**
 * FieldsMetaDataResponse
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
 * FieldsMetaDataResponse Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FieldsMetaDataResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FieldsMetaDataResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data_type' => 'string',
        'default_value' => 'string',
        'description' => 'string',
        'field_mask_values' => 'string',
        'field_width' => 'int',
        'id' => 'string',
        'initially_checked' => 'bool',
        'is_label_to_right' => 'bool',
        'is_multiselect' => 'bool',
        'is_required' => 'bool',
        'is_sensitive' => 'bool',
        'label_width' => 'int',
        'max_length' => 'int',
        'maximum_number' => 'float',
        'minimum_number' => 'float',
        'picklist_values' => 'string',
        'placeholder_text' => 'string',
        'validation_message' => 'string',
        'visible_rows' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data_type' => null,
        'default_value' => null,
        'description' => null,
        'field_mask_values' => null,
        'field_width' => 'int32',
        'id' => null,
        'initially_checked' => null,
        'is_label_to_right' => null,
        'is_multiselect' => null,
        'is_required' => null,
        'is_sensitive' => null,
        'label_width' => 'int32',
        'max_length' => 'int32',
        'maximum_number' => 'float',
        'minimum_number' => 'float',
        'picklist_values' => null,
        'placeholder_text' => null,
        'validation_message' => null,
        'visible_rows' => 'int32'
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
        'data_type' => 'dataType',
        'default_value' => 'defaultValue',
        'description' => 'description',
        'field_mask_values' => 'fieldMaskValues',
        'field_width' => 'fieldWidth',
        'id' => 'id',
        'initially_checked' => 'initiallyChecked',
        'is_label_to_right' => 'isLabelToRight',
        'is_multiselect' => 'isMultiselect',
        'is_required' => 'isRequired',
        'is_sensitive' => 'isSensitive',
        'label_width' => 'labelWidth',
        'max_length' => 'maxLength',
        'maximum_number' => 'maximumNumber',
        'minimum_number' => 'minimumNumber',
        'picklist_values' => 'picklistValues',
        'placeholder_text' => 'placeholderText',
        'validation_message' => 'validationMessage',
        'visible_rows' => 'visibleRows'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data_type' => 'setDataType',
        'default_value' => 'setDefaultValue',
        'description' => 'setDescription',
        'field_mask_values' => 'setFieldMaskValues',
        'field_width' => 'setFieldWidth',
        'id' => 'setId',
        'initially_checked' => 'setInitiallyChecked',
        'is_label_to_right' => 'setIsLabelToRight',
        'is_multiselect' => 'setIsMultiselect',
        'is_required' => 'setIsRequired',
        'is_sensitive' => 'setIsSensitive',
        'label_width' => 'setLabelWidth',
        'max_length' => 'setMaxLength',
        'maximum_number' => 'setMaximumNumber',
        'minimum_number' => 'setMinimumNumber',
        'picklist_values' => 'setPicklistValues',
        'placeholder_text' => 'setPlaceholderText',
        'validation_message' => 'setValidationMessage',
        'visible_rows' => 'setVisibleRows'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data_type' => 'getDataType',
        'default_value' => 'getDefaultValue',
        'description' => 'getDescription',
        'field_mask_values' => 'getFieldMaskValues',
        'field_width' => 'getFieldWidth',
        'id' => 'getId',
        'initially_checked' => 'getInitiallyChecked',
        'is_label_to_right' => 'getIsLabelToRight',
        'is_multiselect' => 'getIsMultiselect',
        'is_required' => 'getIsRequired',
        'is_sensitive' => 'getIsSensitive',
        'label_width' => 'getLabelWidth',
        'max_length' => 'getMaxLength',
        'maximum_number' => 'getMaximumNumber',
        'minimum_number' => 'getMinimumNumber',
        'picklist_values' => 'getPicklistValues',
        'placeholder_text' => 'getPlaceholderText',
        'validation_message' => 'getValidationMessage',
        'visible_rows' => 'getVisibleRows'
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
        $this->container['data_type'] = $data['data_type'] ?? null;
        $this->container['default_value'] = $data['default_value'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['field_mask_values'] = $data['field_mask_values'] ?? null;
        $this->container['field_width'] = $data['field_width'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['initially_checked'] = $data['initially_checked'] ?? null;
        $this->container['is_label_to_right'] = $data['is_label_to_right'] ?? null;
        $this->container['is_multiselect'] = $data['is_multiselect'] ?? null;
        $this->container['is_required'] = $data['is_required'] ?? null;
        $this->container['is_sensitive'] = $data['is_sensitive'] ?? null;
        $this->container['label_width'] = $data['label_width'] ?? null;
        $this->container['max_length'] = $data['max_length'] ?? null;
        $this->container['maximum_number'] = $data['maximum_number'] ?? null;
        $this->container['minimum_number'] = $data['minimum_number'] ?? null;
        $this->container['picklist_values'] = $data['picklist_values'] ?? null;
        $this->container['placeholder_text'] = $data['placeholder_text'] ?? null;
        $this->container['validation_message'] = $data['validation_message'] ?? null;
        $this->container['visible_rows'] = $data['visible_rows'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets data_type
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string|null $data_type Type of field
     *
     * @return self
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string|null
     */
    public function getDefaultValue()
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string|null $default_value Optional default value for the field
     *
     * @return self
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the field
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets field_mask_values
     *
     * @return string|null
     */
    public function getFieldMaskValues()
    {
        return $this->container['field_mask_values'];
    }

    /**
     * Sets field_mask_values
     *
     * @param string|null $field_mask_values Optional input mask for the field
     *
     * @return self
     */
    public function setFieldMaskValues($field_mask_values)
    {
        $this->container['field_mask_values'] = $field_mask_values;

        return $this;
    }

    /**
     * Gets field_width
     *
     * @return int|null
     */
    public function getFieldWidth()
    {
        return $this->container['field_width'];
    }

    /**
     * Sets field_width
     *
     * @param int|null $field_width Width of the input or select element
     *
     * @return self
     */
    public function setFieldWidth($field_width)
    {
        $this->container['field_width'] = $field_width;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Id of the field
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets initially_checked
     *
     * @return bool|null
     */
    public function getInitiallyChecked()
    {
        return $this->container['initially_checked'];
    }

    /**
     * Sets initially_checked
     *
     * @param bool|null $initially_checked Whether the field should be checked upon loading.  Default false
     *
     * @return self
     */
    public function setInitiallyChecked($initially_checked)
    {
        $this->container['initially_checked'] = $initially_checked;

        return $this;
    }

    /**
     * Gets is_label_to_right
     *
     * @return bool|null
     */
    public function getIsLabelToRight()
    {
        return $this->container['is_label_to_right'];
    }

    /**
     * Sets is_label_to_right
     *
     * @param bool|null $is_label_to_right Whether the field label should be displayed to the right of the input/select element. Default false
     *
     * @return self
     */
    public function setIsLabelToRight($is_label_to_right)
    {
        $this->container['is_label_to_right'] = $is_label_to_right;

        return $this;
    }

    /**
     * Gets is_multiselect
     *
     * @return bool|null
     */
    public function getIsMultiselect()
    {
        return $this->container['is_multiselect'];
    }

    /**
     * Sets is_multiselect
     *
     * @param bool|null $is_multiselect Whether the field should allow multiple selections. Default false
     *
     * @return self
     */
    public function setIsMultiselect($is_multiselect)
    {
        $this->container['is_multiselect'] = $is_multiselect;

        return $this;
    }

    /**
     * Gets is_required
     *
     * @return bool|null
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required
     *
     * @param bool|null $is_required Whether the field is required to submit the form.  Default false
     *
     * @return self
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets is_sensitive
     *
     * @return bool|null
     */
    public function getIsSensitive()
    {
        return $this->container['is_sensitive'];
    }

    /**
     * Sets is_sensitive
     *
     * @param bool|null $is_sensitive Whether the field is marked as sensitive.  Default false
     *
     * @return self
     */
    public function setIsSensitive($is_sensitive)
    {
        $this->container['is_sensitive'] = $is_sensitive;

        return $this;
    }

    /**
     * Gets label_width
     *
     * @return int|null
     */
    public function getLabelWidth()
    {
        return $this->container['label_width'];
    }

    /**
     * Sets label_width
     *
     * @param int|null $label_width Width of the field label element
     *
     * @return self
     */
    public function setLabelWidth($label_width)
    {
        $this->container['label_width'] = $label_width;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return int|null
     */
    public function getMaxLength()
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param int|null $max_length Maximum length for text type fields
     *
     * @return self
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets maximum_number
     *
     * @return float|null
     */
    public function getMaximumNumber()
    {
        return $this->container['maximum_number'];
    }

    /**
     * Sets maximum_number
     *
     * @param float|null $maximum_number Maximum value accepted by the field
     *
     * @return self
     */
    public function setMaximumNumber($maximum_number)
    {
        $this->container['maximum_number'] = $maximum_number;

        return $this;
    }

    /**
     * Gets minimum_number
     *
     * @return float|null
     */
    public function getMinimumNumber()
    {
        return $this->container['minimum_number'];
    }

    /**
     * Sets minimum_number
     *
     * @param float|null $minimum_number Minimum value accepted by the field
     *
     * @return self
     */
    public function setMinimumNumber($minimum_number)
    {
        $this->container['minimum_number'] = $minimum_number;

        return $this;
    }

    /**
     * Gets picklist_values
     *
     * @return string|null
     */
    public function getPicklistValues()
    {
        return $this->container['picklist_values'];
    }

    /**
     * Sets picklist_values
     *
     * @param string|null $picklist_values Comma-separated list of available picklist values for the field
     *
     * @return self
     */
    public function setPicklistValues($picklist_values)
    {
        $this->container['picklist_values'] = $picklist_values;

        return $this;
    }

    /**
     * Gets placeholder_text
     *
     * @return string|null
     */
    public function getPlaceholderText()
    {
        return $this->container['placeholder_text'];
    }

    /**
     * Sets placeholder_text
     *
     * @param string|null $placeholder_text Placeholder text for the field
     *
     * @return self
     */
    public function setPlaceholderText($placeholder_text)
    {
        $this->container['placeholder_text'] = $placeholder_text;

        return $this;
    }

    /**
     * Gets validation_message
     *
     * @return string|null
     */
    public function getValidationMessage()
    {
        return $this->container['validation_message'];
    }

    /**
     * Sets validation_message
     *
     * @param string|null $validation_message Validation message to display on failed validation
     *
     * @return self
     */
    public function setValidationMessage($validation_message)
    {
        $this->container['validation_message'] = $validation_message;

        return $this;
    }

    /**
     * Gets visible_rows
     *
     * @return int|null
     */
    public function getVisibleRows()
    {
        return $this->container['visible_rows'];
    }

    /**
     * Sets visible_rows
     *
     * @param int|null $visible_rows Number of rows visible for progressive profiling
     *
     * @return self
     */
    public function setVisibleRows($visible_rows)
    {
        $this->container['visible_rows'] = $visible_rows;

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


