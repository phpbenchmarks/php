<?php

declare(strict_types=1);

opcache_compile_file(__DIR__ . '/../../../public/index.php');

// If somebody find why when I add any file in src/ into preload,
// PHP-FPM restart whithout error but i have a white page or a 502 with only this log:
// WARNING: [pool www] child 2854 exited on signal 6 (SIGABRT - core dumped) after 0.154003 seconds from start
// I think it's because of the size of the preloaded files
//opcache_compile_file(__DIR__ . '/../../../src/blocks.php');
//opcache_compile_file(__DIR__ . '/../../../src/functions.php');
//opcache_compile_file(__DIR__ . '/../../../src/macros.php');
