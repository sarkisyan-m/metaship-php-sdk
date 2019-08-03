<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Delivery;

use JMS\Serializer\Annotation\Type;

/**
 * Class DeliveryCost
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Delivery
 */
class DeliveryCost
{
    /**
     * @Type("float")
     * @var float
     */
    public $base;

    /**
     * @Type("float")
     * @var float
     */
    public $service;

    /**
     * @Type("float")
     * @var float
     */
    public $total;
}