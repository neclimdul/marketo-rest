<?php

namespace NecLimDul\MarketoRest\Cache;

use Psr\Cache\CacheItemInterface;

class CacheItem implements CacheItemInterface
{
    /**
     * @var string
     */
    protected $key;
    /**
     * @var mixed|null
     */
    protected $value;
    /**
     * @var bool
     */
    protected $isHit;

    /**
     * @param string $key
     * @param mixed|null $value
     * @param bool $isHit
     */
    public function __construct(string $key, $value = null, bool $isHit = false)
    {
        $this->key = $key;
        $this->value = $value;
        $this->isHit = $isHit;
    }

    /**
     * @inheritDoc
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @inheritDoc
     */
    public function get()
    {
        return $this->value;
    }

    /**
     * @inheritDoc
     */
    public function isHit()
    {
        return $this->isHit;
    }

    /**
     * @inheritDoc
     */
    public function set($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function expiresAt($expiration)
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function expiresAfter($time)
    {
        return $this;
    }
}
