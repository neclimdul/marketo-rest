<?php
/**
 * SegmentsApi
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
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
 * Swagger Codegen version: 2.4.26
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NecLimDul\MarketoRest\Asset\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
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
     * Exception handler for getSegmentationUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Asset\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Asset\ApiException Processed exception.
     */
    protected function getSegmentationUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        '\NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse',
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
     * @param  string $status Status filter for draft or approved versions (optional)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse
     */
    public function getSegmentationUsingGET($status = null)
    {
        list($response) = $this->getSegmentationUsingGETWithHttpInfo($status);
        return $response;
    }

    /**
     * Get Segmentations
     *
     * @param  string $status Status filter for draft or approved versions (optional)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSegmentationUsingGETWithHttpInfo($status = null)
    {
        $request = $this->getSegmentationUsingGETRequest($status);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse');
        } catch (ApiException $e) {
            throw $this->getSegmentationUsingGETHandleException($e);
        }
    }

    /**
     * Get Segmentations
     *
     * @param  string $status Status filter for draft or approved versions (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSegmentationUsingGETAsync($status = null)
    {
        return $this->getSegmentationUsingGETAsyncWithHttpInfo($status)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Get Segmentations
     *
     * @param  string $status Status filter for draft or approved versions (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSegmentationUsingGETAsyncWithHttpInfo($status = null)
    {
        $request = $this->getSegmentationUsingGETRequest($status);
        return $this->makeAsyncRequest($request, '\NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentationResponse', [$this, 'getSegmentationUsingGETHandleException']);
    }

    /**
     * Create request for operation 'getSegmentationUsingGET'
     *
     * @param  string $status Status filter for draft or approved versions (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSegmentationUsingGETRequest(
        string $status = null
    )
    {

        $resourcePath = '/rest/asset/v1/segmentation.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        $queryParams['status'] = ObjectSerializer::toQueryValue($status);
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
     * Exception handler for getSegmentsForSegmentationUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Asset\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Asset\ApiException Processed exception.
     */
    protected function getSegmentsForSegmentationUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        '\NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse',
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
     * @param  int $id id (required)
     * @param  string $status Status filter for draft or approved versions (optional)
     * @param  int $offset Integer offset for paging (optional)
     * @param  int $max_return Maximum number of channels to return.  Max 200, default 20 (optional)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse
     */
    public function getSegmentsForSegmentationUsingGET($id, $status = null, $offset = null, $max_return = null)
    {
        list($response) = $this->getSegmentsForSegmentationUsingGETWithHttpInfo($id, $status, $offset, $max_return);
        return $response;
    }

    /**
     * Get Segments For Segmentation
     *
     * @param  int $id id (required)
     * @param  string $status Status filter for draft or approved versions (optional)
     * @param  int $offset Integer offset for paging (optional)
     * @param  int $max_return Maximum number of channels to return.  Max 200, default 20 (optional)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSegmentsForSegmentationUsingGETWithHttpInfo($id, $status = null, $offset = null, $max_return = null)
    {
        $request = $this->getSegmentsForSegmentationUsingGETRequest($id, $status, $offset, $max_return);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse');
        } catch (ApiException $e) {
            throw $this->getSegmentsForSegmentationUsingGETHandleException($e);
        }
    }

    /**
     * Get Segments For Segmentation
     *
     * @param  int $id id (required)
     * @param  string $status Status filter for draft or approved versions (optional)
     * @param  int $offset Integer offset for paging (optional)
     * @param  int $max_return Maximum number of channels to return.  Max 200, default 20 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSegmentsForSegmentationUsingGETAsync($id, $status = null, $offset = null, $max_return = null)
    {
        return $this->getSegmentsForSegmentationUsingGETAsyncWithHttpInfo($id, $status, $offset, $max_return)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Get Segments For Segmentation
     *
     * @param  int $id id (required)
     * @param  string $status Status filter for draft or approved versions (optional)
     * @param  int $offset Integer offset for paging (optional)
     * @param  int $max_return Maximum number of channels to return.  Max 200, default 20 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSegmentsForSegmentationUsingGETAsyncWithHttpInfo($id, $status = null, $offset = null, $max_return = null)
    {
        $request = $this->getSegmentsForSegmentationUsingGETRequest($id, $status, $offset, $max_return);
        return $this->makeAsyncRequest($request, '\NecLimDul\MarketoRest\Asset\Model\ResponseOfSegmentsResponse', [$this, 'getSegmentsForSegmentationUsingGETHandleException']);
    }

    /**
     * Create request for operation 'getSegmentsForSegmentationUsingGET'
     *
     * @param  int $id id (required)
     * @param  string $status Status filter for draft or approved versions (optional)
     * @param  int $offset Integer offset for paging (optional)
     * @param  int $max_return Maximum number of channels to return.  Max 200, default 20 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSegmentsForSegmentationUsingGETRequest(
        int $id,
        string $status = null,
        int $offset = null,
        int $max_return = null
    )
    {

        $resourcePath = '/rest/asset/v1/segmentation/{id}/segments.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        $queryParams['status'] = ObjectSerializer::toQueryValue($status);
        $queryParams['offset'] = ObjectSerializer::toQueryValue($offset);
        $queryParams['maxReturn'] = ObjectSerializer::toQueryValue($max_return);
        // Remove any null (optional values).
        $queryParams = array_filter($queryParams, function($v) { return $v !== null; });

        // Path parameters.
        $resourcePath = str_replace(
            '{' . 'id' . '}',
            ObjectSerializer::toPathValue($id),
            $resourcePath
        );
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
     * @param \GuzzleHttp\Psr7\Request $request An initialized request object.
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @return \Psr\Http\Message\ResponseInterface
     */
    private function makeRequest(Request $request) {
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
     * Make an async request.
     *
     * @param \GuzzleHttp\Psr7\Request $request An initialized request object.
     * @param string $returnType The return type.
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
                function ($response) use ($returnType) {
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
                        $response ? $response->getHeaders() : null,
                        $response ? (string) $response->getBody() : null
                    );
                    throw $exceptionHandler($e);
                }
            );
    }

    /**
     * Convert a response to a return standard return array.
     *
     * @param \Psr\Http\Message\ResponseInterface $response A response from a request with a serialized body.
     * @param string $returnType The primary return type.
     *
     * @return array
     */
    private function responseToReturn(ResponseInterface $response, string $returnType) {
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
     * @param array<string, string[]>|null $headers
     *   The a list of headers from the response.
     * @return mixed
     *   Either a string or a stream to be passed to a file object.
     */
    private function deserializeResponseBody($responseBody, string $returnType, ?array $headers = [])
    {
        return ObjectSerializer::deserialize(
            $returnType === '\SplFileObject' ? $responseBody : (string) $responseBody,
            $returnType,
            $headers
        );
    }

}
