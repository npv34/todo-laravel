<?php

namespace App\Http\Controllers;

use App\Services\TaskServiceInterface;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected $taskService;
    public function __construct(TaskServiceInterface $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        $tasks = $this->taskService->getAll();
        return response()->json($tasks);
    }

    public function show($id)
    {
        $task = $this->taskService->getTask($id);
        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = $this->taskService->getTask($id);
        $this->taskService->delete($task);
        return response()->json(['message' => 'Oke']);
    }
}
