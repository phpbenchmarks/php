<?php

declare(strict_types=1);

namespace Php72Benchmark\Translation;

class TranslationService
{
    protected static $translations = false;

    public static function loadTranslations(): void
    {
        $locales = ['fr_FR', 'en_GB', 'aa_BB'];
        $locale = $locales[rand(0, 2)];

        if (file_exists(__DIR__ . '/phpbenchmarks.' . $locale . '.php')) {
            static::$translations = require(__DIR__ . '/phpbenchmarks.' . $locale . '.php');
        } else {
            static::$translations = require(__DIR__ . '/phpbenchmarks.en.php');
        }
    }

    public static function getTranslation(string $key): string
    {
        return static::$translations[$key] ?? $key;
    }
}
