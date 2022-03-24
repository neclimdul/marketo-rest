<?php

/**
 * ModelInterface
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
 * @package  NecLimDul\MarketoRest\Identity\Model
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Identity\Model;

/**
 * Interface abstracting model access.
 *
 * @package NecLimDul\MarketoRest\Identity\Model
 * @author  Swagger Codegen team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string;

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string|class-string>
     */
    public static function swaggerTypes(): array;

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string|null>
     */
    public static function swaggerFormats(): array;

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array;

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array;

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array;

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[]
     */
    public function listInvalidProperties(): array;

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid(): bool;

    /**
     * Set list of additional properties for the model.
     *
     * @param mixed[] $fields
     *   List of additional properties
     */
    public function setAdditionalProperties(array $fields): void;

    /**
     * Set an additional property for the model.
     *
     * @param string $property
     *   Property name.
     * @param mixed $value
     *   Value of the property.
     */
    public function setAdditionalProperty(string $property, $value): void;

    /**
     * Get list of additional properties for the model.
     *
     * @return mixed[]
     *   List of additional properties
     */
    public function getAdditionalProperties(): array;
}
