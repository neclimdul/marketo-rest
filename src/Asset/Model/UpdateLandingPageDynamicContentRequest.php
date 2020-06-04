<?php
/**
 * UpdateLandingPageDynamicContentRequest
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
 * Swagger Codegen version: 3.3.4
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
 * UpdateLandingPageDynamicContentRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateLandingPageDynamicContentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateLandingPageDynamicContentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'background_color' => 'string',
        'border_color' => 'string',
        'border_style' => 'string',
        'border_width' => 'string',
        'height' => 'string',
        'hide_desktop' => 'bool',
        'hide_mobile' => 'bool',
        'image_open_new_window' => 'string',
        'left' => 'string',
        'link_url' => 'string',
        'opacity' => 'string',
        'segment' => 'string',
        'top' => 'string',
        'type' => 'string',
        'value' => 'string',
        'width' => 'string',
        'z_index' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'background_color' => null,
        'border_color' => null,
        'border_style' => null,
        'border_width' => null,
        'height' => null,
        'hide_desktop' => null,
        'hide_mobile' => null,
        'image_open_new_window' => null,
        'left' => null,
        'link_url' => null,
        'opacity' => null,
        'segment' => null,
        'top' => null,
        'type' => null,
        'value' => null,
        'width' => null,
        'z_index' => null
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
        'background_color' => 'backgroundColor',
        'border_color' => 'borderColor',
        'border_style' => 'borderStyle',
        'border_width' => 'borderWidth',
        'height' => 'height',
        'hide_desktop' => 'hideDesktop',
        'hide_mobile' => 'hideMobile',
        'image_open_new_window' => 'imageOpenNewWindow',
        'left' => 'left',
        'link_url' => 'linkUrl',
        'opacity' => 'opacity',
        'segment' => 'segment',
        'top' => 'top',
        'type' => 'type',
        'value' => 'value',
        'width' => 'width',
        'z_index' => 'zIndex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'background_color' => 'setBackgroundColor',
        'border_color' => 'setBorderColor',
        'border_style' => 'setBorderStyle',
        'border_width' => 'setBorderWidth',
        'height' => 'setHeight',
        'hide_desktop' => 'setHideDesktop',
        'hide_mobile' => 'setHideMobile',
        'image_open_new_window' => 'setImageOpenNewWindow',
        'left' => 'setLeft',
        'link_url' => 'setLinkUrl',
        'opacity' => 'setOpacity',
        'segment' => 'setSegment',
        'top' => 'setTop',
        'type' => 'setType',
        'value' => 'setValue',
        'width' => 'setWidth',
        'z_index' => 'setZIndex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'background_color' => 'getBackgroundColor',
        'border_color' => 'getBorderColor',
        'border_style' => 'getBorderStyle',
        'border_width' => 'getBorderWidth',
        'height' => 'getHeight',
        'hide_desktop' => 'getHideDesktop',
        'hide_mobile' => 'getHideMobile',
        'image_open_new_window' => 'getImageOpenNewWindow',
        'left' => 'getLeft',
        'link_url' => 'getLinkUrl',
        'opacity' => 'getOpacity',
        'segment' => 'getSegment',
        'top' => 'getTop',
        'type' => 'getType',
        'value' => 'getValue',
        'width' => 'getWidth',
        'z_index' => 'getZIndex'
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
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['border_color'] = isset($data['border_color']) ? $data['border_color'] : null;
        $this->container['border_style'] = isset($data['border_style']) ? $data['border_style'] : null;
        $this->container['border_width'] = isset($data['border_width']) ? $data['border_width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['hide_desktop'] = isset($data['hide_desktop']) ? $data['hide_desktop'] : null;
        $this->container['hide_mobile'] = isset($data['hide_mobile']) ? $data['hide_mobile'] : null;
        $this->container['image_open_new_window'] = isset($data['image_open_new_window']) ? $data['image_open_new_window'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['link_url'] = isset($data['link_url']) ? $data['link_url'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
        $this->container['segment'] = isset($data['segment']) ? $data['segment'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['z_index'] = isset($data['z_index']) ? $data['z_index'] : null;
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
     * Gets background_color
     *
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string $background_color background-color property of the HTML section
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets border_color
     *
     * @return string
     */
    public function getBorderColor()
    {
        return $this->container['border_color'];
    }

    /**
     * Sets border_color
     *
     * @param string $border_color border-color property of the HTML section
     *
     * @return $this
     */
    public function setBorderColor($border_color)
    {
        $this->container['border_color'] = $border_color;

        return $this;
    }

    /**
     * Gets border_style
     *
     * @return string
     */
    public function getBorderStyle()
    {
        return $this->container['border_style'];
    }

    /**
     * Sets border_style
     *
     * @param string $border_style border-style property of the HTML section
     *
     * @return $this
     */
    public function setBorderStyle($border_style)
    {
        $this->container['border_style'] = $border_style;

        return $this;
    }

    /**
     * Gets border_width
     *
     * @return string
     */
    public function getBorderWidth()
    {
        return $this->container['border_width'];
    }

    /**
     * Sets border_width
     *
     * @param string $border_width border-width property of the HTML section
     *
     * @return $this
     */
    public function setBorderWidth($border_width)
    {
        $this->container['border_width'] = $border_width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string $height height property of the HTML section
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets hide_desktop
     *
     * @return bool
     */
    public function getHideDesktop()
    {
        return $this->container['hide_desktop'];
    }

    /**
     * Sets hide_desktop
     *
     * @param bool $hide_desktop Hide the section when displayed on a desktop browser.  Default false
     *
     * @return $this
     */
    public function setHideDesktop($hide_desktop)
    {
        $this->container['hide_desktop'] = $hide_desktop;

        return $this;
    }

    /**
     * Gets hide_mobile
     *
     * @return bool
     */
    public function getHideMobile()
    {
        return $this->container['hide_mobile'];
    }

    /**
     * Sets hide_mobile
     *
     * @param bool $hide_mobile Hide the section when displayed on a mobile browser.  Default false
     *
     * @return $this
     */
    public function setHideMobile($hide_mobile)
    {
        $this->container['hide_mobile'] = $hide_mobile;

        return $this;
    }

    /**
     * Gets image_open_new_window
     *
     * @return string
     */
    public function getImageOpenNewWindow()
    {
        return $this->container['image_open_new_window'];
    }

    /**
     * Sets image_open_new_window
     *
     * @param string $image_open_new_window image_open_new_window
     *
     * @return $this
     */
    public function setImageOpenNewWindow($image_open_new_window)
    {
        $this->container['image_open_new_window'] = $image_open_new_window;

        return $this;
    }

    /**
     * Gets left
     *
     * @return string
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param string $left left property of the HTML section
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets link_url
     *
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->container['link_url'];
    }

    /**
     * Sets link_url
     *
     * @param string $link_url URL parameter of a link type section
     *
     * @return $this
     */
    public function setLinkUrl($link_url)
    {
        $this->container['link_url'] = $link_url;

        return $this;
    }

    /**
     * Gets opacity
     *
     * @return string
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity
     *
     * @param string $opacity opacity property of the HTML section
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;

        return $this;
    }

    /**
     * Gets segment
     *
     * @return string
     */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
     * Sets segment
     *
     * @param string $segment Name of the segment to display content section for
     *
     * @return $this
     */
    public function setSegment($segment)
    {
        $this->container['segment'] = $segment;

        return $this;
    }

    /**
     * Gets top
     *
     * @return string
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param string $top top property of the HTML section
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of content section
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Type of content section
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string $width width property of the HTML section
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets z_index
     *
     * @return string
     */
    public function getZIndex()
    {
        return $this->container['z_index'];
    }

    /**
     * Sets z_index
     *
     * @param string $z_index z-index property of the HTML section
     *
     * @return $this
     */
    public function setZIndex($z_index)
    {
        $this->container['z_index'] = $z_index;

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
    public function getAdditionalPropertiess()
    {
        // TODO Get values.
        return $this->additionalProperties;
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


