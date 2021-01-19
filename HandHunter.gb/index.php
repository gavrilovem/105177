<?php

spl_autoload_register(function($className) {
    require $className . '.php';
});

$observer1 = new User('User1', 'dasd@mail.ru', '2');
$observer2 = new User('User2', 'dasd@mail.ru', '2');
$observer3 = new User('User3', 'dasd@mail.ru', '2');

VacancyList::getInstance()->addObserver($observer1);
VacancyList::getInstance()->addObserver($observer2);
VacancyList::getInstance()->addObserver($observer3);


VacancyList::getInstance()->setData('Новая вакансия!');
echo VacancyList::getInstance()->getData();