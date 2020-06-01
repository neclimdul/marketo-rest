<?php
/**
 * UpdateFormFieldRequest
 *
 * PHP version 5
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
 * Swagger Codegen version: 2.4.14
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
 */
class UpdateFormFieldRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

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
      */
    protected static $swaggerFormats = [
        'blank_fields' => 'int32',
        'default_value' => null,
        'field_type' => null,
        'field_width' => 'int32',
        'form_prefill' => null,
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
      * Array of dynamic properties.
      *
      * @var mixed[]
      */
    protected $dynamicProperties = [];

    /**
     * {@inheritdoc}
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
        $this->container['blank_fields'] = isset($data['blank_fields']) ? $data['blank_fields'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['field_width'] = isset($data['field_width']) ? $data['field_width'] : null;
        $this->container['form_prefill'] = isset($data['form_prefill']) ? $data['form_prefill'] : null;
        $this->container['hint_text'] = isset($data['hint_text']) ? $data['hint_text'] : null;
        $this->container['initially_checked'] = isset($data['initially_checked']) ? $data['initially_checked'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['label_to_right'] = isset($data['label_to_right']) ? $data['label_to_right'] : null;
        $this->container['label_width'] = isset($data['label_width']) ? $data['label_width'] : null;
        $this->container['mask_input'] = isset($data['mask_input']) ? $data['mask_input'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['max_value'] = isset($data['max_value']) ? $data['max_value'] : null;
        $this->container['min_value'] = isset($data['min_value']) ? $data['min_value'] : null;
        $this->container['multi_select'] = isset($data['multi_select']) ? $data['multi_select'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['validation_message'] = isset($data['validation_message']) ? $data['validation_message'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['visible_lines'] = isset($data['visible_lines']) ? $data['visible_lines'] : null;
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
     * @return int
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
     * @return $this
     */
    public function setBlankFields($blank_fields)
    {
        $this->container['blank_fields'] = $blank_fields;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string
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
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string
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
     * @return $this
     */
    public function setFieldType($field_type)
    {
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets field_width
     *
     * @return int
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
     * @return $this
     */
    public function setFieldWidth($field_width)
    {
        $this->container['field_width'] = $field_width;

        return $this;
    }

    /**
     * Gets form_prefill
     *
     * @return bool
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
     * @return $this
     */
    public function setFormPrefill($form_prefill)
    {
        $this->container['form_prefill'] = $form_prefill;

        return $this;
    }

    /**
     * Gets hint_text
     *
     * @return string
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
     * @return $this
     */
    public function setHintText($hint_text)
    {
        $this->container['hint_text'] = $hint_text;

        return $this;
    }

    /**
     * Gets initially_checked
     *
     * @return bool
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
     * @return $this
     */
    public function setInitiallyChecked($initially_checked)
    {
        $this->container['initially_checked'] = $initially_checked;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string
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
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
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
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets label_to_right
     *
     * @return bool
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
     * @return $this
     */
    public function setLabelToRight($label_to_right)
    {
        $this->container['label_to_right'] = $label_to_right;

        return $this;
    }

    /**
     * Gets label_width
     *
     * @return int
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
     * @return $this
     */
    public function setLabelWidth($label_width)
    {
        $this->container['label_width'] = $label_width;

        return $this;
    }

    /**
     * Gets mask_input
     *
     * @return string
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
     * @return $this
     */
    public function setMaskInput($mask_input)
    {
        $this->container['mask_input'] = $mask_input;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return int
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
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return float
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
     * @return $this
     */
    public function setMaxValue($max_value)
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return float
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
     * @return $this
     */
    public function setMinValue($min_value)
    {
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets multi_select
     *
     * @return bool
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
     * @return $this
     */
    public function setMultiSelect($multi_select)
    {
        $this->container['multi_select'] = $multi_select;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
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
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets validation_message
     *
     * @return string
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
     * @return $this
     */
    public function setValidationMessage($validation_message)
    {
        $this->container['validation_message'] = $validation_message;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string
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
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets visible_lines
     *
     * @return int
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
     * @return $this
     */
    public function setVisibleLines($visible_lines)
    {
        $this->container['visible_lines'] = $visible_lines;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setDynamicProperties(array $fields)
    {
        $this->dynamicProperties = $fields;
    }

    /**
     * {@inheritdoc}
     */
    public function setDynamicProperty($property, $value)
    {
        $this->dynamicProperties[$property] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function getDynamicProperties()
    {
        return $this->dynamicProperties;
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
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
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
     * {@inheritdoc}
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


