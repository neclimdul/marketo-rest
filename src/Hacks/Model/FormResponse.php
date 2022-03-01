<?php

namespace NecLimDul\MarketoRest\Hacks\Model;

use NecLimDul\MarketoRest\Lead\Model\FormResponse as LeadFormResponse;
use NecLimDul\MarketoRest\Lead\Model\Reason;

class FormResponse extends LeadFormResponse
{
    public const STATUS_WARNING = 'warning';

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
    public function getReason(): Reason
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
    public function setReason(Reason $reason): FormResponse
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getStatusAllowableValues(): array
    {
        $values = parent::getStatusAllowableValues();
        $values[] = self::STATUS_WARNING;
        return $values;
    }
}
