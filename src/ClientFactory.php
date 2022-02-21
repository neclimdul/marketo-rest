<?php

namespace NecLimDul\MarketoRest;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use NecLimDul\MarketoRest\Cache\StaticCachePool;
use NecLimDul\OAuth2\Client\Provider\Marketo;
use Psr\Cache\CacheItemPoolInterface;
use Softonic\OAuth2\Guzzle\Middleware\AccessTokenCacheHandler;
use Softonic\OAuth2\Guzzle\Middleware\AddAuthorizationHeader;
use Softonic\OAuth2\Guzzle\Middleware\RetryOnAuthorizationError;

class ClientFactory
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
    public static function create(Configuration $config, array $guzzleOptions = [])
    {
        $guzzleOptions += [
            'base_uri' => $config->getBaseUrl(),
        ];
        return new GuzzleHttpClient($guzzleOptions);
    }

    /**
     * Create a guzzle client with OAuth middleware setup.
     *
     * @param \NecLimDul\MarketoRest\Configuration $config
     *   Some config.
     * @param \Psr\Cache\CacheItemPoolInterface|null $cache
     *   An optional cache interface.
     * @return \GuzzleHttp\Client
     *   A configured guzzle client.
     */
    public static function createOauthClient(Configuration $config, CacheItemPoolInterface $cache = NULL)
    {
        $oauthProvider = new Marketo([
            'clientId' => $config->getClientId(),
            'clientSecret' => $config->getClientSecret(),
            'baseUrl' => $config->getBaseUrl(),
        ]);

        $tokenOptions = [
            'grant_type' => 'client_credentials',
        ];
        if (!isset($cache)) {
            $cache = new StaticCachePool();
        }
        $cacheHandler = new AccessTokenCacheHandler($cache);

        $stack = HandlerStack::create();
        $stack->setHandler(new CurlHandler());
        $stack->push(Middleware::mapRequest(new AddAuthorizationHeader(
            $oauthProvider,
            $tokenOptions,
            $cacheHandler
        )));
        $stack->push(Middleware::retry(new RetryOnAuthorizationError(
            $oauthProvider,
            $tokenOptions,
            $cacheHandler
        )));

        return static::create($config, [
            'handler' => $stack,
        ]);
    }
}
