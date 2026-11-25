<?php

declare(strict_types=1);

namespace FrankfurterSDK\DTOs;

final class Rates extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'float';
    protected const bool VALUE_NULLABLE = false;
    protected const array VALUE_VALIDATION = [
        'multipleOf' => 1.0E-5,
        'exclusiveMinimum' => 0,
    ];
    protected const array MAP_VALIDATION = [
        'minProperties' => 1,
        'jsonSchema' => '{"propertyNames":{"type":"string","enum":["AUD","BGN","BRL","CAD","CHF","CNY","CZK","DKK","EUR","GBP","HKD","HUF","IDR","ILS","INR","ISK","JPY","KRW","MXN","MYR","NOK","NZD","PHP","PLN","RON","SEK","SGD","THB","TRY","USD","ZAR"]}}',
    ];
}
