<?php

$sourceCodePath = __DIR__ . '/../../../';
$files = [
    "$sourceCodePath/public/index.php",
    "$sourceCodePath/vendor/autoload.php",
    "$sourceCodePath/vendor/composer/ClassLoader.php",
    "$sourceCodePath/vendor/phpbenchmarks/benchmark-json-serialization-hello-world/src/BenchmarkService.php",
];

foreach ($files as $file) {
    if (is_readable($file) === false) {
        throw new \Exception('File "' . $file . '" is not readable.');
    }

    opcache_compile_file($file);
}
