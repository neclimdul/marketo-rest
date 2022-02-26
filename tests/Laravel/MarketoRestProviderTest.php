<?php

namespace NecLimDul\MarketoRest\Tests\Laravel;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Foundation\CachesConfiguration;
use NecLimDul\MarketoRest\Laravel\MarketoRestProvider;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Prophecy\PhpUnit\ProphecyTrait;

/**
 * @coversDefaultClass \NecLimDul\MarketoRest\Laravel\MarketoRestProvider
 */
class MarketoRestProviderTest extends TestCase
{

    use ProphecyTrait;

    /**
     * @var MarketoRestProvider
     */
    protected $provider;

    /**
     * @var Application|\Prophecy\Prophecy\ObjectProphecy
     */
    protected $app;

    public function setUp(): void
    {
        parent::setUp();
        $this->app = $this->prophesize(Application::class);
        $this->app->willImplement(CachesConfiguration::class);
        $this->app->configurationIsCached()->willReturn(true);
        $this->provider = new MarketoRestProvider($this->app->reveal());
    }

    public function testBoot(): void
    {
        $this->app->basePath()
            ->shouldBeCalledOnce()
            ->willReturn('/some/path');
        $this->provider->boot();
    }

    /**
     * @return string[]
     */
    private function getServiceClasses(): array
    {
        $classes = new \GlobIterator(__DIR__ . '/../../src/*/Api/*');
        $x = [];
        foreach ($classes as $class) {
            $matches = [];
            if ($class instanceof \SplFileInfo) {
                preg_match('#src/(.*)/Api#', $class->getPath(), $matches);
                $x[] = 'NecLimDul\MarketoRest\\'
                  . $matches[1]
                  . '\Api\\'
                  . basename($class->getFilename(), '.php');
            }
        }
        return $x;
    }

    public function testProvides(): void
    {
        $classes = $this->getServiceClasses();
        $this->assertEquals($classes, $this->provider->provides());
    }

    /**
     * @covers ::register
     */
    public function testRegister(): void
    {
        $this->app->get('config')
            ->willReturn([
                'marketo_rest.clientId' => '',
                'marketo_rest.clientSecret' => '',
                'marketo_rest.baseUrl' => '',
            ]);

        // TODO asserting on a mock like this is really slow but we don't have
        //  a real container from laravel so this is our only option atm.
        foreach ($this->getServiceClasses() as $class) {
            $this->app->singleton($class, Argument::any())
                ->shouldBeCalledOnce();
        }
        $this->provider->register();
    }

}
