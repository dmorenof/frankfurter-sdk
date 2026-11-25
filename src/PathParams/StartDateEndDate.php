<?php

declare(strict_types=1);

namespace FrankfurterSDK\PathParams;

final class StartDateEndDate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'end_date',
        'start_date',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [
            'end_date' => 'end_date',
            'start_date' => 'start_date',
        ],
        'query' => [],
        'header' => [],
    ];

    public string $end_date;
    public string $start_date;
}
