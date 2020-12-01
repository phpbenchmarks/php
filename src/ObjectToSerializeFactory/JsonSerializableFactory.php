<?php

declare(strict_types=1);

namespace App\ObjectToSerializeFactory;

use App\ObjectToSerialize\JsonSerializableToSerialize;
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
