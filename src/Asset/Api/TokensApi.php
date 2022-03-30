<?php

/**
 * TokensApi
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
 * TokensApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TokensApi
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
     * Exception handler for addTokenTOFolderUsingPOST.
     *
     * @param \NecLimDul\MarketoRest\Asset\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Asset\ApiException Processed exception.
     */
    protected function addTokenTOFolderUsingPOSTHandleException(ApiException $e): ApiException
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Create Token
     *
     * @param int $id
     *   Id of the folder to which the token will be associated with
     * @param \NecLimDul\MarketoRest\Asset\Model\CreateTokenRequest $create_token_request
     *   createTokenRequest
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse
     */
    public function addTokenTOFolderUsingPOST(
        int $id,
        \NecLimDul\MarketoRest\Asset\Model\CreateTokenRequest $create_token_request
    ): \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse {
        list($response) = $this->addTokenTOFolderUsingPOSTWithHttpInfo($id, $create_token_request);
        return $response;
    }

    /**
     * Create Token
     *
     * @param int $id
     *   Id of the folder to which the token will be associated with
     * @param \NecLimDul\MarketoRest\Asset\Model\CreateTokenRequest $create_token_request
     *   createTokenRequest
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse,
     *     int,
     *     array<array<string>>
     * }
     */
    public function addTokenTOFolderUsingPOSTWithHttpInfo(
        int $id,
        \NecLimDul\MarketoRest\Asset\Model\CreateTokenRequest $create_token_request
    ): array {
        $request = $this->addTokenTOFolderUsingPOSTRequest($id, $create_token_request);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse::class
            );
        } catch (ApiException $e) {
            throw $this->addTokenTOFolderUsingPOSTHandleException($e);
        }
    }

    /**
     * Create Token
     *
     * @param int $id
     *   Id of the folder to which the token will be associated with
     * @param \NecLimDul\MarketoRest\Asset\Model\CreateTokenRequest $create_token_request
     *   createTokenRequest
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addTokenTOFolderUsingPOSTAsync(
        int $id,
        \NecLimDul\MarketoRest\Asset\Model\CreateTokenRequest $create_token_request
    ): PromiseInterface {
        return $this->addTokenTOFolderUsingPOSTAsyncWithHttpInfo($id, $create_token_request)
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse {
                    return $response[0];
                }
            );
    }

    /**
     * Create Token
     *
     * @param int $id
     *   Id of the folder to which the token will be associated with
     * @param \NecLimDul\MarketoRest\Asset\Model\CreateTokenRequest $create_token_request
     *   createTokenRequest
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addTokenTOFolderUsingPOSTAsyncWithHttpInfo(
        int $id,
        \NecLimDul\MarketoRest\Asset\Model\CreateTokenRequest $create_token_request
    ): PromiseInterface {
        $request = $this->addTokenTOFolderUsingPOSTRequest($id, $create_token_request);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse::class,
            [$this, 'addTokenTOFolderUsingPOSTHandleException']
        );
    }

    /**
     * Create request for operation 'addTokenTOFolderUsingPOST'
     *
     * @param int $id
     *   Id of the folder to which the token will be associated with
     * @param \NecLimDul\MarketoRest\Asset\Model\CreateTokenRequest $create_token_request
     *   createTokenRequest
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function addTokenTOFolderUsingPOSTRequest(
        int $id,
        \NecLimDul\MarketoRest\Asset\Model\CreateTokenRequest $create_token_request
    ): Request {

        $resourcePath = '/rest/asset/v1/folder/{id}/tokens.json';
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
            ['application/x-www-form-urlencoded']
        ));
        $operationHost = $this->config->getHost();

        // figure out header select logic.
        return ObjectSerializer::createRequest(
            'POST',
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
            $create_token_request
        );
    }

    /**
     * Exception handler for deleteTokenByNameUsingPOST.
     *
     * @param \NecLimDul\MarketoRest\Asset\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Asset\ApiException Processed exception.
     */
    protected function deleteTokenByNameUsingPOSTHandleException(ApiException $e): ApiException
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Delete Token by Name
     *
     * @param int $id
     *   id
     * @param \NecLimDul\MarketoRest\Asset\Model\DeleteTokenRequest $delete_token_request
     *   deleteTokenRequest
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
     */
    public function deleteTokenByNameUsingPOST(
        int $id,
        \NecLimDul\MarketoRest\Asset\Model\DeleteTokenRequest $delete_token_request
    ): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse {
        list($response) = $this->deleteTokenByNameUsingPOSTWithHttpInfo($id, $delete_token_request);
        return $response;
    }

    /**
     * Delete Token by Name
     *
     * @param int $id
     *   id
     * @param \NecLimDul\MarketoRest\Asset\Model\DeleteTokenRequest $delete_token_request
     *   deleteTokenRequest
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse,
     *     int,
     *     array<array<string>>
     * }
     */
    public function deleteTokenByNameUsingPOSTWithHttpInfo(
        int $id,
        \NecLimDul\MarketoRest\Asset\Model\DeleteTokenRequest $delete_token_request
    ): array {
        $request = $this->deleteTokenByNameUsingPOSTRequest($id, $delete_token_request);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse::class
            );
        } catch (ApiException $e) {
            throw $this->deleteTokenByNameUsingPOSTHandleException($e);
        }
    }

    /**
     * Delete Token by Name
     *
     * @param int $id
     *   id
     * @param \NecLimDul\MarketoRest\Asset\Model\DeleteTokenRequest $delete_token_request
     *   deleteTokenRequest
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTokenByNameUsingPOSTAsync(
        int $id,
        \NecLimDul\MarketoRest\Asset\Model\DeleteTokenRequest $delete_token_request
    ): PromiseInterface {
        return $this->deleteTokenByNameUsingPOSTAsyncWithHttpInfo($id, $delete_token_request)
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse {
                    return $response[0];
                }
            );
    }

    /**
     * Delete Token by Name
     *
     * @param int $id
     *   id
     * @param \NecLimDul\MarketoRest\Asset\Model\DeleteTokenRequest $delete_token_request
     *   deleteTokenRequest
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteTokenByNameUsingPOSTAsyncWithHttpInfo(
        int $id,
        \NecLimDul\MarketoRest\Asset\Model\DeleteTokenRequest $delete_token_request
    ): PromiseInterface {
        $request = $this->deleteTokenByNameUsingPOSTRequest($id, $delete_token_request);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse::class,
            [$this, 'deleteTokenByNameUsingPOSTHandleException']
        );
    }

    /**
     * Create request for operation 'deleteTokenByNameUsingPOST'
     *
     * @param int $id
     *   id
     * @param \NecLimDul\MarketoRest\Asset\Model\DeleteTokenRequest $delete_token_request
     *   deleteTokenRequest
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteTokenByNameUsingPOSTRequest(
        int $id,
        \NecLimDul\MarketoRest\Asset\Model\DeleteTokenRequest $delete_token_request
    ): Request {

        $resourcePath = '/rest/asset/v1/folder/{id}/tokens/delete.json';
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
            ['application/x-www-form-urlencoded']
        ));
        $operationHost = $this->config->getHost();

        // figure out header select logic.
        return ObjectSerializer::createRequest(
            'POST',
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
            $delete_token_request
        );
    }

    /**
     * Exception handler for getTokensByFolderIdUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Asset\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Asset\ApiException Processed exception.
     */
    protected function getTokensByFolderIdUsingGETHandleException(ApiException $e): ApiException
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Tokens by Folder Id
     *
     * @param int $id
     *   id
     * @param string|'Folder' $folder_type
     *   Type of folder.  &#39;Folder&#39; or &#39;Program&#39;
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse
     */
    public function getTokensByFolderIdUsingGET(
        int $id,
        string $folder_type = 'Folder'
    ): \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse {
        list($response) = $this->getTokensByFolderIdUsingGETWithHttpInfo($id, $folder_type);
        return $response;
    }

    /**
     * Get Tokens by Folder Id
     *
     * @param int $id
     *   id
     * @param string|'Folder' $folder_type
     *   Type of folder.  &#39;Folder&#39; or &#39;Program&#39;
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of the response, status code, and headers.
     * @phpstan-return array{
     *     \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse,
     *     int,
     *     array<array<string>>
     * }
     */
    public function getTokensByFolderIdUsingGETWithHttpInfo(
        int $id,
        string $folder_type = 'Folder'
    ): array {
        $request = $this->getTokensByFolderIdUsingGETRequest($id, $folder_type);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse::class
            );
        } catch (ApiException $e) {
            throw $this->getTokensByFolderIdUsingGETHandleException($e);
        }
    }

    /**
     * Get Tokens by Folder Id
     *
     * @param int $id
     *   id
     * @param string|'Folder' $folder_type
     *   Type of folder.  &#39;Folder&#39; or &#39;Program&#39;
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokensByFolderIdUsingGETAsync(
        int $id,
        string $folder_type = 'Folder'
    ): PromiseInterface {
        return $this->getTokensByFolderIdUsingGETAsyncWithHttpInfo($id, $folder_type)
            ->then(
                function (array $response): \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse {
                    return $response[0];
                }
            );
    }

    /**
     * Get Tokens by Folder Id
     *
     * @param int $id
     *   id
     * @param string|'Folder' $folder_type
     *   Type of folder.  &#39;Folder&#39; or &#39;Program&#39;
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getTokensByFolderIdUsingGETAsyncWithHttpInfo(
        int $id,
        string $folder_type = 'Folder'
    ): PromiseInterface {
        $request = $this->getTokensByFolderIdUsingGETRequest($id, $folder_type);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse::class,
            [$this, 'getTokensByFolderIdUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getTokensByFolderIdUsingGET'
     *
     * @param int $id
     *   id
     * @param string|'Folder' $folder_type
     *   Type of folder.  &#39;Folder&#39; or &#39;Program&#39;
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getTokensByFolderIdUsingGETRequest(
        int $id,
        string $folder_type = 'Folder'
    ): Request {

        $resourcePath = '/rest/asset/v1/folder/{id}/tokens.json';
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
            ['application/x-www-form-urlencoded']
        ));
        $operationHost = $this->config->getHost();

        // figure out header select logic.
        return ObjectSerializer::createRequest(
            'GET',
            $operationHost . $resourcePath,
            // Query.
            [
                'folderType' => ObjectSerializer::toQueryValue($folder_type),
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
