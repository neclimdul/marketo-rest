<?php
/**
 * FormFieldVisibilityRequest
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
 * FormFieldVisibilityRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FormFieldVisibilityRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FormFieldVisibilityRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rule_type' => 'string',
        'rules' => '\NecLimDul\MarketoRest\Asset\Model\VisibilityRuleRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'rule_type' => null,
        'rules' => null
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
        'rule_type' => 'ruleType',
        'rules' => 'rules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rule_type' => 'setRuleType',
        'rules' => 'setRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rule_type' => 'getRuleType',
        'rules' => 'getRules'
    ];

    const RULE_TYPE_SHOW = 'show';
    const RULE_TYPE_ALWAYS_SHOW = 'alwaysShow';
    const RULE_TYPE_HIDE = 'hide';
    

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
        $this->container['rule_type'] = isset($data['rule_type']) ? $data['rule_type'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
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

        if ($this->container['rule_type'] === null) {
            $invalidProperties[] = "'rule_type' can't be null";
        }
        $allowedValues = $this->getRuleTypeAllowableValues();
        if (!is_null($this->container['rule_type']) && !in_array($this->container['rule_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'rule_type', must be one of '%s'",
                $this->container['rule_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['rules'] === null) {
            $invalidProperties[] = "'rules' can't be null";
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
    public function getRuleTypeAllowableValues()
    {
        return [
            self::RULE_TYPE_SHOW,
            self::RULE_TYPE_ALWAYS_SHOW,
            self::RULE_TYPE_HIDE,
        ];
    }
    

    /**
     * Gets rule_type
     *
     * @return string
     */
    public function getRuleType()
    {
        return $this->container['rule_type'];
    }

    /**
     * Sets rule_type
     *
     * @param string $rule_type Type of rule to apply
     *
     * @return self
     */
    public function setRuleType($rule_type)
    {
        $allowedValues = $this->getRuleTypeAllowableValues();
        if (!in_array($rule_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'rule_type', must be one of '%s'",
                    $rule_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['rule_type'] = $rule_type;

        return $this;
    }

    /**
     * Gets rules
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\VisibilityRuleRequest[]
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\VisibilityRuleRequest[] $rules JSON Array of rules
     *
     * @return self
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

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


