<?php

namespace NecLimDul\MarketoRest\Hacks\API;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use NecLimDul\MarketoRest\Lead\Api\LeadsApi as LeadsLeadsApi;
use NecLimDul\MarketoRest\Lead\ApiException;
use NecLimDul\MarketoRest\Lead\Model\SubmitFormRequest;
use NecLimDul\MarketoRest\Lead\ObjectSerializer;
use Psr\Http\Message\ResponseInterface;

class LeadsApi extends LeadsLeadsApi
{
    /**
     * {@inheritDoc}
     */
    public function submitFormUsingPOSTWithHttpInfo(
        SubmitFormRequest $submit_form_request
    ): array {
        $request = $this->submitFormUsingPOSTRequest($submit_form_request);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm::class
            );
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            \NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm::class,
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
    public function submitFormUsingPOSTAsyncWithHttpInfo(
        SubmitFormRequest $submit_form_request
    ): PromiseInterface {
        $request = $this->submitFormUsingPOSTRequest($submit_form_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function (ResponseInterface $response) {
                    return $this->responseToReturn(
                        $response,
                        \NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm::class
                    );
                },
                function (RequestException $exception) {
                    $response = $exception->getResponse();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $response ? $response->getStatusCode() : 0,
                            (string)$exception->getRequest()->getUri()
                        ),
                        (int)$exception->getCode(),
                        $response ? $response->getHeaders() : [],
                        $response ? (string)$response->getBody() : null
                    );
                }
            );
    }

    /**
     * Make a request.
     *
     * @param \GuzzleHttp\Psr7\Request $request
     *   An initialized request object.
     *
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     */
    protected function makeRequest(Request $request)
    {
        $options = $this->createHttpClientOption();
        try {
            $response = $this->client->send($request, $options);
        } catch (RequestException $e) {
            $response = $e->getResponse();
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int)$e->getCode(),
                $response ? $response->getHeaders() : [],
                $response ? (string)$response->getBody() : null
            );
        }

        $statusCode = $response->getStatusCode();
        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string)$request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string)$response->getBody()
            );
        }
        return $response;
    }

    /**
     * Convert a response to a return standard return array.
     *
     * @template T
     * @param \Psr\Http\Message\ResponseInterface $response A response from a request with a serialized body.
     * @param string $returnType The primary return type.
     * @phpstan-param class-string<T> $returnType
     *
     * @return array structured array or response and http info.
     * @phpstan-return array{T, int, array<array<string>>}
     */
    protected function responseToReturn(
        ResponseInterface $response,
        string $returnType
    ) {
        return [
            $this->deserializeResponseBody($response->getBody(), $returnType),
            $response->getStatusCode(),
            $response->getHeaders()
        ];
    }

    /**
     * Deserialize a response body.
     *
     * @template T
     * @param mixed $responseBody The response body.
     * @param string $returnType The return type.
     * @param array<string, string[]> $headers A list of headers from the response.
     * @phpstan-param class-string<T> $returnType
     *
     * @return mixed Either a string or a stream to be passed to a file object.
     * @phpstan-return T
     */
    protected function deserializeResponseBody(
        $responseBody,
        string $returnType,
        array $headers = []
    ) {
        return ObjectSerializer::deserialize(
            $returnType === \SplFileObject::class ? $responseBody : (string)$responseBody,
            $returnType,
            $headers
        );
    }
}
