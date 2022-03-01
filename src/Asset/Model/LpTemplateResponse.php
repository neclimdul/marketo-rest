<?php

/**
 * LpTemplateResponse
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
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

namespace NecLimDul\MarketoRest\Asset\Model;

use ArrayAccess;
use NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * LpTemplateResponse Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LpTemplateResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    public const TEMPLATE_TYPE_GUIDED = 'guided';
    public const TEMPLATE_TYPE_FREE_FORM = 'freeForm';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LpTemplateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'created_at' => '\DateTime',
        'description' => 'string',
        'enable_munchkin' => 'bool',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'id' => 'int',
        'name' => 'string',
        'status' => 'string',
        'template_type' => 'string',
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
        'created_at' => 'date-time',
        'description' => null,
        'enable_munchkin' => null,
        'folder' => null,
        'id' => 'int64',
        'name' => null,
        'status' => null,
        'template_type' => null,
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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_at' => 'createdAt',
        'description' => 'description',
        'enable_munchkin' => 'enableMunchkin',
        'folder' => 'folder',
        'id' => 'id',
        'name' => 'name',
        'status' => 'status',
        'template_type' => 'templateType',
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
        'created_at' => 'setCreatedAt',
        'description' => 'setDescription',
        'enable_munchkin' => 'setEnableMunchkin',
        'folder' => 'setFolder',
        'id' => 'setId',
        'name' => 'setName',
        'status' => 'setStatus',
        'template_type' => 'setTemplateType',
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
        'created_at' => 'getCreatedAt',
        'description' => 'getDescription',
        'enable_munchkin' => 'getEnableMunchkin',
        'folder' => 'getFolder',
        'id' => 'getId',
        'name' => 'getName',
        'status' => 'getStatus',
        'template_type' => 'getTemplateType',
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['enable_munchkin'] = $data['enable_munchkin'] ?? null;
        $this->container['folder'] = $data['folder'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['template_type'] = $data['template_type'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['workspace'] = $data['workspace'] ?? null;
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

        if ($this->container['enable_munchkin'] === null) {
            $invalidProperties[] = "'enable_munchkin' can't be null";
        }
        if ($this->container['folder'] === null) {
            $invalidProperties[] = "'folder' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['template_type'] === null) {
            $invalidProperties[] = "'template_type' can't be null";
        }
        $allowedValues = $this->getTemplateTypeAllowableValues();
        if (!is_null($this->container['template_type']) && !in_array($this->container['template_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'template_type', must be one of '%s'",
                $this->container['template_type'],
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
    public function getTemplateTypeAllowableValues(): array
    {
        return [
            self::TEMPLATE_TYPE_GUIDED,
            self::TEMPLATE_TYPE_FREE_FORM,
        ];
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
     * @param \DateTime|null $created_at Datetime the asset was created
     *
     * @return self<TKey, TValue>
     */
    public function setCreatedAt(?\DateTime $created_at): LpTemplateResponse
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the asset
     *
     * @return self<TKey, TValue>
     */
    public function setDescription(?string $description): LpTemplateResponse
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets enable_munchkin
     *
     * @return bool
     */
    public function getEnableMunchkin(): bool
    {
        return $this->container['enable_munchkin'];
    }

    /**
     * Sets enable_munchkin
     *
     * @param bool $enable_munchkin Whether to enable munchkin on the derived pages.  Defaults to true
     *
     * @return self<TKey, TValue>
     */
    public function setEnableMunchkin(bool $enable_munchkin): LpTemplateResponse
    {
        $this->container['enable_munchkin'] = $enable_munchkin;

        return $this;
    }

    /**
     * Gets folder
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\Folder
     */
    public function getFolder(): \NecLimDul\MarketoRest\Asset\Model\Folder
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\Folder $folder JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     *
     * @return self<TKey, TValue>
     */
    public function setFolder(\NecLimDul\MarketoRest\Asset\Model\Folder $folder): LpTemplateResponse
    {
        $this->container['folder'] = $folder;

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
     * @param int|null $id Id of the asset
     *
     * @return self<TKey, TValue>
     */
    public function setId(?int $id): LpTemplateResponse
    {
        $this->container['id'] = $id;

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
     * @param string|null $name Name of the asset
     *
     * @return self<TKey, TValue>
     */
    public function setName(?string $name): LpTemplateResponse
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status filter for draft or approved versions
     *
     * @return self<TKey, TValue>
     */
    public function setStatus(string $status): LpTemplateResponse
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets template_type
     *
     * @return string
     */
    public function getTemplateType(): string
    {
        return $this->container['template_type'];
    }

    /**
     * Sets template_type
     *
     * @param string $template_type Type of template to create.  Defaults to freeForm
     *
     * @return self<TKey, TValue>
     */
    public function setTemplateType(string $template_type): LpTemplateResponse
    {
        $allowedValues = $this->getTemplateTypeAllowableValues();
        if (!in_array($template_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'template_type', must be one of '%s'",
                    $template_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['template_type'] = $template_type;

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
     * @param \DateTime|null $updated_at Datetime the asset was most recently updated
     *
     * @return self<TKey, TValue>
     */
    public function setUpdatedAt(?\DateTime $updated_at): LpTemplateResponse
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
     * @param string|null $url Url of the asset in the Marketo UI
     *
     * @return self<TKey, TValue>
     */
    public function setUrl(?string $url): LpTemplateResponse
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets workspace
     *
     * @return string
     */
    public function getWorkspace(): string
    {
        return $this->container['workspace'];
    }

    /**
     * Sets workspace
     *
     * @param string|null $workspace Name of the workspace.  Max 255 characters
     *
     * @return self<TKey, TValue>
     */
    public function setWorkspace(?string $workspace): LpTemplateResponse
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
    public function getAdditionalProperties()
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
