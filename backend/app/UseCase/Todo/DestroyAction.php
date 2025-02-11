<?php

declare(strict_types=1);

namespace App\UseCase\Todo;

use App\Models\Todo;

class DestroyAction
{
    public function __invoke(Todo $todo): void
    {
        $todo->delete();
    }
}
