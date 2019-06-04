<?php

namespace App\Http\Controllers;

use App\Services\TaskServiceInterface;
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
}
