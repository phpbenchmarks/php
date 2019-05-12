<?php

declare(strict_types=1);

namespace Php73\BenchmarkJsonSerializationBigOverload\ObjectToSerializeFactory;

use Php73\BenchmarkJsonSerializationBigOverload\ObjectToSerialize\JsonSerializableToSerialize;
use PhpBenchmarks\BenchmarkJsonSerializationBigOverload\{
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
