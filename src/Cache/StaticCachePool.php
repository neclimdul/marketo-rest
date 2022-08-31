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
        if ($this->deferred) {
            $this->commit();
        }

        if (isset($this->cache[$key])) {
            return $this->cache[$key];
        }

        return new CacheItem($key);
    }

    /**
     * @inheritDoc
     *
     * @phpstan-return array<string, \Psr\Cache\CacheItemInterface>
     */
    public function getItems(array $keys = []): iterable
    {
        if ($this->deferred) {
            $this->commit();
        }
        return $this->cache;
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
        unset($this->cache[$key]);
        unset($this->deferred[$key]);
        return true;
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
        $this->cache[$item->getKey()] = $item;
        return $this->commit();
    }

    /**
     * @inheritDoc
     */
    public function saveDeferred(CacheItemInterface $item): bool
    {
        $this->deferred[$item->getKey()] = $item;
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
