<?php


namespace App\Repositories\Contracts;


interface RepositoryInterface
{
    public function getAll();

    public function create($object);

    public function update($object);

    public function delete($obj);

    public function getById($id);
}
