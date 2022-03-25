<?php

/**
 * UsageApi
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
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Lead\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use NecLimDul\MarketoRest\Lead\ApiException;
use NecLimDul\MarketoRest\Lead\Configuration;
use NecLimDul\MarketoRest\Lead\HeaderSelector;
use NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * UsageApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UsageApi
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
     * Exception handler for getDailyErrorsUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getDailyErrorsUsingGETHandleException(ApiException $e): ApiException
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Daily Errors
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData
     */
    public function getDailyErrorsUsingGET(): \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData
    {
        list($response) = $this->getDailyErrorsUsingGETWithHttpInfo();
        return $response;
    }

    /**
     * Get Daily Errors
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData,
     *     int,
     *     array<array<string>>
     * }
     */
    public function getDailyErrorsUsingGETWithHttpInfo(): array
    {
        $request = $this->getDailyErrorsUsingGETRequest();
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData::class
            );
        } catch (ApiException $e) {
            throw $this->getDailyErrorsUsingGETHandleException($e);
        }
    }

    /**
     * Get Daily Errors
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDailyErrorsUsingGETAsync(): PromiseInterface
    {
        return $this->getDailyErrorsUsingGETAsyncWithHttpInfo()
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData {
                    return $response[0];
                }
            );
    }

    /**
     * Get Daily Errors
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDailyErrorsUsingGETAsyncWithHttpInfo(): PromiseInterface
    {
        $request = $this->getDailyErrorsUsingGETRequest();
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData::class,
            [$this, 'getDailyErrorsUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getDailyErrorsUsingGET'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDailyErrorsUsingGETRequest(): Request
    {

        $resourcePath = '/rest/v1/stats/errors.json';

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
     * Exception handler for getDailyUsageUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getDailyUsageUsingGETHandleException(ApiException $e): ApiException
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Daily Usage
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData
     */
    public function getDailyUsageUsingGET(): \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData
    {
        list($response) = $this->getDailyUsageUsingGETWithHttpInfo();
        return $response;
    }

    /**
     * Get Daily Usage
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData,
     *     int,
     *     array<array<string>>
     * }
     */
    public function getDailyUsageUsingGETWithHttpInfo(): array
    {
        $request = $this->getDailyUsageUsingGETRequest();
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData::class
            );
        } catch (ApiException $e) {
            throw $this->getDailyUsageUsingGETHandleException($e);
        }
    }

    /**
     * Get Daily Usage
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDailyUsageUsingGETAsync(): PromiseInterface
    {
        return $this->getDailyUsageUsingGETAsyncWithHttpInfo()
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData {
                    return $response[0];
                }
            );
    }

    /**
     * Get Daily Usage
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDailyUsageUsingGETAsyncWithHttpInfo(): PromiseInterface
    {
        $request = $this->getDailyUsageUsingGETRequest();
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData::class,
            [$this, 'getDailyUsageUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getDailyUsageUsingGET'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDailyUsageUsingGETRequest(): Request
    {

        $resourcePath = '/rest/v1/stats/usage.json';

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
     * Exception handler for getLast7DaysErrorsUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getLast7DaysErrorsUsingGETHandleException(ApiException $e): ApiException
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Weekly Errors
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData
     */
    public function getLast7DaysErrorsUsingGET(): \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData
    {
        list($response) = $this->getLast7DaysErrorsUsingGETWithHttpInfo();
        return $response;
    }

    /**
     * Get Weekly Errors
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData,
     *     int,
     *     array<array<string>>
     * }
     */
    public function getLast7DaysErrorsUsingGETWithHttpInfo(): array
    {
        $request = $this->getLast7DaysErrorsUsingGETRequest();
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData::class
            );
        } catch (ApiException $e) {
            throw $this->getLast7DaysErrorsUsingGETHandleException($e);
        }
    }

    /**
     * Get Weekly Errors
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLast7DaysErrorsUsingGETAsync(): PromiseInterface
    {
        return $this->getLast7DaysErrorsUsingGETAsyncWithHttpInfo()
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData {
                    return $response[0];
                }
            );
    }

    /**
     * Get Weekly Errors
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLast7DaysErrorsUsingGETAsyncWithHttpInfo(): PromiseInterface
    {
        $request = $this->getLast7DaysErrorsUsingGETRequest();
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData::class,
            [$this, 'getLast7DaysErrorsUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getLast7DaysErrorsUsingGET'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLast7DaysErrorsUsingGETRequest(): Request
    {

        $resourcePath = '/rest/v1/stats/errors/last7days.json';

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
     * Exception handler for getLast7DaysUsageUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getLast7DaysUsageUsingGETHandleException(ApiException $e): ApiException
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Weekly Usage
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData
     */
    public function getLast7DaysUsageUsingGET(): \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData
    {
        list($response) = $this->getLast7DaysUsageUsingGETWithHttpInfo();
        return $response;
    }

    /**
     * Get Weekly Usage
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData,
     *     int,
     *     array<array<string>>
     * }
     */
    public function getLast7DaysUsageUsingGETWithHttpInfo(): array
    {
        $request = $this->getLast7DaysUsageUsingGETRequest();
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData::class
            );
        } catch (ApiException $e) {
            throw $this->getLast7DaysUsageUsingGETHandleException($e);
        }
    }

    /**
     * Get Weekly Usage
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLast7DaysUsageUsingGETAsync(): PromiseInterface
    {
        return $this->getLast7DaysUsageUsingGETAsyncWithHttpInfo()
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData {
                    return $response[0];
                }
            );
    }

    /**
     * Get Weekly Usage
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLast7DaysUsageUsingGETAsyncWithHttpInfo(): PromiseInterface
    {
        $request = $this->getLast7DaysUsageUsingGETRequest();
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData::class,
            [$this, 'getLast7DaysUsageUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getLast7DaysUsageUsingGET'
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLast7DaysUsageUsingGETRequest(): Request
    {

        $resourcePath = '/rest/v1/stats/usage/last7days.json';

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
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @return \Psr\Http\Message\ResponseInterface
     */
    private function makeRequest(Request $request)
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
    private function makeAsyncRequest(Request $request, string $returnType, callable $exceptionHandler)
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
    private function responseToReturn(ResponseInterface $response, string $returnType)
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
