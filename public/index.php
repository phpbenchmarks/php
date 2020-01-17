<?php

declare(strict_types=1);

use App\ObjectToSerializeFactory\JsonSerializableFactory;
use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\BenchmarkService;

require __DIR__ . '/../vendor/autoload.php';

$benchmarkService = new BenchmarkService(new JsonSerializableFactory());

if ($benchmarkService->isWriteToResponseBody()) {
    echo json_encode($benchmarkService->getDataToSerialize());
} else {
    json_encode($benchmarkService->getDataToSerialize());
}
