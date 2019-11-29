<?php

declare(strict_types=1);

function fopenPhpFile(string $name, $writePhpHeader = true)
{
    $return = fopen(__DIR__ . '/../' . $name, 'w');
    if ($writePhpHeader) {
        fwrite($return, '<?php' . "\n\n");
    }

    return $return;
}

function writeFunctionsFile(): void
{
    $functionsFile = fopenPhpFile('src/functions.php');
    fwrite($functionsFile, 'declare(strict_types=1);' . "\n\n");

    for ($i = 1; $i <= 100; $i++) {
        $code = <<<CODE
function overloadFunction$i(int \$index): void
{
    echo '[#' . \$index . '] PHP Benchmarks overload function';
}


CODE;

        fwrite($functionsFile, $code);
    }
    fclose($functionsFile);
}

function getCustomFunctionCallPhpCode(): string
{
    $return = <<<CODE
        <?php
        // -------------------------------------------------------------------------------------------------------------
        // Create 100 custom functions and call them all
        // -------------------------------------------------------------------------------------------------------------

        require __DIR__ . '/../overload/functions.php';
        ?>

        <div class="row">
            <div class="col-md-12">
                <h1>Create 100 custom functions and call them all</h1>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Function call</th>
                        </tr>
                    </thead>
                    <tbody>

CODE;

    for ($i = 1; $i <= 100; $i++) {
        $return .= <<<CODE
                        <tr>
                            <td>#$i</td>
                            <td><?php overloadFunction$i($i) ?></td>
                        </tr>

CODE;
    }

    $return .= <<<CODE
                    </tbody>
                </table>
            </div>
        </div>
CODE;

    return $return;
}

function writeMacrosFile(): void
{
    $macrosFile = fopenPhpFile('src/macros.php');
    fwrite($macrosFile, 'declare(strict_types=1);' . "\n\n");

    for ($i = 1; $i <= 100; $i++) {
        $code = <<<CODE
function overloadMacro$i(int \$index): void
{
    echo '[#' . \$index . '] PHP Benchmarks overload macro';
}


CODE;
        fwrite($macrosFile, $code);
    }
    fclose($macrosFile);
}

function getMacroCallPhpCode(): string
{
    $return = <<<CODE
        <?php
        // -------------------------------------------------------------------------------------------------------------
        // Create 100 macros and call them all
        // -------------------------------------------------------------------------------------------------------------

        require __DIR__ . '/../overload/macros.php';
        ?>

        <div class="row">
            <div class="col-md-12">
                <h1>Create 100 macros and call them all</h1>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Macro call</th>
                        </tr>
                    </thead>
                    <tbody>

CODE;

    for ($i = 1; $i <= 100; $i++) {
        $return .= <<<CODE
                        <tr>
                            <td>#$i</td>
                            <td><?php overloadMacro$i($i) ?></td>
                        </tr>

CODE;
    }

    $return .= <<<CODE
                    </tbody>
                </table>
            </div>
        </div>
CODE;

    return $return;
}

function writeBlocksFile(): void
{
    $blocksFile = fopenPhpFile('src/blocks.php');
    fwrite($blocksFile, 'declare(strict_types=1);' . "\n\n");

    for ($i = 1; $i <= 50; $i++) {
        $code = <<<CODE
function overloadBlock$i(int \$index): void
{
    echo '[#' . \$index . '] PHP Benchmarks overload block';
}


CODE;

        fwrite($blocksFile, $code);
    }
    fclose($blocksFile);
}

function getHtmlEscapingPhpCode(): string
{
    $return = <<<CODE
        <?php
        // -------------------------------------------------------------------------------------------------------------
        // Escape 500 strings for HTML, and echo them all
        // -------------------------------------------------------------------------------------------------------------
        ?>
        <div class="row">
            <div class="col-md-12">
                <h1>Echo 500 strings escaped for HTML</h1>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Escaped string</th>
                        </tr>
                    </thead>
                    <tbody>

CODE;

    for ($i = 1; $i <= 500; $i++) {
        $return .= <<<CODE
                        <tr>
                            <td>#$i</td>
                            <td><?php echo htmlentities('<a href="http://www.phpbenchmarks.com">[#$i] PHP Benchmarks (HTML escaping)</a>') ?></td>
                        </tr>

CODE;
    }

    $return .= <<<CODE
                    </tbody>
                </table>
            </div>
        </div>
CODE;

    return $return;
}

function getJavascriptEscapingPhpCode(): string
{
    $return = <<<CODE
        <?php
        // -------------------------------------------------------------------------------------------------------------
        // Escape 500 strings for Javascript
        // -------------------------------------------------------------------------------------------------------------

        // Taken from Twig javascript escaping
        function javascriptentities(string \$string): string
        {
            \$return = preg_replace_callback(
                '#[^a-zA-Z0-9,\._]#Su',
                function (\$matches) {
                    \$char = \$matches[0];
            
                    // \xHH
                    if (!isset(\$char[1])) {
                        return '\\x'.strtoupper(substr('00'.bin2hex(\$char), -2));
                    }
            
                    // \uHHHH
                    \$char = strtoupper(bin2hex(\$char));
            
                    if (4 >= strlen(\$char)) {
                        return sprintf('\u%04s', \$char);
                    }
            
                    return sprintf('\u%04s\u%04s', substr(\$char, 0, -4), substr(\$char, -4));
                }, 
                \$string
            );
            
            return \$return;
        }
        ?>
        <div class="row">
            <div class="col-md-12">
                <h1>Echo 500 strings escaped for Javascript</h1>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Escaped string</th>
                        </tr>
                    </thead>
                    <tbody>

CODE;

    for ($i = 1; $i <= 500; $i++) {
        $return .= <<<CODE
                        <tr>
                            <td>#$i</td>
                            <td id="escapedStringForJs$i"></td>
                        </tr>

CODE;

    }

    $return .= <<<CODE
                    </tbody>
                </table>
                <script type="text/javascript">

CODE;

    for ($i = 1; $i <= 500; $i++) {
        $return .= <<<CODE
                    var escapedStringForJs$i = '<?php echo javascriptentities('<a href="http://www.phpbenchmarks.com">[#$i] PHP Benchmarks (JS escaping)</a>') ?>';
                    document.getElementById('escapedStringForJs$i').innerHTML = escapedStringForJs$i;

CODE;
    }

    $return .= <<<CODE
                </script>
            </div>
        </div>

CODE;

    return $return;
}

function getEchoHtmlVarPhpCode(): string
{
    $return = <<<CODE
        <?php
        // -------------------------------------------------------------------------------------------------------------
        // Assign HTML string to 100 vars and echo them all (to use raw filter in template engines)
        // -------------------------------------------------------------------------------------------------------------
        ?>

        <div class="row">
            <div class="col-md-12">
                <h1>Echo 100 vars with HTML (to use raw filter in template engine)</h1>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Escaped string</th>
                        </tr>
                    </thead>
                    <tbody>

CODE;

    for ($i = 1; $i <= 100; $i++) {
        $return .= <<<CODE
                        <tr>
                            <td>#$i</td>
                            <td>
                                <?php
                                \$rawHtml$i = '<a href="http://www.phpbenchmarks.com">[#$i] PHP Benchmarks (raw filter)</a>';
                                echo \$rawHtml$i;
                                ?>
                            </td>
                        </tr>

CODE;
    }

    $return .= <<<CODE
                    </tbody>
                </table>
            </div>
        </div>
CODE;


    return $return;
}

function getEchoUnknownVarPhpCode(): string
{
    $return = <<<CODE
        <?php
        // -------------------------------------------------------------------------------------------------------------
        // Echo 100 unknown vars
        // -------------------------------------------------------------------------------------------------------------
        ?>

        <div class="row">
            <div class="col-md-12">
                <h1>Echo 100 unknown vars</h1>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Unkonwn value</th>
                        </tr>
                    </thead>
                    <tbody>

CODE;

    for ($i = 1; $i <= 100; $i++) {
        $return .= <<<CODE
                        <tr>
                            <td>$i</td>
                            <td><?php echo \$unknownVar$i ?? 'Unknown var $i' ?></td>
                        </tr>

CODE;
    }

    $return .= <<<CODE
                    </tbody>
                </table>
            </div>
        </div>
CODE;

    return $return;
}

function getEchoMethodCallPhpCode(): string
{
    $return = <<<CODE
        <?php
        // -------------------------------------------------------------------------------------------------------------
        // Echo 500 calls to an object method
        // -------------------------------------------------------------------------------------------------------------

        class OverloadObject
        {
            public function phpBenchmarks(): string
            {
                return 'PHP Benchmarks';
            }
        }
        \$overloadObject = new OverloadObject();
        ?>
        <div class="row">
            <div class="col-md-12">
                <h1>Echo 500 calls to an object method</h1>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>OverloadObject::phpBenchmarks() call</th>
                        </tr>
                    </thead>
                    <tbody>

CODE;

    for ($i = 1; $i <= 500; $i++) {
        $return .= <<<CODE
                        <tr>
                            <td>$i</td>
                            <td><?php echo \$overloadObject->phpBenchmarks() ?></td>
                        </tr>

CODE;
    }

    $return .= <<<CODE
                    </tbody>
                </table>
            </div>
        </div>
CODE;

    return $return;
}

function writeTemplatesToInclude(): void
{
    for ($i = 1; $i <= 50; $i++) {
        $templateFile = fopenPhpFile('templates/templates/template' . $i . '.php', false);
        $php = <<<CODE
                        <tr>
                            <td>#$i</td>
                            <td><?php echo \$template$i ?></td>
                        </tr>

CODE;
        fwrite($templateFile, $php);
        fclose($templateFile);
    }
}

function getIncludeTemplatePhpCode(): string
{
    $return = <<<CODE
        <?php
        // -------------------------------------------------------------------------------------------------------------
        // Include 50 templates
        // -------------------------------------------------------------------------------------------------------------
        ?>

        <div class="row">
            <div class="col-md-12">
                <h1>Include 50 templates</h1>
                <table class="table table-striped table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Template parameter value</th>
                        </tr>
                    </thead>
                    <tbody>

CODE;

    for ($i = 1; $i <= 50; $i++) {
        $return .= <<<CODE
                        <?php
                        \$template$i = '[#$i] PHP Benchmarks';
                        include(__DIR__ . '/../templates/templates/template$i.php');
                        unset(\$template$i);
                        ?>

CODE;
    }

    $return .= <<<CODE
                    </tbody>
                </table>
            </div>
        </div>
CODE;

    return $return;
}

function writeIndexFile(): void
{
    // write index.php
    $indexFile = fopen(__DIR__ . '/index.php', 'w');

    $customFunctionCallPhpCode = getCustomFunctionCallPhpCode();
    $macrosCallPhpCode = getMacroCallPhpCode();
    $htmlEscapingPhpCode = getHtmlEscapingPhpCode();
    $javascriptEscapingPhpCode = getJavascriptEscapingPhpCode();
    $echoHtmlVarPhpCode = getEchoHtmlVarPhpCode();
    $echoUnkownVarPhpCode = getEchoUnknownVarPhpCode();
    $echoMethodCallPhpCode = getEchoMethodCallPhpCode();
    $includeTemplatePhpCode = getIncludeTemplatePhpCode();


    $php = <<<CODE
<?php

// This code has to fill OPCache, so we will not use loop and write duplicated code

declare(strict_types=1);

// Simulate an extends
include(__DIR__ . '/../templates/layout_start.php');
?>
$customFunctionCallPhpCode

$macrosCallPhpCode

$htmlEscapingPhpCode

$javascriptEscapingPhpCode

$echoHtmlVarPhpCode

$echoUnkownVarPhpCode

$echoMethodCallPhpCode

$includeTemplatePhpCode

<?php
// Simulate end of extends
include(__DIR__ . '/../templates/layout_end.php');

// require phpbenchmarks stats.php here when needed
?>

CODE;
    fwrite($indexFile, $php);
}

writeFunctionsFile();
writeMacrosFile();
writeBlocksFile();
writeTemplatesToInclude();
writeIndexFile();
