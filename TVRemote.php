<?php


class TVRemote
{
    public string $model;
    public string $type; //Bluetooth, Wi-Fi or IR
    public bool $airMousePresent;

    public function __construct(string $model, string $type, bool $airMousePresent)
    {
        $this->model = $model;
        $this->type = $type;
        $this->airMousePresent = $airMousePresent;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getType()
    {
        return $this->type;
    }


    public function isAirMousePresent()
    {
        return $this->airMousePresent;
    }




}