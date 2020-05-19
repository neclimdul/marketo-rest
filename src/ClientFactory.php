<?php

namespace NecLimDul\MarketoRest;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use NecLimDul\MarketoRest\Cache\StaticCachePool;
use NecLimDul\OAuth2\Client\Provider\Marketo;
use Psr\SimpleCache\CacheInterface;
use Softonic\OAuth2\Guzzle\Middleware\AccessTokenCacheHandler;
use Softonic\OAuth2\Guzzle\Middleware\AddAuthorizationHeader;
use Softonic\OAuth2\Guzzle\Middleware\RetryOnAuthorizationError;

class ClientFactory
{
    /**
     * Create a guzzle client with OAuth middleware setup.
     *
     * @param array $config
     *   Some config.
     * @param array $guzzleOptions
     *   Additional options to pass to guzzle.
     * @return \GuzzleHttp\Client
     *   A configured guzzle client.
     */
    public static function create(array $config, array $guzzleOptions = [])
    {
        $guzzleOptions += [
            'base_uri' => $config['baseUrl'],
        ];
        return new GuzzleHttpClient($guzzleOptions);
    }

    /**
     * Create a guzzle client with OAuth middleware setup.
     *
     * @param array $config
     *   Some config.
     * @param \Psr\SimpleCache\CacheInterface|null $cache
     *   An optional cache interface.
     * @return \GuzzleHttp\Client
     *   A configured guzzle client.
     */
    public static function createOauthClient(array $config, CacheInterface $cache = NULL)
    {
        $oauthProvider = new Marketo([
            'clientId' => $config['clientId'],
            'clientSecret' => $config['clientSecret'],
            'baseUrl' => $config['baseUrl'],
        ]);

        $tokenOptions = [
            'grant_type' => 'client_credentials',
        ];
        if (!isset($cache)) {
            $cache = new StaticCachePool();
        }
        $cacheHandler = new AccessTokenCacheHandler($cache);

        $stack = HandlerStack::create();
        $stack->setHandler(new MockHandler());
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
