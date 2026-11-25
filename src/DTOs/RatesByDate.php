<?php

declare(strict_types=1);

namespace FrankfurterSDK\DTOs;

/** @extends \Dmorenof\SdkRuntime\Map<\FrankfurterSDK\DTOs\Rates> */
final class RatesByDate extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = '\\FrankfurterSDK\\DTOs\\Rates';
    protected const bool VALUE_NULLABLE = false;
    protected const array MAP_VALIDATION = [
        'minProperties' => 1,
        'jsonSchema' => '{"propertyNames":{"type":"string","format":"date"}}',
    ];
}
