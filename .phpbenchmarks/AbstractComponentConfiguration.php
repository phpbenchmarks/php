<?php

namespace AbstractComponentConfiguration;

abstract class AbstractComponentConfiguration
{
    /** @return int */
    public static function getComponentType()
    {
        return 1;
    }

    /** @return string */
    public static function getComponentName()
    {
        return 'PHP';
    }

    /** @return string */
    public static function getComponentSlug()
    {
        return 'php';
    }

    /** @return bool */
    public static function isPhp56Enabled()
    {
        return true;
    }

    /** @return bool */
    public static function isPhp70Enabled()
    {
        return false;
    }

    /** @return bool */
    public static function isPhp71Enabled()
    {
        return false;
    }

    /** @return bool */
    public static function isPhp72Enabled()
    {
        return false;
    }

    /** @return bool */
    public static function isPhp73Enabled()
    {
        return false;
    }

    /** @return string */
    public static function getBenchmarkUrl()
    {
        return 'index.php';
    }

    /** @return string */
    public static function getCoreDependencyName()
    {
        return 'php';
    }

    /** @return int */
    public static function getCoreDependencyMajorVersion()
    {
        return 5;
    }

    /** @return int */
    public static function getCoreDependencyMinorVersion()
    {
        return 6;
    }

    /** @return int */
    public static function getCoreDependencyPatchVersion()
    {
        return 35;
    }

    /** @return int */
    public static function getBenchmarkType()
    {
        return 6;
    }

    /** @return array */
    public static function getSourceCodeUrls()
    {
        return [
            'jsonSerialization' => 'https://github.com/phpbenchmarks/php/blob/php_5.6_json-serialization-hello-world/public/index.php#L10'
        ];
    }
}
