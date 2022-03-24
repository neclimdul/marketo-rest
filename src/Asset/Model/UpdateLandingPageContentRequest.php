<?php

/**
 * UpdateLandingPageContentRequest
 *
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.26
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Asset\Model;

use ArrayAccess;
use NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * UpdateLandingPageContentRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateLandingPageContentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    public const TYPE_IMAGE = 'Image';
    public const TYPE_FORM = 'Form';
    public const TYPE_RECTANGLE = 'Rectangle';
    public const TYPE_SNIPPET = 'Snippet';
    public const TYPE_RICH_TEXT = 'RichText';
    public const TYPE_HTML = 'HTML';
    public const TYPE_DYNAMIC_CONTENT = 'DynamicContent';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateLandingPageContentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
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
      * @var array
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
      * @var string[]
      */
    protected $additionalProperties = [];

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
     * {@inheritDoc}
     */
    public static function swaggerTypes(): array
    {
        return self::$swaggerTypes;
    }

    /**
     * {@inheritDoc}
     */
    public static function swaggerFormats(): array
    {
        return self::$swaggerFormats;
    }

    /**
     * {@inheritdoc}
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * {@inheritdoc}
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * {@inheritdoc}
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * {@inheritdoc}
     */
    public function getModelName(): string
    {
        return self::$swaggerModelName;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties['type'] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties['type'] = sprintf(
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
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }
    /**
     * Gets allowable values of the enum.
     *
     * @return scalar[]
     */
    public function getTypeAllowableValues(): array
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
    public function getBackgroundColor(): ?string
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param string|null $background_color background-color property of the HTML section
     *
     * @return self<TKey, TValue>
     */
    public function setBackgroundColor(?string $background_color): UpdateLandingPageContentRequest
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets border_color
     *
     * @return string|null
     */
    public function getBorderColor(): ?string
    {
        return $this->container['border_color'];
    }

    /**
     * Sets border_color
     *
     * @param string|null $border_color border-color property of the HTML section
     *
     * @return self<TKey, TValue>
     */
    public function setBorderColor(?string $border_color): UpdateLandingPageContentRequest
    {
        $this->container['border_color'] = $border_color;

        return $this;
    }

    /**
     * Gets border_style
     *
     * @return string|null
     */
    public function getBorderStyle(): ?string
    {
        return $this->container['border_style'];
    }

    /**
     * Sets border_style
     *
     * @param string|null $border_style border-style property of the HTML section
     *
     * @return self<TKey, TValue>
     */
    public function setBorderStyle(?string $border_style): UpdateLandingPageContentRequest
    {
        $this->container['border_style'] = $border_style;

        return $this;
    }

    /**
     * Gets border_width
     *
     * @return string|null
     */
    public function getBorderWidth(): ?string
    {
        return $this->container['border_width'];
    }

    /**
     * Sets border_width
     *
     * @param string|null $border_width border-width property of the HTML section
     *
     * @return self<TKey, TValue>
     */
    public function setBorderWidth(?string $border_width): UpdateLandingPageContentRequest
    {
        $this->container['border_width'] = $border_width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return string|null
     */
    public function getHeight(): ?string
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param string|null $height height property of the HTML section
     *
     * @return self<TKey, TValue>
     */
    public function setHeight(?string $height): UpdateLandingPageContentRequest
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets hide_desktop
     *
     * @return bool|null
     */
    public function getHideDesktop(): ?bool
    {
        return $this->container['hide_desktop'];
    }

    /**
     * Sets hide_desktop
     *
     * @param bool|null $hide_desktop Hide the section when displayed on a desktop browser.  Default false
     *
     * @return self<TKey, TValue>
     */
    public function setHideDesktop(?bool $hide_desktop): UpdateLandingPageContentRequest
    {
        $this->container['hide_desktop'] = $hide_desktop;

        return $this;
    }

    /**
     * Gets hide_mobile
     *
     * @return bool|null
     */
    public function getHideMobile(): ?bool
    {
        return $this->container['hide_mobile'];
    }

    /**
     * Sets hide_mobile
     *
     * @param bool|null $hide_mobile Hide the section when displayed on a mobile browser.  Default false
     *
     * @return self<TKey, TValue>
     */
    public function setHideMobile(?bool $hide_mobile): UpdateLandingPageContentRequest
    {
        $this->container['hide_mobile'] = $hide_mobile;

        return $this;
    }

    /**
     * Gets image_open_new_window
     *
     * @return string|null
     */
    public function getImageOpenNewWindow(): ?string
    {
        return $this->container['image_open_new_window'];
    }

    /**
     * Sets image_open_new_window
     *
     * @param string|null $image_open_new_window image_open_new_window
     *
     * @return self<TKey, TValue>
     */
    public function setImageOpenNewWindow(?string $image_open_new_window): UpdateLandingPageContentRequest
    {
        $this->container['image_open_new_window'] = $image_open_new_window;

        return $this;
    }

    /**
     * Gets index
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index Index of the content section.  Determines the order of the section in the landing page
     *
     * @return self<TKey, TValue>
     */
    public function setIndex(?int $index): UpdateLandingPageContentRequest
    {
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets left
     *
     * @return string|null
     */
    public function getLeft(): ?string
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param string|null $left left property of the HTML section
     *
     * @return self<TKey, TValue>
     */
    public function setLeft(?string $left): UpdateLandingPageContentRequest
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets link_url
     *
     * @return string|null
     */
    public function getLinkUrl(): ?string
    {
        return $this->container['link_url'];
    }

    /**
     * Sets link_url
     *
     * @param string|null $link_url URL parameter of a link type section
     *
     * @return self<TKey, TValue>
     */
    public function setLinkUrl(?string $link_url): UpdateLandingPageContentRequest
    {
        $this->container['link_url'] = $link_url;

        return $this;
    }

    /**
     * Gets opacity
     *
     * @return string|null
     */
    public function getOpacity(): ?string
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity
     *
     * @param string|null $opacity opacity property of the HTML section
     *
     * @return self<TKey, TValue>
     */
    public function setOpacity(?string $opacity): UpdateLandingPageContentRequest
    {
        $this->container['opacity'] = $opacity;

        return $this;
    }

    /**
     * Gets top
     *
     * @return string|null
     */
    public function getTop(): ?string
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param string|null $top top property of the HTML section
     *
     * @return self<TKey, TValue>
     */
    public function setTop(?string $top): UpdateLandingPageContentRequest
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of content section
     *
     * @return self<TKey, TValue>
     */
    public function setType(string $type): UpdateLandingPageContentRequest
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
    public function getValue(): ?string
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value Type of content section
     *
     * @return self<TKey, TValue>
     */
    public function setValue(?string $value): UpdateLandingPageContentRequest
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets width
     *
     * @return string|null
     */
    public function getWidth(): ?string
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param string|null $width width property of the HTML section
     *
     * @return self<TKey, TValue>
     */
    public function setWidth(?string $width): UpdateLandingPageContentRequest
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets z_index
     *
     * @return string|null
     */
    public function getZIndex(): ?string
    {
        return $this->container['z_index'];
    }

    /**
     * Sets z_index
     *
     * @param string|null $z_index z-index property of the HTML section
     *
     * @return self<TKey, TValue>
     */
    public function setZIndex(?string $z_index): UpdateLandingPageContentRequest
    {
        $this->container['z_index'] = $z_index;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalProperties(array $fields): void
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
    public function setAdditionalProperty($property, $value): void
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
    public function getAdditionalProperties(): array
    {
        $container = $this->container;
        $map =
            /**
             * @param array-key $key
             * @return mixed
             */
            function ($key) use ($container) {
                return $container[$key];
            };
        return array_map($map, $this->additionalProperties);
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
     * @throws \JsonException
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
        );
    }
}
