<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index(Request $request)
    {
        return TaskResource::collection(Task::all());
    }
    public function show(Task $task)
    {
        return TaskResource::make($task);
    }
}
