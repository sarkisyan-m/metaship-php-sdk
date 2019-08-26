<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\City;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class CityAutoCompleteRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\City
 */
class CityAutoCompleteRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/autocomplete/cities';

    /**
     * @var string
     */
    public $term;
}
