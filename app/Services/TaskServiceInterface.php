<?php


namespace App\Services;


interface TaskServiceInterface
{
    public function getAll();
    public function getTask($id);
    public function delete($obj);
    public function create($request);
}
