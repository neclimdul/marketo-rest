<?php

/**
 * IdentityApi
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
 * @package  NecLimDul\MarketoRest\Identity
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Identity\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use NecLimDul\MarketoRest\Identity\ApiException;
use NecLimDul\MarketoRest\Identity\Configuration;
use NecLimDul\MarketoRest\Identity\HeaderSelector;
use NecLimDul\MarketoRest\Identity\ObjectSerializer;

/**
 * IdentityApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Identity
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class IdentityApi
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
     * Exception handler for identityUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Identity\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Identity\ApiException Processed exception.
     */
    protected function identityUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Identity
     *
     * @param string $client_id
     *   Client ID from Admin &gt; Integration &gt; Launchpoint menu.
     * @param string $client_secret
     *   Client Secret from Admin &gt; Integration &gt; Launchpoint menu.
     * @param string $grant_type
     *   Grant type.
     * @param string|null $partner_id
     *   LaunchPoint Technology Partner &lt;a href&#x3D;&#39;http://developers.marketo.com/support/Marketo_LaunchPoint_Technology_Partner_API_Key.pdf&#39;&gt;API Key&lt;/a&gt;.
     *
     * @throws \NecLimDul\MarketoRest\Identity\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity
     */
    public function identityUsingGET(
        string $client_id,
        string $client_secret,
        string $grant_type,
        string $partner_id = null
    ): \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity {
        list($response) = $this->identityUsingGETWithHttpInfo($client_id, $client_secret, $grant_type, $partner_id);
        return $response;
    }

    /**
     * Identity
     *
     * @param string $client_id
     *   Client ID from Admin &gt; Integration &gt; Launchpoint menu.
     * @param string $client_secret
     *   Client Secret from Admin &gt; Integration &gt; Launchpoint menu.
     * @param string $grant_type
     *   Grant type.
     * @param string|null $partner_id
     *   LaunchPoint Technology Partner &lt;a href&#x3D;&#39;http://developers.marketo.com/support/Marketo_LaunchPoint_Technology_Partner_API_Key.pdf&#39;&gt;API Key&lt;/a&gt;.
     *
     * @throws \NecLimDul\MarketoRest\Identity\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity,
     *     int,
     *     array<array<string>>
     * }
     */
    public function identityUsingGETWithHttpInfo(
        string $client_id,
        string $client_secret,
        string $grant_type,
        string $partner_id = null
    ): array {
        $request = $this->identityUsingGETRequest($client_id, $client_secret, $grant_type, $partner_id);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity::class
            );
        } catch (ApiException $e) {
            throw $this->identityUsingGETHandleException($e);
        }
    }

    /**
     * Identity
     *
     * @param string $client_id
     *   Client ID from Admin &gt; Integration &gt; Launchpoint menu.
     * @param string $client_secret
     *   Client Secret from Admin &gt; Integration &gt; Launchpoint menu.
     * @param string $grant_type
     *   Grant type.
     * @param string|null $partner_id
     *   LaunchPoint Technology Partner &lt;a href&#x3D;&#39;http://developers.marketo.com/support/Marketo_LaunchPoint_Technology_Partner_API_Key.pdf&#39;&gt;API Key&lt;/a&gt;.
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function identityUsingGETAsync(
        string $client_id,
        string $client_secret,
        string $grant_type,
        string $partner_id = null
    ): PromiseInterface {
        return $this->identityUsingGETAsyncWithHttpInfo($client_id, $client_secret, $grant_type, $partner_id)
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity {
                    return $response[0];
                }
            );
    }

    /**
     * Identity
     *
     * @param string $client_id
     *   Client ID from Admin &gt; Integration &gt; Launchpoint menu.
     * @param string $client_secret
     *   Client Secret from Admin &gt; Integration &gt; Launchpoint menu.
     * @param string $grant_type
     *   Grant type.
     * @param string|null $partner_id
     *   LaunchPoint Technology Partner &lt;a href&#x3D;&#39;http://developers.marketo.com/support/Marketo_LaunchPoint_Technology_Partner_API_Key.pdf&#39;&gt;API Key&lt;/a&gt;.
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function identityUsingGETAsyncWithHttpInfo(
        string $client_id,
        string $client_secret,
        string $grant_type,
        string $partner_id = null
    ): PromiseInterface {
        $request = $this->identityUsingGETRequest($client_id, $client_secret, $grant_type, $partner_id);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity::class,
            [$this, 'identityUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'identityUsingGET'
     *
     * @param string $client_id
     *   Client ID from Admin &gt; Integration &gt; Launchpoint menu.
     * @param string $client_secret
     *   Client Secret from Admin &gt; Integration &gt; Launchpoint menu.
     * @param string $grant_type
     *   Grant type.
     * @param string|null $partner_id
     *   LaunchPoint Technology Partner &lt;a href&#x3D;&#39;http://developers.marketo.com/support/Marketo_LaunchPoint_Technology_Partner_API_Key.pdf&#39;&gt;API Key&lt;/a&gt;.
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function identityUsingGETRequest(
        string $client_id,
        string $client_secret,
        string $grant_type,
        string $partner_id = null
    ): Request {

        $resourcePath = '/identity/oauth/token';

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
                'client_id' => ObjectSerializer::toQueryValue($client_id),
                'client_secret' => ObjectSerializer::toQueryValue($client_secret),
                'grant_type' => ObjectSerializer::toQueryValue($grant_type),
                'partner_id' => ObjectSerializer::toQueryValue($partner_id),
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
     * @throws \NecLimDul\MarketoRest\Identity\ApiException on non-2xx response
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
