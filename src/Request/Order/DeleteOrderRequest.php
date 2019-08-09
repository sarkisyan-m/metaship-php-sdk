<?php


namespace MetaShipRU\MetaShipPHPSDK\Request\Order;


use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

class DeleteOrderRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'DELETE';
    const PATH = '/v1/orders';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;
}