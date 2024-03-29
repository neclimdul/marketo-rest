<?php
/**
 * IdentityApi
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Identity
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * OpenAPI spec version: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Identity\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
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
     * @param int                  $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
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
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation identityUsingGET
     *
     * Identity
     *
     * @param  string $client_id Client ID from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $client_secret Client Secret from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $grant_type Grant type. (required)
     *
     * @throws \NecLimDul\MarketoRest\Identity\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity
     */
    public function identityUsingGET($client_id, $client_secret, $grant_type)
    {
        list($response) = $this->identityUsingGETWithHttpInfo($client_id, $client_secret, $grant_type);
        return $response;
    }

    /**
     * Operation identityUsingGETWithHttpInfo
     *
     * Identity
     *
     * @param  string $client_id Client ID from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $client_secret Client Secret from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $grant_type Grant type. (required)
     *
     * @throws \NecLimDul\MarketoRest\Identity\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity, HTTP status code, HTTP response headers (array of strings)
     */
    public function identityUsingGETWithHttpInfo($client_id, $client_secret, $grant_type)
    {
        $request = $this->identityUsingGETRequest($client_id, $client_secret, $grant_type);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation identityUsingGETAsync
     *
     * Identity
     *
     * @param  string $client_id Client ID from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $client_secret Client Secret from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $grant_type Grant type. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function identityUsingGETAsync($client_id, $client_secret, $grant_type)
    {
        return $this->identityUsingGETAsyncWithHttpInfo($client_id, $client_secret, $grant_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation identityUsingGETAsyncWithHttpInfo
     *
     * Identity
     *
     * @param  string $client_id Client ID from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $client_secret Client Secret from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $grant_type Grant type. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function identityUsingGETAsyncWithHttpInfo($client_id, $client_secret, $grant_type)
    {
        $request = $this->identityUsingGETRequest($client_id, $client_secret, $grant_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity');
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
     * Create request for operation 'identityUsingGET'
     *
     * @param  string $client_id Client ID from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $client_secret Client Secret from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $grant_type Grant type. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function identityUsingGETRequest($client_id, $client_secret, $grant_type)
    {
        // Verify the required parameter 'client_id' is set.
        if ($client_id === null || (is_array($client_id) && empty($client_id))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling identityUsingGET'
            );
        }
        // Verify the required parameter 'client_secret' is set.
        if ($client_secret === null || (is_array($client_secret) && empty($client_secret))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_secret when calling identityUsingGET'
            );
        }
        // Verify the required parameter 'grant_type' is set.
        if ($grant_type === null || (is_array($grant_type) && empty($grant_type))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_type when calling identityUsingGET'
            );
        }

        $resourcePath = '/identity/oauth/token';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        $queryParams['client_id'] = $client_id;
        $queryParams['client_secret'] = $client_secret;
        $queryParams['grant_type'] = $grant_type;
        // Remove any null (optional values).
        $queryParams = array_filter($queryParams, function($v) { return $v !== null; });
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation identityUsingPOST
     *
     * Identity
     *
     * @param  string $client_id Client ID from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $client_secret Client Secret from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $grant_type Grant type. (required)
     *
     * @throws \NecLimDul\MarketoRest\Identity\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity
     */
    public function identityUsingPOST($client_id, $client_secret, $grant_type)
    {
        list($response) = $this->identityUsingPOSTWithHttpInfo($client_id, $client_secret, $grant_type);
        return $response;
    }

    /**
     * Operation identityUsingPOSTWithHttpInfo
     *
     * Identity
     *
     * @param  string $client_id Client ID from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $client_secret Client Secret from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $grant_type Grant type. (required)
     *
     * @throws \NecLimDul\MarketoRest\Identity\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity, HTTP status code, HTTP response headers (array of strings)
     */
    public function identityUsingPOSTWithHttpInfo($client_id, $client_secret, $grant_type)
    {
        $request = $this->identityUsingPOSTRequest($client_id, $client_secret, $grant_type);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation identityUsingPOSTAsync
     *
     * Identity
     *
     * @param  string $client_id Client ID from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $client_secret Client Secret from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $grant_type Grant type. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function identityUsingPOSTAsync($client_id, $client_secret, $grant_type)
    {
        return $this->identityUsingPOSTAsyncWithHttpInfo($client_id, $client_secret, $grant_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation identityUsingPOSTAsyncWithHttpInfo
     *
     * Identity
     *
     * @param  string $client_id Client ID from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $client_secret Client Secret from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $grant_type Grant type. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function identityUsingPOSTAsyncWithHttpInfo($client_id, $client_secret, $grant_type)
    {
        $request = $this->identityUsingPOSTRequest($client_id, $client_secret, $grant_type);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity');
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
     * Create request for operation 'identityUsingPOST'
     *
     * @param  string $client_id Client ID from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $client_secret Client Secret from Admin &gt; Integration &gt; Launchpoint menu. (required)
     * @param  string $grant_type Grant type. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function identityUsingPOSTRequest($client_id, $client_secret, $grant_type)
    {
        // Verify the required parameter 'client_id' is set.
        if ($client_id === null || (is_array($client_id) && empty($client_id))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_id when calling identityUsingPOST'
            );
        }
        // Verify the required parameter 'client_secret' is set.
        if ($client_secret === null || (is_array($client_secret) && empty($client_secret))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $client_secret when calling identityUsingPOST'
            );
        }
        // Verify the required parameter 'grant_type' is set.
        if ($grant_type === null || (is_array($grant_type) && empty($grant_type))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $grant_type when calling identityUsingPOST'
            );
        }

        $resourcePath = '/identity/oauth/token';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        $queryParams['client_id'] = $client_id;
        $queryParams['client_secret'] = $client_secret;
        $queryParams['grant_type'] = $grant_type;
        // Remove any null (optional values).
        $queryParams = array_filter($queryParams, function($v) { return $v !== null; });
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
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
     * @param \GuzzleHttp\Psr7\Request $request
     *   An initialized request object.
     *
     * @throws \NecLimDul\MarketoRest\Identity\ApiException on non-2xx response
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
