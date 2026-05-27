<?php

namespace NecLimDul\MarketoRest\Tests;

use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use NecLimDul\MarketoRest\ClientFactory;
use NecLimDul\MarketoRest\Configuration;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ClientFactory::class)]
class ClientFactoryTest extends TestCase
{
    private MockHandler $mockHandler;
    private array $history = [];
    private Configuration $config;
    private $handlerStack;

    public function setUp(): void
    {
        parent::setUp();
        $this->config = new Configuration();
        $this->config->setBaseUrl('https://example.com');
        $this->mockHandler = new MockHandler([]);
        $this->handlerStack = HandlerStack::create($this->mockHandler);
        $this->history = [];
        $history = Middleware::history($this->history);
        $this->handlerStack->push($history);
    }

    public function testCreate(): void
    {
        $client = ClientFactory::create($this->config, ['handler' => $this->handlerStack]);
        $this->mockHandler->append(new Response(200, ['X-Foo' => 'Bar'], 'Hello, World'));
        $client->get('/foobar');
        $this->assertCount(1, $this->history);
        $this->assertEquals('example.com', $this->history[0]['request']->getUri()->getHost());
        $this->assertEquals('https', $this->history[0]['request']->getUri()->getScheme());
        $this->assertEquals('/foobar', $this->history[0]['request']->getUri()->getPath());
    }

    public function testCreateOauthClient(): void
    {
        $client = ClientFactory::createOauthClient($this->config, handler: $this->handlerStack);
        $this->mockHandler->append(new Response(200, ['X-Foo' => 'Bar'], json_encode([
            'access_token' => '123',
            'expires_in' => 100,
        ])));
        $this->mockHandler->append(new Response(200, ['X-Foo' => 'Bar'], 'Hello world.'));
        $client->get('/foobar');
        $this->assertCount(2, $this->history);

        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[0]['request'];
        $this->assertEquals('POST', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals('/identity/oauth/token', $request->getUri()->getPath());

        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[1]['request'];
        $this->assertEquals('GET', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals(['Bearer 123'], $request->getHeader('Authorization'));
        $this->assertEquals('/foobar', $request->getUri()->getPath());

        $this->mockHandler->append(new Response(200, ['X-Foo' => 'Bar'], 'hello world'));
        $client->get('/bizbaz');
        $this->assertCount(3, $this->history);
        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[2]['request'];
        $this->assertEquals('GET', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals(['Bearer 123'], $request->getHeader('Authorization'));
        $this->assertEquals('/bizbaz', $request->getUri()->getPath());
    }
    public function testCreateOauthClientRetry(): void
    {
        $client = ClientFactory::createOauthClient($this->config, handler: $this->handlerStack);
        $this->mockHandler->append(new Response(200, ['X-Foo' => 'token1'], json_encode([
            'access_token' => '123',
            'expires_in' => 100,
        ])));
        $this->mockHandler->append(new Response(401, ['X-Foo' => 'request1'], 'Hello world.'));
        $this->mockHandler->append(new Response(200, ['X-Foo' => 'token2'], json_encode([
          'access_token' => '123',
          'expires_in' => 100,
        ])));
        $this->mockHandler->append(new Response(200, ['X-Foo' => 'request2'], 'Hello world.'));
        $client->get('/foobar', ['http_errors' => false]);
        $this->assertCount(4, $this->history);

        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[0]['request'];
        $this->assertEquals('POST', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals('/identity/oauth/token', $request->getUri()->getPath());

        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[1]['request'];
        $this->assertEquals('GET', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals(['Bearer 123'], $request->getHeader('Authorization'));
        $this->assertEquals('/foobar', $request->getUri()->getPath());

        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[2]['request'];
        $this->assertEquals('POST', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals('/identity/oauth/token', $request->getUri()->getPath());

        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[3]['request'];
        $this->assertEquals('GET', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals(['Bearer 123'], $request->getHeader('Authorization'));
        $this->assertEquals('/foobar', $request->getUri()->getPath());
    }
    public function testCreateOauthClientRetrySuccessError(): void
    {
        $client = ClientFactory::createOauthClient($this->config, handler: $this->handlerStack);
        $this->mockHandler->append(new Response(200, ['X-Foo' => 'token1'], json_encode([
            'access_token' => '123',
            'expires_in' => 100,
        ])));
        $this->mockHandler->append(new Response(200, ['X-Foo' => 'request1'], json_encode([
          'errors' => [[
            'message' => 'Access token invalid'
          ]],
        ])));
        $this->mockHandler->append(new Response(200, ['X-Foo' => 'token2'], json_encode([
          'access_token' => '123',
          'expires_in' => 100,
        ])));
        $this->mockHandler->append(new Response(200, ['X-Foo' => 'request2'], 'Hello world.'));
        $client->get('/foobar', ['http_errors' => false]);
        $this->assertCount(4, $this->history);

        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[0]['request'];
        $this->assertEquals('POST', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals('/identity/oauth/token', $request->getUri()->getPath());

        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[1]['request'];
        $this->assertEquals('GET', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals(['Bearer 123'], $request->getHeader('Authorization'));
        $this->assertEquals('/foobar', $request->getUri()->getPath());

        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[2]['request'];
        $this->assertEquals('POST', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals('/identity/oauth/token', $request->getUri()->getPath());

        /** @var \GuzzleHttp\Psr7\Request $request */
        $request = $this->history[3]['request'];
        $this->assertEquals('GET', $request->getMethod());
        $this->assertEquals('example.com', $request->getUri()->getHost());
        $this->assertEquals('https', $request->getUri()->getScheme());
        $this->assertEquals(['Bearer 123'], $request->getHeader('Authorization'));
        $this->assertEquals('/foobar', $request->getUri()->getPath());
    }
}
