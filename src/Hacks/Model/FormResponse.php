<?php

namespace NecLimDul\MarketoRest\Hacks\Model;

use NecLimDul\MarketoRest\Lead\Model\FormResponse as LeadFormResponse;

class FormResponse extends LeadFormResponse
{

    /**
     * {@inheritDoc}
     */
    protected static $swaggerTypes = [
        'id' => 'int',
        'status' => 'string',
        'reason' => '\NecLimDul\MarketoRest\Lead\Model\Reason',
    ];

    /**
     * {@inheritDoc}
     */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'status' => null,
        'reason' => null,
    ];

    /**
     * {@inheritDoc}
     */
    protected static $attributeMap = [
        'id' => 'id',
        'status' => 'status',
        'reason' => 'reason',
    ];

    /**
     * {@inheritDoc}
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'reason' => 'setReason',
    ];

    /**
     * {@inheritDoc}
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'reason' => 'getReason',
    ];

    const STATUS_SKIPPED = 'skipped';

    /**
     * {@inheritDoc}
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
     * Gets reason
     *
     * @return \NecLimDul\MarketoRest\Lead\Model\Reason
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \NecLimDul\MarketoRest\Lead\Model\Reason $reason Reason object describing why an operation did not succeed for a record
     *
     * @return self
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

}
