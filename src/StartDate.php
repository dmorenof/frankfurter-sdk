<?php

declare(strict_types=1);

namespace FrankfurterSDK;

final class StartDate extends \FrankfurterSDK\FrankfurterAPISDK
{
    /** GET /{start_date}.. [operationId: get.{start_date}..] */
    /**
     * Get rates for a time period
     *
     * Returns historical rates for every day within a time period starting from the provided date until today.
     */
    public static function get(string $start_date, ?\FrankfurterSDK\GetParams\StartDate $params = null): \FrankfurterSDK\Responses\StartDate\Get
    {
        return self::client()->resource(\FrankfurterSDK\Resources\StartDate::class)->get($start_date, $params);
    }
}
