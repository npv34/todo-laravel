<?php


namespace App\Repositories\Eloquent;


use App\Repositories\Contracts\TaskRepositoryInterface;
use App\Task;

class TaskEloquentRepository extends EloquentRepository implements TaskRepositoryInterface
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        return Task::class;
    }
}
