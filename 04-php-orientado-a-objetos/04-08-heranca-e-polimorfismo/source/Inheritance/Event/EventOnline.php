<?php

namespace Source\Inheritance\Event;

class EventOnline extends Event
{
    private $link;

    public function __construct($event, \DateTime $date, $price, $link ,$vacancies = null)
    {
        parent::__construct($event, $date, $price, $vacancies);
        $this->link = $link;
    }

    public function register($fullName, $email): void
    {
        parent::setRegister($fullName, $email);
        $this->vacancies++;
        echo"<p class='trigger accept'>Parabéns {$fullName}, você foi registrado com sucesso!</p>";
    }
}
