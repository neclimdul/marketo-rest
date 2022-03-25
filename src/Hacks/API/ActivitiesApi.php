<?php

namespace NecLimDul\MarketoRest\Hacks\API;

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use NecLimDul\MarketoRest\Lead\Api\ActivitiesApi as LeadsActivitiesApi;

class ActivitiesApi extends LeadsActivitiesApi
{

    /**
     * {@inheritDoc}
     */
    public function getLeadActivitiesUsingGETRequest($next_page_token, $activity_type_ids, $asset_ids = null, $list_id = null, $lead_ids = null, $batch_size = null)
    {
        $request = parent::getLeadActivitiesUsingGETRequest(
            $next_page_token,
            $activity_type_ids,
            $asset_ids,
            $list_id,
            $lead_ids,
            $batch_size
        );
        $uri = $request->getUri();
        parse_str($uri->getQuery(), $query);
        $query['activity_type_ids'] = implode(',', $query['activity_type_ids']);
        $query['lead_ids'] = implode(',', $query['lead_ids']);
        $request->withUri(
            Uri::withQueryValues(
                $uri,
                $query
            )
        );
        return $request;
    }

    /**
     * {@inheritDoc}
     */
    public function getLeadChangesUsingGETRequest($next_page_token, $fields, $list_id = null, $lead_ids = null, $batch_size = null)
    {
        $request = parent::getLeadChangesUsingGETRequest(
            $next_page_token,
            $fields,
            $list_id,
            $lead_ids,
            $batch_size
        );
        $uri = $request->getUri();
        parse_str($uri->getQuery(), $query);
        $query['fields'] = implode(',', $query['fields']);
        $query['lead_ids'] = implode(',', $query['lead_ids']);
        $request->withUri(
            Uri::withQueryValues(
                $uri,
                $query
            )
        );
        return $request;
    }

}