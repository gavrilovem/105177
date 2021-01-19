<?php


class WebMoneyPayment implements IPayment
{

    public function compare(array $products)
    {
        echo 'Оплата с помощью WebMoney' . PHP_EOL;

        foreach ($products as $product) {
            echo $product->getPrice() * $product->getAmount() . PHP_EOL;
        }
    }
}