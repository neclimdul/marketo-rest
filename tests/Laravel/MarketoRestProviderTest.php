<?php

namespace NecLimDul\MarketoRest\Tests\Laravel;

use Illuminate\Config\Repository;
use Illuminate\Container\Container;
use NecLimDul\MarketoRest\Laravel\MarketoRestProvider;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;

#[CoversClass(MarketoRestProvider::class)]
class MarketoRestProviderTest extends TestCase
{

    use ProphecyTrait;

    protected MarketoRestProvider $provider;

    protected Container $app;

    public function setUp(): void
    {
        parent::setUp();
        $this->app = new Container();
        $this->app->bind('config', fn() => new Repository([
            'marketo_rest.clientId' => '',
            'marketo_rest.clientSecret' => '',
            'marketo_rest.baseUrl' => '',
        ]));
        $this->provider = new MarketoRestProvider($this->app);
    }

    public function testBoot(): void
    {
        $this->markTestIncomplete('Unable to mock application so this fails.');
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
        $this->assertEqualsCanonicalizing($classes, $this->provider->provides());
    }

    /**
     * @legacy-covers ::register
     */
    public function testRegister(): void
    {
        // TODO asserting on a mock like this is really slow but we don't have
        //  a real container from laravel so this is our only option atm.
//        foreach ($this->getServiceClasses() as $class) {
//            $this->app->singleton($class, Argument::any())
//                ->shouldBeCalledOnce();
//        }
        $this->provider->register();
        foreach ($this->getServiceClasses() as $class) {
            $this->assertInstanceOf(
                $class,
                $this->app->get($class),
            );
        }
    }

}
