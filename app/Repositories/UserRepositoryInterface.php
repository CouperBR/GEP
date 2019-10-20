<?php

namespace App\Repositories;


interface UserRepositoryInterface{

    public function getAll();
    public function getById($id);
    public function create ($model);
    public function update($id, $model);
    public function delete($id);
}