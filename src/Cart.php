<?php

namespace App;

class Cart
{
    public float $price = 10;
    public float $tax = 1.2;

    public function getNetPrice(): float
    {
        return $this->price * $this->tax;
    }

    public function addToPrice(int $amount)
    {
        $this->price = $this->price + $amount;
    }

    public function discountPrice(float $discount)
    {
        $this->price = $this->price - ($this->price * $discount);
    }	

    public function changeTax(float $newtax)
    {
        $this->tax = $newtax;
    }

    public function addToTax(float $amount)
    {
        $this->tax = $this->tax + $amount;
    }
}