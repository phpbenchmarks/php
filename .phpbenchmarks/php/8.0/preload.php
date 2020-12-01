<?php

$sourceCodePath = __DIR__ . '/../../../';
$files = [
    "$sourceCodePath/public/index.php",
    "$sourceCodePath/src/blocks.php",
    "$sourceCodePath/src/functions.php",
    "$sourceCodePath/src/macros.php",
    "$sourceCodePath/templates/layout_end.php",
    "$sourceCodePath/templates/layout_start.php",
    "$sourceCodePath/templates/templates/template1.php",
    "$sourceCodePath/templates/templates/template10.php",
    "$sourceCodePath/templates/templates/template11.php",
    "$sourceCodePath/templates/templates/template12.php",
    "$sourceCodePath/templates/templates/template13.php",
    "$sourceCodePath/templates/templates/template14.php",
    "$sourceCodePath/templates/templates/template15.php",
    "$sourceCodePath/templates/templates/template16.php",
    "$sourceCodePath/templates/templates/template17.php",
    "$sourceCodePath/templates/templates/template18.php",
    "$sourceCodePath/templates/templates/template19.php",
    "$sourceCodePath/templates/templates/template2.php",
    "$sourceCodePath/templates/templates/template20.php",
    "$sourceCodePath/templates/templates/template21.php",
    "$sourceCodePath/templates/templates/template22.php",
    "$sourceCodePath/templates/templates/template23.php",
    "$sourceCodePath/templates/templates/template24.php",
    "$sourceCodePath/templates/templates/template25.php",
    "$sourceCodePath/templates/templates/template26.php",
    "$sourceCodePath/templates/templates/template27.php",
    "$sourceCodePath/templates/templates/template28.php",
    "$sourceCodePath/templates/templates/template29.php",
    "$sourceCodePath/templates/templates/template3.php",
    "$sourceCodePath/templates/templates/template30.php",
    "$sourceCodePath/templates/templates/template31.php",
    "$sourceCodePath/templates/templates/template32.php",
    "$sourceCodePath/templates/templates/template33.php",
    "$sourceCodePath/templates/templates/template34.php",
    "$sourceCodePath/templates/templates/template35.php",
    "$sourceCodePath/templates/templates/template36.php",
    "$sourceCodePath/templates/templates/template37.php",
    "$sourceCodePath/templates/templates/template38.php",
    "$sourceCodePath/templates/templates/template39.php",
    "$sourceCodePath/templates/templates/template4.php",
    "$sourceCodePath/templates/templates/template40.php",
    "$sourceCodePath/templates/templates/template41.php",
    "$sourceCodePath/templates/templates/template42.php",
    "$sourceCodePath/templates/templates/template43.php",
    "$sourceCodePath/templates/templates/template44.php",
    "$sourceCodePath/templates/templates/template45.php",
    "$sourceCodePath/templates/templates/template46.php",
    "$sourceCodePath/templates/templates/template47.php",
    "$sourceCodePath/templates/templates/template48.php",
    "$sourceCodePath/templates/templates/template49.php",
    "$sourceCodePath/templates/templates/template5.php",
    "$sourceCodePath/templates/templates/template50.php",
    "$sourceCodePath/templates/templates/template6.php",
    "$sourceCodePath/templates/templates/template7.php",
    "$sourceCodePath/templates/templates/template8.php",
    "$sourceCodePath/templates/templates/template9.php",
];

foreach ($files as $file) {
    if (is_readable($file) === false) {
        throw new \Exception('File "' . $file . '" is not readable.');
    }

    opcache_compile_file($file);
}
