<?php

declare(strict_types=1);

namespace FrankfurterSDK\DTOs;

/** @extends \Dmorenof\SdkRuntime\Map<string> */
final class Currencies extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = 'string';
    protected const bool VALUE_NULLABLE = false;
    protected const array VALUE_VALIDATION = [
        'minLength' => 1,
    ];
    protected const array MAP_VALIDATION = [
        'minProperties' => 1,
        'jsonSchema' => '{"propertyNames":{"type":"string","enum":["AUD","BGN","BRL","CAD","CHF","CNY","CZK","DKK","EUR","GBP","HKD","HUF","IDR","ILS","INR","ISK","JPY","KRW","MXN","MYR","NOK","NZD","PHP","PLN","RON","SEK","SGD","THB","TRY","USD","ZAR"]}}',
    ];
}
