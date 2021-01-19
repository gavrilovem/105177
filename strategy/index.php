<?php
spl_autoload_register(function ($className) {
    include $className . '.php';
});

$system = new PaymentSystem();

$prd[] = new Product(429, 3, 'red');
$prd[] = new Product(299, 2, 'green');
$prd[] = new Product(589, 5, 'blue');

$system->operation((new WebMoneyPayment()), $prd);