<?php

declare(strict_types=1);

namespace FrankfurterSDK\GetParams\RootResource;

final class ByDate extends \Dmorenof\SdkRuntime\DTO
{
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'base' => 'base',
            'symbols' => 'symbols',
        ],
        'header' => [],
    ];

    protected const array VALIDATION = [
        'symbols' => [
            'minItems' => 1,
            'items' => [
                'type' => 'string',
                'rules' => [
                    'enum' => [
                        'AUD',
                        'BGN',
                        'BRL',
                        'CAD',
                        'CHF',
                        'CNY',
                        'CZK',
                        'DKK',
                        'EUR',
                        'GBP',
                        'HKD',
                        'HUF',
                        'IDR',
                        'ILS',
                        'INR',
                        'ISK',
                        'JPY',
                        'KRW',
                        'MXN',
                        'MYR',
                        'NOK',
                        'NZD',
                        'PHP',
                        'PLN',
                        'RON',
                        'SEK',
                        'SGD',
                        'THB',
                        'TRY',
                        'USD',
                        'ZAR',
                    ],
                ],
            ],
        ],
    ];

    public ?\FrankfurterSDK\Enums\Base $base;
    /** @var list<string>|null */
    public ?array $symbols;
}
