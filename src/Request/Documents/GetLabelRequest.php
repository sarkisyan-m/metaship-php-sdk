<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Documents;

use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class GetLabelRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Documents
 */
class GetLabelRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/orders';

    /**
     * @var int
     */
    public $id;
}