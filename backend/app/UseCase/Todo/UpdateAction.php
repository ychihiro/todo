<?php

declare(strict_types=1);

namespace App\UseCase\Todo;

use App\Models\Todo;

class UpdateAction
{
    public function __invoke(Todo $todo, string $content): void
    {
        $todo->update([
            'content' => $content,
        ]);
    }
}
