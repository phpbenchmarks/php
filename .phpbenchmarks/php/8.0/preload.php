<?php

$sourceCodePath = __DIR__ . '/../../../';
$files = [
    "$sourceCodePath/public/index.php",
    "$sourceCodePath/src/ObjectToSerialize/JsonSerializableToSerialize.php",
    "$sourceCodePath/src/ObjectToSerializeFactory/JsonSerializableFactory.php",
    "$sourceCodePath/vendor/autoload.php",
    "$sourceCodePath/vendor/composer/ClassLoader.php",
    "$sourceCodePath/vendor/phpbenchmarks/benchmark-json-serialization-big-overload/src/BenchmarkService.php",
    "$sourceCodePath/vendor/phpbenchmarks/benchmark-json-serialization-big-overload/src/ObjectToSerialize/ObjectToSerialize.php",
    "$sourceCodePath/vendor/phpbenchmarks/benchmark-json-serialization-big-overload/src/ObjectToSerialize/ObjectToSerializeInterface.php",
    "$sourceCodePath/vendor/phpbenchmarks/benchmark-json-serialization-big-overload/src/ObjectToSerializeFactory/ObjectToSerializeFactoryInterface.php",
];

foreach ($files as $file) {
    if (is_readable($file) === false) {
        throw new \Exception('File "' . $file . '" is not readable.');
    }

    opcache_compile_file($file);
}
