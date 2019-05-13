<?php

namespace Php73\BenchmarkJsonSerializationBigOverload\ObjectToSerializeFactory;

use Php73\BenchmarkJsonSerializationBigOverload\ObjectToSerialize\JsonSerializableToSerialize;
use PhpBenchmarks\BenchmarkJsonSerializationBigOverload\ObjectToSerialize\ObjectToSerializeInterface;
use PhpBenchmarks\BenchmarkJsonSerializationBigOverload\ObjectToSerializeFactory\ObjectToSerializeFactoryInterface;;

class JsonSerializableFactory implements ObjectToSerializeFactoryInterface
{
    /** @return ObjectToSerializeInterface */
    public function create()
    {
        return new JsonSerializableToSerialize();
    }
}
