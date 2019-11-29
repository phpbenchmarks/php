<?php

declare(strict_types=1);

namespace App\ArrayEncoder;

use App\Translation\TranslationService;
use PhpBenchmarksRestData\CommentType;

class CommentTypeArrayEncoder
{
    public function encode(CommentType $commentType): array
    {
        return [
            'id' => $commentType->getId(),
            'name' => $commentType->getName(),
            'translated' => TranslationService::getTranslation('translated.3000')
        ];
    }
}
