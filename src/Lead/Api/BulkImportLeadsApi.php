<?php
/**
 * BulkImportLeadsApi
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
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;
use NecLimDul\MarketoRest\Lead\ApiException;
use NecLimDul\MarketoRest\Lead\Configuration;
use NecLimDul\MarketoRest\Lead\HeaderSelector;
use NecLimDul\MarketoRest\Lead\ObjectSerializer;

/**
 * BulkImportLeadsApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BulkImportLeadsApi
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
    public function setHostIndex($hostIndex): void
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
     * Exception handler for getImportLeadFailuresUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getImportLeadFailuresUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Import Lead Failures
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent
     */
    public function getImportLeadFailuresUsingGET(
        int $batch_id
    ): \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent
    {
        list($response) = $this->getImportLeadFailuresUsingGETWithHttpInfo($batch_id);
        return $response;
    }

    /**
     * Get Import Lead Failures
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent, HTTP status code, HTTP response headers (array of strings)
     * @phpstan-return array{ \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent, int, array<array<string>>}
     */
    public function getImportLeadFailuresUsingGETWithHttpInfo(
        int $batch_id
    ): array
    {
        $request = $this->getImportLeadFailuresUsingGETRequest($batch_id);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent::class
            );
        } catch (ApiException $e) {
            throw $this->getImportLeadFailuresUsingGETHandleException($e);
        }
    }

    /**
     * Get Import Lead Failures
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportLeadFailuresUsingGETAsync(
        int $batch_id
    ): PromiseInterface
    {
        return $this->getImportLeadFailuresUsingGETAsyncWithHttpInfo($batch_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Get Import Lead Failures
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportLeadFailuresUsingGETAsyncWithHttpInfo(
        int $batch_id
    ): PromiseInterface
    {
        $request = $this->getImportLeadFailuresUsingGETRequest($batch_id);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent::class,
            [$this, 'getImportLeadFailuresUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getImportLeadFailuresUsingGET'
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getImportLeadFailuresUsingGETRequest(
        int $batch_id
    ): Request
    {

        $resourcePath = '/bulk/v1/leads/batch/{batchId}/failures.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Path parameters.
        $resourcePath = str_replace(
            '{' . 'batchId' . '}',
            ObjectSerializer::toPathValue($batch_id),
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
     * Exception handler for getImportLeadStatusUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getImportLeadStatusUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Import Lead Status
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse
     */
    public function getImportLeadStatusUsingGET(
        int $batch_id
    ): \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse
    {
        list($response) = $this->getImportLeadStatusUsingGETWithHttpInfo($batch_id);
        return $response;
    }

    /**
     * Get Import Lead Status
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse, HTTP status code, HTTP response headers (array of strings)
     * @phpstan-return array{ \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse, int, array<array<string>>}
     */
    public function getImportLeadStatusUsingGETWithHttpInfo(
        int $batch_id
    ): array
    {
        $request = $this->getImportLeadStatusUsingGETRequest($batch_id);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse::class
            );
        } catch (ApiException $e) {
            throw $this->getImportLeadStatusUsingGETHandleException($e);
        }
    }

    /**
     * Get Import Lead Status
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportLeadStatusUsingGETAsync(
        int $batch_id
    ): PromiseInterface
    {
        return $this->getImportLeadStatusUsingGETAsyncWithHttpInfo($batch_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Get Import Lead Status
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportLeadStatusUsingGETAsyncWithHttpInfo(
        int $batch_id
    ): PromiseInterface
    {
        $request = $this->getImportLeadStatusUsingGETRequest($batch_id);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse::class,
            [$this, 'getImportLeadStatusUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getImportLeadStatusUsingGET'
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getImportLeadStatusUsingGETRequest(
        int $batch_id
    ): Request
    {

        $resourcePath = '/bulk/v1/leads/batch/{batchId}.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Path parameters.
        $resourcePath = str_replace(
            '{' . 'batchId' . '}',
            ObjectSerializer::toPathValue($batch_id),
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
     * Exception handler for getImportLeadWarningsUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getImportLeadWarningsUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Import Lead Warnings
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent
     */
    public function getImportLeadWarningsUsingGET(
        int $batch_id
    ): \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent
    {
        list($response) = $this->getImportLeadWarningsUsingGETWithHttpInfo($batch_id);
        return $response;
    }

    /**
     * Get Import Lead Warnings
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent, HTTP status code, HTTP response headers (array of strings)
     * @phpstan-return array{ \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent, int, array<array<string>>}
     */
    public function getImportLeadWarningsUsingGETWithHttpInfo(
        int $batch_id
    ): array
    {
        $request = $this->getImportLeadWarningsUsingGETRequest($batch_id);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent::class
            );
        } catch (ApiException $e) {
            throw $this->getImportLeadWarningsUsingGETHandleException($e);
        }
    }

    /**
     * Get Import Lead Warnings
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportLeadWarningsUsingGETAsync(
        int $batch_id
    ): PromiseInterface
    {
        return $this->getImportLeadWarningsUsingGETAsyncWithHttpInfo($batch_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Get Import Lead Warnings
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportLeadWarningsUsingGETAsyncWithHttpInfo(
        int $batch_id
    ): PromiseInterface
    {
        $request = $this->getImportLeadWarningsUsingGETRequest($batch_id);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent::class,
            [$this, 'getImportLeadWarningsUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getImportLeadWarningsUsingGET'
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getImportLeadWarningsUsingGETRequest(
        int $batch_id
    ): Request
    {

        $resourcePath = '/bulk/v1/leads/batch/{batchId}/warnings.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Path parameters.
        $resourcePath = str_replace(
            '{' . 'batchId' . '}',
            ObjectSerializer::toPathValue($batch_id),
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
     * Exception handler for importLeadUsingPOST.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function importLeadUsingPOSTHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Import Leads
     *
     * @param  string $format Import file format. (required)
     * @param  \SplFileObject $file File containing the data records to import. (required)
     * @param  string $lookup_field Field to use for deduplication.  Custom fields (string, email, integer), and the following field types are supported: id, cookies, email, twitterId, facebookId, linkedInId, sfdcAccountId, sfdcContactId, sfdcLeadId, sfdcLeadOwnerId, sfdcOpptyId.  Default is email.&lt;br&gt;Note: You can use id for update only operations. (optional)
     * @param  string $partition_name Name of the lead partition to import to. (optional)
     * @param  int $list_id Id of the static list to import into. (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse
     */
    public function importLeadUsingPOST(
        string $format,
        \SplFileObject $file,
        string $lookup_field = null,
        string $partition_name = null,
        int $list_id = null
    ): \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse
    {
        list($response) = $this->importLeadUsingPOSTWithHttpInfo($format, $file, $lookup_field, $partition_name, $list_id);
        return $response;
    }

    /**
     * Import Leads
     *
     * @param  string $format Import file format. (required)
     * @param  \SplFileObject $file File containing the data records to import. (required)
     * @param  string $lookup_field Field to use for deduplication.  Custom fields (string, email, integer), and the following field types are supported: id, cookies, email, twitterId, facebookId, linkedInId, sfdcAccountId, sfdcContactId, sfdcLeadId, sfdcLeadOwnerId, sfdcOpptyId.  Default is email.&lt;br&gt;Note: You can use id for update only operations. (optional)
     * @param  string $partition_name Name of the lead partition to import to. (optional)
     * @param  int $list_id Id of the static list to import into. (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse, HTTP status code, HTTP response headers (array of strings)
     * @phpstan-return array{ \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse, int, array<array<string>>}
     */
    public function importLeadUsingPOSTWithHttpInfo(
        string $format,
        \SplFileObject $file,
        string $lookup_field = null,
        string $partition_name = null,
        int $list_id = null
    ): array
    {
        $request = $this->importLeadUsingPOSTRequest($format, $file, $lookup_field, $partition_name, $list_id);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse::class
            );
        } catch (ApiException $e) {
            throw $this->importLeadUsingPOSTHandleException($e);
        }
    }

    /**
     * Import Leads
     *
     * @param  string $format Import file format. (required)
     * @param  \SplFileObject $file File containing the data records to import. (required)
     * @param  string $lookup_field Field to use for deduplication.  Custom fields (string, email, integer), and the following field types are supported: id, cookies, email, twitterId, facebookId, linkedInId, sfdcAccountId, sfdcContactId, sfdcLeadId, sfdcLeadOwnerId, sfdcOpptyId.  Default is email.&lt;br&gt;Note: You can use id for update only operations. (optional)
     * @param  string $partition_name Name of the lead partition to import to. (optional)
     * @param  int $list_id Id of the static list to import into. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importLeadUsingPOSTAsync(
        string $format,
        \SplFileObject $file,
        string $lookup_field = null,
        string $partition_name = null,
        int $list_id = null
    ): PromiseInterface
    {
        return $this->importLeadUsingPOSTAsyncWithHttpInfo($format, $file, $lookup_field, $partition_name, $list_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Import Leads
     *
     * @param  string $format Import file format. (required)
     * @param  \SplFileObject $file File containing the data records to import. (required)
     * @param  string $lookup_field Field to use for deduplication.  Custom fields (string, email, integer), and the following field types are supported: id, cookies, email, twitterId, facebookId, linkedInId, sfdcAccountId, sfdcContactId, sfdcLeadId, sfdcLeadOwnerId, sfdcOpptyId.  Default is email.&lt;br&gt;Note: You can use id for update only operations. (optional)
     * @param  string $partition_name Name of the lead partition to import to. (optional)
     * @param  int $list_id Id of the static list to import into. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importLeadUsingPOSTAsyncWithHttpInfo(
        string $format,
        \SplFileObject $file,
        string $lookup_field = null,
        string $partition_name = null,
        int $list_id = null
    ): PromiseInterface
    {
        $request = $this->importLeadUsingPOSTRequest($format, $file, $lookup_field, $partition_name, $list_id);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse::class,
            [$this, 'importLeadUsingPOSTHandleException']
        );
    }

    /**
     * Create request for operation 'importLeadUsingPOST'
     *
     * @param  string $format Import file format. (required)
     * @param  \SplFileObject $file File containing the data records to import. (required)
     * @param  string $lookup_field Field to use for deduplication.  Custom fields (string, email, integer), and the following field types are supported: id, cookies, email, twitterId, facebookId, linkedInId, sfdcAccountId, sfdcContactId, sfdcLeadId, sfdcLeadOwnerId, sfdcOpptyId.  Default is email.&lt;br&gt;Note: You can use id for update only operations. (optional)
     * @param  string $partition_name Name of the lead partition to import to. (optional)
     * @param  int $list_id Id of the static list to import into. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function importLeadUsingPOSTRequest(
        string $format,
        \SplFileObject $file,
        string $lookup_field = null,
        string $partition_name = null,
        int $list_id = null
    ): Request
    {

        $resourcePath = '/bulk/v1/leads.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        $queryParams['format'] = ObjectSerializer::toQueryValue($format);
        $queryParams['lookupField'] = ObjectSerializer::toQueryValue($lookup_field);
        $queryParams['partitionName'] = ObjectSerializer::toQueryValue($partition_name);
        $queryParams['listId'] = ObjectSerializer::toQueryValue($list_id);
        // Remove any null (optional values).
        $queryParams = array_filter($queryParams, function($v) { return $v !== null; });

        // Form parameters.
        /** @var string[][] $formParams */
        $formParams = [];
        $multipart = false;
        $multipart = true;
        $formParams['file'] = [];
        foreach (ObjectSerializer::fileToFormValue($file) as $paramFile) {
            $formParams['file'][] = $paramFile;
        }
        // Remove any null (optional values).
        $formParams = array_filter($formParams, function($v) { return $v !== null; });
        /**
         * @psalm-suppress RedundantCondition,TypeDoesNotContainType
         * @phpstan-ignore-next-line
         */
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['multipart/form-data']
            );
        }
        if (!empty($formParams)) {
            /**
             * @psalm-suppress RedundantCondition,TypeDoesNotContainType
             * @phpstan-ignore-next-line
             */
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    foreach ((array) $formParamValue as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
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
     * @template T
     * @param \Psr\Http\Message\ResponseInterface $response A response from a request with a serialized body.
     * @param string $returnType The primary return type.
     * @phpstan-param class-string<T> $returnType
     *
     * @return array structured array or response and http info.
     * @phpstan-return array{T, int, array<array<string>>}
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
     * @template T
     * @param mixed $responseBody The response body.
     * @param string $returnType The return type.
     * @param array<string, string[]>|null $headers A list of headers from the response.
     * @phpstan-param class-string<T> $returnType
     *
     * @return mixed Either a string or a stream to be passed to a file object.
     * @phpstan-return T
     * @psalm-return T
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
