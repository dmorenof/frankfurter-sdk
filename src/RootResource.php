<?php

declare(strict_types=1);

namespace FrankfurterSDK;

final class RootResource extends \FrankfurterSDK\FrankfurterAPISDK
{
    /** GET /{date} [operationId: get.by.date] */
    /**
     * Get rates for a past date
     *
     * Returns historical rates for the working day closest to the specified date
     */
    public static function getByDate(string $date, ?\FrankfurterSDK\GetParams\RootResource\ByDate $params = null): \FrankfurterSDK\DTOs\RatesOnDate
    {
        return self::client()->resource(\FrankfurterSDK\Resources\RootResource::class)->getByDate($date, $params);
    }
}
