<?php


namespace App\Services\Impl;

use App\Repositories\Contracts\TaskRepositoryInterface;
use App\Services\TaskServiceInterface;

class TaskService implements TaskServiceInterface
{
    protected $tourRepository;
    public function __construct(TaskRepositoryInterface $taskRepository)
    {
        $this->tourRepository = $taskRepository;
    }

    public function getAll()
    {
        $result = $this->tourRepository->getAll();
        return $result;
    }
}
