<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Order;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;


/**
 * Class UpdateOrderRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Order
 */
class UpdateOrderRequest extends CreateOrderRequest
{
    use RequestCore;

    const METHOD = 'PUT';
    const PATH = '/v1/orders';

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;
}