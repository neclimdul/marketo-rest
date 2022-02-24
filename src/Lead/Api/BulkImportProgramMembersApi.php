<?php
/**
 * BulkImportProgramMembersApi
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
 * BulkImportProgramMembersApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BulkImportProgramMembersApi
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
     * Exception handler for getImportProgramMemberFailuresUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getImportProgramMemberFailuresUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        '\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent',
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Import Program Member Failures
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent
     */
    public function getImportProgramMemberFailuresUsingGET($batch_id)
    {
        list($response) = $this->getImportProgramMemberFailuresUsingGETWithHttpInfo($batch_id);
        return $response;
    }

    /**
     * Get Import Program Member Failures
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent, HTTP status code, HTTP response headers (array of strings)
     */
    public function getImportProgramMemberFailuresUsingGETWithHttpInfo($batch_id)
    {
        $request = $this->getImportProgramMemberFailuresUsingGETRequest($batch_id);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent');
        } catch (ApiException $e) {
            throw $this->getImportProgramMemberFailuresUsingGETHandleException($e);
        }
    }

    /**
     * Get Import Program Member Failures
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportProgramMemberFailuresUsingGETAsync($batch_id)
    {
        return $this->getImportProgramMemberFailuresUsingGETAsyncWithHttpInfo($batch_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Get Import Program Member Failures
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportProgramMemberFailuresUsingGETAsyncWithHttpInfo($batch_id)
    {
        $request = $this->getImportProgramMemberFailuresUsingGETRequest($batch_id);
        return $this->makeAsyncRequest($request, '\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent', [$this, 'getImportProgramMemberFailuresUsingGETHandleException']);
    }

    /**
     * Create request for operation 'getImportProgramMemberFailuresUsingGET'
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getImportProgramMemberFailuresUsingGETRequest($batch_id)
    {
        // Verify the required parameter 'batch_id' is set.
        if (!isset($batch_id)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $batch_id when calling getImportProgramMemberFailuresUsingGET'
            );
        }

        $resourcePath = '/bulk/v1/program/members/import/{batchId}/failures.json';
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
     * Exception handler for getImportProgramMemberStatusUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getImportProgramMemberStatusUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        '\NecLimDul\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse',
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Import Program Member Status
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse
     */
    public function getImportProgramMemberStatusUsingGET($batch_id)
    {
        list($response) = $this->getImportProgramMemberStatusUsingGETWithHttpInfo($batch_id);
        return $response;
    }

    /**
     * Get Import Program Member Status
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getImportProgramMemberStatusUsingGETWithHttpInfo($batch_id)
    {
        $request = $this->getImportProgramMemberStatusUsingGETRequest($batch_id);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse');
        } catch (ApiException $e) {
            throw $this->getImportProgramMemberStatusUsingGETHandleException($e);
        }
    }

    /**
     * Get Import Program Member Status
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportProgramMemberStatusUsingGETAsync($batch_id)
    {
        return $this->getImportProgramMemberStatusUsingGETAsyncWithHttpInfo($batch_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Get Import Program Member Status
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportProgramMemberStatusUsingGETAsyncWithHttpInfo($batch_id)
    {
        $request = $this->getImportProgramMemberStatusUsingGETRequest($batch_id);
        return $this->makeAsyncRequest($request, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse', [$this, 'getImportProgramMemberStatusUsingGETHandleException']);
    }

    /**
     * Create request for operation 'getImportProgramMemberStatusUsingGET'
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getImportProgramMemberStatusUsingGETRequest($batch_id)
    {
        // Verify the required parameter 'batch_id' is set.
        if (!isset($batch_id)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $batch_id when calling getImportProgramMemberStatusUsingGET'
            );
        }

        $resourcePath = '/bulk/v1/program/members/import/{batchId}/status.json';
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
     * Exception handler for getImportProgramMemberWarningsUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getImportProgramMemberWarningsUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        '\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent',
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Import Program Member Warnings
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent
     */
    public function getImportProgramMemberWarningsUsingGET($batch_id)
    {
        list($response) = $this->getImportProgramMemberWarningsUsingGETWithHttpInfo($batch_id);
        return $response;
    }

    /**
     * Get Import Program Member Warnings
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent, HTTP status code, HTTP response headers (array of strings)
     */
    public function getImportProgramMemberWarningsUsingGETWithHttpInfo($batch_id)
    {
        $request = $this->getImportProgramMemberWarningsUsingGETRequest($batch_id);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent');
        } catch (ApiException $e) {
            throw $this->getImportProgramMemberWarningsUsingGETHandleException($e);
        }
    }

    /**
     * Get Import Program Member Warnings
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportProgramMemberWarningsUsingGETAsync($batch_id)
    {
        return $this->getImportProgramMemberWarningsUsingGETAsyncWithHttpInfo($batch_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Get Import Program Member Warnings
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getImportProgramMemberWarningsUsingGETAsyncWithHttpInfo($batch_id)
    {
        $request = $this->getImportProgramMemberWarningsUsingGETRequest($batch_id);
        return $this->makeAsyncRequest($request, '\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent', [$this, 'getImportProgramMemberWarningsUsingGETHandleException']);
    }

    /**
     * Create request for operation 'getImportProgramMemberWarningsUsingGET'
     *
     * @param  int $batch_id Id of the import batch job. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getImportProgramMemberWarningsUsingGETRequest($batch_id)
    {
        // Verify the required parameter 'batch_id' is set.
        if (!isset($batch_id)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $batch_id when calling getImportProgramMemberWarningsUsingGET'
            );
        }

        $resourcePath = '/bulk/v1/program/members/import/{batchId}/warnings.json';
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
     * Exception handler for importProgramMemberUsingPOST.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function importProgramMemberUsingPOSTHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        '\NecLimDul\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse',
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Import Program Members
     *
     * @param  string $program_id Id of the program to add members to. (required)
     * @param  string $program_member_status Program member status for members being added. (required)
     * @param  string $format Import file format. (required)
     * @param  \SplFileObject $file File containing the data records to import. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse
     */
    public function importProgramMemberUsingPOST($program_id, $program_member_status, $format, $file)
    {
        list($response) = $this->importProgramMemberUsingPOSTWithHttpInfo($program_id, $program_member_status, $format, $file);
        return $response;
    }

    /**
     * Import Program Members
     *
     * @param  string $program_id Id of the program to add members to. (required)
     * @param  string $program_member_status Program member status for members being added. (required)
     * @param  string $format Import file format. (required)
     * @param  \SplFileObject $file File containing the data records to import. (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function importProgramMemberUsingPOSTWithHttpInfo($program_id, $program_member_status, $format, $file)
    {
        $request = $this->importProgramMemberUsingPOSTRequest($program_id, $program_member_status, $format, $file);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn($response, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse');
        } catch (ApiException $e) {
            throw $this->importProgramMemberUsingPOSTHandleException($e);
        }
    }

    /**
     * Import Program Members
     *
     * @param  string $program_id Id of the program to add members to. (required)
     * @param  string $program_member_status Program member status for members being added. (required)
     * @param  string $format Import file format. (required)
     * @param  \SplFileObject $file File containing the data records to import. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importProgramMemberUsingPOSTAsync($program_id, $program_member_status, $format, $file)
    {
        return $this->importProgramMemberUsingPOSTAsyncWithHttpInfo($program_id, $program_member_status, $format, $file)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Import Program Members
     *
     * @param  string $program_id Id of the program to add members to. (required)
     * @param  string $program_member_status Program member status for members being added. (required)
     * @param  string $format Import file format. (required)
     * @param  \SplFileObject $file File containing the data records to import. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function importProgramMemberUsingPOSTAsyncWithHttpInfo($program_id, $program_member_status, $format, $file)
    {
        $request = $this->importProgramMemberUsingPOSTRequest($program_id, $program_member_status, $format, $file);
        return $this->makeAsyncRequest($request, '\NecLimDul\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse', [$this, 'importProgramMemberUsingPOSTHandleException']);
    }

    /**
     * Create request for operation 'importProgramMemberUsingPOST'
     *
     * @param  string $program_id Id of the program to add members to. (required)
     * @param  string $program_member_status Program member status for members being added. (required)
     * @param  string $format Import file format. (required)
     * @param  \SplFileObject $file File containing the data records to import. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function importProgramMemberUsingPOSTRequest($program_id, $program_member_status, $format, $file)
    {
        // Verify the required parameter 'program_id' is set.
        if (!isset($program_id)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $program_id when calling importProgramMemberUsingPOST'
            );
        }
        // Verify the required parameter 'program_member_status' is set.
        if (!isset($program_member_status)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $program_member_status when calling importProgramMemberUsingPOST'
            );
        }
        // Verify the required parameter 'format' is set.
        if (!isset($format)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $format when calling importProgramMemberUsingPOST'
            );
        }
        // Verify the required parameter 'file' is set.
        if (!isset($file)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $file when calling importProgramMemberUsingPOST'
            );
        }

        $resourcePath = '/bulk/v1/program/{programId}/members/import.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        if (is_array($program_member_status)) {
            $program_member_status = ObjectSerializer::serializeCollection($program_member_status, '', true);
        }
        $queryParams['programMemberStatus'] = $program_member_status;
        if (is_array($format)) {
            $format = ObjectSerializer::serializeCollection($format, '', true);
        }
        $queryParams['format'] = $format;
        // Remove any null (optional values).
        $queryParams = array_filter($queryParams, function($v) { return $v !== null; });

        // Path parameters.
        $resourcePath = str_replace(
            '{' . 'programId' . '}',
            ObjectSerializer::toPathValue($program_id),
            $resourcePath
        );

        // Form parameters.
        /** @var string[][] $formParams */
        $formParams = [];
        $multipart = false;
        $multipart = true;
        $formParams['file'] = [];
        $paramFiles = is_array($file) ? $file : [$file];
        foreach ($paramFiles as $paramFile) {
            $formParams['file'][] = \GuzzleHttp\Psr7\Utils::tryFopen(
                ObjectSerializer::toFormValue($paramFile),
                'rb'
            );
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
