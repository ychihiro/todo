<?php

declare(strict_types=1);

namespace App\UseCase\Todo;

use App\Models\Todo;

class StoreAction
{
    public function __invoke(string $content)
    {
        Todo::create([
            'content' => $content,
        ]);
    }
}
