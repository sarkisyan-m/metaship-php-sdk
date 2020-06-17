# MetaShipPHPSDK

## Установка

> Минимальные требования — PHP 7.1+.
```bash
composer require sarkisyan-m/metaship-php-sdk:2.0.5
```

### Использование

```php
require_once '../vendor/autoload.php';

\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

$client = new MetaShipAPIClient('URL','api-key', 'api-secet');
```

### Получение вариантов доставки

```php
use MetaShipRU\MetaShipPHPSDK\Request\Offer\OfferRequest;
use GuzzleHttp\Exception\BadResponseException;
use MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter\ResponseFormatter;
use MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter\ErrorFormatter;
use MetaShipRU\MetaShipPHPSDK\MetaShipAPIClient;

$offersRequest = new OfferRequest();
$offersRequest->cityTo = 'Москва';
$offersRequest->zipTo = 115612;
$offersRequest->paymentSum = 1000;
$offersRequest->weight = 1.2;
$offersRequest->length = 10;
$offersRequest->height = 10;
$offersRequest->width = 10;
$offersRequest->deliveryType = 'courier';

try {
    $response = $client->getOffers($offersRequest);
    $offerResponse = ResponseFormatter::format($response, 'array<MetaShipRU\MetaShipPHPSDK\DTO\Offer\Offer>');
} catch (BadResponseException $exception) {
    $offerResponse = ErrorFormatter::format($exception->getResponse(), 'array<MetaShipRU\MetaShipPHPSDK\DTO\Error\Error>');
}

```

### Создание заказа

```php
use GuzzleHttp\Exception\BadResponseException;
use MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter\ResponseFormatter;
use MetaShipRU\MetaShipPHPSDK\Component\ResponseFormatter\ErrorFormatter;
use MetaShipRU\MetaShipPHPSDK\MetaShipAPIClient;
use MetaShipRU\MetaShipPHPSDK\Request\Address\CreateAddressRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Item\CreateItemRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Order\CreateOrderRequest;
use MetaShipRU\MetaShipPHPSDK\Request\Recipient\CreateRecipientRequest;

$createOrderRequest = new CreateOrderRequest();
$createOrderRequest->deliveryType = 'courier';
$createOrderRequest->width = 10;
$createOrderRequest->height = 10;
$createOrderRequest->weight = 1.2;
$createOrderRequest->length = 10;
$createOrderRequest->paymentSum = 1000;
$createOrderRequest->assessedValue = 1000;
$createOrderRequest->deliveryName = 'Boxberry';
$createOrderRequest->shopNumber = 'Test-order-3';
$createOrderRequest->deliveryCost = 200;
$createOrderRequest->shopServiceCode = 3;
$createOrderRequest->prepaidValue = 0;

$createRecipientRequest = new CreateRecipientRequest();
$createRecipientRequest->email = 'test@test.com';
$createRecipientRequest->firstName = 'Иван';
$createRecipientRequest->middleName = 'Иванович';
$createRecipientRequest->lastName = 'Иванов';
$createRecipientRequest->phone = '7(926)777-77-77';

$createAddressRequest = new CreateAddressRequest();
$createAddressRequest->zip = 115612;
$createAddressRequest->city = 'Москва';
$createAddressRequest->street = 'Тверская';
$createAddressRequest->house = '43';
$createAddressRequest->housing = '3';
$createAddressRequest->apartment = 'кв 14';

$createRecipientRequest->address = $createAddressRequest;
$createOrderRequest->recipient = $createRecipientRequest;

$createItemRequest = new CreateItemRequest();
$createItemRequest->name = 'iPhone 6s';
$createItemRequest->weight = 1;
$createItemRequest->cost = 100;
$createItemRequest->quantity = 1;
$createItemRequest->vatCode = '20';
$createItemRequest->vendorCode = 'W234HH-12';

$createOrderRequest->items = [$createItemRequest];

try {
    $response = $client->createOrder($createOrderRequest);
    $orderResponse = ResponseFormatter::format($response, 'MetaShipRU\MetaShipPHPSDK\DTO\Order\Order');
} catch (BadResponseException $exception) {
    $orderResponse = ErrorFormatter::format($exception->getResponse(), 'array<MetaShipRU\MetaShipPHPSDK\DTO\Error\Error>');
}

```
### Получение заказов
```php
$ordersRequest = new \MetaShipRU\MetaShipPHPSDK\Request\Order\GetOrdersRequest();

try {
    $response = $client->getOrders($ordersRequest);
    $ordersResponse = ResponseFormatter::format($response, 'array<MetaShipRU\MetaShipPHPSDK\DTO\Order\Order>');
} catch (BadResponseException $exception) {
    $orderResponse = ErrorFormatter::format($exception->getResponse(), 'array<MetaShipRU\MetaShipPHPSDK\DTO\Error\Error>');
}
```
### Получение ПВЗ
```php
$getPickupPointsRequest = new GetPickupPointsRequest();
$getPickupPointsRequest->kladrId = 7700000000000;

try {
    $response = $client->getPickupPoints($getPickupPointsRequest);
    $orderResponse = ResponseFormatter::format($response, 'array<MetaShipRU\MetaShipPHPSDK\DTO\PickupPoint\PickupPoint>');
} catch (BadResponseException $exception) {
    $orderResponse = ErrorFormatter::format($exception->getResponse(), 'array<MetaShipRU\MetaShipPHPSDK\DTO\Error\Error>');
}
```

### Создание партии
```php
$createParcelRequest = new CreateParcelRequest();
$createParcelRequest->orderNumbers = [12376];
try {
    $response = $client->createParcel($createParcelRequest);
    $parcelResponse = ResponseFormatter::format(
        $response,
        ParcelsResponse::class
    );
} catch (BadResponseException $exception) {
    $parcelResponse = ResponseFormatter::format(
        $exception->getResponse(),
        ErrorResponse::class
    );
}
```
