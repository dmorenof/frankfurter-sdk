<?php

declare(strict_types=1);

namespace FrankfurterSDK\Resources;

final class StartDate extends \FrankfurterSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/{start_date}..',
        'errors' => [
            404 => '\\FrankfurterSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\FrankfurterSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\FrankfurterSDK\\Responses\\StartDate\\Get',
        'querySerialization' => [
            'symbols' => 'csv',
        ],
    ];

    /**
     * Get rates for a time period
     *
     * Returns historical rates for every day within a time period starting from the provided date until today.
     */
    public function get(string $start_date, ?\FrankfurterSDK\GetParams\StartDate $params = null): \FrankfurterSDK\Responses\StartDate\Get
    {
        /** @var \FrankfurterSDK\Responses\StartDate\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: ['start_date' => $start_date], parameters: $params);
        return $result;
    }
}
