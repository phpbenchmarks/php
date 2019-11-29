<?php

declare(strict_types=1);

namespace App\ArrayEncoder;

use App\Translation\TranslationService;
use PhpBenchmarksRestData\{
    Comment,
    User
};

class UserArrayEncoder
{
    protected CommentArrayEncoder $commentEncoder;

    public function __construct()
    {
        $this->commentEncoder = new CommentArrayEncoder();
    }

    public function encode(User $user): array
    {
        return [
            'id' => $user->getId(),
            'login' => $user->getLogin(),
            'createdAt' => $user->getCreatedAt()->format('Y-m-d H:i:s'),
            'translated' => TranslationService::getTranslation('translated.1000'),
            'comments' => array_map(
                fn(Comment $comment) => $this->commentEncoder->encode($comment),
                $user->getComments()
            )
        ];
    }
}
