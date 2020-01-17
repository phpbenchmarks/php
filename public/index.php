<?php

require __DIR__ . '/../vendor/autoload.php';

use PhpBenchmarks\BenchmarkJsonSerializationHelloWorld\BenchmarkService;

if (BenchmarkService::isWriteToResponseBody()) {
    echo json_encode(BenchmarkService::getDataToSerialize());
} else {
    json_encode(BenchmarkService::getDataToSerialize());
}
