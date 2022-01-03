<?php


class Bridge
{

    public function canTheCarGo(Transport $transport)
    {
        if ($transport->hight < 4000 && $transport->weight < 3000) {
            echo 'Car can go <br>';
            return true;
        } else {
            echo 'Car not acceptable <br>';
            return false;
        }
    }

}