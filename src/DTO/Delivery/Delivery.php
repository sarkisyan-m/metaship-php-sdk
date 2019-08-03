<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Delivery;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Delivery
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Delivery
 */
class Delivery
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     *
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("uniqueName")
     *
     * @var string
     */
    public $uniqueName;
}