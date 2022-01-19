<?php

namespace NecLimDul\MarketoRest\Hacks\Model;

use NecLimDul\MarketoRest\Lead\Model\FormResponse as LeadFormResponse;

class FormResponse extends LeadFormResponse
{
    const STATUS_WARNING = 'warning';

    /**
     * {@inheritDoc}
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);
        // Deprecated backwards compatibility.
        self::$swaggerTypes['reason'] = '\NecLimDul\MarketoRest\Lead\Model\Reason';
        self::$swaggerFormats['reason'] = null;
        self::$attributeMap['reason'] = 'reason';
        self::$setters['reason'] = 'setReason';
        self::$getters['reason'] = 'getReason';
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
     * Gets reason.
     *
     * @deprecated use ::getReasons
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
     * @deprecated use ::setReasons
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

    public function getStatusAllowableValues() {
        $values = parent::getStatusAllowableValues();
        $values[] = self::STATUS_WARNING;
        return $values;
    }

}
