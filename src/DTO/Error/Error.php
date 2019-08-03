<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\Error;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Error
 * @package MetaShipRU\MetaShipPHPSDK\DTO\Error
 */
class Error
{
    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $message;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $code;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $property;
}