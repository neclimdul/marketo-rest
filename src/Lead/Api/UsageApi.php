<?php
/**
 * UsageApi
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
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

namespace NecLimDul\MarketoRest\Lead\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
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
     * Operation getDailyErrorsUsingGET
     *
     * Get Daily Errors
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData
     */
    public function getDailyErrorsUsingGET()
    {
        list($response) = $this->getDailyErrorsUsingGETWithHttpInfo();
        return $response;
    }

    /**
     * Operation getDailyErrorsUsingGETWithHttpInfo
     *
     * Get Daily Errors
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDailyErrorsUsingGETWithHttpInfo()
    {
        $request = $this->getDailyErrorsUsingGETRequest();

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDailyErrorsUsingGETAsync
     *
     * Get Daily Errors
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDailyErrorsUsingGETAsync()
    {
        return $this->getDailyErrorsUsingGETAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDailyErrorsUsingGETAsyncWithHttpInfo
     *
     * Get Daily Errors
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDailyErrorsUsingGETAsyncWithHttpInfo()
    {
        $request = $this->getDailyErrorsUsingGETRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData');
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
     * Create request for operation 'getDailyErrorsUsingGET'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDailyErrorsUsingGETRequest()
    {

        $resourcePath = '/rest/v1/stats/errors.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
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
     * Operation getDailyUsageUsingGET
     *
     * Get Daily Usage
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData
     */
    public function getDailyUsageUsingGET()
    {
        list($response) = $this->getDailyUsageUsingGETWithHttpInfo();
        return $response;
    }

    /**
     * Operation getDailyUsageUsingGETWithHttpInfo
     *
     * Get Daily Usage
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDailyUsageUsingGETWithHttpInfo()
    {
        $request = $this->getDailyUsageUsingGETRequest();

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getDailyUsageUsingGETAsync
     *
     * Get Daily Usage
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDailyUsageUsingGETAsync()
    {
        return $this->getDailyUsageUsingGETAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDailyUsageUsingGETAsyncWithHttpInfo
     *
     * Get Daily Usage
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDailyUsageUsingGETAsyncWithHttpInfo()
    {
        $request = $this->getDailyUsageUsingGETRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData');
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
     * Create request for operation 'getDailyUsageUsingGET'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getDailyUsageUsingGETRequest()
    {

        $resourcePath = '/rest/v1/stats/usage.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
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
     * Operation getLast7DaysErrorsUsingGET
     *
     * Get Weekly Errors
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData
     */
    public function getLast7DaysErrorsUsingGET()
    {
        list($response) = $this->getLast7DaysErrorsUsingGETWithHttpInfo();
        return $response;
    }

    /**
     * Operation getLast7DaysErrorsUsingGETWithHttpInfo
     *
     * Get Weekly Errors
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLast7DaysErrorsUsingGETWithHttpInfo()
    {
        $request = $this->getLast7DaysErrorsUsingGETRequest();

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLast7DaysErrorsUsingGETAsync
     *
     * Get Weekly Errors
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLast7DaysErrorsUsingGETAsync()
    {
        return $this->getLast7DaysErrorsUsingGETAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLast7DaysErrorsUsingGETAsyncWithHttpInfo
     *
     * Get Weekly Errors
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLast7DaysErrorsUsingGETAsyncWithHttpInfo()
    {
        $request = $this->getLast7DaysErrorsUsingGETRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData');
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
     * Create request for operation 'getLast7DaysErrorsUsingGET'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLast7DaysErrorsUsingGETRequest()
    {

        $resourcePath = '/rest/v1/stats/errors/last7days.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
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
     * Operation getLast7DaysUsageUsingGET
     *
     * Get Weekly Usage
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData
     */
    public function getLast7DaysUsageUsingGET()
    {
        list($response) = $this->getLast7DaysUsageUsingGETWithHttpInfo();
        return $response;
    }

    /**
     * Operation getLast7DaysUsageUsingGETWithHttpInfo
     *
     * Get Weekly Usage
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData, HTTP status code, HTTP response headers (array of strings)
     */
    public function getLast7DaysUsageUsingGETWithHttpInfo()
    {
        $request = $this->getLast7DaysUsageUsingGETRequest();

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getLast7DaysUsageUsingGETAsync
     *
     * Get Weekly Usage
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLast7DaysUsageUsingGETAsync()
    {
        return $this->getLast7DaysUsageUsingGETAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getLast7DaysUsageUsingGETAsyncWithHttpInfo
     *
     * Get Weekly Usage
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getLast7DaysUsageUsingGETAsyncWithHttpInfo()
    {
        $request = $this->getLast7DaysUsageUsingGETRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData');
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
     * Create request for operation 'getLast7DaysUsageUsingGET'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getLast7DaysUsageUsingGETRequest()
    {

        $resourcePath = '/rest/v1/stats/usage/last7days.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
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
