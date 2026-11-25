<?php

declare(strict_types=1);

namespace FrankfurterSDK;

final class Latest extends \FrankfurterSDK\FrankfurterAPISDK
{
    /** GET /latest [operationId: get.latest] */
    /**
     * Get the latest rates
     *
     * Returns the last working day's rates
     */
    public static function get(?\FrankfurterSDK\GetParams\Latest $params = null): \FrankfurterSDK\DTOs\RatesOnDate
    {
        return self::client()->resource(\FrankfurterSDK\Resources\Latest::class)->get($params);
    }
}
