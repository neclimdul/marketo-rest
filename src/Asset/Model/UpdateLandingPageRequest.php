<?php
/**
 * UpdateLandingPageRequest
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
 * UpdateLandingPageRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateLandingPageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateLandingPageRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_head_html' => 'string',
        'description' => 'string',
        'facebook_og_tags' => 'string',
        'keywords' => 'string',
        'meta_tags_description' => 'string',
        'mobile_enabled' => 'bool',
        'name' => 'string',
        'robots' => 'string',
        'style_over_ride' => 'string',
        'title' => 'string',
        'url_page_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'custom_head_html' => null,
        'description' => null,
        'facebook_og_tags' => null,
        'keywords' => null,
        'meta_tags_description' => null,
        'mobile_enabled' => null,
        'name' => null,
        'robots' => null,
        'style_over_ride' => null,
        'title' => null,
        'url_page_name' => null
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
        'custom_head_html' => 'customHeadHTML',
        'description' => 'description',
        'facebook_og_tags' => 'facebookOgTags',
        'keywords' => 'keywords',
        'meta_tags_description' => 'metaTagsDescription',
        'mobile_enabled' => 'mobileEnabled',
        'name' => 'name',
        'robots' => 'robots',
        'style_over_ride' => 'styleOverRide',
        'title' => 'title',
        'url_page_name' => 'urlPageName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'custom_head_html' => 'setCustomHeadHtml',
        'description' => 'setDescription',
        'facebook_og_tags' => 'setFacebookOgTags',
        'keywords' => 'setKeywords',
        'meta_tags_description' => 'setMetaTagsDescription',
        'mobile_enabled' => 'setMobileEnabled',
        'name' => 'setName',
        'robots' => 'setRobots',
        'style_over_ride' => 'setStyleOverRide',
        'title' => 'setTitle',
        'url_page_name' => 'setUrlPageName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'custom_head_html' => 'getCustomHeadHtml',
        'description' => 'getDescription',
        'facebook_og_tags' => 'getFacebookOgTags',
        'keywords' => 'getKeywords',
        'meta_tags_description' => 'getMetaTagsDescription',
        'mobile_enabled' => 'getMobileEnabled',
        'name' => 'getName',
        'robots' => 'getRobots',
        'style_over_ride' => 'getStyleOverRide',
        'title' => 'getTitle',
        'url_page_name' => 'getUrlPageName'
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
        $this->container['custom_head_html'] = isset($data['custom_head_html']) ? $data['custom_head_html'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['facebook_og_tags'] = isset($data['facebook_og_tags']) ? $data['facebook_og_tags'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['meta_tags_description'] = isset($data['meta_tags_description']) ? $data['meta_tags_description'] : null;
        $this->container['mobile_enabled'] = isset($data['mobile_enabled']) ? $data['mobile_enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['robots'] = isset($data['robots']) ? $data['robots'] : null;
        $this->container['style_over_ride'] = isset($data['style_over_ride']) ? $data['style_over_ride'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['url_page_name'] = isset($data['url_page_name']) ? $data['url_page_name'] : null;
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
     * Gets custom_head_html
     *
     * @return string
     */
    public function getCustomHeadHtml()
    {
        return $this->container['custom_head_html'];
    }

    /**
     * Sets custom_head_html
     *
     * @param string $custom_head_html Any custom HTML to embed in the <head> tag of the page
     *
     * @return $this
     */
    public function setCustomHeadHtml($custom_head_html)
    {
        $this->container['custom_head_html'] = $custom_head_html;

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
     * Gets facebook_og_tags
     *
     * @return string
     */
    public function getFacebookOgTags()
    {
        return $this->container['facebook_og_tags'];
    }

    /**
     * Sets facebook_og_tags
     *
     * @param string $facebook_og_tags Any OpenGraph meta tags to apply to the page
     *
     * @return $this
     */
    public function setFacebookOgTags($facebook_og_tags)
    {
        $this->container['facebook_og_tags'] = $facebook_og_tags;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string $keywords keywords
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets meta_tags_description
     *
     * @return string
     */
    public function getMetaTagsDescription()
    {
        return $this->container['meta_tags_description'];
    }

    /**
     * Sets meta_tags_description
     *
     * @param string $meta_tags_description Meta description property of the page
     *
     * @return $this
     */
    public function setMetaTagsDescription($meta_tags_description)
    {
        $this->container['meta_tags_description'] = $meta_tags_description;

        return $this;
    }

    /**
     * Gets mobile_enabled
     *
     * @return bool
     */
    public function getMobileEnabled()
    {
        return $this->container['mobile_enabled'];
    }

    /**
     * Sets mobile_enabled
     *
     * @param bool $mobile_enabled Whether the page has mobile viewing enabled.  Free-form pages only.  Default false
     *
     * @return $this
     */
    public function setMobileEnabled($mobile_enabled)
    {
        $this->container['mobile_enabled'] = $mobile_enabled;

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
     * @param string $name Name of the landing page
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets robots
     *
     * @return string
     */
    public function getRobots()
    {
        return $this->container['robots'];
    }

    /**
     * Sets robots
     *
     * @param string $robots Robots directives to apply to the pages meta tags
     *
     * @return $this
     */
    public function setRobots($robots)
    {
        $this->container['robots'] = $robots;

        return $this;
    }

    /**
     * Gets style_over_ride
     *
     * @return string
     */
    public function getStyleOverRide()
    {
        return $this->container['style_over_ride'];
    }

    /**
     * Sets style_over_ride
     *
     * @param string $style_over_ride Additional CSS styles to append to the landing page <head>
     *
     * @return $this
     */
    public function setStyleOverRide($style_over_ride)
    {
        $this->container['style_over_ride'] = $style_over_ride;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title element of the landing page
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets url_page_name
     *
     * @return string
     */
    public function getUrlPageName()
    {
        return $this->container['url_page_name'];
    }

    /**
     * Sets url_page_name
     *
     * @param string $url_page_name URL path of the page.  Derived from the name field if unset
     *
     * @return $this
     */
    public function setUrlPageName($url_page_name)
    {
        $this->container['url_page_name'] = $url_page_name;

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


