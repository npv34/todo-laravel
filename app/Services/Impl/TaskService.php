<?php


namespace App\Services\Impl;

use App\Repositories\Contracts\TaskRepositoryInterface;
use App\Services\TaskServiceInterface;

class TaskService implements TaskServiceInterface
{
    protected $taskRepository;
    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function getAll()
    {
        $result = $this->taskRepository->getAll();
        return $result;
    }

    public function getTask($id) {
        $task = $this->taskRepository->getById($id);
        return $task;
    }

    public function delete($obj)
    {
        $this->taskRepository->delete($obj);
    }
}
