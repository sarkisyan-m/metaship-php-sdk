<?php

namespace MetaShipRU\MetaShipPHPSDK\Response\Offer;

use JMS\Serializer\Annotation as Serializer;
use MetaShipRU\MetaShipPHPSDK\DTO\Offer\Offer;

/**
 * Class OfferResponse
 * @package MetaShipRU\MetaShipPHPSDK\Response\Offer
 */
class OfferResponse
{
    /**
     * @var Offer[]
     * @Serializer\Inline()
     * @Serializer\Type("array<MetaShipRU\MetaShipPHPSDK\DTO\Offer\Offer>")
     */
    public $offers;
}