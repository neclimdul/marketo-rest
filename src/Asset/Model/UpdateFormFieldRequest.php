<?php
/**
 * UpdateFormFieldRequest
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
 * UpdateFormFieldRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<string,?mixed>
 */
class UpdateFormFieldRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateFormFieldRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'blank_fields' => 'int',
        'default_value' => 'string',
        'field_type' => 'string',
        'field_width' => 'int',
        'form_prefill' => 'bool',
        'is_sensitive' => 'bool',
        'hint_text' => 'string',
        'initially_checked' => 'bool',
        'instructions' => 'string',
        'label' => 'string',
        'label_to_right' => 'bool',
        'label_width' => 'int',
        'mask_input' => 'string',
        'max_length' => 'int',
        'max_value' => 'float',
        'min_value' => 'float',
        'multi_select' => 'bool',
        'required' => 'bool',
        'validation_message' => 'string',
        'values' => 'string',
        'visible_lines' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'blank_fields' => 'int32',
        'default_value' => null,
        'field_type' => null,
        'field_width' => 'int32',
        'form_prefill' => null,
        'is_sensitive' => null,
        'hint_text' => null,
        'initially_checked' => null,
        'instructions' => null,
        'label' => null,
        'label_to_right' => null,
        'label_width' => 'int32',
        'mask_input' => null,
        'max_length' => 'int32',
        'max_value' => 'float',
        'min_value' => 'float',
        'multi_select' => null,
        'required' => null,
        'validation_message' => null,
        'values' => null,
        'visible_lines' => 'int32'
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
        'blank_fields' => 'blankFields',
        'default_value' => 'defaultValue',
        'field_type' => 'fieldType',
        'field_width' => 'fieldWidth',
        'form_prefill' => 'formPrefill',
        'is_sensitive' => 'isSensitive',
        'hint_text' => 'hintText',
        'initially_checked' => 'initiallyChecked',
        'instructions' => 'instructions',
        'label' => 'label',
        'label_to_right' => 'labelToRight',
        'label_width' => 'labelWidth',
        'mask_input' => 'maskInput',
        'max_length' => 'maxLength',
        'max_value' => 'maxValue',
        'min_value' => 'minValue',
        'multi_select' => 'multiSelect',
        'required' => 'required',
        'validation_message' => 'validationMessage',
        'values' => 'values',
        'visible_lines' => 'visibleLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blank_fields' => 'setBlankFields',
        'default_value' => 'setDefaultValue',
        'field_type' => 'setFieldType',
        'field_width' => 'setFieldWidth',
        'form_prefill' => 'setFormPrefill',
        'is_sensitive' => 'setIsSensitive',
        'hint_text' => 'setHintText',
        'initially_checked' => 'setInitiallyChecked',
        'instructions' => 'setInstructions',
        'label' => 'setLabel',
        'label_to_right' => 'setLabelToRight',
        'label_width' => 'setLabelWidth',
        'mask_input' => 'setMaskInput',
        'max_length' => 'setMaxLength',
        'max_value' => 'setMaxValue',
        'min_value' => 'setMinValue',
        'multi_select' => 'setMultiSelect',
        'required' => 'setRequired',
        'validation_message' => 'setValidationMessage',
        'values' => 'setValues',
        'visible_lines' => 'setVisibleLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blank_fields' => 'getBlankFields',
        'default_value' => 'getDefaultValue',
        'field_type' => 'getFieldType',
        'field_width' => 'getFieldWidth',
        'form_prefill' => 'getFormPrefill',
        'is_sensitive' => 'getIsSensitive',
        'hint_text' => 'getHintText',
        'initially_checked' => 'getInitiallyChecked',
        'instructions' => 'getInstructions',
        'label' => 'getLabel',
        'label_to_right' => 'getLabelToRight',
        'label_width' => 'getLabelWidth',
        'mask_input' => 'getMaskInput',
        'max_length' => 'getMaxLength',
        'max_value' => 'getMaxValue',
        'min_value' => 'getMinValue',
        'multi_select' => 'getMultiSelect',
        'required' => 'getRequired',
        'validation_message' => 'getValidationMessage',
        'values' => 'getValues',
        'visible_lines' => 'getVisibleLines'
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
        $this->container['blank_fields'] = $data['blank_fields'] ?? null;
        $this->container['default_value'] = $data['default_value'] ?? null;
        $this->container['field_type'] = $data['field_type'] ?? null;
        $this->container['field_width'] = $data['field_width'] ?? null;
        $this->container['form_prefill'] = $data['form_prefill'] ?? null;
        $this->container['is_sensitive'] = $data['is_sensitive'] ?? null;
        $this->container['hint_text'] = $data['hint_text'] ?? null;
        $this->container['initially_checked'] = $data['initially_checked'] ?? null;
        $this->container['instructions'] = $data['instructions'] ?? null;
        $this->container['label'] = $data['label'] ?? null;
        $this->container['label_to_right'] = $data['label_to_right'] ?? null;
        $this->container['label_width'] = $data['label_width'] ?? null;
        $this->container['mask_input'] = $data['mask_input'] ?? null;
        $this->container['max_length'] = $data['max_length'] ?? null;
        $this->container['max_value'] = $data['max_value'] ?? null;
        $this->container['min_value'] = $data['min_value'] ?? null;
        $this->container['multi_select'] = $data['multi_select'] ?? null;
        $this->container['required'] = $data['required'] ?? null;
        $this->container['validation_message'] = $data['validation_message'] ?? null;
        $this->container['values'] = $data['values'] ?? null;
        $this->container['visible_lines'] = $data['visible_lines'] ?? null;
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
     * Gets blank_fields
     *
     * @return int|null
     */
    public function getBlankFields()
    {
        return $this->container['blank_fields'];
    }

    /**
     * Sets blank_fields
     *
     * @param int $blank_fields Number of blank fields to show when progressive profiling is enabled
     *
     * @return self
     */
    public function setBlankFields($blank_fields)
    {
        $this->container['blank_fields'] = $blank_fields;

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
     * @param string $default_value Optional default value for the field
     *
     * @return self
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string|null
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string $field_type Type of field
     *
     * @return self
     */
    public function setFieldType($field_type)
    {
        $this->container['field_type'] = $field_type;

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
     * @param int $field_width Width of the input or select element
     *
     * @return self
     */
    public function setFieldWidth($field_width)
    {
        $this->container['field_width'] = $field_width;

        return $this;
    }

    /**
     * Gets form_prefill
     *
     * @return bool|null
     */
    public function getFormPrefill()
    {
        return $this->container['form_prefill'];
    }

    /**
     * Sets form_prefill
     *
     * @param bool $form_prefill Whether the field should prefill.  Default true
     *
     * @return self
     */
    public function setFormPrefill($form_prefill)
    {
        $this->container['form_prefill'] = $form_prefill;

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
     * @param bool $is_sensitive Whether the field is marked as sensitive.  Default false
     *
     * @return self
     */
    public function setIsSensitive($is_sensitive)
    {
        $this->container['is_sensitive'] = $is_sensitive;

        return $this;
    }

    /**
     * Gets hint_text
     *
     * @return string|null
     */
    public function getHintText()
    {
        return $this->container['hint_text'];
    }

    /**
     * Sets hint_text
     *
     * @param string $hint_text Hint text for the field
     *
     * @return self
     */
    public function setHintText($hint_text)
    {
        $this->container['hint_text'] = $hint_text;

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
     * @param bool $initially_checked Whether the field should be checked upon loading.  Default false
     *
     * @return self
     */
    public function setInitiallyChecked($initially_checked)
    {
        $this->container['initially_checked'] = $initially_checked;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string|null
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string $instructions Instructions for the field
     *
     * @return self
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Label of the field
     *
     * @return self
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets label_to_right
     *
     * @return bool|null
     */
    public function getLabelToRight()
    {
        return $this->container['label_to_right'];
    }

    /**
     * Sets label_to_right
     *
     * @param bool $label_to_right Whether the field label should be displayed to the right of the input/select element. Default false
     *
     * @return self
     */
    public function setLabelToRight($label_to_right)
    {
        $this->container['label_to_right'] = $label_to_right;

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
     * @param int $label_width Width of the field label element
     *
     * @return self
     */
    public function setLabelWidth($label_width)
    {
        $this->container['label_width'] = $label_width;

        return $this;
    }

    /**
     * Gets mask_input
     *
     * @return string|null
     */
    public function getMaskInput()
    {
        return $this->container['mask_input'];
    }

    /**
     * Sets mask_input
     *
     * @param string $mask_input Optional input mask for the field
     *
     * @return self
     */
    public function setMaskInput($mask_input)
    {
        $this->container['mask_input'] = $mask_input;

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
     * @param int $max_length Maximum length for text type fields
     *
     * @return self
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return float|null
     */
    public function getMaxValue()
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param float $max_value Maximum value accepted by the field
     *
     * @return self
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return float|null
     */
    public function getMinValue()
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param float $min_value Minimum value accepted by the field
     *
     * @return self
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets multi_select
     *
     * @return bool|null
     */
    public function getMultiSelect()
    {
        return $this->container['multi_select'];
    }

    /**
     * Sets multi_select
     *
     * @param bool $multi_select Whether the field should allow multiple selections. Default false
     *
     * @return self
     */
    public function setMultiSelect($multi_select)
    {
        $this->container['multi_select'] = $multi_select;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool $required Whether the field is required to submit the form.  Default false
     *
     * @return self
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

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
     * @param string $validation_message Validation message to display on failed validation
     *
     * @return self
     */
    public function setValidationMessage($validation_message)
    {
        $this->container['validation_message'] = $validation_message;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string $values Array of JSON objects that contain field attributes. Only for select-field types.  Example: values=[{'label':'Select...','value':'','isDefault':true,'selected':true}, {'label':'MR','value':'Mr'}, {'label':'MS','value':'Ms'}, {'label':'MRS','value':'Mrs'}, {'label':'DR','value':'Dr'}, {'label':'PROF','value':'Prof'}]
     *
     * @return self
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets visible_lines
     *
     * @return int|null
     */
    public function getVisibleLines()
    {
        return $this->container['visible_lines'];
    }

    /**
     * Sets visible_lines
     *
     * @param int $visible_lines Number of lines to display for the field element
     *
     * @return self
     */
    public function setVisibleLines($visible_lines)
    {
        $this->container['visible_lines'] = $visible_lines;

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


