<?php


class YandexPayment implements IPayment
{

    public function compare(array $products)
    {
        echo 'Оплата с помощью Yandex' . PHP_EOL;

        foreach ($products as $product) {
            echo $product->getPrice() * $product->getAmount() . PHP_EOL;
        }
    }
}