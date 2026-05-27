<?php

declare(strict_types=1);

namespace NecLimDul\MarketoRest\Cache;

use League\OAuth2\Client\Provider\AbstractProvider as OAuth2Provider;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Softonic\OAuth2\Guzzle\Middleware\AccessTokenCacheHandler;

/**
 * RetryOnAuthorizationError
 */
readonly class MarketoRetryOnAuthorizationError
{
    public function __construct(
        private OAuth2Provider $provider,
        private array $config,
        private AccessTokenCacheHandler $cacheHandler,
    ) {
    }

    public function __invoke(
        int $retries,
        RequestInterface $request,
        ?ResponseInterface $response = null,
        ?\Exception $exception = null
    ): bool {
        if ($this->isUnauthorizedResponse($retries, $response)) {
            $this->cacheHandler->deleteItemByProvider(
                $this->provider,
                $this->config,
            );
            return true;
        }
        return false;
    }

    private function isUnauthorizedResponse(
        int $retries,
        ?ResponseInterface $response = null
    ): bool {
        return !empty($response) && $retries < 1 && $this->isFailure($response);
    }

    private function isFailure(ResponseInterface $response): bool
    {
        if ($response->getStatusCode() === 401) {
            return true;
        }
        // Handle Marketo's weird success failures...
        $response_data = json_decode((string) $response->getBody());
        if (isset($response_data->errors)) {
            foreach ($response_data->errors as $error) {
                if (str_contains($error->message, 'Access token invalid')) {
                    return true;
                }
            }
        }
        return false;
    }
}
