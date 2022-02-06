<?php
/**
 * FilesApi
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
 * Swagger Codegen version: 2.4.24
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
 * FilesApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Asset
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FilesApi
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
     * Operation createFileUsingPOST
     *
     * Create File
     *
     * @param  \NecLimDul\MarketoRest\Asset\Model\CreateFileRequest $create_file_request createFileRequest (required)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse
     */
    public function createFileUsingPOST($create_file_request)
    {
        list($response) = $this->createFileUsingPOSTWithHttpInfo($create_file_request);
        return $response;
    }

    /**
     * Operation createFileUsingPOSTWithHttpInfo
     *
     * Create File
     *
     * @param  \NecLimDul\MarketoRest\Asset\Model\CreateFileRequest $create_file_request createFileRequest (required)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createFileUsingPOSTWithHttpInfo($create_file_request)
    {
        $request = $this->createFileUsingPOSTRequest($create_file_request);

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
     * Operation createFileUsingPOSTAsync
     *
     * Create File
     *
     * @param  \NecLimDul\MarketoRest\Asset\Model\CreateFileRequest $create_file_request createFileRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFileUsingPOSTAsync($create_file_request)
    {
        return $this->createFileUsingPOSTAsyncWithHttpInfo($create_file_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFileUsingPOSTAsyncWithHttpInfo
     *
     * Create File
     *
     * @param  \NecLimDul\MarketoRest\Asset\Model\CreateFileRequest $create_file_request createFileRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFileUsingPOSTAsyncWithHttpInfo($create_file_request)
    {
        $request = $this->createFileUsingPOSTRequest($create_file_request);

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
     * Create request for operation 'createFileUsingPOST'
     *
     * @param  \NecLimDul\MarketoRest\Asset\Model\CreateFileRequest $create_file_request createFileRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createFileUsingPOSTRequest($create_file_request)
    {
        // Verify the required parameter 'create_file_request' is set.
        if ($create_file_request === null || (is_array($create_file_request) && empty($create_file_request))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $create_file_request when calling createFileUsingPOST'
            );
        }

        $resourcePath = '/rest/asset/v1/files.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['multipart/form-data']
        );
        if ($headers['Content-Type'] === 'application/json') {
          $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($create_file_request));
        } elseif (!is_array($create_file_request)) {
          $httpBody = (string) $create_file_request;
        }
        else {
          $httpBody = '';
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
     * Operation getFileByIdUsingGET
     *
     * Get File by Id
     *
     * @param  int $id Id for file in database (required)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse
     */
    public function getFileByIdUsingGET($id)
    {
        list($response) = $this->getFileByIdUsingGETWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getFileByIdUsingGETWithHttpInfo
     *
     * Get File by Id
     *
     * @param  int $id Id for file in database (required)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFileByIdUsingGETWithHttpInfo($id)
    {
        $request = $this->getFileByIdUsingGETRequest($id);

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
     * Operation getFileByIdUsingGETAsync
     *
     * Get File by Id
     *
     * @param  int $id Id for file in database (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileByIdUsingGETAsync($id)
    {
        return $this->getFileByIdUsingGETAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFileByIdUsingGETAsyncWithHttpInfo
     *
     * Get File by Id
     *
     * @param  int $id Id for file in database (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileByIdUsingGETAsyncWithHttpInfo($id)
    {
        $request = $this->getFileByIdUsingGETRequest($id);

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
     * Create request for operation 'getFileByIdUsingGET'
     *
     * @param  int $id Id for file in database (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFileByIdUsingGETRequest($id)
    {
        // Verify the required parameter 'id' is set.
        if ($id === null || (is_array($id) && empty($id))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling getFileByIdUsingGET'
            );
        }

        $resourcePath = '/rest/asset/v1/file/{id}.json';
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
     * Operation getFileByNameUsingGET
     *
     * Get File by Name
     *
     * @param  string $name Name of the file (required)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse
     */
    public function getFileByNameUsingGET($name)
    {
        list($response) = $this->getFileByNameUsingGETWithHttpInfo($name);
        return $response;
    }

    /**
     * Operation getFileByNameUsingGETWithHttpInfo
     *
     * Get File by Name
     *
     * @param  string $name Name of the file (required)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFileByNameUsingGETWithHttpInfo($name)
    {
        $request = $this->getFileByNameUsingGETRequest($name);

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
     * Operation getFileByNameUsingGETAsync
     *
     * Get File by Name
     *
     * @param  string $name Name of the file (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileByNameUsingGETAsync($name)
    {
        return $this->getFileByNameUsingGETAsyncWithHttpInfo($name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFileByNameUsingGETAsyncWithHttpInfo
     *
     * Get File by Name
     *
     * @param  string $name Name of the file (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFileByNameUsingGETAsyncWithHttpInfo($name)
    {
        $request = $this->getFileByNameUsingGETRequest($name);

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
     * Create request for operation 'getFileByNameUsingGET'
     *
     * @param  string $name Name of the file (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFileByNameUsingGETRequest($name)
    {
        // Verify the required parameter 'name' is set.
        if ($name === null || (is_array($name) && empty($name))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling getFileByNameUsingGET'
            );
        }

        $resourcePath = '/rest/asset/v1/file/byName.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        if (is_array($name)) {
            $name = ObjectSerializer::serializeCollection($name, '', true);
        }
        $queryParams['name'] = $name;
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
     * Operation getFilesUsingGET
     *
     * Get Files
     *
     * @param  \NecLimDul\MarketoRest\Asset\Model\GetFilesRequest $get_files_request getFilesRequest (required)
     * @param  string $folder JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; (optional)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse
     */
    public function getFilesUsingGET($get_files_request, $folder = null)
    {
        list($response) = $this->getFilesUsingGETWithHttpInfo($get_files_request, $folder);
        return $response;
    }

    /**
     * Operation getFilesUsingGETWithHttpInfo
     *
     * Get Files
     *
     * @param  \NecLimDul\MarketoRest\Asset\Model\GetFilesRequest $get_files_request getFilesRequest (required)
     * @param  string $folder JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; (optional)
     *
     * @throws \NecLimDul\MarketoRest\Asset\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFilesUsingGETWithHttpInfo($get_files_request, $folder = null)
    {
        $request = $this->getFilesUsingGETRequest($get_files_request, $folder);

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
     * Operation getFilesUsingGETAsync
     *
     * Get Files
     *
     * @param  \NecLimDul\MarketoRest\Asset\Model\GetFilesRequest $get_files_request getFilesRequest (required)
     * @param  string $folder JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesUsingGETAsync($get_files_request, $folder = null)
    {
        return $this->getFilesUsingGETAsyncWithHttpInfo($get_files_request, $folder)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFilesUsingGETAsyncWithHttpInfo
     *
     * Get Files
     *
     * @param  \NecLimDul\MarketoRest\Asset\Model\GetFilesRequest $get_files_request getFilesRequest (required)
     * @param  string $folder JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFilesUsingGETAsyncWithHttpInfo($get_files_request, $folder = null)
    {
        $request = $this->getFilesUsingGETRequest($get_files_request, $folder);

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
     * Create request for operation 'getFilesUsingGET'
     *
     * @param  \NecLimDul\MarketoRest\Asset\Model\GetFilesRequest $get_files_request getFilesRequest (required)
     * @param  string $folder JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getFilesUsingGETRequest($get_files_request, $folder = null)
    {
        // Verify the required parameter 'get_files_request' is set.
        if ($get_files_request === null || (is_array($get_files_request) && empty($get_files_request))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $get_files_request when calling getFilesUsingGET'
            );
        }

        $resourcePath = '/rest/asset/v1/files.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        if (is_array($folder)) {
            $folder = ObjectSerializer::serializeCollection($folder, '', true);
        }
        $queryParams['folder'] = $folder;
        // Remove any null (optional values).
        $queryParams = array_filter($queryParams, function($v) { return $v !== null; });
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        if ($headers['Content-Type'] === 'application/json') {
          $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($get_files_request));
        } elseif (!is_array($get_files_request)) {
          $httpBody = (string) $get_files_request;
        }
        else {
          $httpBody = '';
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
     * Convert a response to a return standard return array.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     *   A response from a request with a serialized body.
     * @param string $returnType
     *   The return type.
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
     * @param array|null $headers
     *   The a list of headers from the response.
     * @return mixed
     *   Either a string or a stream to be passed to a file object.
     */
    private function deserializeResponseBody($responseBody, $returnType, $headers = [])
    {
        return ObjectSerializer::deserialize(
            $returnType === '\SplFileObject' ? $responseBody : (string) $responseBody,
            $returnType,
            $headers
        );
    }

}
