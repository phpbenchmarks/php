<?php

declare(strict_types=1);

namespace Phpbenchmarks\Translation;

class TranslationService
{
    protected static $translations = false;

    public static function loadTranslations()
    {
        $locales = ['fr_FR', 'en_GB', 'aa_BB'];
        $locale = $locales[rand(0, 2)];
        $translationsDir = __DIR__ . '/../../translations';
        if (file_exists($translationsDir . '/phpbenchmarks.' . $locale . '.php')) {
            static::$translations = require($translationsDir . '/phpbenchmarks.' . $locale . '.php');
        } else {
            static::$translations = require($translationsDir . '/phpbenchmarks.en.php');
        }
    }

    public static function getTranslation(string $key): string
    {
        return static::$translations[$key] ?? $key;
    }
}
