<?php
/**
 * SmartCampaignResponse
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
 * SmartCampaignResponse Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SmartCampaignResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SmartCampaignResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'type' => 'string',
        'is_system' => 'bool',
        'is_active' => 'bool',
        'is_requestable' => 'bool',
        'recurrence' => '\NecLimDul\MarketoRest\Asset\Model\Recurrence',
        'qualification_rule_type' => 'string',
        'qualification_rule_interval' => 'int',
        'qualification_rule_unit' => 'string',
        'max_members' => 'int',
        'is_communication_limit_enabled' => 'bool',
        'smart_list_id' => 'int',
        'flow_id' => 'int',
        'parent_program_id' => 'int',
        'folder' => '\NecLimDul\MarketoRest\Asset\Model\Folder',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'workspace' => 'string',
        'computed_url' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'name' => null,
        'description' => null,
        'type' => null,
        'is_system' => null,
        'is_active' => null,
        'is_requestable' => null,
        'recurrence' => null,
        'qualification_rule_type' => null,
        'qualification_rule_interval' => null,
        'qualification_rule_unit' => null,
        'max_members' => 'int32',
        'is_communication_limit_enabled' => null,
        'smart_list_id' => 'int32',
        'flow_id' => 'int32',
        'parent_program_id' => 'int32',
        'folder' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'workspace' => null,
        'computed_url' => null,
        'status' => null
    ];

    /**
      * Array of dynamic properties.
      *
      * @var mixed[]
      */
    protected $additionalProperties = [];

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
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'type' => 'type',
        'is_system' => 'isSystem',
        'is_active' => 'isActive',
        'is_requestable' => 'isRequestable',
        'recurrence' => 'recurrence',
        'qualification_rule_type' => 'qualificationRuleType',
        'qualification_rule_interval' => 'qualificationRuleInterval',
        'qualification_rule_unit' => 'qualificationRuleUnit',
        'max_members' => 'maxMembers',
        'is_communication_limit_enabled' => 'isCommunicationLimitEnabled',
        'smart_list_id' => 'smartListId',
        'flow_id' => 'flowId',
        'parent_program_id' => 'parentProgramId',
        'folder' => 'folder',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'workspace' => 'workspace',
        'computed_url' => 'computedUrl',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'type' => 'setType',
        'is_system' => 'setIsSystem',
        'is_active' => 'setIsActive',
        'is_requestable' => 'setIsRequestable',
        'recurrence' => 'setRecurrence',
        'qualification_rule_type' => 'setQualificationRuleType',
        'qualification_rule_interval' => 'setQualificationRuleInterval',
        'qualification_rule_unit' => 'setQualificationRuleUnit',
        'max_members' => 'setMaxMembers',
        'is_communication_limit_enabled' => 'setIsCommunicationLimitEnabled',
        'smart_list_id' => 'setSmartListId',
        'flow_id' => 'setFlowId',
        'parent_program_id' => 'setParentProgramId',
        'folder' => 'setFolder',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'workspace' => 'setWorkspace',
        'computed_url' => 'setComputedUrl',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'type' => 'getType',
        'is_system' => 'getIsSystem',
        'is_active' => 'getIsActive',
        'is_requestable' => 'getIsRequestable',
        'recurrence' => 'getRecurrence',
        'qualification_rule_type' => 'getQualificationRuleType',
        'qualification_rule_interval' => 'getQualificationRuleInterval',
        'qualification_rule_unit' => 'getQualificationRuleUnit',
        'max_members' => 'getMaxMembers',
        'is_communication_limit_enabled' => 'getIsCommunicationLimitEnabled',
        'smart_list_id' => 'getSmartListId',
        'flow_id' => 'getFlowId',
        'parent_program_id' => 'getParentProgramId',
        'folder' => 'getFolder',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'workspace' => 'getWorkspace',
        'computed_url' => 'getComputedUrl',
        'status' => 'getStatus'
    ];

    const TYPE_BATCH = 'batch';
    const TYPE__DEFAULT = 'default';
    const TYPE_TRIGGER = 'trigger';
    const QUALIFICATION_RULE_TYPE_ONCE = 'once';
    const QUALIFICATION_RULE_TYPE_ANY = 'any';
    const QUALIFICATION_RULE_TYPE_INTERVAL = 'interval';
    const QUALIFICATION_RULE_UNIT_HOUR = 'hour';
    const QUALIFICATION_RULE_UNIT_DAY = 'day';
    const QUALIFICATION_RULE_UNIT_WEEK = 'week';
    const QUALIFICATION_RULE_UNIT_MONTH = 'month';
    const STATUS_INACTIVE = 'Inactive';
    const STATUS_SINGLE_RUN = 'Single Run';
    const STATUS_INVALID = 'Invalid';
    const STATUS_RECURRING_RUN = 'Recurring Run';
    const STATUS_ACTIVE = 'Active';
    const STATUS_REQUESTED = 'Requested';
    const STATUS_NEVER_RUN = 'Never Run';
    

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['is_system'] = isset($data['is_system']) ? $data['is_system'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['is_requestable'] = isset($data['is_requestable']) ? $data['is_requestable'] : null;
        $this->container['recurrence'] = isset($data['recurrence']) ? $data['recurrence'] : null;
        $this->container['qualification_rule_type'] = isset($data['qualification_rule_type']) ? $data['qualification_rule_type'] : null;
        $this->container['qualification_rule_interval'] = isset($data['qualification_rule_interval']) ? $data['qualification_rule_interval'] : null;
        $this->container['qualification_rule_unit'] = isset($data['qualification_rule_unit']) ? $data['qualification_rule_unit'] : null;
        $this->container['max_members'] = isset($data['max_members']) ? $data['max_members'] : null;
        $this->container['is_communication_limit_enabled'] = isset($data['is_communication_limit_enabled']) ? $data['is_communication_limit_enabled'] : null;
        $this->container['smart_list_id'] = isset($data['smart_list_id']) ? $data['smart_list_id'] : null;
        $this->container['flow_id'] = isset($data['flow_id']) ? $data['flow_id'] : null;
        $this->container['parent_program_id'] = isset($data['parent_program_id']) ? $data['parent_program_id'] : null;
        $this->container['folder'] = isset($data['folder']) ? $data['folder'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['computed_url'] = isset($data['computed_url']) ? $data['computed_url'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['is_system'] === null) {
            $invalidProperties[] = "'is_system' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
        }
        if ($this->container['is_requestable'] === null) {
            $invalidProperties[] = "'is_requestable' can't be null";
        }
        if ($this->container['recurrence'] === null) {
            $invalidProperties[] = "'recurrence' can't be null";
        }
        if ($this->container['qualification_rule_type'] === null) {
            $invalidProperties[] = "'qualification_rule_type' can't be null";
        }
        $allowedValues = $this->getQualificationRuleTypeAllowableValues();
        if (!is_null($this->container['qualification_rule_type']) && !in_array($this->container['qualification_rule_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'qualification_rule_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['qualification_rule_interval'] === null) {
            $invalidProperties[] = "'qualification_rule_interval' can't be null";
        }
        if ($this->container['qualification_rule_unit'] === null) {
            $invalidProperties[] = "'qualification_rule_unit' can't be null";
        }
        $allowedValues = $this->getQualificationRuleUnitAllowableValues();
        if (!is_null($this->container['qualification_rule_unit']) && !in_array($this->container['qualification_rule_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'qualification_rule_unit', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['max_members'] === null) {
            $invalidProperties[] = "'max_members' can't be null";
        }
        if ($this->container['is_communication_limit_enabled'] === null) {
            $invalidProperties[] = "'is_communication_limit_enabled' can't be null";
        }
        if ($this->container['smart_list_id'] === null) {
            $invalidProperties[] = "'smart_list_id' can't be null";
        }
        if ($this->container['flow_id'] === null) {
            $invalidProperties[] = "'flow_id' can't be null";
        }
        if ($this->container['folder'] === null) {
            $invalidProperties[] = "'folder' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BATCH,
            self::TYPE__DEFAULT,
            self::TYPE_TRIGGER,
        ];
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQualificationRuleTypeAllowableValues()
    {
        return [
            self::QUALIFICATION_RULE_TYPE_ONCE,
            self::QUALIFICATION_RULE_TYPE_ANY,
            self::QUALIFICATION_RULE_TYPE_INTERVAL,
        ];
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQualificationRuleUnitAllowableValues()
    {
        return [
            self::QUALIFICATION_RULE_UNIT_HOUR,
            self::QUALIFICATION_RULE_UNIT_DAY,
            self::QUALIFICATION_RULE_UNIT_WEEK,
            self::QUALIFICATION_RULE_UNIT_MONTH,
        ];
    }
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_INACTIVE,
            self::STATUS_SINGLE_RUN,
            self::STATUS_INVALID,
            self::STATUS_RECURRING_RUN,
            self::STATUS_ACTIVE,
            self::STATUS_REQUESTED,
            self::STATUS_NEVER_RUN,
        ];
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
     * @param int $id Id of the smart campaign (system managed)
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name Name of the smart campaign
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $description Description of the smart campaign
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of the smart campaign. Batch: has at least one filter and no triggers. Trigger: has at least one trigger. Default: has no smart list rules
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
     * @param bool $is_system Whether smart campaign is system managed.  Defaults to false
     *
     * @return $this
     */
    public function setIsSystem($is_system)
    {
        $this->container['is_system'] = $is_system;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active Whether smart campaign is active.  Defaults to false
     *
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_requestable
     *
     * @return bool
     */
    public function getIsRequestable()
    {
        return $this->container['is_requestable'];
    }

    /**
     * Sets is_requestable
     *
     * @param bool $is_requestable Whether smart campaign is requestable (is active and contains 'Campaign is Requested' trigger with Source of 'Web Service API').  Defaults to false
     *
     * @return $this
     */
    public function setIsRequestable($is_requestable)
    {
        $this->container['is_requestable'] = $is_requestable;

        return $this;
    }

    /**
     * Gets recurrence
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\Recurrence
     */
    public function getRecurrence()
    {
        return $this->container['recurrence'];
    }

    /**
     * Sets recurrence
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\Recurrence $recurrence Recurrence schedule of batch smart campaign
     *
     * @return $this
     */
    public function setRecurrence($recurrence)
    {
        $this->container['recurrence'] = $recurrence;

        return $this;
    }

    /**
     * Gets qualification_rule_type
     *
     * @return string
     */
    public function getQualificationRuleType()
    {
        return $this->container['qualification_rule_type'];
    }

    /**
     * Sets qualification_rule_type
     *
     * @param string $qualification_rule_type Type of qualification rule.  Defaults to 'once'
     *
     * @return $this
     */
    public function setQualificationRuleType($qualification_rule_type)
    {
        $allowedValues = $this->getQualificationRuleTypeAllowableValues();
        if (!in_array($qualification_rule_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'qualification_rule_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['qualification_rule_type'] = $qualification_rule_type;

        return $this;
    }

    /**
     * Gets qualification_rule_interval
     *
     * @return int
     */
    public function getQualificationRuleInterval()
    {
        return $this->container['qualification_rule_interval'];
    }

    /**
     * Sets qualification_rule_interval
     *
     * @param int $qualification_rule_interval Interval of qualification rule.  Only set when qualificationRuleType is 'interval'
     *
     * @return $this
     */
    public function setQualificationRuleInterval($qualification_rule_interval)
    {
        $this->container['qualification_rule_interval'] = $qualification_rule_interval;

        return $this;
    }

    /**
     * Gets qualification_rule_unit
     *
     * @return string
     */
    public function getQualificationRuleUnit()
    {
        return $this->container['qualification_rule_unit'];
    }

    /**
     * Sets qualification_rule_unit
     *
     * @param string $qualification_rule_unit Unit of measure of qualification rule.  Only set when qualificationRuleType is 'interval'
     *
     * @return $this
     */
    public function setQualificationRuleUnit($qualification_rule_unit)
    {
        $allowedValues = $this->getQualificationRuleUnitAllowableValues();
        if (!in_array($qualification_rule_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'qualification_rule_unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['qualification_rule_unit'] = $qualification_rule_unit;

        return $this;
    }

    /**
     * Gets max_members
     *
     * @return int
     */
    public function getMaxMembers()
    {
        return $this->container['max_members'];
    }

    /**
     * Sets max_members
     *
     * @param int $max_members Smart campaign membership limit
     *
     * @return $this
     */
    public function setMaxMembers($max_members)
    {
        $this->container['max_members'] = $max_members;

        return $this;
    }

    /**
     * Gets is_communication_limit_enabled
     *
     * @return bool
     */
    public function getIsCommunicationLimitEnabled()
    {
        return $this->container['is_communication_limit_enabled'];
    }

    /**
     * Sets is_communication_limit_enabled
     *
     * @param bool $is_communication_limit_enabled Whether smart campaign communication limit is enabled (i.e. block non-operational emails).  Defaults to false
     *
     * @return $this
     */
    public function setIsCommunicationLimitEnabled($is_communication_limit_enabled)
    {
        $this->container['is_communication_limit_enabled'] = $is_communication_limit_enabled;

        return $this;
    }

    /**
     * Gets smart_list_id
     *
     * @return int
     */
    public function getSmartListId()
    {
        return $this->container['smart_list_id'];
    }

    /**
     * Sets smart_list_id
     *
     * @param int $smart_list_id Id of the smart campaign's child smart list
     *
     * @return $this
     */
    public function setSmartListId($smart_list_id)
    {
        $this->container['smart_list_id'] = $smart_list_id;

        return $this;
    }

    /**
     * Gets flow_id
     *
     * @return int
     */
    public function getFlowId()
    {
        return $this->container['flow_id'];
    }

    /**
     * Sets flow_id
     *
     * @param int $flow_id Id of the smart campaign's child flow
     *
     * @return $this
     */
    public function setFlowId($flow_id)
    {
        $this->container['flow_id'] = $flow_id;

        return $this;
    }

    /**
     * Gets parent_program_id
     *
     * @return int
     */
    public function getParentProgramId()
    {
        return $this->container['parent_program_id'];
    }

    /**
     * Sets parent_program_id
     *
     * @param int $parent_program_id Parent program Id.  Present if smart campaign is under program or nested folder
     *
     * @return $this
     */
    public function setParentProgramId($parent_program_id)
    {
        $this->container['parent_program_id'] = $parent_program_id;

        return $this;
    }

    /**
     * Gets folder
     *
     * @return \NecLimDul\MarketoRest\Asset\Model\Folder
     */
    public function getFolder()
    {
        return $this->container['folder'];
    }

    /**
     * Sets folder
     *
     * @param \NecLimDul\MarketoRest\Asset\Model\Folder $folder JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
     *
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->container['folder'] = $folder;

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
     * @param \DateTime $created_at Datetime when the smart campaign was created
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

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
     * @param \DateTime $updated_at Datetime when the smart campaign was most recently updated
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * @param string $workspace Name of the smart campaign workspace
     *
     * @return $this
     */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;

        return $this;
    }

    /**
     * Gets computed_url
     *
     * @return string
     */
    public function getComputedUrl()
    {
        return $this->container['computed_url'];
    }

    /**
     * Sets computed_url
     *
     * @param string $computed_url URL to asset in Marketo Engage
     *
     * @return $this
     */
    public function setComputedUrl($computed_url)
    {
        $this->container['computed_url'] = $computed_url;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of smart campaign
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
        $this->additionalProperties = array_keys($fields);
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
    public function getAdditionalPropertiess()
    {
        // TODO Get values.
        return $this->additionalProperties;
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


