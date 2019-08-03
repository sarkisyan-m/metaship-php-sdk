<?php

namespace MetaShipRU\MetaShipPHPSDK\Request;

/**
 * Trait RequestCore
 * @package MetaShipRU\MetaShipPHPSDK\Request
 */
trait RequestCore
{
    public function getMethod(): string
    {
        return static::METHOD;
    }

    public function getPath(): string
    {
        return static::PATH;
    }
}