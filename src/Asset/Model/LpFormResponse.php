<?php
/**
 * LpFormResponse
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
 * LpFormResponse Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LpFormResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LpFormResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'button_label' => 'string',
        'button_location' => 'int',
        'created_at' => '\DateTime',
        'description' => 'string',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'font_family' => 'string',
        'font_size' => 'string',
        'id' => 'int',
        'known_visitor' => '\NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO',
        'label_position' => 'string',
        'language' => 'string',
        'locale' => 'string',
        'name' => 'string',
        'progressive_profiling' => 'bool',
        'status' => 'string',
        'thank_you_list' => '\NecLimDul\MarketoRest\Asset\Model\FormThankYouPageDTO[]',
        'theme' => 'string',
        'updated_at' => '\DateTime',
        'url' => 'string',
        'waiting_label' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'button_label' => null,
        'button_location' => 'int32',
        'created_at' => 'date-time',
        'description' => null,
        'folder' => null,
        'font_family' => null,
        'font_size' => null,
        'id' => 'int64',
        'known_visitor' => null,
        'label_position' => null,
        'language' => null,
        'locale' => null,
        'name' => null,
        'progressive_profiling' => null,
        'status' => null,
        'thank_you_list' => null,
        'theme' => null,
        'updated_at' => 'date-time',
        'url' => null,
        'waiting_label' => null
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
        'button_label' => 'buttonLabel',
        'button_location' => 'buttonLocation',
        'created_at' => 'createdAt',
        'description' => 'description',
        'folder' => 'folder',
        'font_family' => 'fontFamily',
        'font_size' => 'fontSize',
        'id' => 'id',
        'known_visitor' => 'knownVisitor',
        'label_position' => 'labelPosition',
        'language' => 'language',
        'locale' => 'locale',
        'name' => 'name',
        'progressive_profiling' => 'progressiveProfiling',
        'status' => 'status',
        'thank_you_list' => 'thankYouList',
        'theme' => 'theme',
        'updated_at' => 'updatedAt',
        'url' => 'url',
        'waiting_label' => 'waitingLabel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'button_label' => 'setButtonLabel',
        'button_location' => 'setButtonLocation',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'folder' => 'setFolder',
        'font_family' => 'setFontFamily',
        'font_size' => 'setFontSize',
        'id' => 'setId',
        'known_visitor' => 'setKnownVisitor',
        'label_position' => 'setLabelPosition',
        'language' => 'setLanguage',
        'locale' => 'setLocale',
        'name' => 'setName',
        'progressive_profiling' => 'setProgressiveProfiling',
        'status' => 'setStatus',
        'thank_you_list' => 'setThankYouList',
        'theme' => 'setTheme',
        'updated_at' => 'setUpdatedAt',
        'url' => 'setUrl',
        'waiting_label' => 'setWaitingLabel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'button_label' => 'getButtonLabel',
        'button_location' => 'getButtonLocation',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'folder' => 'getFolder',
        'font_family' => 'getFontFamily',
        'font_size' => 'getFontSize',
        'id' => 'getId',
        'known_visitor' => 'getKnownVisitor',
        'label_position' => 'getLabelPosition',
        'language' => 'getLanguage',
        'locale' => 'getLocale',
        'name' => 'getName',
        'progressive_profiling' => 'getProgressiveProfiling',
        'status' => 'getStatus',
        'thank_you_list' => 'getThankYouList',
        'theme' => 'getTheme',
        'updated_at' => 'getUpdatedAt',
        'url' => 'getUrl',
        'waiting_label' => 'getWaitingLabel'
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

    const STATUS_APPROVED = 'approved';
    const STATUS_DRAFT = 'draft';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVED,
            self::STATUS_DRAFT,
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
        $this->container['button_label'] = isset($data['button_label']) ? $data['button_label'] : null;
        $this->container['button_location'] = isset($data['button_location']) ? $data['button_location'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['font_family'] = isset($data['font_family']) ? $data['font_family'] : null;
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['known_visitor'] = isset($data['known_visitor']) ? $data['known_visitor'] : null;
        $this->container['label_position'] = isset($data['label_position']) ? $data['label_position'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['progressive_profiling'] = isset($data['progressive_profiling']) ? $data['progressive_profiling'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['thank_you_list'] = isset($data['thank_you_list']) ? $data['thank_you_list'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['waiting_label'] = isset($data['waiting_label']) ? $data['waiting_label'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['button_label'] === null) {
            $invalidProperties[] = "'button_label' can't be null";
        }
        if ($this->container['button_location'] === null) {
            $invalidProperties[] = "'button_location' can't be null";
        }
        if ($this->container['folder'] === null) {
            $invalidProperties[] = "'folder' can't be null";
        }
        if ($this->container['font_family'] === null) {
            $invalidProperties[] = "'font_family' can't be null";
        }
        if ($this->container['font_size'] === null) {
            $invalidProperties[] = "'font_size' can't be null";
        }
        if ($this->container['known_visitor'] === null) {
            $invalidProperties[] = "'known_visitor' can't be null";
        }
        if ($this->container['label_position'] === null) {
            $invalidProperties[] = "'label_position' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }
        if ($this->container['progressive_profiling'] === null) {
            $invalidProperties[] = "'progressive_profiling' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['thank_you_list'] === null) {
            $invalidProperties[] = "'thank_you_list' can't be null";
        }
        if ($this->container['theme'] === null) {
            $invalidProperties[] = "'theme' can't be null";
        }
        if ($this->container['waiting_label'] === null) {
            $invalidProperties[] = "'waiting_label' can't be null";
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
     * Gets button_label
     *
     * @return string
     */
    public function getButtonLabel()
    {
        return $this->container['button_label'];
    }

    /**
     * Sets button_label
     *
     * @param string $button_label Label text of the button
     *
     * @return $this
     */
    public function setButtonLabel($button_label)
    {
        $this->container['button_label'] = $button_label;

        return $this;
    }

    /**
     * Gets button_location
     *
     * @return int
     */
    public function getButtonLocation()
    {
        return $this->container['button_location'];
    }

    /**
     * Sets button_location
     *
     * @param int $button_location Location in pixels of the button relative to the left of the form
     *
     * @return $this
     */
    public function setButtonLocation($button_location)
    {
        $this->container['button_location'] = $button_location;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Datetime the asset was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * Gets folder
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\Folder
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\Folder $folder JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     *
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Id of the asset
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name Name of the asset
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status filter for draft or approved versions
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets thank_you_list
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\FormThankYouPageDTO[]
     */
    public function getThankYouList()
    {
        return $this->container['thank_you_list'];
    }

    /**
     * Sets thank_you_list
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\FormThankYouPageDTO[] $thank_you_list List of thank you page behaviors for the form
     *
     * @return $this
     */
    public function setThankYouList($thank_you_list)
    {
        $this->container['thank_you_list'] = $thank_you_list;

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
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Datetime the asset was most recently updated
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Url of the asset in the Marketo UI
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets waiting_label
     *
     * @return string
     */
    public function getWaitingLabel()
    {
        return $this->container['waiting_label'];
    }

    /**
     * Sets waiting_label
     *
     * @param string $waiting_label Waiting text of the button
     *
     * @return $this
     */
    public function setWaitingLabel($waiting_label)
    {
        $this->container['waiting_label'] = $waiting_label;

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


