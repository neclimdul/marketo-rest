<?php

/**
 * SegmentsApi
 *
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.26
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Asset\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use NecLimDul\MarketoRest\Asset\ApiException;
use NecLimDul\MarketoRest\Asset\Configuration;
use NecLimDul\MarketoRest\Asset\HeaderSelector;
use NecLimDul\MarketoRest\Asset\ObjectSerializer;

/**
 * SegmentsApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SegmentsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface|null $client
     * @param Configuration|null   $config
     * @param HeaderSelector|null  $selector
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the spec.
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex(): int
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig(): Configuration
    {
        return $this->config;
    }

    /**
     * Exception handler for getSegmentationUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Asset\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Asset\ApiException Processed exception.
     */
    protected function getSegmentationUsingGETHandleException(ApiException $e): ApiException
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Segmentations
     *
     * @param string|null $status
     *   Status filter for draft or approved versions
     * @param int|null $offset
     *   Integer offset for paging
     * @param int|null $max_return
     *   Maximum number of channels to return.  Max 200, default 20
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse
     */
    public function getSegmentationUsingGET(
        string $status = null,
        int $offset = null,
        int $max_return = null
    ): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse {
        list($response) = $this->getSegmentationUsingGETWithHttpInfo($status, $offset, $max_return);
        return $response;
    }

    /**
     * Get Segmentations
     *
     * @param string|null $status
     *   Status filter for draft or approved versions
     * @param int|null $offset
     *   Integer offset for paging
     * @param int|null $max_return
     *   Maximum number of channels to return.  Max 200, default 20
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse,
     *     int,
     *     array<array<string>>
     * }
     */
    public function getSegmentationUsingGETWithHttpInfo(
        string $status = null,
        int $offset = null,
        int $max_return = null
    ): array {
        $request = $this->getSegmentationUsingGETRequest($status, $offset, $max_return);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse::class
            );
        } catch (ApiException $e) {
            throw $this->getSegmentationUsingGETHandleException($e);
        }
    }

    /**
     * Get Segmentations
     *
     * @param string|null $status
     *   Status filter for draft or approved versions
     * @param int|null $offset
     *   Integer offset for paging
     * @param int|null $max_return
     *   Maximum number of channels to return.  Max 200, default 20
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSegmentationUsingGETAsync(
        string $status = null,
        int $offset = null,
        int $max_return = null
    ): PromiseInterface {
        return $this->getSegmentationUsingGETAsyncWithHttpInfo($status, $offset, $max_return)
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse {
                    return $response[0];
                }
            );
    }

    /**
     * Get Segmentations
     *
     * @param string|null $status
     *   Status filter for draft or approved versions
     * @param int|null $offset
     *   Integer offset for paging
     * @param int|null $max_return
     *   Maximum number of channels to return.  Max 200, default 20
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSegmentationUsingGETAsyncWithHttpInfo(
        string $status = null,
        int $offset = null,
        int $max_return = null
    ): PromiseInterface {
        $request = $this->getSegmentationUsingGETRequest($status, $offset, $max_return);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse::class,
            [$this, 'getSegmentationUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getSegmentationUsingGET'
     *
     * @param string|null $status
     *   Status filter for draft or approved versions
     * @param int|null $offset
     *   Integer offset for paging
     * @param int|null $max_return
     *   Maximum number of channels to return.  Max 200, default 20
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSegmentationUsingGETRequest(
        string $status = null,
        int $offset = null,
        int $max_return = null
    ): Request {

        $resourcePath = '/rest/asset/v1/segmentation.json';

        $headers = [];
        if ($this->config->getUserAgent()) {
            $headers['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge($headers, $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        ));
        $operationHost = $this->config->getHost();

        // figure out header select logic.
        return ObjectSerializer::createRequest(
            'GET',
            $operationHost . $resourcePath,
            // Query.
            [
                'status' => isset($status) ? ObjectSerializer::toQueryValue($status) : null,
                'offset' => isset($offset) ? ObjectSerializer::toQueryValue($offset) : null,
                'maxReturn' => isset($max_return) ? ObjectSerializer::toQueryValue($max_return) : null,
            ],
            // Headers.
            array_merge(
                [
                ],
                $headers
            ),
            // Form Params
            [
            ],
            ''
        );
    }

    /**
     * Exception handler for getSegmentsForSegmentationUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Asset\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Asset\ApiException Processed exception.
     */
    protected function getSegmentsForSegmentationUsingGETHandleException(ApiException $e): ApiException
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Segments For Segmentation
     *
     * @param int $id
     *   id
     * @param string|null $status
     *   Status filter for draft or approved versions
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse
     */
    public function getSegmentsForSegmentationUsingGET(
        int $id,
        string $status = null
    ): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse {
        list($response) = $this->getSegmentsForSegmentationUsingGETWithHttpInfo($id, $status);
        return $response;
    }

    /**
     * Get Segments For Segmentation
     *
     * @param int $id
     *   id
     * @param string|null $status
     *   Status filter for draft or approved versions
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse,
     *     int,
     *     array<array<string>>
     * }
     */
    public function getSegmentsForSegmentationUsingGETWithHttpInfo(
        int $id,
        string $status = null
    ): array {
        $request = $this->getSegmentsForSegmentationUsingGETRequest($id, $status);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse::class
            );
        } catch (ApiException $e) {
            throw $this->getSegmentsForSegmentationUsingGETHandleException($e);
        }
    }

    /**
     * Get Segments For Segmentation
     *
     * @param int $id
     *   id
     * @param string|null $status
     *   Status filter for draft or approved versions
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSegmentsForSegmentationUsingGETAsync(
        int $id,
        string $status = null
    ): PromiseInterface {
        return $this->getSegmentsForSegmentationUsingGETAsyncWithHttpInfo($id, $status)
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse {
                    return $response[0];
                }
            );
    }

    /**
     * Get Segments For Segmentation
     *
     * @param int $id
     *   id
     * @param string|null $status
     *   Status filter for draft or approved versions
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSegmentsForSegmentationUsingGETAsyncWithHttpInfo(
        int $id,
        string $status = null
    ): PromiseInterface {
        $request = $this->getSegmentsForSegmentationUsingGETRequest($id, $status);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse::class,
            [$this, 'getSegmentsForSegmentationUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getSegmentsForSegmentationUsingGET'
     *
     * @param int $id
     *   id
     * @param string|null $status
     *   Status filter for draft or approved versions
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSegmentsForSegmentationUsingGETRequest(
        int $id,
        string $status = null
    ): Request {

        $resourcePath = '/rest/asset/v1/segmentation/{id}/segments.json';
        $resourcePath = str_replace(
            '{' . 'id' . '}',
            ObjectSerializer::toPathValue($id),
            $resourcePath
        );

        $headers = [];
        if ($this->config->getUserAgent()) {
            $headers['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge($headers, $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        ));
        $operationHost = $this->config->getHost();

        // figure out header select logic.
        return ObjectSerializer::createRequest(
            'GET',
            $operationHost . $resourcePath,
            // Query.
            [
                'status' => isset($status) ? ObjectSerializer::toQueryValue($status) : null,
            ],
            // Headers.
            array_merge(
                [
                ],
                $headers
            ),
            // Form Params
            [
            ],
            ''
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array<string, mixed> of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * Make a request.
     *
     * @param \GuzzleHttp\Psr7\Request $request An initialized request object.
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @return \Psr\Http\Message\ResponseInterface
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
                (int) $e->getCode(),
                $response ? $response->getHeaders() : [],
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
     * Make an async request.
     *
     * @param \GuzzleHttp\Psr7\Request $request An initialized request object.
     * @param class-string $returnType The return type.
     * @param callable $exceptionHandler A callback to process HTTP errors.
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @return \GuzzleHttp\Promise\PromiseInterface A promise that will return a processed response.
     */
    protected function makeAsyncRequest(Request $request, string $returnType, callable $exceptionHandler)
    {
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function (ResponseInterface $response) use ($returnType) {
                    return $this->responseToReturn($response, $returnType);
                },
                function (RequestException $exception) use ($exceptionHandler) {
                    $response = $exception->getResponse();
                    $e = new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $response ? $response->getStatusCode() : 0,
                            (string) $exception->getRequest()->getUri()
                        ),
                        (int) $exception->getCode(),
                        $response ? $response->getHeaders() : [],
                        $response ? (string) $response->getBody() : null
                    );
                    throw $exceptionHandler($e);
                }
            );
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
    protected function responseToReturn(ResponseInterface $response, string $returnType)
    {
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
     * @psalm-return T
     */
    private function deserializeResponseBody($responseBody, string $returnType, array $headers = [])
    {
        return ObjectSerializer::deserialize(
            $returnType === \SplFileObject::class ? $responseBody : (string) $responseBody,
            $returnType,
            $headers
        );
    }
}
