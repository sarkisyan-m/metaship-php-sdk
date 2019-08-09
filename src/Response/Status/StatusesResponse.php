<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Status;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Status\Status;

/**
 * Class StatusesResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Status
 */
class StatusesResponse
{
    /**
     * @Serializer\Inline
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Status\Status>")
     * @var Status[]
     */
    public $statuses;
}