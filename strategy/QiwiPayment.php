<?php


class QiwiPayment implements IPayment
{

    public function compare(array $products)
    {
        echo 'Оплата с помощью Qiwi' . PHP_EOL;

        foreach ($products as $product) {
            echo $product->getPrice() * $product->getAmount() . PHP_EOL;
        }
    }
}