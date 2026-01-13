<?php

namespace NecLimDul\MarketoRest\Cache;

use Psr\Cache\CacheItemInterface;
use Psr\Cache\CacheItemPoolInterface;

class StaticCachePool implements CacheItemPoolInterface
{
    /**
     * @var \Psr\Cache\CacheItemInterface[]
     */
    private array $deferred = [];
    /**
     * @var \Psr\Cache\CacheItemInterface[]
     */
    private array $cache = [];

    /**
     * @inheritDoc
     */
    public function getItem(string $key): CacheItemInterface
    {
        return $this->getItems([$key])->current();
    }

    /**
     * @inheritDoc
     *
     * @phpstan-return \Generator<\Psr\Cache\CacheItemInterface>
     */
    public function getItems(array $keys = []): \Generator
    {
        if ($this->deferred) {
            $this->commit();
        }
        foreach ($keys as $key) {
            if (isset($this->cache[$key])) {
                yield $this->cache[$key];
            }
            else {
                yield new CacheItem($key);
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function hasItem(string $key): bool
    {
        if (isset($this->deferred[$key])) {
            $this->commit();
        }
        return isset($this->cache[$key]);
    }

    /**
     * @inheritDoc
     */
    public function clear(): bool
    {
        $this->deferred = [];
        $this->cache = [];
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteItem(string $key): bool
    {
        return $this->deleteItems([$key]);
    }

    /**
     * @inheritDoc
     */
    public function deleteItems(array $keys): bool
    {
        foreach ($keys as $key) {
            unset($this->cache[$key]);
            unset($this->deferred[$key]);
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function save(CacheItemInterface $item): bool
    {
        $this->cache[$item->getKey()] = new CacheItem(
            $item->getKey(),
            $item->get(),
            true,
        );
        return $this->commit();
    }

    /**
     * @inheritDoc
     */
    public function saveDeferred(CacheItemInterface $item): bool
    {
        $this->deferred[$item->getKey()] = new CacheItem(
            $item->getKey(),
            $item->get(),
            true,
        );
        return true;
    }

    /**
     * @inheritDoc
     */
    public function commit(): bool
    {
        foreach ($this->deferred as $k => $v) {
            $this->cache[$k] = $v;
        }
        return true;
    }
}
