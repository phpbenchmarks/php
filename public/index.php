<?php

declare(strict_types=1);

use App\{
    ArrayEncoder\UserArrayEncoder,
    Translation\TranslationService
};
use PhpBenchmarksRestData\Service;

require('../vendor/autoload.php');

TranslationService::loadTranslations();

$userEncoder = new UserArrayEncoder();
$data = [];
foreach (Service::getUsers() as $user) {
    $data[] = $userEncoder->encode($user);
}

echo json_encode($data);

// require phpbenchmarks stats.php here when needed
