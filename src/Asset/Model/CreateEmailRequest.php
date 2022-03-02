<?php

/**
 * CreateEmailRequest
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
 * CreateEmailRequest Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CreateEmailRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateEmailRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|class-string>
      * @psalm-var array<string, string|class-string>
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'from_email' => 'string',
        'from_name' => 'string',
        'name' => 'string',
        'operational' => 'bool',
        'reply_email' => 'string',
        'subject' => 'string',
        'template' => 'int',
        'text_only' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $swaggerFormats = [
        'description' => null,
        'folder' => null,
        'from_email' => null,
        'from_name' => null,
        'name' => null,
        'operational' => null,
        'reply_email' => null,
        'subject' => null,
        'template' => 'int32',
        'text_only' => null
    ];

    /**
      * Array of additional properties.
      *
      * @var mixed[]
      */
    protected $additionalProperties = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
        'folder' => 'folder',
        'from_email' => 'fromEmail',
        'from_name' => 'fromName',
        'name' => 'name',
        'operational' => 'operational',
        'reply_email' => 'replyEmail',
        'subject' => 'subject',
        'template' => 'template',
        'text_only' => 'textOnly'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'folder' => 'setFolder',
        'from_email' => 'setFromEmail',
        'from_name' => 'setFromName',
        'name' => 'setName',
        'operational' => 'setOperational',
        'reply_email' => 'setReplyEmail',
        'subject' => 'setSubject',
        'template' => 'setTemplate',
        'text_only' => 'setTextOnly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'folder' => 'getFolder',
        'from_email' => 'getFromEmail',
        'from_name' => 'getFromName',
        'name' => 'getName',
        'operational' => 'getOperational',
        'reply_email' => 'getReplyEmail',
        'subject' => 'getSubject',
        'template' => 'getTemplate',
        'text_only' => 'getTextOnly'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['folder'] = $data['folder'] ?? null;
        $this->container['from_email'] = $data['from_email'] ?? null;
        $this->container['from_name'] = $data['from_name'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['operational'] = $data['operational'] ?? null;
        $this->container['reply_email'] = $data['reply_email'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['template'] = $data['template'] ?? null;
        $this->container['text_only'] = $data['text_only'] ?? null;
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

        if ($this->container['folder'] === null) {
            $invalidProperties['folder'] = "'folder' can't be null";
        }
        if ($this->container['from_email'] === null) {
            $invalidProperties['from_email'] = "'from_email' can't be null";
        }
        if ($this->container['from_name'] === null) {
            $invalidProperties['from_name'] = "'from_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties['name'] = "'name' can't be null";
        }
        if ($this->container['reply_email'] === null) {
            $invalidProperties['reply_email'] = "'reply_email' can't be null";
        }
        if ($this->container['subject'] === null) {
            $invalidProperties['subject'] = "'subject' can't be null";
        }
        if ($this->container['template'] === null) {
            $invalidProperties['template'] = "'template' can't be null";
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
     * @param string|null $description Description of the asset
     *
     * @return self<TKey, TValue>
     */
    public function setDescription(?string $description): CreateEmailRequest
    {
        $this->container['description'] = $description;

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
    public function setFolder(\NecLimDul\MarketoRest\Asset\Model\Folder $folder): CreateEmailRequest
    {
        $this->container['folder'] = $folder;

        return $this;
    }

    /**
     * Gets from_email
     *
     * @return string
     */
    public function getFromEmail(): string
    {
        return $this->container['from_email'];
    }

    /**
     * Sets from_email
     *
     * @param string $from_email From-address of the Email
     *
     * @return self<TKey, TValue>
     */
    public function setFromEmail(string $from_email): CreateEmailRequest
    {
        $this->container['from_email'] = $from_email;

        return $this;
    }

    /**
     * Gets from_name
     *
     * @return string
     */
    public function getFromName(): string
    {
        return $this->container['from_name'];
    }

    /**
     * Sets from_name
     *
     * @param string $from_name From-name of the Email
     *
     * @return self<TKey, TValue>
     */
    public function setFromName(string $from_name): CreateEmailRequest
    {
        $this->container['from_name'] = $from_name;

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
     * @param string $name Name of the email
     *
     * @return self<TKey, TValue>
     */
    public function setName(string $name): CreateEmailRequest
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operational
     *
     * @return bool|null
     */
    public function getOperational(): ?bool
    {
        return $this->container['operational'];
    }

    /**
     * Sets operational
     *
     * @param bool|null $operational Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false
     *
     * @return self<TKey, TValue>
     */
    public function setOperational(?bool $operational): CreateEmailRequest
    {
        $this->container['operational'] = $operational;

        return $this;
    }

    /**
     * Gets reply_email
     *
     * @return string
     */
    public function getReplyEmail(): string
    {
        return $this->container['reply_email'];
    }

    /**
     * Sets reply_email
     *
     * @param string $reply_email Reply-To address of the Email
     *
     * @return self<TKey, TValue>
     */
    public function setReplyEmail(string $reply_email): CreateEmailRequest
    {
        $this->container['reply_email'] = $reply_email;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject(): string
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Subject Line of the Email
     *
     * @return self<TKey, TValue>
     */
    public function setSubject(string $subject): CreateEmailRequest
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets template
     *
     * @return int
     */
    public function getTemplate(): int
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param int $template Id of the parent template
     *
     * @return self<TKey, TValue>
     */
    public function setTemplate(int $template): CreateEmailRequest
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets text_only
     *
     * @return string|null
     */
    public function getTextOnly(): ?string
    {
        return $this->container['text_only'];
    }

    /**
     * Sets text_only
     *
     * @param string|null $text_only Setting to include text-only version of email when sent
     *
     * @return self<TKey, TValue>
     */
    public function setTextOnly(?string $text_only): CreateEmailRequest
    {
        $this->container['text_only'] = $text_only;

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
