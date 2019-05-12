<?php

declare(strict_types=1);

namespace Php73\BenchmarkJsonSerializationSmallOverload\ObjectToSerializeFactory;

use Php73\BenchmarkJsonSerializationSmallOverload\ObjectToSerialize\JsonSerializableToSerialize;
use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\{
    ObjectToSerialize\ObjectToSerializeInterface,
    ObjectToSerializeFactory\ObjectToSerializeFactoryInterface
};

class JsonSerializableFactory implements ObjectToSerializeFactoryInterface
{
    /** @return ObjectToSerializeInterface */
    public function create()
    {
        return new JsonSerializableToSerialize();
    }
}
