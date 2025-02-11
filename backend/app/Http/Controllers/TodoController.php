<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Http\Resources\IndexTodoResource;
use App\Http\Resources\ShowTodoResource;
use App\Models\Todo;
use App\UseCase\Todo\DestroyAction;
use App\UseCase\Todo\IndexAction;
use App\UseCase\Todo\ShowAction;
use App\UseCase\Todo\StoreAction;
use App\UseCase\Todo\UpdateAction;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TodoController extends Controller
{
    public function index(IndexAction $action): ResourceCollection
    {
        return IndexTodoResource::collection($action());
    }

    public function store(StoreTodoRequest $request, StoreAction $action): void
    {
        $action($request->content);
    }

    public function show(Todo $todo, ShowAction $action): ShowTodoResource
    {
        return new ShowTodoResource($action($todo));
    }

    public function update(Todo $todo, UpdateTodoRequest $request, UpdateAction $action): void
    {
        $action($todo, $request->content);
    }

    public function destroy(Todo $todo, DestroyAction $action): void
    {
        $action($todo);
    }
}
