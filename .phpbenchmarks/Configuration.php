<?php

declare(strict_types=1);

namespace PhpBenchmarks\BenchmarkConfiguration;

class Configuration
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

    public static function isCompatibleWithPhp(int $major, int $minor): bool
    {
        return $major === 7 && $minor === 4;
    }

    public static function getEntryPointFileName(): string
    {
        return 'public/index.php';
    }

    public static function getBenchmarkUrl(): string
    {
        return '/';
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
        return 4;
    }

    public static function getCoreDependencyPatchVersion(): int
    {
        return 0;
    }

    public static function getBenchmarkType(): int
    {
        return 3;
    }

    public static function getSourceCodeUrls(): array
    {
        return [
            'entryPoint' => 'https://github.com/phpbenchmarks/php/blob/7.5_hello-world/public/index.php',
            'randomizeLanguageDispatchEvent' => 'https://github.com/phpbenchmarks/php/blob/7.5_hello-world/public/index.php',
            'randomizeLanguageEventListener' => 'https://github.com/phpbenchmarks/php/blob/7.5_hello-world/public/index.php',
            'translations' => 'https://github.com/phpbenchmarks/php/blob/7.5_hello-world/public/index.php',
            'translate' => 'https://github.com/phpbenchmarks/php/blob/7.5_hello-world/public/index.php',
            'serialize' => 'https://github.com/phpbenchmarks/php/blob/7.5_hello-world/public/index.php'
        ];
    }
}
