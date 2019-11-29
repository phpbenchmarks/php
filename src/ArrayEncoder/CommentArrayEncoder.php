<?php

declare(strict_types=1);

namespace App\ArrayEncoder;

use App\Translation\TranslationService;
use PhpBenchmarksRestData\Comment;

class CommentArrayEncoder
{
    protected CommentTypeArrayEncoder $commentTypeEncoder;

    public function __construct()
    {
        $this->commentTypeEncoder = new CommentTypeArrayEncoder();
    }

    public function encode(Comment $comment): array
    {
        return [
            'id' => $comment->getId(),
            'message' => $comment->getMessage(),
            'translated' => TranslationService::getTranslation('translated.2000'),
            'type' => $this->commentTypeEncoder->encode($comment->getType())
        ];
    }
}
