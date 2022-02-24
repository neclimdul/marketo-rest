<?php

namespace NecLimDul\MarketoRest\Hacks\Model;

use NecLimDul\MarketoRest\Lead\Model\ResponseOfSubmitForm as LeadResponseOfSubmitForm;

class ResponseOfSubmitForm extends LeadResponseOfSubmitForm
{

    /**
     * {@inheritDoc}
     */
    protected static $swaggerTypes = [
        'errors' => '\NecLimDul\MarketoRest\Lead\Model\Error[]',
        'request_id' => 'string',
        'result' => '\NecLimDul\MarketoRest\Hacks\Model\FormResponse[]',
        'success' => 'bool',
        'warnings' => '\NecLimDul\MarketoRest\Lead\Model\Warning[]'
    ];

    /**
     * {@inheritDoc}
     */
    public static function swaggerTypes(): array
    {
        // Override works around static binding.
        return self::$swaggerTypes;
    }

}
