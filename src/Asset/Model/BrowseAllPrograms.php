<?php
/**
 * BrowseAllPrograms
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
 * BrowseAllPrograms Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<string,?mixed>
 */
class BrowseAllPrograms implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BrowseAllPrograms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'channel' => 'string',
        'created_at' => '\DateTime',
        'description' => 'string',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'id' => 'int',
        'name' => 'string',
        'sfdc_id' => 'string',
        'sfdc_name' => 'string',
        'status' => 'string',
        'type' => 'string',
        'updated_at' => '\DateTime',
        'url' => 'string',
        'workspace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'channel' => null,
        'created_at' => 'date-time',
        'description' => null,
        'folder' => null,
        'id' => 'int64',
        'name' => null,
        'sfdc_id' => null,
        'sfdc_name' => null,
        'status' => null,
        'type' => null,
        'updated_at' => 'date-time',
        'url' => null,
        'workspace' => null
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
        'channel' => 'channel',
        'created_at' => 'createdAt',
        'description' => 'description',
        'folder' => 'folder',
        'id' => 'id',
        'name' => 'name',
        'sfdc_id' => 'sfdcId',
        'sfdc_name' => 'sfdcName',
        'status' => 'status',
        'type' => 'type',
        'updated_at' => 'updatedAt',
        'url' => 'url',
        'workspace' => 'workspace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channel' => 'setChannel',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'folder' => 'setFolder',
        'id' => 'setId',
        'name' => 'setName',
        'sfdc_id' => 'setSfdcId',
        'sfdc_name' => 'setSfdcName',
        'status' => 'setStatus',
        'type' => 'setType',
        'updated_at' => 'setUpdatedAt',
        'url' => 'setUrl',
        'workspace' => 'setWorkspace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channel' => 'getChannel',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'folder' => 'getFolder',
        'id' => 'getId',
        'name' => 'getName',
        'sfdc_id' => 'getSfdcId',
        'sfdc_name' => 'getSfdcName',
        'status' => 'getStatus',
        'type' => 'getType',
        'updated_at' => 'getUpdatedAt',
        'url' => 'getUrl',
        'workspace' => 'getWorkspace'
    ];

    const STATUS_LOCKED = 'locked';
    const STATUS_UNLOCKED = 'unlocked';
    const STATUS_ON = 'on';
    const STATUS_OFF = 'off';
    const TYPE_PROGRAM = 'program';
    const TYPE_EVENT = 'event';
    const TYPE_WEBINAR = 'webinar';
    const TYPE_NURTURE = 'nurture';
    

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
        $this->container['channel'] = $data['channel'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['folder'] = $data['folder'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['sfdc_id'] = $data['sfdc_id'] ?? null;
        $this->container['sfdc_name'] = $data['sfdc_name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['workspace'] = $data['workspace'] ?? null;
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

        if ($this->container['channel'] === null) {
            $invalidProperties[] = "'channel' can't be null";
        }
        if ($this->container['folder'] === null) {
            $invalidProperties[] = "'folder' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
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
     * Gets allowable values of the enum.
     *
     * @return scalar[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_LOCKED,
            self::STATUS_UNLOCKED,
            self::STATUS_ON,
            self::STATUS_OFF,
        ];
    }
    

    /**
     * Gets allowable values of the enum.
     *
     * @return scalar[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PROGRAM,
            self::TYPE_EVENT,
            self::TYPE_WEBINAR,
            self::TYPE_NURTURE,
        ];
    }
    

    /**
     * Gets channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string $channel Channel of the program
     *
     * @return self
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
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
     * @return string|null
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
     * Gets id
     *
     * @return int|null
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
     * @return string|null
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
     * Gets sfdc_id
     *
     * @return string|null
     */
    public function getSfdcId()
    {
        return $this->container['sfdc_id'];
    }

    /**
     * Sets sfdc_id
     *
     * @param string $sfdc_id SFDC id of the program if linked to an SFDC campaign
     *
     * @return self
     */
    public function setSfdcId($sfdc_id)
    {
        $this->container['sfdc_id'] = $sfdc_id;

        return $this;
    }

    /**
     * Gets sfdc_name
     *
     * @return string|null
     */
    public function getSfdcName()
    {
        return $this->container['sfdc_name'];
    }

    /**
     * Sets sfdc_name
     *
     * @param string $sfdc_name Name of the linked SFDC campaign if applicable
     *
     * @return self
     */
    public function setSfdcName($sfdc_name)
    {
        $this->container['sfdc_name'] = $sfdc_name;

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
     * @param string $status Status of the program.  Only valid for Email and engagement program types.
     *
     * @return self
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
     * @param string $type Type of the program
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
     * Gets updated_at
     *
     * @return \DateTime|null
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
     * @return string|null
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
     * Gets workspace
     *
     * @return string|null
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


