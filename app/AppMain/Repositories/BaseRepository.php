<?php

namespace App\AppMain\Repositories;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    public function all()
    {
        return $this->model->all();
    }

    abstract public function getModel();
}
