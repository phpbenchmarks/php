<?php

namespace App\ObjectToSerializeFactory;

use App\ObjectToSerialize\JsonSerializableToSerialize;
use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerialize\ObjectToSerializeInterface;
use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerializeFactory\ObjectToSerializeFactoryInterface;

class JsonSerializableFactory implements ObjectToSerializeFactoryInterface
{
    /** @return ObjectToSerializeInterface */
    public function create()
    {
        return new JsonSerializableToSerialize();
    }
}
