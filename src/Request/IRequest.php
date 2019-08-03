<?php

namespace MetaShipRU\MetaShipPHPSDK\Request;

/**
 * Class IRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request
 */
interface IRequest
{
    public function getMethod(): string;

    public function getPath(): string;
}