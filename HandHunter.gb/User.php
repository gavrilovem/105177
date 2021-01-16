<?php


class User implements Observer
{
    private string $name;
    private $email;
    private $experience;

    public function __construct(string $name, string $email, int $experience) {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;
    }

    public function notify() {
        echo 'Alert for ' . $this->name . ' on ' . $this->email . PHP_EOL;
    }
}