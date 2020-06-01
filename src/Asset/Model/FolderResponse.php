<?php
/**
 * FolderResponse
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
 * FolderResponse Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FolderResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FolderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'access_zone_id' => 'int',
        'created_at' => '\DateTime',
        'description' => 'string',
        'folder_id' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'folder_type' => 'string',
        'id' => 'int',
        'is_archive' => 'bool',
        'is_system' => 'bool',
        'name' => 'string',
        'parent' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'path' => 'string',
        'updated_at' => '\DateTime',
        'url' => 'string',
        'workspace' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'access_zone_id' => 'int32',
        'created_at' => 'date-time',
        'description' => null,
        'folder_id' => null,
        'folder_type' => null,
        'id' => 'int32',
        'is_archive' => null,
        'is_system' => null,
        'name' => null,
        'parent' => null,
        'path' => null,
        'updated_at' => 'date-time',
        'url' => null,
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
        'access_zone_id' => 'accessZoneId',
        'created_at' => 'createdAt',
        'description' => 'description',
        'folder_id' => 'folderId',
        'folder_type' => 'folderType',
        'id' => 'id',
        'is_archive' => 'isArchive',
        'is_system' => 'isSystem',
        'name' => 'name',
        'parent' => 'parent',
        'path' => 'path',
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
        'access_zone_id' => 'setAccessZoneId',
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'folder_id' => 'setFolderId',
        'folder_type' => 'setFolderType',
        'id' => 'setId',
        'is_archive' => 'setIsArchive',
        'is_system' => 'setIsSystem',
        'name' => 'setName',
        'parent' => 'setParent',
        'path' => 'setPath',
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
        'access_zone_id' => 'getAccessZoneId',
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'folder_id' => 'getFolderId',
        'folder_type' => 'getFolderType',
        'id' => 'getId',
        'is_archive' => 'getIsArchive',
        'is_system' => 'getIsSystem',
        'name' => 'getName',
        'parent' => 'getParent',
        'path' => 'getPath',
        'updated_at' => 'getUpdatedAt',
        'url' => 'getUrl',
        'workspace' => 'getWorkspace'
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
     * {@inheritdoc}
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const FOLDER_TYPE_FOLDER = 'Folder';
    const FOLDER_TYPE_PROGRAM = 'Program';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFolderTypeAllowableValues()
    {
        return [
            self::FOLDER_TYPE_FOLDER,
            self::FOLDER_TYPE_PROGRAM,
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
        $this->container['access_zone_id'] = isset($data['access_zone_id']) ? $data['access_zone_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['folder_id'] = isset($data['folder_id']) ? $data['folder_id'] : null;
        $this->container['folder_type'] = isset($data['folder_type']) ? $data['folder_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_archive'] = isset($data['is_archive']) ? $data['is_archive'] : null;
        $this->container['is_system'] = isset($data['is_system']) ? $data['is_system'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['folder_id'] === null) {
            $invalidProperties[] = "'folder_id' can't be null";
        }
        if ($this->container['folder_type'] === null) {
            $invalidProperties[] = "'folder_type' can't be null";
        }
        $allowedValues = $this->getFolderTypeAllowableValues();
        if (!is_null($this->container['folder_type']) && !in_array($this->container['folder_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'folder_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['is_archive'] === null) {
            $invalidProperties[] = "'is_archive' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['parent'] === null) {
            $invalidProperties[] = "'parent' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
     * Gets access_zone_id
     *
     * @return int
     */
    public function getAccessZoneId()
    {
        return $this->container['access_zone_id'];
    }

    /**
     * Sets access_zone_id
     *
     * @param int $access_zone_id access_zone_id
     *
     * @return $this
     */
    public function setAccessZoneId($access_zone_id)
    {
        $this->container['access_zone_id'] = $access_zone_id;

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
     * @param \DateTime $created_at Datetime the folder was created
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
     * @param string $description Description of the folder
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\Folder
     */
    public function getFolderId()
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\Folder $folder_id Id of the folder
     *
     * @return $this
     */
    public function setFolderId($folder_id)
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets folder_type
     *
     * @return string
     */
    public function getFolderType()
    {
        return $this->container['folder_type'];
    }

    /**
     * Sets folder_type
     *
     * @param string $folder_type Type of folder.  'Folder' or 'Program'
     *
     * @return $this
     */
    public function setFolderType($folder_type)
    {
        $allowedValues = $this->getFolderTypeAllowableValues();
        if (!in_array($folder_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'folder_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['folder_type'] = $folder_type;

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
     * @param int $id Id of the folder
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_archive
     *
     * @return bool
     */
    public function getIsArchive()
    {
        return $this->container['is_archive'];
    }

    /**
     * Sets is_archive
     *
     * @param bool $is_archive Archival status of the folder
     *
     * @return $this
     */
    public function setIsArchive($is_archive)
    {
        $this->container['is_archive'] = $is_archive;

        return $this;
    }

    /**
     * Gets is_system
     *
     * @return bool
     */
    public function getIsSystem()
    {
        return $this->container['is_system'];
    }

    /**
     * Sets is_system
     *
     * @param bool $is_system Whether the folder is system-managed
     *
     * @return $this
     */
    public function setIsSystem($is_system)
    {
        $this->container['is_system'] = $is_system;

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
     * @param string $name Name of the folder.  Not applicable for Programs
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\Folder
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\Folder $parent Parent folder reference
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path Path of the folder
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->container['path'] = $path;

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
     * @param \DateTime $updated_at Datetime the folder was last updated
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
     * @param string $url Url of the folder
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


