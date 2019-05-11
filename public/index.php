<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use PhpBenchmarks\BenchmarkJsonSerializationHelloWorld\BenchmarkService;

if (BenchmarkService::isWriteToResponseBody()) {
    echo json_encode(BenchmarkService::getDataToSerialize());
} else {
    json_encode(BenchmarkService::getDataToSerialize());
}

// require phpbenchmarks stats.php here when needed
