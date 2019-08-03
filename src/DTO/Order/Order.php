<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Order;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Item\Item;
use MetaShipRU\MetaShipPHPSDK\DTO\Recipient\Recipient;

/**
 * Class Order
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Order
 */
class Order
{
    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("trackNumber")
     * @var string
     */
    public $trackNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("shopNumber")
     * @var string
     */
    public $shopNumber;

    /**
     * @Serializer\Type("MetaShipRU\MetaShipPHPSDK\DTO\Recipient\Recipient")
     * @var Recipient
     */
    public $recipient;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Item\Item>")
     * @var Item[]
     */
    public $items;
}