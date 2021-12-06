<?php

$sourceCodePath = __DIR__ . '/../../../';
$files = [
    "$sourceCodePath/public/index.php",
    "$sourceCodePath/src/Translation/TranslationService.php",
    "$sourceCodePath/translations/phpbenchmarks.en.php",
    "$sourceCodePath/translations/phpbenchmarks.en_GB.php",
    "$sourceCodePath/vendor/autoload.php",
    "$sourceCodePath/vendor/composer/ClassLoader.php",
    "$sourceCodePath/vendor/phpbenchmarks/benchmark-rest-data/Comment.php",
    "$sourceCodePath/vendor/phpbenchmarks/benchmark-rest-data/CommentType.php",
    "$sourceCodePath/vendor/phpbenchmarks/benchmark-rest-data/Service.php",
    "$sourceCodePath/vendor/phpbenchmarks/benchmark-rest-data/User.php",
];

foreach ($files as $file) {
    if (is_readable($file) === false) {
        throw new \Exception('File "' . $file . '" is not readable.');
    }

    opcache_compile_file($file);
}
