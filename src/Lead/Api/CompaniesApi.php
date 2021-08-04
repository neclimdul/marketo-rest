<?php
/**
 * CompaniesApi
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketo Rest API
 *
 * Marketo Rest API
 *
 * The version of the OpenAPI document: 1.0
 * Contact: developerfeedback@marketo.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
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
 * CompaniesApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CompaniesApi
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
     * Operation deleteCompaniesUsingPOST
     *
     * Delete Companies
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\DeleteCompanyRequest $delete_company_request deleteCompanyRequest (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany
     */
    public function deleteCompaniesUsingPOST($delete_company_request)
    {
        list($response) = $this->deleteCompaniesUsingPOSTWithHttpInfo($delete_company_request);
        return $response;
    }

    /**
     * Operation deleteCompaniesUsingPOSTWithHttpInfo
     *
     * Delete Companies
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\DeleteCompanyRequest $delete_company_request deleteCompanyRequest (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteCompaniesUsingPOSTWithHttpInfo($delete_company_request)
    {
        $request = $this->deleteCompaniesUsingPOSTRequest($delete_company_request);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteCompaniesUsingPOSTAsync
     *
     * Delete Companies
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\DeleteCompanyRequest $delete_company_request deleteCompanyRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCompaniesUsingPOSTAsync($delete_company_request)
    {
        return $this->deleteCompaniesUsingPOSTAsyncWithHttpInfo($delete_company_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteCompaniesUsingPOSTAsyncWithHttpInfo
     *
     * Delete Companies
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\DeleteCompanyRequest $delete_company_request deleteCompanyRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteCompaniesUsingPOSTAsyncWithHttpInfo($delete_company_request)
    {
        $request = $this->deleteCompaniesUsingPOSTRequest($delete_company_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany');
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
     * Create request for operation 'deleteCompaniesUsingPOST'
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\DeleteCompanyRequest $delete_company_request deleteCompanyRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteCompaniesUsingPOSTRequest($delete_company_request)
    {
        // Verify the required parameter 'delete_company_request' is set.
        if ($delete_company_request === null || (is_array($delete_company_request) && empty($delete_company_request))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $delete_company_request when calling deleteCompaniesUsingPOST'
            );
        }

        $resourcePath = '/rest/v1/companies/delete.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );

        // for model (json/xml)
        if (!empty($delete_company_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($delete_company_request));
            } elseif (!is_array($delete_company_request)) {
                $httpBody = (string) $delete_company_request;
            }
            else {
                $httpBody = '';
            }
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
     * Operation describeUsingGET
     *
     * Describe Companies
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData
     */
    public function describeUsingGET()
    {
        list($response) = $this->describeUsingGETWithHttpInfo();
        return $response;
    }

    /**
     * Operation describeUsingGETWithHttpInfo
     *
     * Describe Companies
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData, HTTP status code, HTTP response headers (array of strings)
     */
    public function describeUsingGETWithHttpInfo()
    {
        $request = $this->describeUsingGETRequest();

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation describeUsingGETAsync
     *
     * Describe Companies
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function describeUsingGETAsync()
    {
        return $this->describeUsingGETAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation describeUsingGETAsyncWithHttpInfo
     *
     * Describe Companies
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function describeUsingGETAsyncWithHttpInfo()
    {
        $request = $this->describeUsingGETRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData');
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
     * Create request for operation 'describeUsingGET'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function describeUsingGETRequest()
    {

        $resourcePath = '/rest/v1/companies/describe.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            []
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
     * Operation getCompaniesUsingGET
     *
     * Get Companies
     *
     * @param  string $filter_type The company field to filter on.  Searchable fields can be retrieved with the Describe Company call. (required)
     * @param  string[] $filter_values Comma-separated list of values to match against (required)
     * @param  string[] $fields Comma-separated list of fields to include in the response (optional)
     * @param  int $batch_size The batch size to return.  The max and default value is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany
     */
    public function getCompaniesUsingGET($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        list($response) = $this->getCompaniesUsingGETWithHttpInfo($filter_type, $filter_values, $fields, $batch_size, $next_page_token);
        return $response;
    }

    /**
     * Operation getCompaniesUsingGETWithHttpInfo
     *
     * Get Companies
     *
     * @param  string $filter_type The company field to filter on.  Searchable fields can be retrieved with the Describe Company call. (required)
     * @param  string[] $filter_values Comma-separated list of values to match against (required)
     * @param  string[] $fields Comma-separated list of fields to include in the response (optional)
     * @param  int $batch_size The batch size to return.  The max and default value is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCompaniesUsingGETWithHttpInfo($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        $request = $this->getCompaniesUsingGETRequest($filter_type, $filter_values, $fields, $batch_size, $next_page_token);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCompaniesUsingGETAsync
     *
     * Get Companies
     *
     * @param  string $filter_type The company field to filter on.  Searchable fields can be retrieved with the Describe Company call. (required)
     * @param  string[] $filter_values Comma-separated list of values to match against (required)
     * @param  string[] $fields Comma-separated list of fields to include in the response (optional)
     * @param  int $batch_size The batch size to return.  The max and default value is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompaniesUsingGETAsync($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        return $this->getCompaniesUsingGETAsyncWithHttpInfo($filter_type, $filter_values, $fields, $batch_size, $next_page_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCompaniesUsingGETAsyncWithHttpInfo
     *
     * Get Companies
     *
     * @param  string $filter_type The company field to filter on.  Searchable fields can be retrieved with the Describe Company call. (required)
     * @param  string[] $filter_values Comma-separated list of values to match against (required)
     * @param  string[] $fields Comma-separated list of fields to include in the response (optional)
     * @param  int $batch_size The batch size to return.  The max and default value is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompaniesUsingGETAsyncWithHttpInfo($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        $request = $this->getCompaniesUsingGETRequest($filter_type, $filter_values, $fields, $batch_size, $next_page_token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany');
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
     * Create request for operation 'getCompaniesUsingGET'
     *
     * @param  string $filter_type The company field to filter on.  Searchable fields can be retrieved with the Describe Company call. (required)
     * @param  string[] $filter_values Comma-separated list of values to match against (required)
     * @param  string[] $fields Comma-separated list of fields to include in the response (optional)
     * @param  int $batch_size The batch size to return.  The max and default value is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCompaniesUsingGETRequest($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        // Verify the required parameter 'filter_type' is set.
        if ($filter_type === null || (is_array($filter_type) && empty($filter_type))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter_type when calling getCompaniesUsingGET'
            );
        }
        // Verify the required parameter 'filter_values' is set.
        if ($filter_values === null || (is_array($filter_values) && empty($filter_values))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter_values when calling getCompaniesUsingGET'
            );
        }

        $resourcePath = '/rest/v1/companies.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        if (is_array($filter_type)) {
            $filter_type = ObjectSerializer::serializeCollection($filter_type, '', true);
        }
        $queryParams['filterType'] = $filter_type;
        $queryParams += ObjectSerializer::processQuery('filterValues', $filter_values, 'form');
        $queryParams += ObjectSerializer::processQuery('fields', $fields, 'form');
        if (is_array($batch_size)) {
            $batch_size = ObjectSerializer::serializeCollection($batch_size, '', true);
        }
        $queryParams['batchSize'] = $batch_size;
        if (is_array($next_page_token)) {
            $next_page_token = ObjectSerializer::serializeCollection($next_page_token, '', true);
        }
        $queryParams['nextPageToken'] = $next_page_token;
        // Remove any null (optional values).
        $queryParams = array_filter($queryParams, function($v) { return $v !== null; });
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            []
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
     * Operation syncCompaniesUsingPOST
     *
     * Sync Companies
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\SyncCompanyRequest $sync_company_request syncCompanyRequest (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany
     */
    public function syncCompaniesUsingPOST($sync_company_request)
    {
        list($response) = $this->syncCompaniesUsingPOSTWithHttpInfo($sync_company_request);
        return $response;
    }

    /**
     * Operation syncCompaniesUsingPOSTWithHttpInfo
     *
     * Sync Companies
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\SyncCompanyRequest $sync_company_request syncCompanyRequest (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany, HTTP status code, HTTP response headers (array of strings)
     */
    public function syncCompaniesUsingPOSTWithHttpInfo($sync_company_request)
    {
        $request = $this->syncCompaniesUsingPOSTRequest($sync_company_request);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation syncCompaniesUsingPOSTAsync
     *
     * Sync Companies
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\SyncCompanyRequest $sync_company_request syncCompanyRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syncCompaniesUsingPOSTAsync($sync_company_request)
    {
        return $this->syncCompaniesUsingPOSTAsyncWithHttpInfo($sync_company_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation syncCompaniesUsingPOSTAsyncWithHttpInfo
     *
     * Sync Companies
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\SyncCompanyRequest $sync_company_request syncCompanyRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syncCompaniesUsingPOSTAsyncWithHttpInfo($sync_company_request)
    {
        $request = $this->syncCompaniesUsingPOSTRequest($sync_company_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany');
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
     * Create request for operation 'syncCompaniesUsingPOST'
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\SyncCompanyRequest $sync_company_request syncCompanyRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function syncCompaniesUsingPOSTRequest($sync_company_request)
    {
        // Verify the required parameter 'sync_company_request' is set.
        if ($sync_company_request === null || (is_array($sync_company_request) && empty($sync_company_request))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sync_company_request when calling syncCompaniesUsingPOST'
            );
        }

        $resourcePath = '/rest/v1/companies.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );

        // for model (json/xml)
        if (!empty($sync_company_request)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($sync_company_request));
            } elseif (!is_array($sync_company_request)) {
                $httpBody = (string) $sync_company_request;
            }
            else {
                $httpBody = '';
            }
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
     *   ...
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
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
