<?php
/**
 * UpdateFormMetaDataRequest
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
 * UpdateFormMetaDataRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateFormMetaDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateFormMetaDataRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_css' => 'string',
        'description' => 'string',
        'font_family' => 'string',
        'font_size' => 'string',
        'known_visitor' => '\NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO',
        'label_position' => 'string',
        'language' => 'string',
        'locale' => 'string',
        'name' => 'string',
        'progressive_profiling' => 'bool',
        'theme' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'custom_css' => null,
        'description' => null,
        'font_family' => null,
        'font_size' => null,
        'known_visitor' => null,
        'label_position' => null,
        'language' => null,
        'locale' => null,
        'name' => null,
        'progressive_profiling' => null,
        'theme' => null
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
        'custom_css' => 'customCss',
        'description' => 'description',
        'font_family' => 'fontFamily',
        'font_size' => 'fontSize',
        'known_visitor' => 'knownVisitor',
        'label_position' => 'labelPosition',
        'language' => 'language',
        'locale' => 'locale',
        'name' => 'name',
        'progressive_profiling' => 'progressiveProfiling',
        'theme' => 'theme'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_css' => 'setCustomCss',
        'description' => 'setDescription',
        'font_family' => 'setFontFamily',
        'font_size' => 'setFontSize',
        'known_visitor' => 'setKnownVisitor',
        'label_position' => 'setLabelPosition',
        'language' => 'setLanguage',
        'locale' => 'setLocale',
        'name' => 'setName',
        'progressive_profiling' => 'setProgressiveProfiling',
        'theme' => 'setTheme'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_css' => 'getCustomCss',
        'description' => 'getDescription',
        'font_family' => 'getFontFamily',
        'font_size' => 'getFontSize',
        'known_visitor' => 'getKnownVisitor',
        'label_position' => 'getLabelPosition',
        'language' => 'getLanguage',
        'locale' => 'getLocale',
        'name' => 'getName',
        'progressive_profiling' => 'getProgressiveProfiling',
        'theme' => 'getTheme'
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
        $this->container['custom_css'] = isset($data['custom_css']) ? $data['custom_css'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['font_family'] = isset($data['font_family']) ? $data['font_family'] : null;
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
        $this->container['known_visitor'] = isset($data['known_visitor']) ? $data['known_visitor'] : null;
        $this->container['label_position'] = isset($data['label_position']) ? $data['label_position'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['progressive_profiling'] = isset($data['progressive_profiling']) ? $data['progressive_profiling'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
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
     * Gets custom_css
     *
     * @return string
     */
    public function getCustomCss()
    {
        return $this->container['custom_css'];
    }

    /**
     * Sets custom_css
     *
     * @param string $custom_css Custom CSS to apply to the form
     *
     * @return $this
     */
    public function setCustomCss($custom_css)
    {
        $this->container['custom_css'] = $custom_css;

        return $this;
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
     * @param string $description Description of the form
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets font_family
     *
     * @return string
     */
    public function getFontFamily()
    {
        return $this->container['font_family'];
    }

    /**
     * Sets font_family
     *
     * @param string $font_family font-family property for the form
     *
     * @return $this
     */
    public function setFontFamily($font_family)
    {
        $this->container['font_family'] = $font_family;

        return $this;
    }

    /**
     * Gets font_size
     *
     * @return string
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /**
     * Sets font_size
     *
     * @param string $font_size font-size property of the form
     *
     * @return $this
     */
    public function setFontSize($font_size)
    {
        $this->container['font_size'] = $font_size;

        return $this;
    }

    /**
     * Gets known_visitor
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO
     */
    public function getKnownVisitor()
    {
        return $this->container['known_visitor'];
    }

    /**
     * Sets known_visitor
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO $known_visitor Known visitor behavior for the form
     *
     * @return $this
     */
    public function setKnownVisitor($known_visitor)
    {
        $this->container['known_visitor'] = $known_visitor;

        return $this;
    }

    /**
     * Gets label_position
     *
     * @return string
     */
    public function getLabelPosition()
    {
        return $this->container['label_position'];
    }

    /**
     * Sets label_position
     *
     * @param string $label_position Default positioning of labels.
     *
     * @return $this
     */
    public function setLabelPosition($label_position)
    {
        $this->container['label_position'] = $label_position;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Language of the form
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Locale of the form
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

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
     * @param string $name Name of the form
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets progressive_profiling
     *
     * @return bool
     */
    public function getProgressiveProfiling()
    {
        return $this->container['progressive_profiling'];
    }

    /**
     * Sets progressive_profiling
     *
     * @param bool $progressive_profiling Whether progressive profiling is enabled for the form
     *
     * @return $this
     */
    public function setProgressiveProfiling($progressive_profiling)
    {
        $this->container['progressive_profiling'] = $progressive_profiling;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param string $theme CSS theme for the form to use
     *
     * @return $this
     */
    public function setTheme($theme)
    {
        $this->container['theme'] = $theme;

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


