<?php

/**
 * AddFormFieldRequest
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
 * AddFormFieldRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AddFormFieldRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AddFormFieldRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'blank_fields' => 'int',
        'default_value' => 'string',
        'field_id' => 'string',
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
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'blank_fields' => 'int32',
        'default_value' => null,
        'field_id' => null,
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
        'blank_fields' => 'blankFields',
        'default_value' => 'defaultValue',
        'field_id' => 'fieldId',
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
        'field_id' => 'setFieldId',
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
        'field_id' => 'getFieldId',
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
        $this->container['field_id'] = $data['field_id'] ?? null;
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

        if ($this->container['field_id'] === null) {
            $invalidProperties[] = "'field_id' can't be null";
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
     * Gets blank_fields
     *
     * @return int
     */
    public function getBlankFields(): int
    {
        return $this->container['blank_fields'];
    }

    /**
     * Sets blank_fields
     *
     * @param int|null $blank_fields Number of blank fields to show when progressive profiling is enabled
     *
     * @return self<TKey, TValue>
     */
    public function setBlankFields(?int $blank_fields): AddFormFieldRequest
    {
        $this->container['blank_fields'] = $blank_fields;

        return $this;
    }

    /**
     * Gets default_value
     *
     * @return string
     */
    public function getDefaultValue(): string
    {
        return $this->container['default_value'];
    }

    /**
     * Sets default_value
     *
     * @param string|null $default_value Optional default value for the field
     *
     * @return self<TKey, TValue>
     */
    public function setDefaultValue(?string $default_value): AddFormFieldRequest
    {
        $this->container['default_value'] = $default_value;

        return $this;
    }

    /**
     * Gets field_id
     *
     * @return string
     */
    public function getFieldId(): string
    {
        return $this->container['field_id'];
    }

    /**
     * Sets field_id
     *
     * @param string $field_id Id of the field
     *
     * @return self<TKey, TValue>
     */
    public function setFieldId(string $field_id): AddFormFieldRequest
    {
        $this->container['field_id'] = $field_id;

        return $this;
    }

    /**
     * Gets field_width
     *
     * @return int
     */
    public function getFieldWidth(): int
    {
        return $this->container['field_width'];
    }

    /**
     * Sets field_width
     *
     * @param int|null $field_width Width of the input or select element
     *
     * @return self<TKey, TValue>
     */
    public function setFieldWidth(?int $field_width): AddFormFieldRequest
    {
        $this->container['field_width'] = $field_width;

        return $this;
    }

    /**
     * Gets form_prefill
     *
     * @return bool
     */
    public function getFormPrefill(): bool
    {
        return $this->container['form_prefill'];
    }

    /**
     * Sets form_prefill
     *
     * @param bool|null $form_prefill Whether the field should prefill.  Default true
     *
     * @return self<TKey, TValue>
     */
    public function setFormPrefill(?bool $form_prefill): AddFormFieldRequest
    {
        $this->container['form_prefill'] = $form_prefill;

        return $this;
    }

    /**
     * Gets is_sensitive
     *
     * @return bool
     */
    public function getIsSensitive(): bool
    {
        return $this->container['is_sensitive'];
    }

    /**
     * Sets is_sensitive
     *
     * @param bool|null $is_sensitive Whether the field is marked as sensitive.  Default false
     *
     * @return self<TKey, TValue>
     */
    public function setIsSensitive(?bool $is_sensitive): AddFormFieldRequest
    {
        $this->container['is_sensitive'] = $is_sensitive;

        return $this;
    }

    /**
     * Gets hint_text
     *
     * @return string
     */
    public function getHintText(): string
    {
        return $this->container['hint_text'];
    }

    /**
     * Sets hint_text
     *
     * @param string|null $hint_text Hint text for the field
     *
     * @return self<TKey, TValue>
     */
    public function setHintText(?string $hint_text): AddFormFieldRequest
    {
        $this->container['hint_text'] = $hint_text;

        return $this;
    }

    /**
     * Gets initially_checked
     *
     * @return bool
     */
    public function getInitiallyChecked(): bool
    {
        return $this->container['initially_checked'];
    }

    /**
     * Sets initially_checked
     *
     * @param bool|null $initially_checked Whether the field should be checked upon loading.  Default false
     *
     * @return self<TKey, TValue>
     */
    public function setInitiallyChecked(?bool $initially_checked): AddFormFieldRequest
    {
        $this->container['initially_checked'] = $initially_checked;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string
     */
    public function getInstructions(): string
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string|null $instructions Instructions for the field
     *
     * @return self<TKey, TValue>
     */
    public function setInstructions(?string $instructions): AddFormFieldRequest
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label Label of the field
     *
     * @return self<TKey, TValue>
     */
    public function setLabel(?string $label): AddFormFieldRequest
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets label_to_right
     *
     * @return bool
     */
    public function getLabelToRight(): bool
    {
        return $this->container['label_to_right'];
    }

    /**
     * Sets label_to_right
     *
     * @param bool|null $label_to_right Whether the field label should be displayed to the right of the input/select element. Default false
     *
     * @return self<TKey, TValue>
     */
    public function setLabelToRight(?bool $label_to_right): AddFormFieldRequest
    {
        $this->container['label_to_right'] = $label_to_right;

        return $this;
    }

    /**
     * Gets label_width
     *
     * @return int
     */
    public function getLabelWidth(): int
    {
        return $this->container['label_width'];
    }

    /**
     * Sets label_width
     *
     * @param int|null $label_width Width of the field label element
     *
     * @return self<TKey, TValue>
     */
    public function setLabelWidth(?int $label_width): AddFormFieldRequest
    {
        $this->container['label_width'] = $label_width;

        return $this;
    }

    /**
     * Gets mask_input
     *
     * @return string
     */
    public function getMaskInput(): string
    {
        return $this->container['mask_input'];
    }

    /**
     * Sets mask_input
     *
     * @param string|null $mask_input Optional input mask for the field
     *
     * @return self<TKey, TValue>
     */
    public function setMaskInput(?string $mask_input): AddFormFieldRequest
    {
        $this->container['mask_input'] = $mask_input;

        return $this;
    }

    /**
     * Gets max_length
     *
     * @return int
     */
    public function getMaxLength(): int
    {
        return $this->container['max_length'];
    }

    /**
     * Sets max_length
     *
     * @param int|null $max_length Maximum length for text type fields
     *
     * @return self<TKey, TValue>
     */
    public function setMaxLength(?int $max_length): AddFormFieldRequest
    {
        $this->container['max_length'] = $max_length;

        return $this;
    }

    /**
     * Gets max_value
     *
     * @return float
     */
    public function getMaxValue(): float
    {
        return $this->container['max_value'];
    }

    /**
     * Sets max_value
     *
     * @param float|null $max_value Maximum value accepted by the field
     *
     * @return self<TKey, TValue>
     */
    public function setMaxValue(?float $max_value): AddFormFieldRequest
    {
        $this->container['max_value'] = $max_value;

        return $this;
    }

    /**
     * Gets min_value
     *
     * @return float
     */
    public function getMinValue(): float
    {
        return $this->container['min_value'];
    }

    /**
     * Sets min_value
     *
     * @param float|null $min_value Minimum value accepted by the field
     *
     * @return self<TKey, TValue>
     */
    public function setMinValue(?float $min_value): AddFormFieldRequest
    {
        $this->container['min_value'] = $min_value;

        return $this;
    }

    /**
     * Gets multi_select
     *
     * @return bool
     */
    public function getMultiSelect(): bool
    {
        return $this->container['multi_select'];
    }

    /**
     * Sets multi_select
     *
     * @param bool|null $multi_select Whether the field should allow multiple selections. Default false
     *
     * @return self<TKey, TValue>
     */
    public function setMultiSelect(?bool $multi_select): AddFormFieldRequest
    {
        $this->container['multi_select'] = $multi_select;

        return $this;
    }

    /**
     * Gets required
     *
     * @return bool
     */
    public function getRequired(): bool
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     *
     * @param bool|null $required Whether the field is required to submit the form.  Default false
     *
     * @return self<TKey, TValue>
     */
    public function setRequired(?bool $required): AddFormFieldRequest
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets validation_message
     *
     * @return string
     */
    public function getValidationMessage(): string
    {
        return $this->container['validation_message'];
    }

    /**
     * Sets validation_message
     *
     * @param string|null $validation_message Validation message to display on failed validation
     *
     * @return self<TKey, TValue>
     */
    public function setValidationMessage(?string $validation_message): AddFormFieldRequest
    {
        $this->container['validation_message'] = $validation_message;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string
     */
    public function getValues(): string
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string|null $values Comma-separated list of accepted values for the field.  Only for select-field types
     *
     * @return self<TKey, TValue>
     */
    public function setValues(?string $values): AddFormFieldRequest
    {
        $this->container['values'] = $values;

        return $this;
    }

    /**
     * Gets visible_lines
     *
     * @return int
     */
    public function getVisibleLines(): int
    {
        return $this->container['visible_lines'];
    }

    /**
     * Sets visible_lines
     *
     * @param int|null $visible_lines Number of lines to display for the field element
     *
     * @return self<TKey, TValue>
     */
    public function setVisibleLines(?int $visible_lines): AddFormFieldRequest
    {
        $this->container['visible_lines'] = $visible_lines;

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
