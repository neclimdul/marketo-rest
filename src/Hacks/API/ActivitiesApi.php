<?php

namespace NecLimDul\MarketoRest\Hacks\API;

use GuzzleHttp\Exception\RequestException;
use NecLimDul\MarketoRest\Hacks\Model\ResponseOfActivity;
use NecLimDul\MarketoRest\Lead\Api\ActivitiesApi as LeadsActivitiesApi;
use NecLimDul\MarketoRest\Lead\ApiException;

class ActivitiesApi extends LeadsActivitiesApi
{
    /**
     * {@inheritDoc}
     *
     * @phpstan-return \NecLimDul\MarketoRest\Hacks\Model\ResponseOfActivity
     */
    public function getLeadActivitiesUsingGET($next_page_token, $activity_type_ids, $asset_ids = null, $list_id = null, $lead_ids = null, $batch_size = null)
    {
        [$response] = $this->getLeadActivitiesUsingGETWithHttpInfo($next_page_token, $activity_type_ids, $asset_ids, $list_id, $lead_ids, $batch_size);
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
    public function getLeadActivitiesUsingGETWithHttpInfo($next_page_token, $activity_type_ids, $asset_ids = null, $list_id = null, $lead_ids = null, $batch_size = null)
    {
        $request = $this->getLeadActivitiesUsingGETRequest($next_page_token, $activity_type_ids, $asset_ids, $list_id, $lead_ids, $batch_size);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, ResponseOfActivity::class);
            }

            return $this->responseToReturn($response, ResponseOfActivity::class);

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                          ResponseOfActivity::class,
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getLeadActivitiesUsingGETAsyncWithHttpInfo($next_page_token, $activity_type_ids, $asset_ids = null, $list_id = null, $lead_ids = null, $batch_size = null)
    {
        $request = $this->getLeadActivitiesUsingGETRequest($next_page_token, $activity_type_ids, $asset_ids, $list_id, $lead_ids, $batch_size);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, ResponseOfActivity::class);
                },
                function (RequestException $exception) {
                    $response = $exception->getResponse();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $response ? $response->getStatusCode() : 0,
                            (string) $exception->getRequest()->getUri()
                        ),
                        (int) $exception->getCode(),
                        $response ? $response->getHeaders() : null,
                        $response ? (string) $response->getBody() : null
                    );
                }
            );
    }
}