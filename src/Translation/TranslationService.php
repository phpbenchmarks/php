<?php

declare(strict_types=1);

namespace App\Translation;

class TranslationService
{
    protected static array $translations = [];

    public static function loadTranslations(): void
    {
        $locales = ['fr_FR', 'en_GB', 'aa_BB'];
        $locale = $locales[rand(0, 2)];

        $translationDir = __DIR__ . '/../../translations';
        if (file_exists("$translationDir/phpbenchmarks.$locale.php")) {
            static::$translations = require("$translationDir/phpbenchmarks.$locale.php");
        } else {
            static::$translations = require("$translationDir/phpbenchmarks.en.php");
        }
    }

    public static function getTranslation(string $key): string
    {
        return static::$translations[$key] ?? $key;
    }
}
