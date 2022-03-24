<?php

/**
 * FolderResponse
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
 * FolderResponse Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FolderResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    public const FOLDER_TYPE_EMAIL = 'Email';
    public const FOLDER_TYPE_EMAIL_BATCH_PROGRAM = 'Email Batch Program';
    public const FOLDER_TYPE_EMAIL_TEMPLATE = 'Email Template';
    public const FOLDER_TYPE_IMAGE = 'Image';
    public const FOLDER_TYPE_LANDING_PAGE = 'Landing Page';
    public const FOLDER_TYPE_LANDING_PAGE_FORM = 'Landing Page Form';
    public const FOLDER_TYPE_LANDING_PAGE_TEMPLATE = 'Landing Page Template';
    public const FOLDER_TYPE_MARKETING_EVENT = 'Marketing Event';
    public const FOLDER_TYPE_MARKETING_FOLDER = 'Marketing Folder';
    public const FOLDER_TYPE_MARKETING_PROGRAM = 'Marketing Program';
    public const FOLDER_TYPE_NURTURE_PROGRAM = 'Nurture Program';
    public const FOLDER_TYPE_REPORT = 'Report';
    public const FOLDER_TYPE_REVENUE_CYCLE_MODEL = 'Revenue Cycle Model';
    public const FOLDER_TYPE_ZONE = 'Zone';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FolderResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
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
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
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
        $this->container['access_zone_id'] = $data['access_zone_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['folder_id'] = $data['folder_id'] ?? null;
        $this->container['folder_type'] = $data['folder_type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['is_archive'] = $data['is_archive'] ?? null;
        $this->container['is_system'] = $data['is_system'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['parent'] = $data['parent'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['workspace'] = $data['workspace'] ?? null;
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

        if ($this->container['created_at'] === null) {
            $invalidProperties['created_at'] = "'created_at' can't be null";
        }
        if ($this->container['folder_id'] === null) {
            $invalidProperties['folder_id'] = "'folder_id' can't be null";
        }
        if ($this->container['folder_type'] === null) {
            $invalidProperties['folder_type'] = "'folder_type' can't be null";
        }
        $allowedValues = $this->getFolderTypeAllowableValues();
        if (!is_null($this->container['folder_type']) && !in_array($this->container['folder_type'], $allowedValues, true)) {
            $invalidProperties['folder_type'] = sprintf(
                "invalid value '%s' for 'folder_type', must be one of '%s'",
                $this->container['folder_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties['id'] = "'id' can't be null";
        }
        if ($this->container['is_archive'] === null) {
            $invalidProperties['is_archive'] = "'is_archive' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties['name'] = "'name' can't be null";
        }
        if ($this->container['parent'] === null) {
            $invalidProperties['parent'] = "'parent' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties['path'] = "'path' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties['updated_at'] = "'updated_at' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties['url'] = "'url' can't be null";
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
    public function getFolderTypeAllowableValues(): array
    {
        return [
            self::FOLDER_TYPE_EMAIL,
            self::FOLDER_TYPE_EMAIL_BATCH_PROGRAM,
            self::FOLDER_TYPE_EMAIL_TEMPLATE,
            self::FOLDER_TYPE_IMAGE,
            self::FOLDER_TYPE_LANDING_PAGE,
            self::FOLDER_TYPE_LANDING_PAGE_FORM,
            self::FOLDER_TYPE_LANDING_PAGE_TEMPLATE,
            self::FOLDER_TYPE_MARKETING_EVENT,
            self::FOLDER_TYPE_MARKETING_FOLDER,
            self::FOLDER_TYPE_MARKETING_PROGRAM,
            self::FOLDER_TYPE_NURTURE_PROGRAM,
            self::FOLDER_TYPE_REPORT,
            self::FOLDER_TYPE_REVENUE_CYCLE_MODEL,
            self::FOLDER_TYPE_ZONE,
        ];
    }

    /**
     * Gets access_zone_id
     *
     * @return int|null
     */
    public function getAccessZoneId(): ?int
    {
        return $this->container['access_zone_id'];
    }

    /**
     * Sets access_zone_id
     *
     * @param int|null $access_zone_id access_zone_id
     *
     * @return self<TKey, TValue>
     */
    public function setAccessZoneId(?int $access_zone_id): FolderResponse
    {
        $this->container['access_zone_id'] = $access_zone_id;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Datetime the folder was created
     *
     * @return self<TKey, TValue>
     */
    public function setCreatedAt(\DateTime $created_at): FolderResponse
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the folder
     *
     * @return self<TKey, TValue>
     */
    public function setDescription(?string $description): FolderResponse
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets folder_id
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\Folder
     */
    public function getFolderId(): \NecLimDul\MarketoRest\Asset\Model\Folder
    {
        return $this->container['folder_id'];
    }

    /**
     * Sets folder_id
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\Folder $folder_id Id of the folder
     *
     * @return self<TKey, TValue>
     */
    public function setFolderId(\NecLimDul\MarketoRest\Asset\Model\Folder $folder_id): FolderResponse
    {
        $this->container['folder_id'] = $folder_id;

        return $this;
    }

    /**
     * Gets folder_type
     *
     * @return string
     */
    public function getFolderType(): string
    {
        return $this->container['folder_type'];
    }

    /**
     * Sets folder_type
     *
     * @param string $folder_type Type of folder
     *
     * @return self<TKey, TValue>
     */
    public function setFolderType(string $folder_type): FolderResponse
    {
        $allowedValues = $this->getFolderTypeAllowableValues();
        if (!in_array($folder_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'folder_type', must be one of '%s'",
                    $folder_type,
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
    public function getId(): int
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Id of the folder
     *
     * @return self<TKey, TValue>
     */
    public function setId(int $id): FolderResponse
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_archive
     *
     * @return bool
     */
    public function getIsArchive(): bool
    {
        return $this->container['is_archive'];
    }

    /**
     * Sets is_archive
     *
     * @param bool $is_archive Archival status of the folder
     *
     * @return self<TKey, TValue>
     */
    public function setIsArchive(bool $is_archive): FolderResponse
    {
        $this->container['is_archive'] = $is_archive;

        return $this;
    }

    /**
     * Gets is_system
     *
     * @return bool|null
     */
    public function getIsSystem(): ?bool
    {
        return $this->container['is_system'];
    }

    /**
     * Sets is_system
     *
     * @param bool|null $is_system Whether the folder is system-managed
     *
     * @return self<TKey, TValue>
     */
    public function setIsSystem(?bool $is_system): FolderResponse
    {
        $this->container['is_system'] = $is_system;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the folder.  Not applicable for Programs
     *
     * @return self<TKey, TValue>
     */
    public function setName(string $name): FolderResponse
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\Folder
     */
    public function getParent(): \NecLimDul\MarketoRest\Asset\Model\Folder
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\Folder $parent Parent folder reference
     *
     * @return self<TKey, TValue>
     */
    public function setParent(\NecLimDul\MarketoRest\Asset\Model\Folder $parent): FolderResponse
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path Path of the folder
     *
     * @return self<TKey, TValue>
     */
    public function setPath(string $path): FolderResponse
    {
        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Datetime the folder was last updated
     *
     * @return self<TKey, TValue>
     */
    public function setUpdatedAt(\DateTime $updated_at): FolderResponse
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url Url of the folder
     *
     * @return self<TKey, TValue>
     */
    public function setUrl(string $url): FolderResponse
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets workspace
     *
     * @return string|null
     */
    public function getWorkspace(): ?string
    {
        return $this->container['workspace'];
    }

    /**
     * Sets workspace
     *
     * @param string|null $workspace Name of the workspace
     *
     * @return self<TKey, TValue>
     */
    public function setWorkspace(?string $workspace): FolderResponse
    {
        $this->container['workspace'] = $workspace;

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
