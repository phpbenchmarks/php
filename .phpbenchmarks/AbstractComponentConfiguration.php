<?php

declare(strict_types=1);

namespace AbstractComponentConfiguration;

abstract class AbstractComponentConfiguration
{
    public static function getComponentType(): int
    {
        return 1;
    }

    public static function getComponentName(): string
    {
        return 'PHP';
    }

    public static function getComponentSlug(): string
    {
        return 'php';
    }

    public static function isPhp56Enabled(): bool
    {
        return false;
    }

    public static function isPhp70Enabled(): bool
    {
        return false;
    }

    public static function isPhp71Enabled(): bool
    {
        return false;
    }

    public static function isPhp72Enabled(): bool
    {
        return false;
    }

    public static function isPhp73Enabled(): bool
    {
        return true;
    }

    public static function getBenchmarkUrl(): string
    {
        return 'index.php';
    }

    public static function getCoreDependencyName(): string
    {
        return 'php';
    }

    public static function getCoreDependencyMajorVersion(): int
    {
        return 7;
    }

    public static function getCoreDependencyMinorVersion(): int
    {
        return 3;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 0;
    }

    public static function getBenchmarkType(): int
    {
        return 7;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'jsonSerialization' => 'https://github.com/phpbenchmarks/php/blob/php_7.3_json-serialization-small-overload/public/index.php#L15',
            'integerSerialization' => 'https://github.com/phpbenchmarks/php/blob/php_7.3_json-serialization-small-overload/public/index.php#L15',
            'floatSerialization' => 'https://github.com/phpbenchmarks/php/blob/php_7.3_json-serialization-small-overload/public/index.php#L15',
            'stringSerialization' => 'https://github.com/phpbenchmarks/php/blob/php_7.3_json-serialization-small-overload/public/index.php#L15',
            'booleanSerialization' => 'https://github.com/phpbenchmarks/php/blob/php_7.3_json-serialization-small-overload/public/index.php#L15',
            'nullSerialization' => 'https://github.com/phpbenchmarks/php/blob/php_7.3_json-serialization-small-overload/public/index.php#L15',
            'arraySerialization' => 'https://github.com/phpbenchmarks/php/blob/php_7.3_json-serialization-small-overload/public/index.php#L15',
            'objectSerialization' => 'https://github.com/phpbenchmarks/php/blob/php_7.3_json-serialization-small-overload/public/index.php#L15'
        ];
    }
}
