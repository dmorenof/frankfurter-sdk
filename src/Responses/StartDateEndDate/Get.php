<?php

declare(strict_types=1);

namespace FrankfurterSDK\Responses\StartDateEndDate;

/**
 * RatesDuringPeriod
 */
final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'base',
        'end_date',
        'rates',
        'start_date',
    ];

    protected const array VALIDATION = [
        'amount' => [
            'exclusiveMinimum' => 0,
        ],
    ];

    /**
     * The amount to convert
     */
    public float $amount {
        set {
            $this->assigning('amount', $value);
            $this->amount = $value;
        }
    }
    public \FrankfurterSDK\Enums\Base $base;
    /**
     * Date in YYYY-MM-DD format, all dates stored in UTC.
     * Format: date
     */
    public string $end_date;
    public \FrankfurterSDK\DTOs\RatesByDate $rates;
    /**
     * Date in YYYY-MM-DD format, all dates stored in UTC.
     * Format: date
     */
    public string $start_date;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_float($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'base' => is_string($value) ? $this->base = \FrankfurterSDK\Enums\Base::from($value) : parent::assignMember($name, $value),
            'end_date' => is_string($value) ? $this->end_date = $value : parent::assignMember($name, $value),
            'start_date' => is_string($value) ? $this->start_date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
