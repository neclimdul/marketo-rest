<?php
/**
 * ObjectMetaData
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
 * Swagger Codegen version: 2.4.24
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Lead\Model;

use \ArrayAccess;
use \NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * ObjectMetaData Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ObjectMetaData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ObjectMetaData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_at' => '\DateTime',
        'dedupe_fields' => 'string[]',
        'description' => 'string',
        'display_name' => 'string',
        'plural_name' => 'string',
        'fields' => '\NecLimDul\MarketoRest\Lead\Model\ObjectField[]',
        'id_field' => 'string',
        'api_name' => 'string',
        'relationships' => '\NecLimDul\MarketoRest\Lead\Model\ObjectRelation[]',
        'searchable_fields' => 'string[][]',
        'updated_at' => '\DateTime',
        'state' => 'string',
        'version' => 'string'
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
        'dedupe_fields' => null,
        'description' => null,
        'display_name' => null,
        'plural_name' => null,
        'fields' => null,
        'id_field' => null,
        'api_name' => null,
        'relationships' => null,
        'searchable_fields' => null,
        'updated_at' => 'date-time',
        'state' => null,
        'version' => null
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
        'dedupe_fields' => 'dedupeFields',
        'description' => 'description',
        'display_name' => 'displayName',
        'plural_name' => 'pluralName',
        'fields' => 'fields',
        'id_field' => 'idField',
        'api_name' => 'apiName',
        'relationships' => 'relationships',
        'searchable_fields' => 'searchableFields',
        'updated_at' => 'updatedAt',
        'state' => 'state',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'dedupe_fields' => 'setDedupeFields',
        'description' => 'setDescription',
        'display_name' => 'setDisplayName',
        'plural_name' => 'setPluralName',
        'fields' => 'setFields',
        'id_field' => 'setIdField',
        'api_name' => 'setApiName',
        'relationships' => 'setRelationships',
        'searchable_fields' => 'setSearchableFields',
        'updated_at' => 'setUpdatedAt',
        'state' => 'setState',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'dedupe_fields' => 'getDedupeFields',
        'description' => 'getDescription',
        'display_name' => 'getDisplayName',
        'plural_name' => 'getPluralName',
        'fields' => 'getFields',
        'id_field' => 'getIdField',
        'api_name' => 'getApiName',
        'relationships' => 'getRelationships',
        'searchable_fields' => 'getSearchableFields',
        'updated_at' => 'getUpdatedAt',
        'state' => 'getState',
        'version' => 'getVersion'
    ];

    const STATE_DRAFT = 'draft';
    const STATE_APPROVED = 'approved';
    const STATE_APPROVED_WITH_DRAFT = 'approvedWithDraft';
    const VERSION_DRAFT = 'draft';
    const VERSION_APPROVED = 'approved';
    

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
        $this->container['dedupe_fields'] = $data['dedupe_fields'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['plural_name'] = $data['plural_name'] ?? null;
        $this->container['fields'] = $data['fields'] ?? null;
        $this->container['id_field'] = $data['id_field'] ?? null;
        $this->container['api_name'] = $data['api_name'] ?? null;
        $this->container['relationships'] = $data['relationships'] ?? null;
        $this->container['searchable_fields'] = $data['searchable_fields'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
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

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['dedupe_fields'] === null) {
            $invalidProperties[] = "'dedupe_fields' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['display_name'] === null) {
            $invalidProperties[] = "'display_name' can't be null";
        }
        if ($this->container['plural_name'] === null) {
            $invalidProperties[] = "'plural_name' can't be null";
        }
        if ($this->container['fields'] === null) {
            $invalidProperties[] = "'fields' can't be null";
        }
        if ($this->container['id_field'] === null) {
            $invalidProperties[] = "'id_field' can't be null";
        }
        if ($this->container['api_name'] === null) {
            $invalidProperties[] = "'api_name' can't be null";
        }
        if ($this->container['relationships'] === null) {
            $invalidProperties[] = "'relationships' can't be null";
        }
        if ($this->container['searchable_fields'] === null) {
            $invalidProperties[] = "'searchable_fields' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        $allowedValues = $this->getVersionAllowableValues();
        if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'version', must be one of '%s'",
                $this->container['version'],
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_DRAFT,
            self::STATE_APPROVED,
            self::STATE_APPROVED_WITH_DRAFT,
        ];
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_DRAFT,
            self::VERSION_APPROVED,
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
     * @param \DateTime $created_at Datetime when the object type was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets dedupe_fields
     *
     * @return string[]
     */
    public function getDedupeFields()
    {
        return $this->container['dedupe_fields'];
    }

    /**
     * Sets dedupe_fields
     *
     * @param string[] $dedupe_fields List of dedupe fields.  Arrays with multiple members are compound keys
     *
     * @return self
     */
    public function setDedupeFields($dedupe_fields)
    {
        $this->container['dedupe_fields'] = $dedupe_fields;

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
     * @param string $description Description of the object type
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name UI display-name of the object type
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets plural_name
     *
     * @return string
     */
    public function getPluralName()
    {
        return $this->container['plural_name'];
    }

    /**
     * Sets plural_name
     *
     * @param string $plural_name UI plural-name of the custom object type
     *
     * @return self
     */
    public function setPluralName($plural_name)
    {
        $this->container['plural_name'] = $plural_name;

        return $this;
    }

    /**
     * Gets fields
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\ObjectField[]
     */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
     * Sets fields
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\ObjectField[] $fields List of fields available on the object type
     *
     * @return self
     */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;

        return $this;
    }

    /**
     * Gets id_field
     *
     * @return string
     */
    public function getIdField()
    {
        return $this->container['id_field'];
    }

    /**
     * Sets id_field
     *
     * @param string $id_field Primary id key of the object type
     *
     * @return self
     */
    public function setIdField($id_field)
    {
        $this->container['id_field'] = $id_field;

        return $this;
    }

    /**
     * Gets api_name
     *
     * @return string
     */
    public function getApiName()
    {
        return $this->container['api_name'];
    }

    /**
     * Sets api_name
     *
     * @param string $api_name Name of the object type
     *
     * @return self
     */
    public function setApiName($api_name)
    {
        $this->container['api_name'] = $api_name;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\ObjectRelation[]
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\ObjectRelation[] $relationships List of relationships which the object has
     *
     * @return self
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets searchable_fields
     *
     * @return string[][]
     */
    public function getSearchableFields()
    {
        return $this->container['searchable_fields'];
    }

    /**
     * Sets searchable_fields
     *
     * @param string[][] $searchable_fields List of fields valid for use as a filter type in a query
     *
     * @return self
     */
    public function setSearchableFields($searchable_fields)
    {
        $this->container['searchable_fields'] = $searchable_fields;

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
     * @param \DateTime $updated_at Datetime when the object type was most recently updated
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Approval state of object type
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version Version of object type that is returned in response
     *
     * @return self
     */
    public function setVersion($version)
    {
        $allowedValues = $this->getVersionAllowableValues();
        if (!in_array($version, $allowedValues, true)) {
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


