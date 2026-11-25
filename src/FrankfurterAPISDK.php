<?php

declare(strict_types=1);

namespace FrankfurterSDK;

abstract class FrankfurterAPISDK
{
    public static function configure(Configuration $configuration): void
    {
        Client::configure($configuration);
    }

    protected static function client(): Client
    {
        return Client::current();
    }
}
