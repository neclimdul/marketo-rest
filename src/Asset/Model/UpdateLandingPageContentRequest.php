<?php
/**
 * UpdateLandingPageContentRequest
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
 * Swagger Codegen version: 2.4.28
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
 * UpdateLandingPageContentRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<string,?mixed>
 */
class UpdateLandingPageContentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateLandingPageContentRequest';

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
        'index' => 'int',
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
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
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
        'index' => 'int32',
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
        'background_color' => 'backgroundColor',
        'border_color' => 'borderColor',
        'border_style' => 'borderStyle',
        'border_width' => 'borderWidth',
        'height' => 'height',
        'hide_desktop' => 'hideDesktop',
        'hide_mobile' => 'hideMobile',
        'image_open_new_window' => 'imageOpenNewWindow',
        'index' => 'index',
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
        'height' => 'setHeight',
        'hide_desktop' => 'setHideDesktop',
        'hide_mobile' => 'setHideMobile',
        'image_open_new_window' => 'setImageOpenNewWindow',
        'index' => 'setIndex',
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
        'height' => 'getHeight',
        'hide_desktop' => 'getHideDesktop',
        'hide_mobile' => 'getHideMobile',
        'image_open_new_window' => 'getImageOpenNewWindow',
        'index' => 'getIndex',
        'left' => 'getLeft',
        'link_url' => 'getLinkUrl',
        'opacity' => 'getOpacity',
        'top' => 'getTop',
        'type' => 'getType',
        'value' => 'getValue',
        'width' => 'getWidth',
        'z_index' => 'getZIndex'
    ];

    const TYPE_IMAGE = 'Image';
    const TYPE_FORM = 'Form';
    const TYPE_RECTANGLE = 'Rectangle';
    const TYPE_SNIPPET = 'Snippet';
    const TYPE_RICH_TEXT = 'RichText';
    const TYPE_HTML = 'HTML';
    const TYPE_DYNAMIC_CONTENT = 'DynamicContent';
    

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
        $this->container['background_color'] = $data['background_color'] ?? null;
        $this->container['border_color'] = $data['border_color'] ?? null;
        $this->container['border_style'] = $data['border_style'] ?? null;
        $this->container['border_width'] = $data['border_width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['hide_desktop'] = $data['hide_desktop'] ?? null;
        $this->container['hide_mobile'] = $data['hide_mobile'] ?? null;
        $this->container['image_open_new_window'] = $data['image_open_new_window'] ?? null;
        $this->container['index'] = $data['index'] ?? null;
        $this->container['left'] = $data['left'] ?? null;
        $this->container['link_url'] = $data['link_url'] ?? null;
        $this->container['opacity'] = $data['opacity'] ?? null;
        $this->container['top'] = $data['top'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['z_index'] = $data['z_index'] ?? null;
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * Gets allowable values of the enum.
     *
     * @return scalar[]
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
            self::TYPE_DYNAMIC_CONTENT,
        ];
    }
    

    /**
     * Gets background_color
     *
     * @return string|null
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
     * @return self
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets border_color
     *
     * @return string|null
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
     * @return self
     */
    public function setBorderColor($border_color)
    {
        $this->container['border_color'] = $border_color;

        return $this;
    }

    /**
     * Gets border_style
     *
     * @return string|null
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
     * @return self
     */
    public function setBorderStyle($border_style)
    {
        $this->container['border_style'] = $border_style;

        return $this;
    }

    /**
     * Gets border_width
     *
     * @return string|null
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
     * @return self
     */
    public function setBorderWidth($border_width)
    {
        $this->container['border_width'] = $border_width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string|null
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
     * @return self
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets hide_desktop
     *
     * @return bool|null
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
     * @return self
     */
    public function setHideDesktop($hide_desktop)
    {
        $this->container['hide_desktop'] = $hide_desktop;

        return $this;
    }

    /**
     * Gets hide_mobile
     *
     * @return bool|null
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
     * @return self
     */
    public function setHideMobile($hide_mobile)
    {
        $this->container['hide_mobile'] = $hide_mobile;

        return $this;
    }

    /**
     * Gets image_open_new_window
     *
     * @return string|null
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
     * @return self
     */
    public function setImageOpenNewWindow($image_open_new_window)
    {
        $this->container['image_open_new_window'] = $image_open_new_window;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int $index Index of the content section.  Determines the order of the section in the landing page
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets left
     *
     * @return string|null
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
     * @return self
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets link_url
     *
     * @return string|null
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
     * @return self
     */
    public function setLinkUrl($link_url)
    {
        $this->container['link_url'] = $link_url;

        return $this;
    }

    /**
     * Gets opacity
     *
     * @return string|null
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
     * @return self
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;

        return $this;
    }

    /**
     * Gets top
     *
     * @return string|null
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
     * @return self
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
     * @return self
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
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
     * @return string|null
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
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string|null
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
     * @return self
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets z_index
     *
     * @return string|null
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
     * @return self
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


