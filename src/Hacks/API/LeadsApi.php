<?php

namespace NecLimDul\MarketoRest\Hacks\API;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Psr7\Request;
use NecLimDul\MarketoRest\Lead\Api\LeadsApi as LeadsLeadsApi;
use NecLimDul\MarketoRest\Lead\ApiException;
use NecLimDul\MarketoRest\Lead\Model\SubmitFormRequest;
use NecLimDul\MarketoRest\Lead\ObjectSerializer;
use Psr\Http\Message\ResponseInterface;

class LeadsApi extends LeadsLeadsApi
{
    /**
     * {@inheritDoc}
     */
    public function submitFormUsingPOSTWithHttpInfo(
        SubmitFormRequest $submit_form_request
    ): array {
        $request = $this->submitFormUsingPOSTRequest($submit_form_request);
        try {
            $response = $this->makeRequest($request);
        } catch (ApiException $e) {
            throw $this->submitFormUsingPOSTHandleException($e);
        }
        switch ($response->getStatusCode()) {
            case 200:
                /** @psalm-suppress LessSpecificReturnStatement */
                return $this->responseToReturn(
                    $response,
                    \NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm::class
                );
            default:
                /** @psalm-suppress LessSpecificReturnStatement */
                return $this->responseToReturn(
                    $response,
                    \NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm::class
                );
        }
    }

    /**
     * {@inheritDoc}
     */
    public function submitFormUsingPOSTAsyncWithHttpInfo(
        SubmitFormRequest $submit_form_request
    ): PromiseInterface {
        $request = $this->submitFormUsingPOSTRequest($submit_form_request);
        return $this->makeAsyncRequest(
            $request,
            [$this, 'submitFormUsingPOSTHandleException']
        )->then(
            function ($r) {
                if ($r instanceof ResponseInterface && $r->getStatusCode() == 200) {
                    $r = $this->responseToReturn(
                        $r,
                        \NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm::class
                    );
                }
                return $r;
            }
        )->then(
            function ($r) {
                if ($r instanceof ResponseInterface) {
                    $r = $this->responseToReturn(
                        $r,
                        \NecLimDul\MarketoRest\Hacks\Model\ResponseOfSubmitForm::class
                    );
                }
                return $r;
            }
        );
    }
}
