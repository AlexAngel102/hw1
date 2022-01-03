<?php


class Shop
{
    public function sellAlcohol(Buyer $buyer)
    {
        if ($buyer->age >= 18){
            echo 'Sale successful';
        }else{
        echo 'You are not allowed to buy alcohol';
    }
    }
}