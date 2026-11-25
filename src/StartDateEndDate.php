<?php

declare(strict_types=1);

namespace FrankfurterSDK;

final class StartDateEndDate extends \FrankfurterSDK\FrankfurterAPISDK
{
    /** GET /{start_date}..{end_date} [operationId: get.{start_date}..{end_date}] */
    /**
     * Get rates for a time period
     *
     * Returns historical rates for every day within a time period. The end date defaults to today if not provided.
     */
    public static function get(\FrankfurterSDK\PathParams\StartDateEndDate $identifier, ?\FrankfurterSDK\GetParams\StartDateEndDate $params = null): \FrankfurterSDK\Responses\StartDateEndDate\Get
    {
        return self::client()->resource(\FrankfurterSDK\Resources\StartDateEndDate::class)->get($identifier, $params);
    }
}
