<?php
/**
 * SalesPersonsApi
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
 * Swagger Codegen version: 2.4.26
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
 * SalesPersonsApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesPersonsApi
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
     * Operation deleteSalesPersonUsingPOST
     *
     * Delete SalesPersons
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\DeleteSalesPersonRequest $delete_sales_person_request deleteSalesPersonRequest (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson
     */
    public function deleteSalesPersonUsingPOST($delete_sales_person_request)
    {
        list($response) = $this->deleteSalesPersonUsingPOSTWithHttpInfo($delete_sales_person_request);
        return $response;
    }

    /**
     * Operation deleteSalesPersonUsingPOSTWithHttpInfo
     *
     * Delete SalesPersons
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\DeleteSalesPersonRequest $delete_sales_person_request deleteSalesPersonRequest (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSalesPersonUsingPOSTWithHttpInfo($delete_sales_person_request)
    {
        $request = $this->deleteSalesPersonUsingPOSTRequest($delete_sales_person_request);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation deleteSalesPersonUsingPOSTAsync
     *
     * Delete SalesPersons
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\DeleteSalesPersonRequest $delete_sales_person_request deleteSalesPersonRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSalesPersonUsingPOSTAsync($delete_sales_person_request)
    {
        return $this->deleteSalesPersonUsingPOSTAsyncWithHttpInfo($delete_sales_person_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteSalesPersonUsingPOSTAsyncWithHttpInfo
     *
     * Delete SalesPersons
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\DeleteSalesPersonRequest $delete_sales_person_request deleteSalesPersonRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSalesPersonUsingPOSTAsyncWithHttpInfo($delete_sales_person_request)
    {
        $request = $this->deleteSalesPersonUsingPOSTRequest($delete_sales_person_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson');
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
     * Create request for operation 'deleteSalesPersonUsingPOST'
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\DeleteSalesPersonRequest $delete_sales_person_request deleteSalesPersonRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function deleteSalesPersonUsingPOSTRequest($delete_sales_person_request)
    {
        // Verify the required parameter 'delete_sales_person_request' is set.
        if ($delete_sales_person_request === null || (is_array($delete_sales_person_request) && empty($delete_sales_person_request))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $delete_sales_person_request when calling deleteSalesPersonUsingPOST'
            );
        }

        $resourcePath = '/rest/v1/salespersons/delete.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        if ($headers['Content-Type'] === 'application/json') {
          $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($delete_sales_person_request));
        }
        else {
          $httpBody = (string) $delete_sales_person_request;
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
     * Operation describeUsingGET5
     *
     * Describe SalesPersons
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData
     */
    public function describeUsingGET5()
    {
        list($response) = $this->describeUsingGET5WithHttpInfo();
        return $response;
    }

    /**
     * Operation describeUsingGET5WithHttpInfo
     *
     * Describe SalesPersons
     *
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData, HTTP status code, HTTP response headers (array of strings)
     */
    public function describeUsingGET5WithHttpInfo()
    {
        $request = $this->describeUsingGET5Request();

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
     * Operation describeUsingGET5Async
     *
     * Describe SalesPersons
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function describeUsingGET5Async()
    {
        return $this->describeUsingGET5AsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation describeUsingGET5AsyncWithHttpInfo
     *
     * Describe SalesPersons
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function describeUsingGET5AsyncWithHttpInfo()
    {
        $request = $this->describeUsingGET5Request();

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
     * Create request for operation 'describeUsingGET5'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function describeUsingGET5Request()
    {

        $resourcePath = '/rest/v1/salespersons/describe.json';
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
     * Operation getSalesPersonUsingGET
     *
     * Get SalesPersons
     *
     * @param  string $filter_type The sales person field to filter on. Searchable fields can be retrieved with the Describe Sales Person call. (required)
     * @param  string[] $filter_values Comma seperated list of search values. (required)
     * @param  string[] $fields Comma-separated list of fields to include in the response (optional)
     * @param  int $batch_size The batch size to return.  The max and default value is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson
     */
    public function getSalesPersonUsingGET($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        list($response) = $this->getSalesPersonUsingGETWithHttpInfo($filter_type, $filter_values, $fields, $batch_size, $next_page_token);
        return $response;
    }

    /**
     * Operation getSalesPersonUsingGETWithHttpInfo
     *
     * Get SalesPersons
     *
     * @param  string $filter_type The sales person field to filter on. Searchable fields can be retrieved with the Describe Sales Person call. (required)
     * @param  string[] $filter_values Comma seperated list of search values. (required)
     * @param  string[] $fields Comma-separated list of fields to include in the response (optional)
     * @param  int $batch_size The batch size to return.  The max and default value is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSalesPersonUsingGETWithHttpInfo($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        $request = $this->getSalesPersonUsingGETRequest($filter_type, $filter_values, $fields, $batch_size, $next_page_token);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getSalesPersonUsingGETAsync
     *
     * Get SalesPersons
     *
     * @param  string $filter_type The sales person field to filter on. Searchable fields can be retrieved with the Describe Sales Person call. (required)
     * @param  string[] $filter_values Comma seperated list of search values. (required)
     * @param  string[] $fields Comma-separated list of fields to include in the response (optional)
     * @param  int $batch_size The batch size to return.  The max and default value is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSalesPersonUsingGETAsync($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        return $this->getSalesPersonUsingGETAsyncWithHttpInfo($filter_type, $filter_values, $fields, $batch_size, $next_page_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSalesPersonUsingGETAsyncWithHttpInfo
     *
     * Get SalesPersons
     *
     * @param  string $filter_type The sales person field to filter on. Searchable fields can be retrieved with the Describe Sales Person call. (required)
     * @param  string[] $filter_values Comma seperated list of search values. (required)
     * @param  string[] $fields Comma-separated list of fields to include in the response (optional)
     * @param  int $batch_size The batch size to return.  The max and default value is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSalesPersonUsingGETAsyncWithHttpInfo($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        $request = $this->getSalesPersonUsingGETRequest($filter_type, $filter_values, $fields, $batch_size, $next_page_token);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson');
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
     * Create request for operation 'getSalesPersonUsingGET'
     *
     * @param  string $filter_type The sales person field to filter on. Searchable fields can be retrieved with the Describe Sales Person call. (required)
     * @param  string[] $filter_values Comma seperated list of search values. (required)
     * @param  string[] $fields Comma-separated list of fields to include in the response (optional)
     * @param  int $batch_size The batch size to return.  The max and default value is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getSalesPersonUsingGETRequest($filter_type, $filter_values, $fields = null, $batch_size = null, $next_page_token = null)
    {
        // Verify the required parameter 'filter_type' is set.
        if ($filter_type === null || (is_array($filter_type) && empty($filter_type))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter_type when calling getSalesPersonUsingGET'
            );
        }
        // Verify the required parameter 'filter_values' is set.
        if ($filter_values === null || (is_array($filter_values) && empty($filter_values))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $filter_values when calling getSalesPersonUsingGET'
            );
        }

        $resourcePath = '/rest/v1/salespersons.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        $queryParams['filterType'] = $filter_type;
        $filter_values = ObjectSerializer::serializeCollection($filter_values, 'csv', true);
        $queryParams['filterValues'] = $filter_values;
        $fields = ObjectSerializer::serializeCollection($fields, 'multi', true);
        $queryParams['fields'] = $fields;
        $queryParams['batchSize'] = $batch_size;
        $queryParams['nextPageToken'] = $next_page_token;
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
     * Operation syncSalesPersonsUsingPOST
     *
     * Sync SalesPersons
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\SyncSalesPersonRequest $sync_sales_person_request syncSalesPersonRequest (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson
     */
    public function syncSalesPersonsUsingPOST($sync_sales_person_request)
    {
        list($response) = $this->syncSalesPersonsUsingPOSTWithHttpInfo($sync_sales_person_request);
        return $response;
    }

    /**
     * Operation syncSalesPersonsUsingPOSTWithHttpInfo
     *
     * Sync SalesPersons
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\SyncSalesPersonRequest $sync_sales_person_request syncSalesPersonRequest (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson, HTTP status code, HTTP response headers (array of strings)
     */
    public function syncSalesPersonsUsingPOSTWithHttpInfo($sync_sales_person_request)
    {
        $request = $this->syncSalesPersonsUsingPOSTRequest($sync_sales_person_request);

        try {
            $response = $this->makeRequest($request);

            switch ($response->getStatusCode()) {
                case 200:
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson');
            }

            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson');

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $e->setResponseObject(
                        $this->deserializeResponseBody(
                            $e->getResponseBody(),
                            '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson',
                            $e->getResponseHeaders()
                        )
                    );
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation syncSalesPersonsUsingPOSTAsync
     *
     * Sync SalesPersons
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\SyncSalesPersonRequest $sync_sales_person_request syncSalesPersonRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syncSalesPersonsUsingPOSTAsync($sync_sales_person_request)
    {
        return $this->syncSalesPersonsUsingPOSTAsyncWithHttpInfo($sync_sales_person_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation syncSalesPersonsUsingPOSTAsyncWithHttpInfo
     *
     * Sync SalesPersons
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\SyncSalesPersonRequest $sync_sales_person_request syncSalesPersonRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function syncSalesPersonsUsingPOSTAsyncWithHttpInfo($sync_sales_person_request)
    {
        $request = $this->syncSalesPersonsUsingPOSTRequest($sync_sales_person_request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson');
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
     * Create request for operation 'syncSalesPersonsUsingPOST'
     *
     * @param  \NecLimDul\MarketoRest\Lead\Model\SyncSalesPersonRequest $sync_sales_person_request syncSalesPersonRequest (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function syncSalesPersonsUsingPOSTRequest($sync_sales_person_request)
    {
        // Verify the required parameter 'sync_sales_person_request' is set.
        if ($sync_sales_person_request === null || (is_array($sync_sales_person_request) && empty($sync_sales_person_request))) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sync_sales_person_request when calling syncSalesPersonsUsingPOST'
            );
        }

        $resourcePath = '/rest/v1/salespersons.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        if ($headers['Content-Type'] === 'application/json') {
          $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($sync_sales_person_request));
        }
        else {
          $httpBody = (string) $sync_sales_person_request;
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
