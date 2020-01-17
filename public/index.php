<?php

use App\ObjectToSerializeFactory\JsonSerializableFactory;
use PhpBenchmarks\BenchmarkJsonSerializationBigOverload\BenchmarkService;

require __DIR__ . '/../vendor/autoload.php';

$benchmarkService = new BenchmarkService(new JsonSerializableFactory());

if ($benchmarkService->isWriteToResponseBody()) {
    echo json_encode($benchmarkService->getDataToSerialize());
} else {
    json_encode($benchmarkService->getDataToSerialize());
}
