<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Error;

use MetaShipRU\MetaShipPHPSDK\DTO\Error\Error;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ErrorResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Error
 */
class ErrorResponse
{
    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Error\Error>")
     * @var Error[]
     */
    public $errors;
}