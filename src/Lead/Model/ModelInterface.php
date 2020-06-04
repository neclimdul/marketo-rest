<?php
/**
 * ModelInterface
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead\Model
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * The version of the OpenAPI document: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Lead\Model;

/**
 * Interface abstracting model access.
 *
 * @package NecLimDul\MarketoRest\Lead\Model
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();

    /**
     * Set list of additional properties for the model.
     *
     * @param mixed[] $fields
     *   List of additional properties
     */
    public function setAdditionalProperties(array $fields);

    /**
     * Set an additional property for the model.
     *
     * @param string $property
     *   Property name.
     * @param mixed $value
     *   Value of the property.
     */
    public function setAdditionalProperty($property, $value);

    /**
     * Get list of additional properties for the model.
     *
     * @return mixed[]
     *   List of additional properties
     */
    public function getAdditionalProperties();
}
