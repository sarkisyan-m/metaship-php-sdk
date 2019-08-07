<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Documents;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetAcceptanceRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Documents
 */
class GetAcceptanceRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/parcels';

    /**
     * @var int
     */
    public $id;
}