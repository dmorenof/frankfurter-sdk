<?php

declare(strict_types=1);

namespace FrankfurterSDK\DTOs;

final class RatesOnDate extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'base',
        'date',
        'rates',
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
    public string $date;
    public \FrankfurterSDK\DTOs\Rates $rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_float($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'base' => is_string($value) ? $this->base = \FrankfurterSDK\Enums\Base::from($value) : parent::assignMember($name, $value),
            'date' => is_string($value) ? $this->date = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
