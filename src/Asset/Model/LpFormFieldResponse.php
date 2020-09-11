<?php
/**
 * LpFormFieldResponse
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
 * Swagger Codegen version: 2.4.15
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
 * LpFormFieldResponse Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LpFormFieldResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LpFormFieldResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'blank_fields' => 'int',
        'column_number' => 'int',
        'data_type' => 'string',
        'default_value' => 'string',
        'field_meta_data' => 'object',
        'field_width' => 'int',
        'fields' => 'string[]',
        'form_prefill' => 'bool',
        'hint_text' => 'string',
        'id' => 'string',
        'instructions' => 'string',
        'label' => 'string',
        'label_width' => 'int',
        'max_length' => 'int',
        'required' => 'bool',
        'row_number' => 'int',
        'text' => 'string',
        'validation_message' => 'object',
        'visibility_rules' => '\NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRuleResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'blank_fields' => 'int32',
        'column_number' => 'int32',
        'data_type' => null,
        'default_value' => null,
        'field_meta_data' => null,
        'field_width' => 'int32',
        'fields' => null,
        'form_prefill' => null,
        'hint_text' => null,
        'id' => null,
        'instructions' => null,
        'label' => null,
        'label_width' => 'int32',
        'max_length' => 'int32',
        'required' => null,
        'row_number' => 'int32',
        'text' => null,
        'validation_message' => null,
        'visibility_rules' => null
    ];

    /**
      * Array of dynamic properties.
      *
      * @var mixed[]
      */
    protected $additionalProperties = [];

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
        'column_number' => 'columnNumber',
        'data_type' => 'dataType',
        'default_value' => 'defaultValue',
        'field_meta_data' => 'fieldMetaData',
        'field_width' => 'fieldWidth',
        'fields' => 'fields',
        'form_prefill' => 'formPrefill',
        'hint_text' => 'hintText',
        'id' => 'id',
        'instructions' => 'instructions',
        'label' => 'label',
        'label_width' => 'labelWidth',
        'max_length' => 'maxLength',
        'required' => 'required',
        'row_number' => 'rowNumber',
        'text' => 'text',
        'validation_message' => 'validationMessage',
        'visibility_rules' => 'visibilityRules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'blank_fields' => 'setBlankFields',
        'column_number' => 'setColumnNumber',
        'data_type' => 'setDataType',
        'default_value' => 'setDefaultValue',
        'field_meta_data' => 'setFieldMetaData',
        'field_width' => 'setFieldWidth',
        'fields' => 'setFields',
        'form_prefill' => 'setFormPrefill',
        'hint_text' => 'setHintText',
        'id' => 'setId',
        'instructions' => 'setInstructions',
        'label' => 'setLabel',
        'label_width' => 'setLabelWidth',
        'max_length' => 'setMaxLength',
        'required' => 'setRequired',
        'row_number' => 'setRowNumber',
        'text' => 'setText',
        'validation_message' => 'setValidationMessage',
        'visibility_rules' => 'setVisibilityRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'blank_fields' => 'getBlankFields',
        'column_number' => 'getColumnNumber',
        'data_type' => 'getDataType',
        'default_value' => 'getDefaultValue',
        'field_meta_data' => 'getFieldMetaData',
        'field_width' => 'getFieldWidth',
        'fields' => 'getFields',
        'form_prefill' => 'getFormPrefill',
        'hint_text' => 'getHintText',
        'id' => 'getId',
        'instructions' => 'getInstructions',
        'label' => 'getLabel',
        'label_width' => 'getLabelWidth',
        'max_length' => 'getMaxLength',
        'required' => 'getRequired',
        'row_number' => 'getRowNumber',
        'text' => 'getText',
        'validation_message' => 'getValidationMessage',
        'visibility_rules' => 'getVisibilityRules'
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
        $this->container['blank_fields'] = isset($data['blank_fields']) ? $data['blank_fields'] : null;
        $this->container['column_number'] = isset($data['column_number']) ? $data['column_number'] : null;
        $this->container['data_type'] = isset($data['data_type']) ? $data['data_type'] : null;
        $this->container['default_value'] = isset($data['default_value']) ? $data['default_value'] : null;
        $this->container['field_meta_data'] = isset($data['field_meta_data']) ? $data['field_meta_data'] : null;
        $this->container['field_width'] = isset($data['field_width']) ? $data['field_width'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['form_prefill'] = isset($data['form_prefill']) ? $data['form_prefill'] : null;
        $this->container['hint_text'] = isset($data['hint_text']) ? $data['hint_text'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['label_width'] = isset($data['label_width']) ? $data['label_width'] : null;
        $this->container['max_length'] = isset($data['max_length']) ? $data['max_length'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['row_number'] = isset($data['row_number']) ? $data['row_number'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['validation_message'] = isset($data['validation_message']) ? $data['validation_message'] : null;
        $this->container['visibility_rules'] = isset($data['visibility_rules']) ? $data['visibility_rules'] : null;
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
     * @return int
     */
    public function getBlankFields()
    {
        return $this->container['blank_fields'];
    }

    /**
     * Sets blank_fields
     *
     * @param int $blank_fields blank_fields
     *
     * @return $this
     */
    public function setBlankFields($blank_fields)
    {
        $this->container['blank_fields'] = $blank_fields;

        return $this;
    }

    /**
     * Gets column_number
     *
     * @return int
     */
    public function getColumnNumber()
    {
        return $this->container['column_number'];
    }

    /**
     * Sets column_number
     *
     * @param int $column_number column_number
     *
     * @return $this
     */
    public function setColumnNumber($column_number)
    {
        $this->container['column_number'] = $column_number;

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
     * @param string $data_type data_type
     *
     * @return $this
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

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
     * @param string $default_value default_value
     *
     * @return $this
     */
    public function setDefaultValue($default_value)
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets field_meta_data
     *
     * @return object
     */
    public function getFieldMetaData()
    {
        return $this->container['field_meta_data'];
    }

    /**
     * Sets field_meta_data
     *
     * @param object $field_meta_data field_meta_data
     *
     * @return $this
     */
    public function setFieldMetaData($field_meta_data)
    {
        $this->container['field_meta_data'] = $field_meta_data;

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
     * @param int $field_width field_width
     *
     * @return $this
     */
    public function setFieldWidth($field_width)
    {
        $this->container['field_width'] = $field_width;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return string[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param string[] $fields fields
     *
     * @return $this
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

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
     * @param bool $form_prefill form_prefill
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
     * @param string $hint_text hint_text
     *
     * @return $this
     */
    public function setHintText($hint_text)
    {
        $this->container['hint_text'] = $hint_text;

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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $instructions instructions
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
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

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
     * @param int $label_width label_width
     *
     * @return $this
     */
    public function setLabelWidth($label_width)
    {
        $this->container['label_width'] = $label_width;

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
     * @param int $max_length max_length
     *
     * @return $this
     */
    public function setMaxLength($max_length)
    {
        $this->container['max_length'] = $max_length;

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
     * @param bool $required required
     *
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets row_number
     *
     * @return int
     */
    public function getRowNumber()
    {
        return $this->container['row_number'];
    }

    /**
     * Sets row_number
     *
     * @param int $row_number row_number
     *
     * @return $this
     */
    public function setRowNumber($row_number)
    {
        $this->container['row_number'] = $row_number;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets validation_message
     *
     * @return object
     */
    public function getValidationMessage()
    {
        return $this->container['validation_message'];
    }

    /**
     * Sets validation_message
     *
     * @param object $validation_message validation_message
     *
     * @return $this
     */
    public function setValidationMessage($validation_message)
    {
        $this->container['validation_message'] = $validation_message;

        return $this;
    }

    /**
     * Gets visibility_rules
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRuleResponse
     */
    public function getVisibilityRules()
    {
        return $this->container['visibility_rules'];
    }

    /**
     * Sets visibility_rules
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRuleResponse $visibility_rules visibility_rules
     *
     * @return $this
     */
    public function setVisibilityRules($visibility_rules)
    {
        $this->container['visibility_rules'] = $visibility_rules;

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
     * Gets the string presentation of the object
     *
     * @return string
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


