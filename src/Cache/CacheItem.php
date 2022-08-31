<?php

namespace NecLimDul\MarketoRest\Cache;

use Psr\Cache\CacheItemInterface;

class CacheItem implements CacheItemInterface
{
    /**
     * @var string
     */
    protected string $key;
    /**
     * @var mixed|null
     */
    protected mixed $value;
    /**
     * @var bool
     */
    protected bool $isHit;

    /**
     * @param string $key
     * @param mixed|null $value
     * @param bool $isHit
     */
    public function __construct(string $key, mixed $value = null, bool $isHit = false)
    {
        $this->key = $key;
        $this->value = $value;
        $this->isHit = $isHit;
    }

    /**
     * @inheritDoc
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @inheritDoc
     */
    public function get(): mixed
    {
        return $this->value;
    }

    /**
     * @inheritDoc
     */
    public function isHit(): bool
    {
        return $this->isHit;
    }

    /**
     * @inheritDoc
     */
    public function set($value): static
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function expiresAt($expiration): static
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function expiresAfter($time): static
    {
        return $this;
    }
}
