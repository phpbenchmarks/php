<?php

declare(strict_types=1);

use Phpbenchmarks\Translation\TranslationService;
use PhpBenchmarksRestData\{
    Comment,
    CommentType,
    Service,
    User
};

require(__DIR__ . '/../vendor/autoload.php');

function encodeUser(User $user): array
{
    return [
        'id' => $user->getId(),
        'login' => $user->getLogin(),
        'createdAt' => $user->getCreatedAt()->format('Y-m-d H:i:s'),
        'translated' => TranslationService::getTranslation('translated.1000'),
        'comments' => encodeComments($user->getComments())
    ];
}

/** @param Comment[] $comments */
function encodeComments(array $comments): array
{
    $return = [];
    foreach ($comments as $comment) {
        $return[] = [
            'id' => $comment->getId(),
            'message' => $comment->getMessage(),
            'translated' => TranslationService::getTranslation('translated.2000'),
            'type' => encodeType($comment->getType())
        ];
    }

    return $return;
}

function encodeType(CommentType $type): array
{
    return [
        'id' => $type->getId(),
        'name' => $type->getName(),
        'translated' => TranslationService::getTranslation('translated.3000')
    ];
}

TranslationService::loadTranslations();

$data = [];
foreach (Service::getUsers() as $user) {
    $data[] = encodeUser($user);
}

echo json_encode($data);
