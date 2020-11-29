<?php

$sourceCodePath = __DIR__ . '/../../../';
$files = [
    "$sourceCodePath/public/index.php",
];

foreach ($files as $file) {
    if (is_readable($file) === false) {
        throw new \Exception('File "' . $file . '" is not readable.');
    }

    opcache_compile_file($file);
}
