<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ResponseFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class ResponseFormatter
{
    public static function format(ResponseInterface $orderResponse, $type)
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize(
            $orderResponse->getBody()->getContents(),
            $type,
            'json'
        );
    }

}
