<?php

use Php56Benchmark\Translation\TranslationService;
use PhpBenchmarksRestData\Comment;
use PhpBenchmarksRestData\CommentType;
use PhpBenchmarksRestData\Service;
use PhpBenchmarksRestData\User;

require('vendor/autoload.php');

/** @return array */
function encodeUser(User $user)
{
    return [
        'id' => $user->getId(),
        'login' => $user->getLogin(),
        'createdAt' => $user->getCreatedAt()->format('Y-m-d H:i:s'),
        'translated' => TranslationService::getTranslation('translated.1000'),
        'comments' => encodeComments($user->getComments())
    ];
}

/**
 * @param Comment[] $comments
 * @return array
 */
function encodeComments(array $comments)
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

/** @return array */
function encodeType(CommentType $type)
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
