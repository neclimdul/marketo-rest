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

    /**
     * {@inheritDoc}
     */
    public function getLeadsByFilterUsingGETRequest($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        $request = parent::getLeadsByFilterUsingGETRequest(
            $filter_type,
            $filter_values,
            $fields,
            $batch_size,
            $next_page_token
        );
        $uri = $request->getUri();
        parse_str($uri->getQuery(), $query);
        $query['filter_values'] = implode(',', $query['filter_values']);
        $query['fields'] = implode(',', $query['fields']);
        $request->withUri(
            Uri::withQueryValues(
                $uri,
                $query
            )
        );
        return $request;
    }

    /**
     * Make a request.
     *
     * @param \GuzzleHttp\Psr7\Request $request
     *   An initialized request object.
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function makeRequest(Request $request) {
        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                $response ? $response->getHeaders() : null,
                $response ? (string) $response->getBody() : null
            );
        }

        $statusCode = $response->getStatusCode();
        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }
        return $response;
    }

    /**
     * Convert a response to a return standard return array.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     *   A response from a request with a serialized body.
     * @param string $returnType
     *   The return type.
     *
     * @return array
     */
    protected function responseToReturn(ResponseInterface $response, string $returnType) {
        return [
            $this->deserializeResponseBody($response->getBody(), $returnType),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    /**
     * Deserialize a response body.
     *
     * @param mixed $responseBody
     *   The response body.
     * @param string $returnType
     *   The return type.
     * @param array|null $headers
     *   The a list of headers from the response.
     * @return mixed
     *   Either a string or a stream to be passed to a file object.
     */
    protected function deserializeResponseBody($responseBody, $returnType, $headers = [])
    {
        return ObjectSerializer::deserialize(
            $returnType === '\SplFileObject' ? $responseBody : (string) $responseBody,
            $returnType,
            $headers
        );
    }

}
