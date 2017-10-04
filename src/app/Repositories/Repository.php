<?php

namespace Panorama\Repositories;


abstract class Repository
{
    protected $model;

    public function all()
    {
        $this->model->all();
    }

    public function find($id)
    {
        $this->model->find($id);
    }


    public function update($id,$data)
    {
        $this->model->update($id,$data);
    }

    public function delete($id)
    {

    }
}