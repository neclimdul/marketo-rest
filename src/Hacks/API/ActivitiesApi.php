<?php

namespace NecLimDul\MarketoRest\Hacks\API;

use GuzzleHttp\Promise\PromiseInterface;
use NecLimDul\MarketoRest\Hacks\Model\ResponseOfActivity;
use NecLimDul\MarketoRest\Lead\Api\ActivitiesApi as LeadActivitiesApi;
use NecLimDul\MarketoRest\Lead\ApiException;

class ActivitiesApi extends LeadActivitiesApi
{
    /**
     * {@inheritDoc}
     *
     * @phpstan-return \NecLimDul\MarketoRest\Hacks\Model\ResponseOfActivity
     */
    public function getLeadActivitiesUsingGET(
        string $next_page_token,
        array $activity_type_ids,
        array $asset_ids = null,
        int $list_id = null,
        array $lead_ids = null,
        int $batch_size = null
    ): ResponseOfActivity {
        list($response) = $this->getLeadActivitiesUsingGETWithHttpInfo($next_page_token, $activity_type_ids, $asset_ids, $list_id, $lead_ids, $batch_size);
        return $response;
    }

    /**
     * {@inheritDoc}
     *
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Hacks\Model\ResponseOfActivity,
     *     int,
     *     array<array<string>>
     * }
     */
    public function getLeadActivitiesUsingGETWithHttpInfo(
        string $next_page_token,
        array $activity_type_ids,
        array $asset_ids = null,
        int $list_id = null,
        array $lead_ids = null,
        int $batch_size = null
    ): array {
        $request = $this->getLeadActivitiesUsingGETRequest($next_page_token, $activity_type_ids, $asset_ids, $list_id, $lead_ids, $batch_size);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                ResponseOfActivity::class
            );
        } catch (ApiException $e) {
            throw $this->getLeadActivitiesUsingGETHandleException($e);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getLeadActivitiesUsingGETAsyncWithHttpInfo(
        string $next_page_token,
        array $activity_type_ids,
        array $asset_ids = null,
        int $list_id = null,
        array $lead_ids = null,
        int $batch_size = null
    ): PromiseInterface {
        $request = $this->getLeadActivitiesUsingGETRequest($next_page_token, $activity_type_ids, $asset_ids, $list_id, $lead_ids, $batch_size);
        return $this->makeAsyncRequest(
            $request,
            ResponseOfActivity::class,
            [$this, 'getLeadActivitiesUsingGETHandleException']
        );
    }
}
