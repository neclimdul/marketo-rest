<?php
/**
 * CampaignsApi
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
 * CampaignsApi Class Doc Comment
 *
 * @category Class
 * @package  NecLimDul\MarketoRest\Lead
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignsApi
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
     * Exception handler for getCampaignByIdUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getCampaignByIdUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Campaign By Id
     *
     * @param  int $campaign_id campaignId (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign
     */
    public function getCampaignByIdUsingGET(
        int $campaign_id
    ): \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign
    {
        list($response) = $this->getCampaignByIdUsingGETWithHttpInfo($campaign_id);
        return $response;
    }

    /**
     * Get Campaign By Id
     *
     * @param  int $campaign_id campaignId (required)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign, HTTP status code, HTTP response headers (array of strings)
     * @phpstan-return array{ \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign, int, array<array<string>>}
     */
    public function getCampaignByIdUsingGETWithHttpInfo(
        int $campaign_id
    ): array
    {
        $request = $this->getCampaignByIdUsingGETRequest($campaign_id);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class
            );
        } catch (ApiException $e) {
            throw $this->getCampaignByIdUsingGETHandleException($e);
        }
    }

    /**
     * Get Campaign By Id
     *
     * @param  int $campaign_id campaignId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCampaignByIdUsingGETAsync(
        int $campaign_id
    ): PromiseInterface
    {
        return $this->getCampaignByIdUsingGETAsyncWithHttpInfo($campaign_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Get Campaign By Id
     *
     * @param  int $campaign_id campaignId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCampaignByIdUsingGETAsyncWithHttpInfo(
        int $campaign_id
    ): PromiseInterface
    {
        $request = $this->getCampaignByIdUsingGETRequest($campaign_id);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class,
            [$this, 'getCampaignByIdUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getCampaignByIdUsingGET'
     *
     * @param  int $campaign_id campaignId (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCampaignByIdUsingGETRequest(
        int $campaign_id
    ): Request
    {

        $resourcePath = '/rest/v1/campaigns/{campaignId}.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Path parameters.
        $resourcePath = str_replace(
            '{' . 'campaignId' . '}',
            ObjectSerializer::toPathValue($campaign_id),
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
     * Exception handler for getCampaignsUsingGET.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function getCampaignsUsingGETHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Get Campaigns
     *
     * @param  int[] $id Comma-separated list of campaign ids to return records for (optional)
     * @param  string[] $name Comma-separated list of names to filter on (optional)
     * @param  string[] $program_name Comma-separated list of program names to filter on.  If set, will filter to only campaigns which are children of the designated programs. (optional)
     * @param  string[] $workspace_name Comma-separated list of workspace names to filter on.  If set, will only return campaigns in the given workspaces. (optional)
     * @param  int $batch_size Maximum number of records to return.  Maximum and default is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     * @param  bool $is_triggerable Set to true to return active Campaigns which have a Campaign is Requested trigger and source is Web Service API (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign
     */
    public function getCampaignsUsingGET(
        array $id = null,
        array $name = null,
        array $program_name = null,
        array $workspace_name = null,
        int $batch_size = null,
        string $next_page_token = null,
        bool $is_triggerable = null
    ): \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign
    {
        list($response) = $this->getCampaignsUsingGETWithHttpInfo($id, $name, $program_name, $workspace_name, $batch_size, $next_page_token, $is_triggerable);
        return $response;
    }

    /**
     * Get Campaigns
     *
     * @param  int[] $id Comma-separated list of campaign ids to return records for (optional)
     * @param  string[] $name Comma-separated list of names to filter on (optional)
     * @param  string[] $program_name Comma-separated list of program names to filter on.  If set, will filter to only campaigns which are children of the designated programs. (optional)
     * @param  string[] $workspace_name Comma-separated list of workspace names to filter on.  If set, will only return campaigns in the given workspaces. (optional)
     * @param  int $batch_size Maximum number of records to return.  Maximum and default is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     * @param  bool $is_triggerable Set to true to return active Campaigns which have a Campaign is Requested trigger and source is Web Service API (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign, HTTP status code, HTTP response headers (array of strings)
     * @phpstan-return array{ \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign, int, array<array<string>>}
     */
    public function getCampaignsUsingGETWithHttpInfo(
        array $id = null,
        array $name = null,
        array $program_name = null,
        array $workspace_name = null,
        int $batch_size = null,
        string $next_page_token = null,
        bool $is_triggerable = null
    ): array
    {
        $request = $this->getCampaignsUsingGETRequest($id, $name, $program_name, $workspace_name, $batch_size, $next_page_token, $is_triggerable);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class
            );
        } catch (ApiException $e) {
            throw $this->getCampaignsUsingGETHandleException($e);
        }
    }

    /**
     * Get Campaigns
     *
     * @param  int[] $id Comma-separated list of campaign ids to return records for (optional)
     * @param  string[] $name Comma-separated list of names to filter on (optional)
     * @param  string[] $program_name Comma-separated list of program names to filter on.  If set, will filter to only campaigns which are children of the designated programs. (optional)
     * @param  string[] $workspace_name Comma-separated list of workspace names to filter on.  If set, will only return campaigns in the given workspaces. (optional)
     * @param  int $batch_size Maximum number of records to return.  Maximum and default is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     * @param  bool $is_triggerable Set to true to return active Campaigns which have a Campaign is Requested trigger and source is Web Service API (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCampaignsUsingGETAsync(
        array $id = null,
        array $name = null,
        array $program_name = null,
        array $workspace_name = null,
        int $batch_size = null,
        string $next_page_token = null,
        bool $is_triggerable = null
    ): PromiseInterface
    {
        return $this->getCampaignsUsingGETAsyncWithHttpInfo($id, $name, $program_name, $workspace_name, $batch_size, $next_page_token, $is_triggerable)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Get Campaigns
     *
     * @param  int[] $id Comma-separated list of campaign ids to return records for (optional)
     * @param  string[] $name Comma-separated list of names to filter on (optional)
     * @param  string[] $program_name Comma-separated list of program names to filter on.  If set, will filter to only campaigns which are children of the designated programs. (optional)
     * @param  string[] $workspace_name Comma-separated list of workspace names to filter on.  If set, will only return campaigns in the given workspaces. (optional)
     * @param  int $batch_size Maximum number of records to return.  Maximum and default is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     * @param  bool $is_triggerable Set to true to return active Campaigns which have a Campaign is Requested trigger and source is Web Service API (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCampaignsUsingGETAsyncWithHttpInfo(
        array $id = null,
        array $name = null,
        array $program_name = null,
        array $workspace_name = null,
        int $batch_size = null,
        string $next_page_token = null,
        bool $is_triggerable = null
    ): PromiseInterface
    {
        $request = $this->getCampaignsUsingGETRequest($id, $name, $program_name, $workspace_name, $batch_size, $next_page_token, $is_triggerable);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class,
            [$this, 'getCampaignsUsingGETHandleException']
        );
    }

    /**
     * Create request for operation 'getCampaignsUsingGET'
     *
     * @param  int[] $id Comma-separated list of campaign ids to return records for (optional)
     * @param  string[] $name Comma-separated list of names to filter on (optional)
     * @param  string[] $program_name Comma-separated list of program names to filter on.  If set, will filter to only campaigns which are children of the designated programs. (optional)
     * @param  string[] $workspace_name Comma-separated list of workspace names to filter on.  If set, will only return campaigns in the given workspaces. (optional)
     * @param  int $batch_size Maximum number of records to return.  Maximum and default is 300. (optional)
     * @param  string $next_page_token A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. (optional)
     * @param  bool $is_triggerable Set to true to return active Campaigns which have a Campaign is Requested trigger and source is Web Service API (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getCampaignsUsingGETRequest(
        array $id = null,
        array $name = null,
        array $program_name = null,
        array $workspace_name = null,
        int $batch_size = null,
        string $next_page_token = null,
        bool $is_triggerable = null
    ): Request
    {

        $resourcePath = '/rest/v1/campaigns.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Query parameters.
        $queryParams['id'] = ObjectSerializer::toQueryValue($id);
        $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        $queryParams['programName'] = ObjectSerializer::toQueryValue($program_name);
        $queryParams['workspaceName'] = ObjectSerializer::toQueryValue($workspace_name);
        $queryParams['batchSize'] = ObjectSerializer::toQueryValue($batch_size);
        $queryParams['nextPageToken'] = ObjectSerializer::toQueryValue($next_page_token);
        $queryParams['isTriggerable'] = ObjectSerializer::toQueryValue($is_triggerable);
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
     * Exception handler for scheduleCampaignUsingPOST.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function scheduleCampaignUsingPOSTHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Schedule Campaign
     *
     * @param  int $campaign_id Id of the batch campaign to schedule. (required)
     * @param  \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest $schedule_campaign_request scheduleCampaignRequest (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign
     */
    public function scheduleCampaignUsingPOST(
        int $campaign_id,
        \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest $schedule_campaign_request = null
    ): \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign
    {
        list($response) = $this->scheduleCampaignUsingPOSTWithHttpInfo($campaign_id, $schedule_campaign_request);
        return $response;
    }

    /**
     * Schedule Campaign
     *
     * @param  int $campaign_id Id of the batch campaign to schedule. (required)
     * @param  \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest $schedule_campaign_request scheduleCampaignRequest (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign, HTTP status code, HTTP response headers (array of strings)
     * @phpstan-return array{ \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign, int, array<array<string>>}
     */
    public function scheduleCampaignUsingPOSTWithHttpInfo(
        int $campaign_id,
        \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest $schedule_campaign_request = null
    ): array
    {
        $request = $this->scheduleCampaignUsingPOSTRequest($campaign_id, $schedule_campaign_request);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class
            );
        } catch (ApiException $e) {
            throw $this->scheduleCampaignUsingPOSTHandleException($e);
        }
    }

    /**
     * Schedule Campaign
     *
     * @param  int $campaign_id Id of the batch campaign to schedule. (required)
     * @param  \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest $schedule_campaign_request scheduleCampaignRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduleCampaignUsingPOSTAsync(
        int $campaign_id,
        \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest $schedule_campaign_request = null
    ): PromiseInterface
    {
        return $this->scheduleCampaignUsingPOSTAsyncWithHttpInfo($campaign_id, $schedule_campaign_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Schedule Campaign
     *
     * @param  int $campaign_id Id of the batch campaign to schedule. (required)
     * @param  \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest $schedule_campaign_request scheduleCampaignRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function scheduleCampaignUsingPOSTAsyncWithHttpInfo(
        int $campaign_id,
        \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest $schedule_campaign_request = null
    ): PromiseInterface
    {
        $request = $this->scheduleCampaignUsingPOSTRequest($campaign_id, $schedule_campaign_request);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class,
            [$this, 'scheduleCampaignUsingPOSTHandleException']
        );
    }

    /**
     * Create request for operation 'scheduleCampaignUsingPOST'
     *
     * @param  int $campaign_id Id of the batch campaign to schedule. (required)
     * @param  \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest $schedule_campaign_request scheduleCampaignRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function scheduleCampaignUsingPOSTRequest(
        int $campaign_id,
        \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest $schedule_campaign_request = null
    ): Request
    {

        $resourcePath = '/rest/v1/campaigns/{campaignId}/schedule.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Path parameters.
        $resourcePath = str_replace(
            '{' . 'campaignId' . '}',
            ObjectSerializer::toPathValue($campaign_id),
            $resourcePath
        );
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        // for model (json/xml)
        if (!empty($schedule_campaign_request)) {
            $httpBody = ObjectSerializer::toBodyValue($schedule_campaign_request, $headers['Content-Type'] === 'application/json');
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
     * Exception handler for triggerCampaignUsingPOST.
     *
     * @param \NecLimDul\MarketoRest\Lead\ApiException $e Unprocessed exception.
     *
     * @return \NecLimDul\MarketoRest\Lead\ApiException Processed exception.
     */
    protected function triggerCampaignUsingPOSTHandleException(ApiException $e)
    {
        switch ($e->getCode()) {
            case 200:
                $e->setResponseObject(
                    $this->deserializeResponseBody(
                        $e->getResponseBody(),
                        \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class,
                        $e->getResponseHeaders()
                    )
                );
                break;
        }
        return $e;
    }

    /**
     * Request Campaign
     *
     * @param  int $campaign_id The id of the campaign to trigger (required)
     * @param  \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest $trigger_campaign_request triggerCampaignRequest (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign
     */
    public function triggerCampaignUsingPOST(
        int $campaign_id,
        \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest $trigger_campaign_request = null
    ): \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign
    {
        list($response) = $this->triggerCampaignUsingPOSTWithHttpInfo($campaign_id, $trigger_campaign_request);
        return $response;
    }

    /**
     * Request Campaign
     *
     * @param  int $campaign_id The id of the campaign to trigger (required)
     * @param  \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest $trigger_campaign_request triggerCampaignRequest (optional)
     *
     * @throws \NecLimDul\MarketoRest\Lead\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign, HTTP status code, HTTP response headers (array of strings)
     * @phpstan-return array{ \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign, int, array<array<string>>}
     */
    public function triggerCampaignUsingPOSTWithHttpInfo(
        int $campaign_id,
        \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest $trigger_campaign_request = null
    ): array
    {
        $request = $this->triggerCampaignUsingPOSTRequest($campaign_id, $trigger_campaign_request);
        try {
            $response = $this->makeRequest($request);
            return $this->responseToReturn(
                $response,
                \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class
            );
        } catch (ApiException $e) {
            throw $this->triggerCampaignUsingPOSTHandleException($e);
        }
    }

    /**
     * Request Campaign
     *
     * @param  int $campaign_id The id of the campaign to trigger (required)
     * @param  \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest $trigger_campaign_request triggerCampaignRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function triggerCampaignUsingPOSTAsync(
        int $campaign_id,
        \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest $trigger_campaign_request = null
    ): PromiseInterface
    {
        return $this->triggerCampaignUsingPOSTAsyncWithHttpInfo($campaign_id, $trigger_campaign_request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Request Campaign
     *
     * @param  int $campaign_id The id of the campaign to trigger (required)
     * @param  \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest $trigger_campaign_request triggerCampaignRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function triggerCampaignUsingPOSTAsyncWithHttpInfo(
        int $campaign_id,
        \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest $trigger_campaign_request = null
    ): PromiseInterface
    {
        $request = $this->triggerCampaignUsingPOSTRequest($campaign_id, $trigger_campaign_request);
        return $this->makeAsyncRequest(
            $request,
            \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign::class,
            [$this, 'triggerCampaignUsingPOSTHandleException']
        );
    }

    /**
     * Create request for operation 'triggerCampaignUsingPOST'
     *
     * @param  int $campaign_id The id of the campaign to trigger (required)
     * @param  \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest $trigger_campaign_request triggerCampaignRequest (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function triggerCampaignUsingPOSTRequest(
        int $campaign_id,
        \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest $trigger_campaign_request = null
    ): Request
    {

        $resourcePath = '/rest/v1/campaigns/{campaignId}/trigger.json';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        // Path parameters.
        $resourcePath = str_replace(
            '{' . 'campaignId' . '}',
            ObjectSerializer::toPathValue($campaign_id),
            $resourcePath
        );
        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        // for model (json/xml)
        if (!empty($trigger_campaign_request)) {
            $httpBody = ObjectSerializer::toBodyValue($trigger_campaign_request, $headers['Content-Type'] === 'application/json');
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
