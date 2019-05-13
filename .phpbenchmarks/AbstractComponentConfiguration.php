<?php

namespace AbstractComponentConfiguration;

abstract class AbstractComponentConfiguration
{
    public static function getComponentType()
    {
        return 1;
    }

    public static function getComponentName()
    {
        return 'PHP';
    }

    public static function getComponentSlug()
    {
        return 'php';
    }

    public static function isPhp56Enabled()
    {
        return true;
    }

    public static function isPhp70Enabled()
    {
        return false;
    }

    public static function isPhp71Enabled()
    {
        return false;
    }

    public static function isPhp72Enabled()
    {
        return false;
    }

    public static function isPhp73Enabled()
    {
        return false;
    }

    public static function getBenchmarkUrl()
    {
        return 'index.php';
    }

    public static function getCoreDependencyName()
    {
        return 'php';
    }

    public static function getCoreDependencyMajorVersion()
    {
        return 5;
    }

    public static function getCoreDependencyMinorVersion()
    {
        return 6;
    }

    public static function getCoreDependencyPatchVersion()
    {
        return 35;
    }

    public static function getBenchmarkType()
    {
        return 7;
    }

    public static function getSourceCodeUrls()
    {
        return [];
    }
}
