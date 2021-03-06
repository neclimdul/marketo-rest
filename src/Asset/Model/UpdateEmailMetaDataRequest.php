<?php
/**
 * UpdateEmailMetaDataRequest
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
 * UpdateEmailMetaDataRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateEmailMetaDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateEmailMetaDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'name' => 'string',
        'pre_header' => 'string',
        'operational' => 'bool',
        'published' => 'bool',
        'text_only' => 'bool',
        'web_view' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'name' => null,
        'pre_header' => null,
        'operational' => null,
        'published' => null,
        'text_only' => null,
        'web_view' => null
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
        'description' => 'description',
        'name' => 'name',
        'pre_header' => 'preHeader',
        'operational' => 'operational',
        'published' => 'published',
        'text_only' => 'textOnly',
        'web_view' => 'webView'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'name' => 'setName',
        'pre_header' => 'setPreHeader',
        'operational' => 'setOperational',
        'published' => 'setPublished',
        'text_only' => 'setTextOnly',
        'web_view' => 'setWebView'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'name' => 'getName',
        'pre_header' => 'getPreHeader',
        'operational' => 'getOperational',
        'published' => 'getPublished',
        'text_only' => 'getTextOnly',
        'web_view' => 'getWebView'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pre_header'] = isset($data['pre_header']) ? $data['pre_header'] : null;
        $this->container['operational'] = isset($data['operational']) ? $data['operational'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['text_only'] = isset($data['text_only']) ? $data['text_only'] : null;
        $this->container['web_view'] = isset($data['web_view']) ? $data['web_view'] : null;
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the asset
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the Email
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pre_header
     *
     * @return string
     */
    public function getPreHeader()
    {
        return $this->container['pre_header'];
    }

    /**
     * Sets pre_header
     *
     * @param string $pre_header Preheader text for the email
     *
     * @return $this
     */
    public function setPreHeader($pre_header)
    {
        $this->container['pre_header'] = $pre_header;

        return $this;
    }

    /**
     * Gets operational
     *
     * @return bool
     */
    public function getOperational()
    {
        return $this->container['operational'];
    }

    /**
     * Sets operational
     *
     * @param bool $operational Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false
     *
     * @return $this
     */
    public function setOperational($operational)
    {
        $this->container['operational'] = $operational;

        return $this;
    }

    /**
     * Gets published
     *
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     *
     * @param bool $published Whether the email has been published to Sales Insight.  Default false
     *
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets text_only
     *
     * @return bool
     */
    public function getTextOnly()
    {
        return $this->container['text_only'];
    }

    /**
     * Sets text_only
     *
     * @param bool $text_only Setting to include text-only version of email when sent
     *
     * @return $this
     */
    public function setTextOnly($text_only)
    {
        $this->container['text_only'] = $text_only;

        return $this;
    }

    /**
     * Gets web_view
     *
     * @return bool
     */
    public function getWebView()
    {
        return $this->container['web_view'];
    }

    /**
     * Sets web_view
     *
     * @param bool $web_view Whether the email has been enabled to allow the 'View as Web Page' when received
     *
     * @return $this
     */
    public function setWebView($web_view)
    {
        $this->container['web_view'] = $web_view;

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


