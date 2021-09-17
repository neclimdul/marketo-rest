<?php
/**
 * EmailResponse
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
 * Swagger Codegen version: 2.4.15
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
 * EmailResponse Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EmailResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_at' => '\DateTime',
        'description' => 'string',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'from_email' => '\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField',
        'from_name' => '\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField',
        'id' => 'int',
        'name' => 'string',
        'operational' => 'bool',
        'publish_to_msi' => 'bool',
        'reply_email' => '\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField',
        'status' => 'string',
        'subject' => '\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField',
        'template' => 'int',
        'text_only' => 'bool',
        'updated_at' => '\DateTime',
        'url' => 'string',
        'version' => 'int',
        'web_view' => 'bool',
        'workspace' => 'string',
        'auto_copy_to_text' => 'bool',
        'pre_header' => 'string',
        'cc_fields' => '\NecLimDul\MarketoRest\Asset\Model\EmailCCFields[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'created_at' => 'date-time',
        'description' => null,
        'folder' => null,
        'from_email' => null,
        'from_name' => null,
        'id' => 'int64',
        'name' => null,
        'operational' => null,
        'publish_to_msi' => null,
        'reply_email' => null,
        'status' => null,
        'subject' => null,
        'template' => 'int32',
        'text_only' => null,
        'updated_at' => 'date-time',
        'url' => null,
        'version' => 'int32',
        'web_view' => null,
        'workspace' => null,
        'auto_copy_to_text' => null,
        'pre_header' => null,
        'cc_fields' => null
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
        'created_at' => 'createdAt',
        'description' => 'description',
        'folder' => 'folder',
        'from_email' => 'fromEmail',
        'from_name' => 'fromName',
        'id' => 'id',
        'name' => 'name',
        'operational' => 'operational',
        'publish_to_msi' => 'publishToMSI',
        'reply_email' => 'replyEmail',
        'status' => 'status',
        'subject' => 'subject',
        'template' => 'template',
        'text_only' => 'textOnly',
        'updated_at' => 'updatedAt',
        'url' => 'url',
        'version' => 'version',
        'web_view' => 'webView',
        'workspace' => 'workspace',
        'auto_copy_to_text' => 'autoCopyToText',
        'pre_header' => 'preHeader',
        'cc_fields' => 'ccFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'folder' => 'setFolder',
        'from_email' => 'setFromEmail',
        'from_name' => 'setFromName',
        'id' => 'setId',
        'name' => 'setName',
        'operational' => 'setOperational',
        'publish_to_msi' => 'setPublishToMsi',
        'reply_email' => 'setReplyEmail',
        'status' => 'setStatus',
        'subject' => 'setSubject',
        'template' => 'setTemplate',
        'text_only' => 'setTextOnly',
        'updated_at' => 'setUpdatedAt',
        'url' => 'setUrl',
        'version' => 'setVersion',
        'web_view' => 'setWebView',
        'workspace' => 'setWorkspace',
        'auto_copy_to_text' => 'setAutoCopyToText',
        'pre_header' => 'setPreHeader',
        'cc_fields' => 'setCcFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'folder' => 'getFolder',
        'from_email' => 'getFromEmail',
        'from_name' => 'getFromName',
        'id' => 'getId',
        'name' => 'getName',
        'operational' => 'getOperational',
        'publish_to_msi' => 'getPublishToMsi',
        'reply_email' => 'getReplyEmail',
        'status' => 'getStatus',
        'subject' => 'getSubject',
        'template' => 'getTemplate',
        'text_only' => 'getTextOnly',
        'updated_at' => 'getUpdatedAt',
        'url' => 'getUrl',
        'version' => 'getVersion',
        'web_view' => 'getWebView',
        'workspace' => 'getWorkspace',
        'auto_copy_to_text' => 'getAutoCopyToText',
        'pre_header' => 'getPreHeader',
        'cc_fields' => 'getCcFields'
    ];

    const VERSION_1 = 1;
    const VERSION_2 = 2;
    

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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['from_email'] = isset($data['from_email']) ? $data['from_email'] : null;
        $this->container['from_name'] = isset($data['from_name']) ? $data['from_name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['operational'] = isset($data['operational']) ? $data['operational'] : null;
        $this->container['publish_to_msi'] = isset($data['publish_to_msi']) ? $data['publish_to_msi'] : null;
        $this->container['reply_email'] = isset($data['reply_email']) ? $data['reply_email'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['text_only'] = isset($data['text_only']) ? $data['text_only'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['web_view'] = isset($data['web_view']) ? $data['web_view'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['auto_copy_to_text'] = isset($data['auto_copy_to_text']) ? $data['auto_copy_to_text'] : null;
        $this->container['pre_header'] = isset($data['pre_header']) ? $data['pre_header'] : null;
        $this->container['cc_fields'] = isset($data['cc_fields']) ? $data['cc_fields'] : null;
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
        if ($this->container['from_email'] === null) {
            $invalidProperties[] = "'from_email' can't be null";
        }
        if ($this->container['from_name'] === null) {
            $invalidProperties[] = "'from_name' can't be null";
        }
        if ($this->container['operational'] === null) {
            $invalidProperties[] = "'operational' can't be null";
        }
        if ($this->container['publish_to_msi'] === null) {
            $invalidProperties[] = "'publish_to_msi' can't be null";
        }
        if ($this->container['reply_email'] === null) {
            $invalidProperties[] = "'reply_email' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties[] = "'subject' can't be null";
        }
        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
        }
        if ($this->container['text_only'] === null) {
            $invalidProperties[] = "'text_only' can't be null";
        }
        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'version', must be one of '%s'",
                $this->container['version'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['web_view'] === null) {
            $invalidProperties[] = "'web_view' can't be null";
        }
        if ($this->container['auto_copy_to_text'] === null) {
            $invalidProperties[] = "'auto_copy_to_text' can't be null";
        }
        if ($this->container['pre_header'] === null) {
            $invalidProperties[] = "'pre_header' can't be null";
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_1,
            self::VERSION_2,
        ];
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField
     */
    public function getFromEmail()
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField $from_email From-address of the Email
     *
     * @return self
     */
    public function setFromEmail($from_email)
    {
        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField
     */
    public function getFromName()
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField $from_name From-name of the Email
     *
     * @return self
     */
    public function setFromName($from_name)
    {
        $this->container['from_name'] = $from_name;

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
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operational
     *
     * @return bool
     */
    public function getOperational()
    {
        return $this->container['operational'];
    }

    /**
     * Sets operational
     *
     * @param bool $operational Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false
     *
     * @return self
     */
    public function setOperational($operational)
    {
        $this->container['operational'] = $operational;

        return $this;
    }

    /**
     * Gets publish_to_msi
     *
     * @return bool
     */
    public function getPublishToMsi()
    {
        return $this->container['publish_to_msi'];
    }

    /**
     * Sets publish_to_msi
     *
     * @param bool $publish_to_msi Whether the email is published to Marketo Sales Insight
     *
     * @return self
     */
    public function setPublishToMsi($publish_to_msi)
    {
        $this->container['publish_to_msi'] = $publish_to_msi;

        return $this;
    }

    /**
     * Gets reply_email
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField
     */
    public function getReplyEmail()
    {
        return $this->container['reply_email'];
    }

    /**
     * Sets reply_email
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField $reply_email Reply-To address of the Email
     *
     * @return self
     */
    public function setReplyEmail($reply_email)
    {
        $this->container['reply_email'] = $reply_email;

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
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField $subject Subject Line of the Email
     *
     * @return self
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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
     * @param int $template Id of the parent template
     *
     * @return self
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets text_only
     *
     * @return bool
     */
    public function getTextOnly()
    {
        return $this->container['text_only'];
    }

    /**
     * Sets text_only
     *
     * @param bool $text_only Setting to include text-only version of email when sent
     *
     * @return self
     */
    public function setTextOnly($text_only)
    {
        $this->container['text_only'] = $text_only;

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
     * @return self
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
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The type version of the email
     *
     * @return self
     */
    public function setVersion($version)
    {
        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($version) && !in_array($version, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'version', must be one of '%s'",
                    $version,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets web_view
     *
     * @return bool
     */
    public function getWebView()
    {
        return $this->container['web_view'];
    }

    /**
     * Sets web_view
     *
     * @param bool $web_view Whether 'View as Webpage' function is enabled for the email
     *
     * @return self
     */
    public function setWebView($web_view)
    {
        $this->container['web_view'] = $web_view;

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
     * @return self
     */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;

        return $this;
    }

    /**
     * Gets auto_copy_to_text
     *
     * @return bool
     */
    public function getAutoCopyToText()
    {
        return $this->container['auto_copy_to_text'];
    }

    /**
     * Sets auto_copy_to_text
     *
     * @param bool $auto_copy_to_text Setting to automatically copy HTML version to Text version
     *
     * @return self
     */
    public function setAutoCopyToText($auto_copy_to_text)
    {
        $this->container['auto_copy_to_text'] = $auto_copy_to_text;

        return $this;
    }

    /**
     * Gets pre_header
     *
     * @return string
     */
    public function getPreHeader()
    {
        return $this->container['pre_header'];
    }

    /**
     * Sets pre_header
     *
     * @param string $pre_header The email preheader text (max 1024 characters)
     *
     * @return self
     */
    public function setPreHeader($pre_header)
    {
        $this->container['pre_header'] = $pre_header;

        return $this;
    }

    /**
     * Gets cc_fields
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\EmailCCFields[]
     */
    public function getCcFields()
    {
        return $this->container['cc_fields'];
    }

    /**
     * Sets cc_fields
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\EmailCCFields[] $cc_fields cc_fields
     *
     * @return self
     */
    public function setCcFields($cc_fields)
    {
        $this->container['cc_fields'] = $cc_fields;

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


