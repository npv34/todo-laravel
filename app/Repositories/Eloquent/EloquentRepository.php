<?php


namespace App\Repositories\Eloquent;


use App\Repositories\Contracts\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get Model
     * @return string
     */
    abstract public function getModel();

    /**
     * set Model
     */
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->orderBy('id', 'DESC')->get();
        return $result;
    }

    public function create($object)
    {
        return $object->save();
    }

    public function delete($task)
    {
        $task->delete();
    }

    public function update($object)
    {
        // TODO: Implement update() method.
    }

    public function getById($id)
    {
        $result = $this->model->findOrFail($id);
        return $result;
    }
}
