<?php

namespace Panorama\Repositories;


abstract class Repository
{
    protected
        $model;

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }


    public function update($id,$data)
    {
        return $this->model->update($id,$data);
    }

    public function delete($id)
    {

    }
}