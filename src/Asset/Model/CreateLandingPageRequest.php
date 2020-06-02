<?php
/**
 * CreateLandingPageRequest
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
 * CreateLandingPageRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateLandingPageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateLandingPageRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'custom_head_html' => 'string',
        'description' => 'string',
        'facebook_og_tags' => 'string',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'keywords' => 'string',
        'mobile_enabled' => 'bool',
        'name' => 'string',
        'prefill_form' => 'bool',
        'robots' => 'string',
        'template' => 'int',
        'title' => 'string',
        'url_page_name' => 'string',
        'workspace' => 'string'
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
        'folder' => null,
        'keywords' => null,
        'mobile_enabled' => null,
        'name' => null,
        'prefill_form' => null,
        'robots' => null,
        'template' => 'int32',
        'title' => null,
        'url_page_name' => null,
        'workspace' => null
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
        'custom_head_html' => 'customHeadHTML',
        'description' => 'description',
        'facebook_og_tags' => 'facebookOgTags',
        'folder' => 'folder',
        'keywords' => 'keywords',
        'mobile_enabled' => 'mobileEnabled',
        'name' => 'name',
        'prefill_form' => 'prefillForm',
        'robots' => 'robots',
        'template' => 'template',
        'title' => 'title',
        'url_page_name' => 'urlPageName',
        'workspace' => 'workspace'
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
        'folder' => 'setFolder',
        'keywords' => 'setKeywords',
        'mobile_enabled' => 'setMobileEnabled',
        'name' => 'setName',
        'prefill_form' => 'setPrefillForm',
        'robots' => 'setRobots',
        'template' => 'setTemplate',
        'title' => 'setTitle',
        'url_page_name' => 'setUrlPageName',
        'workspace' => 'setWorkspace'
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
        'folder' => 'getFolder',
        'keywords' => 'getKeywords',
        'mobile_enabled' => 'getMobileEnabled',
        'name' => 'getName',
        'prefill_form' => 'getPrefillForm',
        'robots' => 'getRobots',
        'template' => 'getTemplate',
        'title' => 'getTitle',
        'url_page_name' => 'getUrlPageName',
        'workspace' => 'getWorkspace'
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
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['mobile_enabled'] = isset($data['mobile_enabled']) ? $data['mobile_enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['prefill_form'] = isset($data['prefill_form']) ? $data['prefill_form'] : null;
        $this->container['robots'] = isset($data['robots']) ? $data['robots'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['url_page_name'] = isset($data['url_page_name']) ? $data['url_page_name'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
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

        if ($this->container['folder'] === null) {
            $invalidProperties[] = "'folder' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
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
     * Gets prefill_form
     *
     * @return bool
     */
    public function getPrefillForm()
    {
        return $this->container['prefill_form'];
    }

    /**
     * Sets prefill_form
     *
     * @param bool $prefill_form Boolean to toggle whether forms embedded in the page will prefill.  Default false
     *
     * @return $this
     */
    public function setPrefillForm($prefill_form)
    {
        $this->container['prefill_form'] = $prefill_form;

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
     * Gets template
     *
     * @return int
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param int $template Id of the template used
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

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
     * Gets workspace
     *
     * @return string
     */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
     * Sets workspace
     *
     * @param string $workspace Name of the workspace
     *
     * @return $this
     */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;

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


