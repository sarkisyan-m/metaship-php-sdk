<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Order;

use MetaShipRU\MetaShipPHPSDK\DTO\Order\Order;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrdersResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Order
 */
class OrdersResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Order\Order>")
     * @var Order
     */
    public $orders;
}