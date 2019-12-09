<?php

$rootDir = __DIR__ . '/../../../';
$srcDir = "$rootDir/src";
$ranslationDir = "$rootDir/translations";
$vendorDir = "$rootDir/vendor";

opcache_compile_file("$rootDir/public/index.php");

opcache_compile_file("$srcDir/ArrayEncoder/CommentArrayEncoder.php");
opcache_compile_file("$srcDir/ArrayEncoder/CommentTypeArrayEncoder.php");
opcache_compile_file("$srcDir/ArrayEncoder/UserArrayEncoder.php");

opcache_compile_file("$srcDir/Translation/TranslationService.php");

opcache_compile_file("$ranslationDir/phpbenchmarks.en.php");
opcache_compile_file("$ranslationDir/phpbenchmarks.en_GB.php");
opcache_compile_file("$ranslationDir/phpbenchmarks.fr_FR.php");

opcache_compile_file("$vendorDir/autoload.php");

opcache_compile_file("$vendorDir/composer/autoload_real.php");
opcache_compile_file("$vendorDir/composer/autoload_static.php");
opcache_compile_file("$vendorDir/composer/ClassLoader.php");

opcache_compile_file("$vendorDir/phpbenchmarks/benchmark-rest-data/Comment.php");
opcache_compile_file("$vendorDir/phpbenchmarks/benchmark-rest-data/CommentType.php");
opcache_compile_file("$vendorDir/phpbenchmarks/benchmark-rest-data/Service.php");
opcache_compile_file("$vendorDir/phpbenchmarks/benchmark-rest-data/User.php");
