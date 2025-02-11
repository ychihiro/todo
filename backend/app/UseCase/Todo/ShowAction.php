<?php

declare(strict_types=1);

namespace App\UseCase\Todo;

use App\Models\Todo;

class ShowAction
{
    public function __invoke(Todo $todo): Todo
    {
        return $todo;
    }
}
