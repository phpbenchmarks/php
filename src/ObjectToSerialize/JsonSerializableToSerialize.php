<?php

declare(strict_types=1);

namespace Php73\BenchmarkJsonSerializationSmallOverload\ObjectToSerialize;

use PhpBenchmarks\BenchmarkJsonSerializationSmallOverload\ObjectToSerialize\ObjectToSerialize;

class JsonSerializableToSerialize extends ObjectToSerialize implements \JsonSerializable
{
    /** @return array */
    public function jsonSerialize()
    {
        return [
            'property1' => $this->getProperty1(),
            'property2' => $this->getProperty2(),
            'property3' => $this->getProperty3(),
            'property4' => $this->getProperty4(),
            'property5' => $this->getProperty5(),
            'property6' => $this->getProperty6(),
            'property7' => $this->getProperty7(),
            'property8' => $this->getProperty8(),
            'property9' => $this->getProperty9(),
            'property10' => $this->getProperty10()
        ];
    }
}
