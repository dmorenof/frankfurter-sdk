<?php

declare(strict_types=1);

namespace FrankfurterSDK\Responses\Errors;

final class Status404Response extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Example: "not found"
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
