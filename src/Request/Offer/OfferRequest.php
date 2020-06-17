<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Offer;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\Request\IRequest;
use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;

/**
 * Class OfferRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Offer
 */
class OfferRequest implements IRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/offers';

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cityFrom")
     * @var string
     */
    public $cityFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cityTo")
     * @var string
     */
    public $cityTo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("regionFrom")
     * @var string
     */
    public $regionFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("regionTo")
     * @var string
     */
    public $regionTo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladrIdFrom")
     * @var int
     */
    public $kladrIdFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("kladrIdTo")
     * @var int
     */
    public $kladrIdTo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fiasIdFrom")
     * @var string
     */
    public $fiasIdFrom;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fiasIdTo")
     * @var string
     */
    public $fiasIdTo;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("zipFrom")
     * @var integer
     */
    public $zipFrom;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("zipTo")
     * @var integer
     */
    public $zipTo;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("tariffId")
     * @var string
     */
    public $tariffId;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("weight")
     * @var float
     */
    public $weight;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("width")
     * @var int
     */
    public $width;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("length")
     * @var int
     */
    public $length;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("height")
     * @var int
     */
    public $height;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("itemsSum")
     * @var float
     */
    public $itemsSum;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("paymentSum")
     * @var float
     */
    public $paymentSum;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("assessedValue")
     * @var float
     */
    public $assessedValue;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("pickupPointId")
     * @var int
     */
    public $pickupPointId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryType")
     * @var string
     */
    public $deliveryType;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("fullAddressFrom")
     * @var string
     */
    public $fullAddressFrom;
}