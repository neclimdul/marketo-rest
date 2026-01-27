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
    #[\Override]
    public function getItem(string $key): CacheItemInterface
    {
        return $this->getItems([$key])->current();
    }

    /**
     * @inheritDoc
     *
     * @phpstan-return \Generator<\Psr\Cache\CacheItemInterface>
     */
    #[\Override]
    public function getItems(array $keys = []): \Generator
    {
        if ($this->deferred) {
            $this->commit();
        }
        foreach ($keys as $key) {
            if (isset($this->cache[$key])) {
                yield $this->cache[$key];
            } else {
                yield new CacheItem($key);
            }
        }
    }

    /**
     * @inheritDoc
     */
    #[\Override]
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
    #[\Override]
    public function clear(): bool
    {
        $this->deferred = [];
        $this->cache = [];
        return true;
    }

    /**
     * @inheritDoc
     */
    #[\Override]
    public function deleteItem(string $key): bool
    {
        return $this->deleteItems([$key]);
    }

    /**
     * @inheritDoc
     */
    #[\Override]
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
    #[\Override]
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
    #[\Override]
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
    #[\Override]
    public function commit(): bool
    {
        foreach ($this->deferred as $k => $v) {
            $this->cache[$k] = $v;
        }
        return true;
    }
}
