<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Order;

use MetaShipRU\MetaShipPHPSDK\DTO\Order\Order;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class OrderResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Order
 */
class OrderResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Order\Order")
     * @var Order
     */
    public $order;
}