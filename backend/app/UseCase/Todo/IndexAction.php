<?php

declare(strict_types=1);

namespace App\UseCase\Todo;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;

class IndexAction
{
    /**
     * @return Collection<Todo>
     */
    public function __invoke(): Collection
    {
        $todos = Todo::all();

        return $todos;
    }
}
