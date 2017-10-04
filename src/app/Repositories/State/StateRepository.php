<?php


namespace Panorama\Repositories\State;


use Panorama\Repositories\Repository;

class StateRepository extends Repository
{
    public function __construct()
    {
        $this->model = new State();
    }
}