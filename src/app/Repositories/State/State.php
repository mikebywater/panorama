<?php

namespace Panorama\Repositories\State;


class State extends Model
{

    public function all()
    {

    }

    public function find($name)
    {
        return json_decode($this->client->get($name));
    }

    public function update($name, $data)
    {
        $json = json_encode($data);
        $this->client->set($name, $json);
        return $json;
    }

}