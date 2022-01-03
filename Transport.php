<?php


class Transport
{

    public int $hight;
    public int $weight;

    public function __construct(int $hight, int $weight)
    {
        $this->hight = $hight;
        $this->weight = $weight;
    }

}