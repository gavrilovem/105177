<?php


class Product
{
    private int $price;
    private int $amount;
    private string $color;

    public function __construct(int $price, int $amount, string $color)
    {
        $this->price = $price;
        $this->amount = $amount;
        $this->color = $color;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getAmount() {
        return $this->amount;
    }
}