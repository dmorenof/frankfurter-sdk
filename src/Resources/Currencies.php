<?php

declare(strict_types=1);

namespace FrankfurterSDK\Resources;

final class Currencies extends \FrankfurterSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/currencies',
        'responseType' => '\\FrankfurterSDK\\DTOs\\Currencies',
    ];

    /**
     * Get available currencies
     *
     * Returns a list of available currencies with their full names
     */
    public function get(): \FrankfurterSDK\DTOs\Currencies
    {
        /** @var \FrankfurterSDK\DTOs\Currencies $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }
}
