<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use MetaShipRU\MetaShipPHPSDK\Response\Documents\LabelResponse;
use MetaShipRU\MetaShipPHPSDK\Response\Offer\OfferResponse;
use Psr\Http\Message\ResponseInterface;

/**
 * Class LabelResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class LabelResponseFormatter
{
    public static function format(ResponseInterface $orderResponse): LabelResponse
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize($orderResponse->getBody()->getContents(), LabelResponse::class, 'json');
    }

}