<?php

/**
 * Incomplete idea. The intention was to provide a way of parsing marketo's
 * weird success failure messages into something useful. Got a bit tricky to
 * manage types and the different values so left half done.
 */

namespace NecLimDul\MarketoRest;

use NecLimDul\MarketoRest\Lead\Model\CompanyResponse;
use NecLimDul\MarketoRest\Lead\Model\CustomActivity;
use NecLimDul\MarketoRest\Lead\Model\FormResponse;
use NecLimDul\MarketoRest\Lead\Model\NamedAccount;
use NecLimDul\MarketoRest\Lead\Model\NamedAccountList;
use NecLimDul\MarketoRest\Lead\Model\ProgramMemberDataResponse;
use NecLimDul\MarketoRest\Lead\Model\ProgramMemberDeleteResponse;
use NecLimDul\MarketoRest\Lead\Model\ProgramMemberStatusResponse;
use NecLimDul\MarketoRest\Lead\Model\SalesPerson;
use Neclimdul\OpenapiPhp\Helper\Model\ModelInterface;
use Neclimdul\OpenapiPhp\Helper\Response\ApiResponseInterface;

/**
 * @template ResultType of CompanyResponse|CustomActivity|FormResponse|NamedAccount|NamedAccountList|ProgramMemberDataResponse|ProgramMemberDeleteResponse|ProgramMemberStatusResponse|SalesPerson
 */
class FailedResponse
{
    /**
     * @param ModelInterface $result
     * @param string $message
     * @param array<\NecLimDul\MarketoRest\Lead\Model\Error|\NecLimDul\MarketoRest\Asset\Model\Error> $errors
     */
    public function __construct(
        public readonly ModelInterface $result,
        public readonly string $message = '',
        public readonly array $errors = [],
    ) {
    }

    public static function hasErrors(ApiResponseInterface $response): self|false
    {
        $data = $response->getData();
        if (!$response->isSuccess()) {
            return new self(
                $data,
                'Problem with request.',
                $data->getErrors(),
            );
        }
        /** @var ResultType $result */
        foreach ($data->getResult() as $result) {
            if ($result->getStatus() === 'skipped') {
                if (method_exists($result, 'getErrors')) {
                    // TODO Map?
                    $reasons = $result->getErrors();
                } elseif (method_exists($result, 'getReasons')) {
                    $reasons = $result->getReasons();
                } else {
                    throw new \BadMethodCallException('Missing reason implementation');
                }
                return new self(
                    $result,
                    'Marketo skipped processing ' . $result::class,
                    $reasons,
                );
            }
        }
        return false;
    }
}
