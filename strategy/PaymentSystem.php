<?php


class PaymentSystem
{
    public function operation(IPayment $operator, array $products) {
        echo 'Начинаю операцию оплаты товара' . PHP_EOL;

        $operator->compare($products);
    }
}