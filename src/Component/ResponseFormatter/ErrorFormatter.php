<?php

namespace MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter;

use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ErrorFormatter
 * @package MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter
 */
class ErrorFormatter
{
    public static function format(ResponseInterface $orderResponse, $type)
    {
        $data = json_decode($orderResponse->getBody()->getContents(), true);
        $data = $data['errors'];
        $data = json_encode($data);

        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize(
            $data,
            $type,
            'json'
        );
    }
}
