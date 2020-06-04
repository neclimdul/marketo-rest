<?php
/**
 * LandingPageContentResponse
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * The version of the OpenAPI document: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Asset\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * LandingPageContentResponse Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LandingPageContentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LandingPageContentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => 'object',
        'followup_type' => 'string',
        'followup_value' => 'string',
        'formatting_options' => '\NecLimDul\MarketoRest\Asset\Model\JsonNode',
        'id' => 'object',
        'index' => 'int',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'content' => null,
        'followup_type' => null,
        'followup_value' => null,
        'formatting_options' => null,
        'id' => null,
        'index' => 'int32',
        'type' => null
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
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'content' => 'content',
        'followup_type' => 'followupType',
        'followup_value' => 'followupValue',
        'formatting_options' => 'formattingOptions',
        'id' => 'id',
        'index' => 'index',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'followup_type' => 'setFollowupType',
        'followup_value' => 'setFollowupValue',
        'formatting_options' => 'setFormattingOptions',
        'id' => 'setId',
        'index' => 'setIndex',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'followup_type' => 'getFollowupType',
        'followup_value' => 'getFollowupValue',
        'formatting_options' => 'getFormattingOptions',
        'id' => 'getId',
        'index' => 'getIndex',
        'type' => 'getType'
    ];

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
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    // followup_type enumerated values.
    const FOLLOWUP_TYPE_URL = 'url';
    const FOLLOWUP_TYPE_LP = 'lp';
    const FOLLOWUP_TYPE_FORM_DEFINED = 'formDefined';

    // type enumerated values.
    const TYPE_IMAGE = 'Image';
    const TYPE_SOCIAL_BUTTON = 'SocialButton';
    const TYPE_FORM = 'Form';
    const TYPE_DYNAMIC_CONTENT = 'DynamicContent';
    const TYPE_RECTANGLE = 'Rectangle';
    const TYPE_SNIPPET = 'Snippet';
    const TYPE_RICH_TEXT = 'RichText';
    const TYPE_HTML = 'HTML';
    const TYPE_VIDEO = 'Video';
    const TYPE_POLL = 'Poll';
    const TYPE_REFERRAL_OFFER = 'ReferralOffer';
    const TYPE_SWEEPSTAKES = 'Sweepstakes';

    /**
     * Gets allowable values of the enum
     *
     * @return array
     */
    public function getFollowupTypeAllowableValues()
    {
        return [
            self::FOLLOWUP_TYPE_URL,
            self::FOLLOWUP_TYPE_LP,
            self::FOLLOWUP_TYPE_FORM_DEFINED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return array
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_IMAGE,
            self::TYPE_SOCIAL_BUTTON,
            self::TYPE_FORM,
            self::TYPE_DYNAMIC_CONTENT,
            self::TYPE_RECTANGLE,
            self::TYPE_SNIPPET,
            self::TYPE_RICH_TEXT,
            self::TYPE_HTML,
            self::TYPE_VIDEO,
            self::TYPE_POLL,
            self::TYPE_REFERRAL_OFFER,
            self::TYPE_SWEEPSTAKES,
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
        $this->container['content'] = $data['content'] ?? null;
        $this->container['followup_type'] = $data['followup_type'] ?? null;
        $this->container['followup_value'] = $data['followup_value'] ?? null;
        $this->container['formatting_options'] = $data['formatting_options'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['index'] = $data['index'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFollowupTypeAllowableValues();
        if (!is_null($this->container['followup_type']) && !in_array($this->container['followup_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'followup_type', must be one of '%s'",
                $this->container['followup_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
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
     * Gets content
     *
     * @return object|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param object|null $content Content of the section.  Expected values vary based on type.  Image: An image URL.  RichText: HTML Content.  HTML: HTML Content.  Form: A form id.  Rectangle: Empty. Snippet: A snippet id.
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets followup_type
     *
     * @return string|null
     */
    public function getFollowupType()
    {
        return $this->container['followup_type'];
    }

    /**
     * Sets followup_type
     *
     * @param string|null $followup_type Follow-up behavior of a form.  Only available for form-type content sections.  Defaults to form defined behavior.
     *
     * @return self
     */
    public function setFollowupType($followup_type)
    {
        $allowedValues = $this->getFollowupTypeAllowableValues();
        if (!is_null($followup_type) && !in_array($followup_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'followup_type', must be one of '%s'",
                    $followup_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['followup_type'] = $followup_type;

        return $this;
    }

    /**
     * Gets followup_value
     *
     * @return string|null
     */
    public function getFollowupValue()
    {
        return $this->container['followup_value'];
    }

    /**
     * Sets followup_value
     *
     * @param string|null $followup_value Where to follow-up on form submission.  When followupType is lp, accepts the integer id of a landing page.  For url, it accepts a url string.
     *
     * @return self
     */
    public function setFollowupValue($followup_value)
    {
        $this->container['followup_value'] = $followup_value;

        return $this;
    }

    /**
     * Gets formatting_options
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\JsonNode|null
     */
    public function getFormattingOptions()
    {
        return $this->container['formatting_options'];
    }

    /**
     * Sets formatting_options
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\JsonNode|null $formatting_options formatting_options
     *
     * @return self
     */
    public function setFormattingOptions($formatting_options)
    {
        $this->container['formatting_options'] = $formatting_options;

        return $this;
    }

    /**
     * Gets id
     *
     * @return object
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param object $id Id of the content section, may be a string or an int
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param int|null $index Index of the content section.  Index orients the elements from lowest to highest
     *
     * @return self
     */
    public function setIndex($index)
    {
        $this->container['index'] = $index;

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


