<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Photo;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Photo
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Photo
 */
class Photo
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $original;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $s;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $m;
}