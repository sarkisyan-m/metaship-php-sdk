<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Photo\Photo;

/**
 * Class PickupPoint
 * @package MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint
 */
class PickupPoint
{
    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $id;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("cityId")
     * @var int
     */
    public $cityId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("serviceNumber")
     * @var string
     */
    public $serviceNumber;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("float")
     * @var float
     */
    public $lat;

    /**
     * @Serializer\Type("float")
     * @var float
     */
    public $lng;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("isOnlyPrepaid")
     * @var bool
     */
    public $isOnlyPrepaid;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("isAcquiringAvailable")
     * @var bool
     */
    public $isAcquiringAvailable;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $city;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $street;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $house;

    /**
     * @Serializer\Type("string")
     * @var string|null
     */
    public $housing;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("postCode")
     * @var int
     */
    public $postCode;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $region;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $comment;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryUniqueName")
     * @var string
     */
    public $deliveryUniqueName;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $type;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("workTimeRaw")
     * @var string
     */
    public $workTimeRaw;

    /**
     * @Serializer\Type("integer")
     * @var int
     */
    public $phone;

    /**
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Photo\Photo>")
     * @var Photo[]
     */
    public $photos;

    /**
     * @Serializer\Type("string")
     * @var string
     */
    public $status;
}