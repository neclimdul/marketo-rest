<?php
/**
 * FileContentsApi
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
 * Swagger Codegen version: 2.4.28
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
 * FileContentsApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileContentsApi
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
     * Operation updateContentUsingPOST
     *
     * Update File Content
     *
     * @param  int $id Id for file in database (required)
     * @param  \NecLimDul\MarketoRest\Asset\Model\UpdateFileContentRequest $request request (required)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse
     */
    public function updateContentUsingPOST($id, $request)
    {
        list($response) = $this->updateContentUsingPOSTWithHttpInfo($id, $request);
        return $response;
    }

    /**
     * Operation updateContentUsingPOSTWithHttpInfo
     *
     * Update File Content
     *
     * @param  int $id Id for file in database (required)
     * @param  \NecLimDul\MarketoRest\Asset\Model\UpdateFileContentRequest $request request (required)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateContentUsingPOSTWithHttpInfo($id, $request)
    {
        $request = $this->updateContentUsingPOSTRequest($id, $request);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateContentUsingPOSTAsync
     *
     * Update File Content
     *
     * @param  int $id Id for file in database (required)
     * @param  \NecLimDul\MarketoRest\Asset\Model\UpdateFileContentRequest $request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateContentUsingPOSTAsync($id, $request)
    {
        return $this->updateContentUsingPOSTAsyncWithHttpInfo($id, $request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateContentUsingPOSTAsyncWithHttpInfo
     *
     * Update File Content
     *
     * @param  int $id Id for file in database (required)
     * @param  \NecLimDul\MarketoRest\Asset\Model\UpdateFileContentRequest $request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateContentUsingPOSTAsyncWithHttpInfo($id, $request)
    {
        $request = $this->updateContentUsingPOSTRequest($id, $request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse');
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
     * Create request for operation 'updateContentUsingPOST'
     *
     * @param  int $id Id for file in database (required)
     * @param  \NecLimDul\MarketoRest\Asset\Model\UpdateFileContentRequest $request request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateContentUsingPOSTRequest($id, $request)
    {
        // Verify the required parameter 'id' is set.
        if ($id === null || (is_array($id) && empty($id))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling updateContentUsingPOST'
            );
        }
        // Verify the required parameter 'request' is set.
        if ($request === null || (is_array($request) && empty($request))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling updateContentUsingPOST'
            );
        }

        $resourcePath = '/rest/asset/v1/file/{id}/content.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Path parameters.
        $resourcePath = str_replace(
            '{' . 'id' . '}',
            ObjectSerializer::toPathValue($id),
            $resourcePath
        );
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['multipart/form-data']
        );
        if ($headers['Content-Type'] === 'application/json') {
          $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($request));
        }
        else {
          $httpBody = (string) $request;
        }


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
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
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
