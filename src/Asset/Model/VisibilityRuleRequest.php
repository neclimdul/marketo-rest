<?php
/**
 * VisibilityRuleRequest
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
 * VisibilityRuleRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VisibilityRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VisibilityRuleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alt_label' => 'string',
        'operator' => 'string',
        'pick_list_values' => '\NecLimDul\MarketoRest\Asset\Model\PickListDTO[]',
        'subject_field' => 'string',
        'values' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alt_label' => null,
        'operator' => null,
        'pick_list_values' => null,
        'subject_field' => null,
        'values' => null
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
        'alt_label' => 'altLabel',
        'operator' => 'operator',
        'pick_list_values' => 'pickListValues',
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
        'pick_list_values' => 'setPickListValues',
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
        'pick_list_values' => 'getPickListValues',
        'subject_field' => 'getSubjectField',
        'values' => 'getValues'
    ];

    const OPERATOR_IS = 'is';
    const OPERATOR_IS_NOT = 'isNot';
    const OPERATOR_IS_EMPTY = 'isEmpty';
    const OPERATOR_IS_NOT_EMPTY = 'isNotEmpty';
    const OPERATOR_STARTS_WITH = 'startsWith';
    const OPERATOR_NOT_STARTS_WITH = 'notStartsWith';
    const OPERATOR_ENDS_WITH = 'endsWith';
    const OPERATOR_NOT_ENDS_WITH = 'notEndsWith';
    const OPERATOR_CONTAINS = 'contains';
    const OPERATOR_NOT_CONTAINS = 'notContains';
    const OPERATOR_GREATER_THAN = 'greaterThan';
    const OPERATOR_LESS_THAN = 'lessThan';
    const OPERATOR_AT_LEAST = 'atLeast';
    const OPERATOR_AT_MOST = 'atMost';
    const OPERATOR_BETWEEN = 'between';
    const OPERATOR_NOT_BETWEEN = 'notBetween';
    const OPERATOR_NOT_IN_TIME_FRAME = 'notInTimeFrame';
    const OPERATOR_IN_PAST = 'inPast';
    const OPERATOR_NOT_IN_PAST = 'notInPast';
    const OPERATOR_AFTER = 'after';
    const OPERATOR_BEFORE = 'before';
    const OPERATOR_IN_TIME_FRAME = 'inTimeFrame';
    const OPERATOR_ON_OR_AFTER = 'onOrAfter';
    const OPERATOR_ON_OR_BEFORE = 'onOrBefore';
    

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
        $this->container['alt_label'] = isset($data['alt_label']) ? $data['alt_label'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['pick_list_values'] = isset($data['pick_list_values']) ? $data['pick_list_values'] : null;
        $this->container['subject_field'] = isset($data['subject_field']) ? $data['subject_field'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
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

        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        $allowedValues = $this->getOperatorAllowableValues();
        if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operator', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['subject_field'] === null) {
            $invalidProperties[] = "'subject_field' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_IS,
            self::OPERATOR_IS_NOT,
            self::OPERATOR_IS_EMPTY,
            self::OPERATOR_IS_NOT_EMPTY,
            self::OPERATOR_STARTS_WITH,
            self::OPERATOR_NOT_STARTS_WITH,
            self::OPERATOR_ENDS_WITH,
            self::OPERATOR_NOT_ENDS_WITH,
            self::OPERATOR_CONTAINS,
            self::OPERATOR_NOT_CONTAINS,
            self::OPERATOR_GREATER_THAN,
            self::OPERATOR_LESS_THAN,
            self::OPERATOR_AT_LEAST,
            self::OPERATOR_AT_MOST,
            self::OPERATOR_BETWEEN,
            self::OPERATOR_NOT_BETWEEN,
            self::OPERATOR_NOT_IN_TIME_FRAME,
            self::OPERATOR_IN_PAST,
            self::OPERATOR_NOT_IN_PAST,
            self::OPERATOR_AFTER,
            self::OPERATOR_BEFORE,
            self::OPERATOR_IN_TIME_FRAME,
            self::OPERATOR_ON_OR_AFTER,
            self::OPERATOR_ON_OR_BEFORE,
        ];
    }
    

    /**
     * Gets alt_label
     *
     * @return string
     */
    public function getAltLabel()
    {
        return $this->container['alt_label'];
    }

    /**
     * Sets alt_label
     *
     * @param string $alt_label alt_label
     *
     * @return $this
     */
    public function setAltLabel($alt_label)
    {
        $this->container['alt_label'] = $alt_label;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator Operation to apply to target field.  Evaluated against the list of values when applicable.
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $allowedValues = $this->getOperatorAllowableValues();
        if (!in_array($operator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets pick_list_values
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\PickListDTO[]
     */
    public function getPickListValues()
    {
        return $this->container['pick_list_values'];
    }

    /**
     * Sets pick_list_values
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\PickListDTO[] $pick_list_values Alternative label to display when rules are applied.
     *
     * @return $this
     */
    public function setPickListValues($pick_list_values)
    {
        $this->container['pick_list_values'] = $pick_list_values;

        return $this;
    }

    /**
     * Gets subject_field
     *
     * @return string
     */
    public function getSubjectField()
    {
        return $this->container['subject_field'];
    }

    /**
     * Sets subject_field
     *
     * @param string $subject_field Target field id to apply the operation defined by operator to
     *
     * @return $this
     */
    public function setSubjectField($subject_field)
    {
        $this->container['subject_field'] = $subject_field;

        return $this;
    }

    /**
     * Gets values
     *
     * @return string[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param string[] $values Comma-separated list of values to match against.  Valid for operators 'is', 'isNot', 'startsWith', 'notStartsWith', 'endsWith', 'notEndsWith', 'contains', and 'notContains'
     *
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


