<?php
/**
 * UpdateEmailComponentContentRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  MarketoRest\Asset
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

namespace MarketoRest\Asset\Model;

use \ArrayAccess;
use \MarketoRest\Asset\ObjectSerializer;

/**
 * UpdateEmailComponentContentRequest Class Doc Comment
 *
 * @category Class
 * @package  MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateEmailComponentContentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateEmailComponentContentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alt_text' => 'string',
        'external_url' => 'string',
        'height' => 'int',
        'image' => 'string',
        'link_url' => 'string',
        'over_write' => 'bool',
        'style' => 'string',
        'text_value' => 'string',
        'type' => 'string',
        'value' => 'string',
        'video_url' => 'string',
        'width' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alt_text' => null,
        'external_url' => null,
        'height' => 'int32',
        'image' => null,
        'link_url' => null,
        'over_write' => null,
        'style' => null,
        'text_value' => null,
        'type' => null,
        'value' => null,
        'video_url' => null,
        'width' => 'int32'
    ];

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
        'alt_text' => 'altText',
        'external_url' => 'externalUrl',
        'height' => 'height',
        'image' => 'image',
        'link_url' => 'linkUrl',
        'over_write' => 'overWrite',
        'style' => 'style',
        'text_value' => 'textValue',
        'type' => 'type',
        'value' => 'value',
        'video_url' => 'videoUrl',
        'width' => 'width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alt_text' => 'setAltText',
        'external_url' => 'setExternalUrl',
        'height' => 'setHeight',
        'image' => 'setImage',
        'link_url' => 'setLinkUrl',
        'over_write' => 'setOverWrite',
        'style' => 'setStyle',
        'text_value' => 'setTextValue',
        'type' => 'setType',
        'value' => 'setValue',
        'video_url' => 'setVideoUrl',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alt_text' => 'getAltText',
        'external_url' => 'getExternalUrl',
        'height' => 'getHeight',
        'image' => 'getImage',
        'link_url' => 'getLinkUrl',
        'over_write' => 'getOverWrite',
        'style' => 'getStyle',
        'text_value' => 'getTextValue',
        'type' => 'getType',
        'value' => 'getValue',
        'video_url' => 'getVideoUrl',
        'width' => 'getWidth'
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

    const TYPE_TEXT = 'Text';
    const TYPE_DYNAMIC_CONTENT = 'DynamicContent';
    const TYPE_SNIPPET = 'Snippet';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TEXT,
            self::TYPE_DYNAMIC_CONTENT,
            self::TYPE_SNIPPET,
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
        $this->container['alt_text'] = isset($data['alt_text']) ? $data['alt_text'] : null;
        $this->container['external_url'] = isset($data['external_url']) ? $data['external_url'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['link_url'] = isset($data['link_url']) ? $data['link_url'] : null;
        $this->container['over_write'] = isset($data['over_write']) ? $data['over_write'] : null;
        $this->container['style'] = isset($data['style']) ? $data['style'] : null;
        $this->container['text_value'] = isset($data['text_value']) ? $data['text_value'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['video_url'] = isset($data['video_url']) ? $data['video_url'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
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
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
     * Gets alt_text
     *
     * @return string
     */
    public function getAltText()
    {
        return $this->container['alt_text'];
    }

    /**
     * Sets alt_text
     *
     * @param string $alt_text Sets the value of the alt parameter for the resulting img element
     *
     * @return $this
     */
    public function setAltText($alt_text)
    {
        $this->container['alt_text'] = $alt_text;

        return $this;
    }

    /**
     * Gets external_url
     *
     * @return string
     */
    public function getExternalUrl()
    {
        return $this->container['external_url'];
    }

    /**
     * Sets external_url
     *
     * @param string $external_url external_url
     *
     * @return $this
     */
    public function setExternalUrl($external_url)
    {
        $this->container['external_url'] = $external_url;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int $height Overrides naitve height of the image.  The resulting file will be resized to the given height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image Multipart file that allows you to load an image from your computer
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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
     * @param string $link_url link_url
     *
     * @return $this
     */
    public function setLinkUrl($link_url)
    {
        $this->container['link_url'] = $link_url;

        return $this;
    }

    /**
     * Gets over_write
     *
     * @return bool
     */
    public function getOverWrite()
    {
        return $this->container['over_write'];
    }

    /**
     * Sets over_write
     *
     * @param bool $over_write Allows overwriting of the existing image content section
     *
     * @return $this
     */
    public function setOverWrite($over_write)
    {
        $this->container['over_write'] = $over_write;

        return $this;
    }

    /**
     * Gets style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->container['style'];
    }

    /**
     * Sets style
     *
     * @param string $style Sets the value of the style parameter for the content section
     *
     * @return $this
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

        return $this;
    }

    /**
     * Gets text_value
     *
     * @return string
     */
    public function getTextValue()
    {
        return $this->container['text_value'];
    }

    /**
     * Sets text_value
     *
     * @param string $text_value text_value
     *
     * @return $this
     */
    public function setTextValue($text_value)
    {
        $this->container['text_value'] = $text_value;

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
     * @param string $type Type of content to set for the section.
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
     * @param string $value Value to set for the section.  For type Text, the HTML content of the section.  For type DynamicContent, the id of the segmentation to use for the content.  For type Snippet, the id of the snippet to embed
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets video_url
     *
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->container['video_url'];
    }

    /**
     * Sets video_url
     *
     * @param string $video_url Sets the Url of the video element.  Videos must be either from YouTube or Vimeo
     *
     * @return $this
     */
    public function setVideoUrl($video_url)
    {
        $this->container['video_url'] = $video_url;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int $width Overrides native width of the image.  The resulting file will be resized to the given width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
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


