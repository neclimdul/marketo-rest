<?php
/**
 * UpdateEmailDynamicContentRequest
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
 * Swagger Codegen version: 2.4.26
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
 * UpdateEmailDynamicContentRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateEmailDynamicContentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateEmailDynamicContentRequest';

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
        'type' => 'string',
        'value' => 'string',
        'video_url' => 'string',
        'width' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'alt_text' => null,
        'external_url' => null,
        'height' => 'int32',
        'image' => null,
        'link_url' => null,
        'over_write' => null,
        'style' => null,
        'type' => null,
        'value' => null,
        'video_url' => null,
        'width' => 'int32'
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
        'alt_text' => 'altText',
        'external_url' => 'externalUrl',
        'height' => 'height',
        'image' => 'image',
        'link_url' => 'linkUrl',
        'over_write' => 'overWrite',
        'style' => 'style',
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
        'type' => 'getType',
        'value' => 'getValue',
        'video_url' => 'getVideoUrl',
        'width' => 'getWidth'
    ];

    const TYPE_TEXT = 'Text';
    const TYPE_DYNAMIC_CONTENT = 'DynamicContent';
    const TYPE_SNIPPET = 'Snippet';
    

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
        $this->container['alt_text'] = $data['alt_text'] ?? null;
        $this->container['external_url'] = $data['external_url'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['image'] = $data['image'] ?? null;
        $this->container['link_url'] = $data['link_url'] ?? null;
        $this->container['over_write'] = $data['over_write'] ?? null;
        $this->container['style'] = $data['style'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
        $this->container['video_url'] = $data['video_url'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
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

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
            self::TYPE_TEXT,
            self::TYPE_DYNAMIC_CONTENT,
            self::TYPE_SNIPPET,
        ];
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
     * @return self
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
     * @return self
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
     * @return self
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
     * @param string $image Multipart file that allows you to add an image from your computer
     *
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setStyle($style)
    {
        $this->container['style'] = $style;

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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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


