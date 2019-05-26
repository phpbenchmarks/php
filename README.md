<p align="center">
  <img src="http://www.phpbenchmarks.com/images/logo_github.png">
  <br>
  <a href="http://www.phpbenchmarks.com" target="_blank">www.phpbenchmarks.com</a>
</p>

## What is www.phpbenchmarks.com?

You will find lot of benchmarks for PHP frameworks, template engines and JSON serializers on [phpbenchmarks.com](http://www.phpbenchmarks.com).

Benchmarks results are available from PHP 5.6 to latest version.

Our benchmarking protocol is available on [benchmarking protocol page](http://www.phpbenchmarks.com/en/documentation/benchmarking-protocol).

## What is this repository?

It contains PHP installation `only`.
To reuse code between minor versions, features for benchmarks are not coded in this repository
but in [phpbenchmarks/php-common](https://github.com/phpbenchmarks/php-common) repository.

Switch branch to select version and benchmark you want to see.

## Benchmarks

You can find PHP 5.6 benchmarks results on
[benchmarks results page](http://www.phpbenchmarks.com/en/benchmark/php/5.6).

See all PHP benchmarked versions on [select version page](http://www.phpbenchmarks.com/en/benchmark/php/version).

## Community

Go to [community page](http://www.phpbenchmarks.com/en/community) to see the Hall of fame, or download the benchmark kit to add your code!

## How version works?

We do not follow semantic version for this repository. Here is an explanation about our versioning system:

`W` PHP major version.

`X` PHP minor version.

`Y` PHP bugfix version.

`Z` Benchmark type: `6` JSON serialization of Hello world, `7` Small JSON serialization, `8` Big JSON serialization.
