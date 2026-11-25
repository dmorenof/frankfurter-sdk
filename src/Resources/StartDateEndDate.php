<?php

declare(strict_types=1);

namespace FrankfurterSDK\Resources;

final class StartDateEndDate extends \FrankfurterSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/{start_date}..{end_date}',
        'errors' => [
            404 => '\\FrankfurterSDK\\Responses\\Errors\\Status404Response',
        ],
        'errorResponses' => [
            404 => [
                'type' => '\\FrankfurterSDK\\Responses\\Errors\\Status404Response',
                'schemaNullable' => false,
            ],
        ],
        'responseType' => '\\FrankfurterSDK\\Responses\\StartDateEndDate\\Get',
        'querySerialization' => [
            'symbols' => 'csv',
        ],
    ];

    /**
     * Get rates for a time period
     *
     * Returns historical rates for every day within a time period. The end date defaults to today if not provided.
     */
    public function get(\FrankfurterSDK\PathParams\StartDateEndDate $identifier, ?\FrankfurterSDK\GetParams\StartDateEndDate $params = null): \FrankfurterSDK\Responses\StartDateEndDate\Get
    {
        /** @var \FrankfurterSDK\Responses\StartDateEndDate\Get $result */
        $result = $this->executeArguments(self::operation(self::GET), path: $identifier, parameters: $params);
        return $result;
    }
}
