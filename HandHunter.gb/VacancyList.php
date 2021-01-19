<?php


class VacancyList
{
    private static ?VacancyList $instance = null;
    private function __construct() {}
    private function __wakeup(): void {}
    private function __clone() {}

    private $data;
    private array $observers;

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function addObserver(Observer $observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        foreach ($this->observers as $key => $obsrv) {
            if ($obsrv === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data) {
        $this->data = $data;
        $this->notifyObservers();
    }

    private function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->notify();
        }
    }

}