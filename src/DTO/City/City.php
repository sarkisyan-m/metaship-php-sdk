<?php

namespace MetaShipRU\MetaShipPHPSDK\DTO\City;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class City
 * @package MetaShipRU\MetaShipPHPSDK\DTO\City
 */
class City
{
    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fullName")
     * @var string
     */
    public $fullName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("region")
     * @var string
     */
    public $region;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("district")
     * @var string
     */
    public $district;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("prefix")
     * @var string
     */
    public $prefix;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("kladrId")
     * @var int
     */
    public $kladrId;
}