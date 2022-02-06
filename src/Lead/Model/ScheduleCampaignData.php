<?php
/**
 * ScheduleCampaignData
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
 * ScheduleCampaignData Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ScheduleCampaignData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScheduleCampaignData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'clone_to_program_name' => 'string',
        'run_at' => '\DateTime',
        'tokens' => '\NecLimDul\MarketoRest\Lead\Model\Token[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'clone_to_program_name' => null,
        'run_at' => 'date-time',
        'tokens' => null
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
        'clone_to_program_name' => 'cloneToProgramName',
        'run_at' => 'runAt',
        'tokens' => 'tokens'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'clone_to_program_name' => 'setCloneToProgramName',
        'run_at' => 'setRunAt',
        'tokens' => 'setTokens'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'clone_to_program_name' => 'getCloneToProgramName',
        'run_at' => 'getRunAt',
        'tokens' => 'getTokens'
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
        $this->container['clone_to_program_name'] = $data['clone_to_program_name'] ?? null;
        $this->container['run_at'] = $data['run_at'] ?? null;
        $this->container['tokens'] = $data['tokens'] ?? null;
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
     * Gets clone_to_program_name
     *
     * @return string
     */
    public function getCloneToProgramName()
    {
        return $this->container['clone_to_program_name'];
    }

    /**
     * Sets clone_to_program_name
     *
     * @param string $clone_to_program_name Name of the resulting program.  When set, this attribute will cause the campaign, parent program, and all of its assets, to be created with the resulting new name.  The parent program will be cloned and the newly created campaign will be scheduled.  The resulting program is created underneath the parent.  Programs with snippets, push notifications, in-app messages, static lists, reports, and social assets may not be cloned in this way
     *
     * @return self
     */
    public function setCloneToProgramName($clone_to_program_name)
    {
        $this->container['clone_to_program_name'] = $clone_to_program_name;

        return $this;
    }

    /**
     * Gets run_at
     *
     * @return \DateTime
     */
    public function getRunAt()
    {
        return $this->container['run_at'];
    }

    /**
     * Sets run_at
     *
     * @param \DateTime $run_at Datetime to run the campaign at.  If unset, the campaign will be run five minutes after the call is made
     *
     * @return self
     */
    public function setRunAt($run_at)
    {
        $this->container['run_at'] = $run_at;

        return $this;
    }

    /**
     * Gets tokens
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Token[]
     */
    public function getTokens()
    {
        return $this->container['tokens'];
    }

    /**
     * Sets tokens
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Token[] $tokens List of my tokens to replace during the run of the target campaign.  The tokens must be available in a parent program or folder to be replaced during the run
     *
     * @return self
     */
    public function setTokens($tokens)
    {
        $this->container['tokens'] = $tokens;

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


