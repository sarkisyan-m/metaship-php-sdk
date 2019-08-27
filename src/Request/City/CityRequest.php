<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\City;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class CityRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\City
 */
class CityRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/cities';

    /**
     * @var string
     */
    public $start;
}
