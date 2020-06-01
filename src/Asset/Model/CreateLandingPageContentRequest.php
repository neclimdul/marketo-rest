<?php
/**
 * CreateLandingPageContentRequest
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
 * CreateLandingPageContentRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateLandingPageContentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateLandingPageContentRequest';

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
        'content_id' => 'string',
        'height' => 'string',
        'hide_desktop' => 'bool',
        'hide_mobile' => 'bool',
        'image_open_new_window' => 'string',
        'left' => 'string',
        'link_url' => 'string',
        'opacity' => 'string',
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
        'content_id' => null,
        'height' => null,
        'hide_desktop' => null,
        'hide_mobile' => null,
        'image_open_new_window' => null,
        'left' => null,
        'link_url' => null,
        'opacity' => null,
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
    protected $dynamicProperties = [];

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
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
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
        'content_id' => 'contentId',
        'height' => 'height',
        'hide_desktop' => 'hideDesktop',
        'hide_mobile' => 'hideMobile',
        'image_open_new_window' => 'imageOpenNewWindow',
        'left' => 'left',
        'link_url' => 'linkUrl',
        'opacity' => 'opacity',
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
        'content_id' => 'setContentId',
        'height' => 'setHeight',
        'hide_desktop' => 'setHideDesktop',
        'hide_mobile' => 'setHideMobile',
        'image_open_new_window' => 'setImageOpenNewWindow',
        'left' => 'setLeft',
        'link_url' => 'setLinkUrl',
        'opacity' => 'setOpacity',
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
        'content_id' => 'getContentId',
        'height' => 'getHeight',
        'hide_desktop' => 'getHideDesktop',
        'hide_mobile' => 'getHideMobile',
        'image_open_new_window' => 'getImageOpenNewWindow',
        'left' => 'getLeft',
        'link_url' => 'getLinkUrl',
        'opacity' => 'getOpacity',
        'top' => 'getTop',
        'type' => 'getType',
        'value' => 'getValue',
        'width' => 'getWidth',
        'z_index' => 'getZIndex'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const TYPE_IMAGE = 'Image';
    const TYPE_FORM = 'Form';
    const TYPE_RECTANGLE = 'Rectangle';
    const TYPE_SNIPPET = 'Snippet';
    const TYPE_RICH_TEXT = 'RichText';
    const TYPE_HTML = 'HTML';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IMAGE,
            self::TYPE_FORM,
            self::TYPE_RECTANGLE,
            self::TYPE_SNIPPET,
            self::TYPE_RICH_TEXT,
            self::TYPE_HTML,
        ];
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
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['border_color'] = isset($data['border_color']) ? $data['border_color'] : null;
        $this->container['border_style'] = isset($data['border_style']) ? $data['border_style'] : null;
        $this->container['border_width'] = isset($data['border_width']) ? $data['border_width'] : null;
        $this->container['content_id'] = isset($data['content_id']) ? $data['content_id'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['hide_desktop'] = isset($data['hide_desktop']) ? $data['hide_desktop'] : null;
        $this->container['hide_mobile'] = isset($data['hide_mobile']) ? $data['hide_mobile'] : null;
        $this->container['image_open_new_window'] = isset($data['image_open_new_window']) ? $data['image_open_new_window'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['link_url'] = isset($data['link_url']) ? $data['link_url'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['z_index'] = isset($data['z_index']) ? $data['z_index'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['content_id'] === null) {
            $invalidProperties[] = "'content_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
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
     * Gets content_id
     *
     * @return string
     */
    public function getContentId()
    {
        return $this->container['content_id'];
    }

    /**
     * Sets content_id
     *
     * @param string $content_id Id of the content section.  Also the HTML id of the section.
     *
     * @return $this
     */
    public function setContentId($content_id)
    {
        $this->container['content_id'] = $content_id;

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
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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
     * Set list of dynamic properties for the model.
     *
     * @param mixed[] $fields
     *   List of dynamic properties
     */
    public function setDynamicProperties(array $fields)
    {
        $this->dynamicProperties = $fields;
    }

    /**
     * Set a dynamic property for the model.
     *
     * @param string $property
     *   Property name.
     * @param mixed $value
     *   Value of the property.
     */
    public function setDynamicProperty($property, $value)
    {
        $this->dynamicProperties[$property] = $value;
    }

    /**
     * Get list of dynamic properties for the model.
     *
     * @return mixed[]
     *   List of dynamic properties
     */
    public function getDynamicProperties()
    {
        return $this->dynamicProperties;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
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
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
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


