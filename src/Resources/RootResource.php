<?php

declare(strict_types=1);

namespace FrankfurterSDK\Resources;

final class RootResource extends \FrankfurterSDK\Client
{
    private const array GET_BY_DATE = [
        'method' => 'GET',
        'path' => '/{date}',
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
     * Get rates for a past date
     *
     * Returns historical rates for the working day closest to the specified date
     */
    public function getByDate(string $date, ?\FrankfurterSDK\GetParams\RootResource\ByDate $params = null): \FrankfurterSDK\DTOs\RatesOnDate
    {
        /** @var \FrankfurterSDK\DTOs\RatesOnDate $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_DATE), path: ['date' => $date], parameters: $params);
        return $result;
    }
}
