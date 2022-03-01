<?php

/**
 * SyncCustomObjectTypeRequest
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
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

namespace NecLimDul\MarketoRest\Lead\Model;

use ArrayAccess;
use NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * SyncCustomObjectTypeRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SyncCustomObjectTypeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;
    public const ACTION_CREATE_ONLY = 'createOnly';
    public const ACTION_UPDATE_ONLY = 'updateOnly';
    public const ACTION_CREATE_OR_UPDATE = 'createOrUpdate';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SyncCustomObjectTypeRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'action' => 'string',
        'display_name' => 'string',
        'api_name' => 'string',
        'plural_name' => 'string',
        'description' => 'string',
        'show_in_lead_detail' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'action' => null,
        'display_name' => null,
        'api_name' => null,
        'plural_name' => null,
        'description' => null,
        'show_in_lead_detail' => null
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
        'action' => 'action',
        'display_name' => 'displayName',
        'api_name' => 'apiName',
        'plural_name' => 'pluralName',
        'description' => 'description',
        'show_in_lead_detail' => 'showInLeadDetail'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'display_name' => 'setDisplayName',
        'api_name' => 'setApiName',
        'plural_name' => 'setPluralName',
        'description' => 'setDescription',
        'show_in_lead_detail' => 'setShowInLeadDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'display_name' => 'getDisplayName',
        'api_name' => 'getApiName',
        'plural_name' => 'getPluralName',
        'description' => 'getDescription',
        'show_in_lead_detail' => 'getShowInLeadDetail'
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
        $this->container['action'] = $data['action'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['api_name'] = $data['api_name'] ?? null;
        $this->container['plural_name'] = $data['plural_name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['show_in_lead_detail'] = $data['show_in_lead_detail'] ?? null;
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

        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'action', must be one of '%s'",
                $this->container['action'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['api_name'] === null) {
            $invalidProperties[] = "'api_name' can't be null";
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
    public function getActionAllowableValues(): array
    {
        return [
            self::ACTION_CREATE_ONLY,
            self::ACTION_UPDATE_ONLY,
            self::ACTION_CREATE_OR_UPDATE,
        ];
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction(): string
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action Type of sync operation to perform.  Default is createOrUpdate.
     *
     * @return self<TKey, TValue>
     */
    public function setAction(?string $action): SyncCustomObjectTypeRequest
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($action) && !in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'action', must be one of '%s'",
                    $action,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name UI display-name of the custom object type
     *
     * @return self<TKey, TValue>
     */
    public function setDisplayName(string $display_name): SyncCustomObjectTypeRequest
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets api_name
     *
     * @return string
     */
    public function getApiName(): string
    {
        return $this->container['api_name'];
    }

    /**
     * Sets api_name
     *
     * @param string $api_name API name of the custom object type
     *
     * @return self<TKey, TValue>
     */
    public function setApiName(string $api_name): SyncCustomObjectTypeRequest
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets plural_name
     *
     * @return string
     */
    public function getPluralName(): string
    {
        return $this->container['plural_name'];
    }

    /**
     * Sets plural_name
     *
     * @param string|null $plural_name UI plural-name of the custom object type
     *
     * @return self<TKey, TValue>
     */
    public function setPluralName(?string $plural_name): SyncCustomObjectTypeRequest
    {
        $this->container['plural_name'] = $plural_name;

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
     * @param string|null $description Description of the custom object type
     *
     * @return self<TKey, TValue>
     */
    public function setDescription(?string $description): SyncCustomObjectTypeRequest
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets show_in_lead_detail
     *
     * @return bool
     */
    public function getShowInLeadDetail(): bool
    {
        return $this->container['show_in_lead_detail'];
    }

    /**
     * Sets show_in_lead_detail
     *
     * @param bool|null $show_in_lead_detail Whether to show custom object type in lead detail of UI.  Default is false
     *
     * @return self<TKey, TValue>
     */
    public function setShowInLeadDetail(?bool $show_in_lead_detail): SyncCustomObjectTypeRequest
    {
        $this->container['show_in_lead_detail'] = $show_in_lead_detail;

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
