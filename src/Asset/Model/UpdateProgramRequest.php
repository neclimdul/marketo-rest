<?php
/**
 * UpdateProgramRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  MarketoRest\Asset
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

namespace MarketoRest\Asset\Model;

use \ArrayAccess;
use \MarketoRest\Asset\ObjectSerializer;

/**
 * UpdateProgramRequest Class Doc Comment
 *
 * @category Class
 * @package  MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateProgramRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateProgramRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'costs' => '\MarketoRest\Asset\Model\CostRequest[]',
        'costs_destructive_update' => 'bool',
        'description' => 'string',
        'end_date' => 'string',
        'name' => 'string',
        'start_date' => 'string',
        'tags' => '\MarketoRest\Asset\Model\TagRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'costs' => null,
        'costs_destructive_update' => null,
        'description' => null,
        'end_date' => null,
        'name' => null,
        'start_date' => null,
        'tags' => null
    ];

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
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
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
        'costs' => 'costs',
        'costs_destructive_update' => 'costsDestructiveUpdate',
        'description' => 'description',
        'end_date' => 'endDate',
        'name' => 'name',
        'start_date' => 'startDate',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'costs' => 'setCosts',
        'costs_destructive_update' => 'setCostsDestructiveUpdate',
        'description' => 'setDescription',
        'end_date' => 'setEndDate',
        'name' => 'setName',
        'start_date' => 'setStartDate',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'costs' => 'getCosts',
        'costs_destructive_update' => 'getCostsDestructiveUpdate',
        'description' => 'getDescription',
        'end_date' => 'getEndDate',
        'name' => 'getName',
        'start_date' => 'getStartDate',
        'tags' => 'getTags'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
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
        $this->container['costs'] = isset($data['costs']) ? $data['costs'] : null;
        $this->container['costs_destructive_update'] = isset($data['costs_destructive_update']) ? $data['costs_destructive_update'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets costs
     *
     * @return \MarketoRest\Asset\Model\CostRequest[]
     */
    public function getCosts()
    {
        return $this->container['costs'];
    }

    /**
     * Sets costs
     *
     * @param \MarketoRest\Asset\Model\CostRequest[] $costs Lists of associated period costs that allow you to append, replace, or delete. To append new costs, simply add them to costs array.  To replace costs (destructive update), pass new costs and set costsDestructiveUpdate to true. To delete costs, do not pass costs parameter and set costsDestructiveUpdate to true
     *
     * @return $this
     */
    public function setCosts($costs)
    {
        $this->container['costs'] = $costs;

        return $this;
    }

    /**
     * Gets costs_destructive_update
     *
     * @return bool
     */
    public function getCostsDestructiveUpdate()
    {
        return $this->container['costs_destructive_update'];
    }

    /**
     * Sets costs_destructive_update
     *
     * @param bool $costs_destructive_update Set true to destroy existing costs and replace them with the specified costs
     *
     * @return $this
     */
    public function setCostsDestructiveUpdate($costs_destructive_update)
    {
        $this->container['costs_destructive_update'] = $costs_destructive_update;

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
     * @param string $description Updated description for the program
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param string $end_date End date of the program.  Applicable to event, email, and webinar type programs
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

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
     * @param string $name Name of the program
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param string $start_date Start date of program.  Applicable to event, email and webinar type programs
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \MarketoRest\Asset\Model\TagRequest[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \MarketoRest\Asset\Model\TagRequest[] $tags List of associated program tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
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
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
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


