<?php
/**
 * Form
 *
 * PHP version 5
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
 * Swagger Codegen version: 2.4.15
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
 * Form Class Doc Comment
 *
 * @category Class
 * @description Form field data.  May have any number of fields depending on the fields available in the form.
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Form implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Form';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lead_form_fields' => '\NecLimDul\MarketoRest\Lead\Model\LeadFormFields',
        'visitor_data' => '\NecLimDul\MarketoRest\Lead\Model\VisitorData',
        'cookie' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lead_form_fields' => null,
        'visitor_data' => null,
        'cookie' => null
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
        'lead_form_fields' => 'leadFormFields',
        'visitor_data' => 'visitorData',
        'cookie' => 'cookie'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lead_form_fields' => 'setLeadFormFields',
        'visitor_data' => 'setVisitorData',
        'cookie' => 'setCookie'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lead_form_fields' => 'getLeadFormFields',
        'visitor_data' => 'getVisitorData',
        'cookie' => 'getCookie'
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
        $this->container['lead_form_fields'] = isset($data['lead_form_fields']) ? $data['lead_form_fields'] : null;
        $this->container['visitor_data'] = isset($data['visitor_data']) ? $data['visitor_data'] : null;
        $this->container['cookie'] = isset($data['cookie']) ? $data['cookie'] : null;
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

        if ($this->container['lead_form_fields'] === null) {
            $invalidProperties[] = "'lead_form_fields' can't be null";
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
     * Gets lead_form_fields
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\LeadFormFields
     */
    public function getLeadFormFields()
    {
        return $this->container['lead_form_fields'];
    }

    /**
     * Sets lead_form_fields
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\LeadFormFields $lead_form_fields List of form fields.  Email is required field
     *
     * @return $this
     */
    public function setLeadFormFields($lead_form_fields)
    {
        $this->container['lead_form_fields'] = $lead_form_fields;

        return $this;
    }

    /**
     * Gets visitor_data
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\VisitorData
     */
    public function getVisitorData()
    {
        return $this->container['visitor_data'];
    }

    /**
     * Sets visitor_data
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\VisitorData $visitor_data Page visit-related data
     *
     * @return $this
     */
    public function setVisitorData($visitor_data)
    {
        $this->container['visitor_data'] = $visitor_data;

        return $this;
    }

    /**
     * Gets cookie
     *
     * @return string
     */
    public function getCookie()
    {
        return $this->container['cookie'];
    }

    /**
     * Sets cookie
     *
     * @param string $cookie Munchkin cookie value used to associate new lead with anonymous activities.  e.g. id:123-XYZ-456&token:_mch-marketo.com-1594662481190-60776
     *
     * @return $this
     */
    public function setCookie($cookie)
    {
        $this->container['cookie'] = $cookie;

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


