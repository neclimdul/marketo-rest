<?php

namespace NecLimDul\MarketoRest\Tests\Cache;

use NecLimDul\MarketoRest\Cache\StaticCachePool;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(StaticCachePool::class)]
class StaticCachePoolTest extends TestCase
{
    private StaticCachePool $sot;

    public function setUp(): void
    {
        parent::setUp();
        $this->sot = new StaticCachePool();
    }

    public function testBasic(): void {
        $key = 'cache_key';
        $this->assertFalse($this->sot->hasItem($key));
        $item = $this->sot->getItem($key);
        $this->assertEquals(null, $item->get());
        $this->assertFalse($item->isHit());

        $item->set('test value');
        $this->sot->save($item);
        $this->assertTrue($this->sot->hasItem($key));
        $item = $this->sot->getItem($key);
        $this->assertEquals('test value', $item->get());
        $this->assertTrue($item->isHit());

        $this->assertTrue($this->sot->hasItem($key));
        $this->sot->deleteItem($key);
        $this->assertFalse($this->sot->hasItem($key));

        $this->sot->save($item);
        $this->assertTrue($this->sot->hasItem($key));
        $this->sot->clear();
        $this->assertFalse($this->sot->hasItem($key));
    }

    public function testDeferred(): void {
        $key = 'cache_key';
        $this->assertFalse($this->sot->hasItem($key));
        $item = $this->sot->getItem($key);
        $this->assertEquals(null, $item->get());
        $this->assertFalse($item->isHit());

        $item->set('test value');
        $this->sot->saveDeferred($item);
        $this->assertTrue($this->sot->hasItem($key));
        $item = $this->sot->getItem($key);
        $this->assertEquals('test value', $item->get());
        $this->assertTrue($item->isHit());

        $this->assertTrue($this->sot->hasItem($key));
        $this->sot->deleteItem($key);
        $this->assertFalse($this->sot->hasItem($key));

        $this->sot->saveDeferred($item);
        $this->assertTrue($this->sot->hasItem($key));
        $this->sot->clear();
        $this->assertFalse($this->sot->hasItem($key));
    }
}