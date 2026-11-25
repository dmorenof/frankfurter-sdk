<?php

declare(strict_types=1);

namespace FrankfurterSDK;

final class Currencies extends \FrankfurterSDK\FrankfurterAPISDK
{
    /** GET /currencies [operationId: get.currencies] */
    /**
     * Get available currencies
     *
     * Returns a list of available currencies with their full names
     */
    public static function get(): \FrankfurterSDK\DTOs\Currencies
    {
        return self::client()->resource(\FrankfurterSDK\Resources\Currencies::class)->get();
    }
}
