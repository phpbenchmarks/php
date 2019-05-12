<?php

declare(strict_types=1);

use Php73\BenchmarkJsonSerializationSmallOverload\ObjectToSerializeFactory\JsonSerializableFactory;
use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\BenchmarkService;

require __DIR__ . '/../vendor/autoload.php';

$benchmarkService = new BenchmarkService(new JsonSerializableFactory());

if ($benchmarkService->isWriteToResponseBody()) {
    echo json_encode($benchmarkService->getDataToSerialize());
} else {
    json_encode($benchmarkService->getDataToSerialize());
}

// require phpbenchmarks stats.php here when needed
