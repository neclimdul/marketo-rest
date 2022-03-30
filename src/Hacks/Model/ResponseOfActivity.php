<?php

namespace NecLimDul\MarketoRest\Hacks\Model;

use NecLimDul\MarketoRest\Lead\Model\ResponseOfActivity as LeadResponseOfActivity;

class ResponseOfActivity extends LeadResponseOfActivity
{
    /**
     * Check if the response had a result.
     *
     * This exists because despite the documentation, sometimes the result is
     * actually null. This leads to a type error because the response isn't
     * nullable. Inheritance rules mean we can't make it nullable so this gives
     * a workaround.
     *
     * @return bool
     */
    public function hasResult(): bool
    {
        return isset($this->container['result']);
    }
}
