<?php

declare(strict_types=1);

if ($_GET['phpBenchmarksShowResults'] ?? null === '1') {
    echo json_encode(['Hello World !']);
} else {
    json_encode(['Hello World !']);
}

// require phpbenchmarks stats.php here when needed
