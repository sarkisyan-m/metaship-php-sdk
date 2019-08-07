<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Parcel;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Parcel\Parcel;

/**
 * Class ParcelsResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Parcel
 */
class ParcelsResponse
{
    /**
     * @Serializer\Type("array")
     * @var array
     */
    public $success;

    /**
     * @Serializer\Type("array")
     * @var array
     */
    public $errors;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Parcel\Parcel>")
     * @var Parcel[]
     */
    public $parcels;
}