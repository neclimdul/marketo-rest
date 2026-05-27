<?php

declare(strict_types=1);

namespace NecLimDul\MarketoRest;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use NecLimDul\MarketoRest\Cache\MarketoRetryOnAuthorizationError;
use NecLimDul\MarketoRest\Cache\StaticCachePool;
use NecLimDul\OAuth2\Client\Provider\Marketo;
use Psr\Cache\CacheItemPoolInterface;
use Softonic\OAuth2\Guzzle\Middleware\AccessTokenCacheHandler;
use Softonic\OAuth2\Guzzle\Middleware\AddAuthorizationHeader;

final readonly class ClientFactory
{
    /**
     * Create a basic guzzle client.
     *
     * @param \NecLimDul\MarketoRest\Configuration $config
     *   Some config.
     * @param array<string, mixed> $guzzleOptions
     *   Additional options to pass to guzzle.
     * @return \GuzzleHttp\Client
     *   A configured guzzle client.
     */
    public static function create(Configuration $config, array $guzzleOptions = []): GuzzleHttpClient
    {
        $guzzleOptions += [
            'base_uri' => $config->getBaseUrl(),
        ];
        return new GuzzleHttpClient($guzzleOptions);
    }

    /**
     * Create a Guzzle client with OAuth middleware setup.
     *
     * @param \NecLimDul\MarketoRest\Configuration $config
     *   Some config.
     * @param \Psr\Cache\CacheItemPoolInterface|null $cache
     *   An optional cache interface.
     * @return \GuzzleHttp\Client
     *   A configured guzzle client.
     */
    public static function createOauthClient(Configuration $config, ?CacheItemPoolInterface $cache = null, ?callable $handler = null): GuzzleHttpClient
    {
        $handler ??= new CurlHandler();
        $stack = HandlerStack::create($handler);

        $oauthProvider = new Marketo([
            'clientId' => $config->getClientId(),
            'clientSecret' => $config->getClientSecret(),
            'baseUrl' => $config->getBaseUrl(),
        ], [
            'httpClient' => self::create($config, [
                'handler' => clone $stack,
            ]),
        ]);

        $tokenOptions = [
            'grant_type' => 'client_credentials',
        ];
        if (!isset($cache)) {
            $cache = new StaticCachePool();
        }
        $cacheHandler = new AccessTokenCacheHandler($cache);

        // Order reversed from \Softonic\OAuth2\Guzzle\Middleware\ClientBuilder
        // because we need the header request to be made on retry request as
        // well. Review test for assertion of the behavior.
        // @see https://github.com/softonic/guzzle-oauth2-middleware/issues/24
        $stack->push(Middleware::retry(new MarketoRetryOnAuthorizationError(
            $oauthProvider,
            $tokenOptions,
            $cacheHandler
        )));
        $stack->push(Middleware::mapRequest(new AddAuthorizationHeader(
            $oauthProvider,
            $tokenOptions,
            $cacheHandler
        )));

        return self::create($config, [
            'handler' => $stack,
        ]);
    }
}
