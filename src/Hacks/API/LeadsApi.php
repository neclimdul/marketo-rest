<?php

namespace NecLimDul\MarketoRest\Hacks\API;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use NecLimDul\MarketoRest\Lead\Api\LeadsApi as LeadsLeadsApi;
use NecLimDul\MarketoRest\Lead\ApiException;
use NecLimDul\MarketoRest\Lead\ObjectSerializer;
use Psr\Http\Message\ResponseInterface;

class LeadsApi extends LeadsLeadsApi
{

    /**
     * {@inheritDoc}
     */
    public function submitFormUsingPOSTWithHttpInfo($submit_form_request)
    {
        $request = $this->submitFormUsingPOSTRequest($submit_form_request);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm',
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
    public function submitFormUsingPOSTAsyncWithHttpInfo($submit_form_request)
    {
        $request = $this->submitFormUsingPOSTRequest($submit_form_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm');
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
