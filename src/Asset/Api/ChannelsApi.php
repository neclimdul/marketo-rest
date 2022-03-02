<?php

/**
 * ChannelsApi
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
 * ChannelsApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ChannelsApi
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
    public function setHostIndex($hostIndex): void
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
     * Exception handler for getAllChannelsUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Asset\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Asset\ApiException Processed exception.
     */
    protected function getAllChannelsUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Channels
     *
     * @param int|null $max_return
     *   Maximum number of channels to return.  Max 200, default 20
     * @param int|null $offset
     *   Integer offset for paging
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse
     */
    public function getAllChannelsUsingGET(
        int $max_return = null,
        int $offset = null
    ): \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse {
        list($response) = $this->getAllChannelsUsingGETWithHttpInfo($max_return, $offset);
        return $response;
    }

    /**
     * Get Channels
     *
     * @param int|null $max_return
     *   Maximum number of channels to return.  Max 200, default 20
     * @param int|null $offset
     *   Integer offset for paging
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse,
     *     int,
     *     array<array<string>>
     * }
     */
    public function getAllChannelsUsingGETWithHttpInfo(
        int $max_return = null,
        int $offset = null
    ): array {
        $request = $this->getAllChannelsUsingGETRequest($max_return, $offset);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse::class
            );
        } catch (ApiException $e) {
            throw $this->getAllChannelsUsingGETHandleException($e);
        }
    }

    /**
     * Get Channels
     *
     * @param int|null $max_return
     *   Maximum number of channels to return.  Max 200, default 20
     * @param int|null $offset
     *   Integer offset for paging
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllChannelsUsingGETAsync(
        int $max_return = null,
        int $offset = null
    ): PromiseInterface {
        return $this->getAllChannelsUsingGETAsyncWithHttpInfo($max_return, $offset)
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse {
                    return $response[0];
                }
            );
    }

    /**
     * Get Channels
     *
     * @param int|null $max_return
     *   Maximum number of channels to return.  Max 200, default 20
     * @param int|null $offset
     *   Integer offset for paging
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAllChannelsUsingGETAsyncWithHttpInfo(
        int $max_return = null,
        int $offset = null
    ): PromiseInterface {
        $request = $this->getAllChannelsUsingGETRequest($max_return, $offset);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse::class,
            [$this, 'getAllChannelsUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getAllChannelsUsingGET'
     *
     * @param int|null $max_return
     *   Maximum number of channels to return.  Max 200, default 20
     * @param int|null $offset
     *   Integer offset for paging
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getAllChannelsUsingGETRequest(
        int $max_return = null,
        int $offset = null
    ): Request {

        $resourcePath = '/rest/asset/v1/channels.json';

        $headers = [];
        if ($this->config->getUserAgent()) {
            $headers['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge($headers, $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/x-www-form-urlencoded']
        ));
        $operationHost = $this->config->getHost();

        // figure out header select logic.
        return ObjectSerializer::createRequest(
            'GET',
            $operationHost . $resourcePath,
            // Query.
            [
                'maxReturn' => ObjectSerializer::toQueryValue($max_return),
                'offset' => ObjectSerializer::toQueryValue($offset),
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
     * Exception handler for getChannelByNameUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Asset\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Asset\ApiException Processed exception.
     */
    protected function getChannelByNameUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Channel by Name
     *
     * @param string $name
     *   Name of channel to retrieve
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse
     */
    public function getChannelByNameUsingGET(
        string $name
    ): \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse {
        list($response) = $this->getChannelByNameUsingGETWithHttpInfo($name);
        return $response;
    }

    /**
     * Get Channel by Name
     *
     * @param string $name
     *   Name of channel to retrieve
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse,
     *     int,
     *     array<array<string>>
     * }
     */
    public function getChannelByNameUsingGETWithHttpInfo(
        string $name
    ): array {
        $request = $this->getChannelByNameUsingGETRequest($name);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse::class
            );
        } catch (ApiException $e) {
            throw $this->getChannelByNameUsingGETHandleException($e);
        }
    }

    /**
     * Get Channel by Name
     *
     * @param string $name
     *   Name of channel to retrieve
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChannelByNameUsingGETAsync(
        string $name
    ): PromiseInterface {
        return $this->getChannelByNameUsingGETAsyncWithHttpInfo($name)
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse {
                    return $response[0];
                }
            );
    }

    /**
     * Get Channel by Name
     *
     * @param string $name
     *   Name of channel to retrieve
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChannelByNameUsingGETAsyncWithHttpInfo(
        string $name
    ): PromiseInterface {
        $request = $this->getChannelByNameUsingGETRequest($name);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Asset\Model\ResponseOfChannelResponse::class,
            [$this, 'getChannelByNameUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getChannelByNameUsingGET'
     *
     * @param string $name
     *   Name of channel to retrieve
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getChannelByNameUsingGETRequest(
        string $name
    ): Request {

        $resourcePath = '/rest/asset/v1/channel/byName.json';

        $headers = [];
        if ($this->config->getUserAgent()) {
            $headers['User-Agent'] = $this->config->getUserAgent();
        }
        $headers = array_merge($headers, $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/x-www-form-urlencoded']
        ));
        $operationHost = $this->config->getHost();

        // figure out header select logic.
        return ObjectSerializer::createRequest(
            'GET',
            $operationHost . $resourcePath,
            // Query.
            [
                'Name' => ObjectSerializer::toQueryValue($name),
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
