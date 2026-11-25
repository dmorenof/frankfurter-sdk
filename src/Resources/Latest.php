<?php

declare(strict_types=1);

namespace FrankfurterSDK\Resources;

final class Latest extends \FrankfurterSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/latest',
        'errors' => [
            404 => '\\FrankfurterSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\FrankfurterSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\FrankfurterSDK\\DTOs\\RatesOnDate',
        'querySerialization' => [
            'symbols' => 'csv',
        ],
    ];

    /**
     * Get the latest rates
     *
     * Returns the last working day's rates
     */
    public function get(?\FrankfurterSDK\GetParams\Latest $params = null): \FrankfurterSDK\DTOs\RatesOnDate
    {
        /** @var \FrankfurterSDK\DTOs\RatesOnDate $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }
}
