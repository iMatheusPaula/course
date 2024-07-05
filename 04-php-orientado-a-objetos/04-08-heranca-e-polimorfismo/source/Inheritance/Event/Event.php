<?php

namespace Source\Inheritance\Event;

class Event
{
    private $event;
    private $date;
    private $register;
    protected $vacancies;
    private $price;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return number_format($this->price, "2", ",", ".");
    }

    /**
     * @param $event
     * @param $date
     * @param $vacancies
     */
    public function __construct($event, \DateTime $date, $price ,$vacancies)
    {
        $this->event = $event;
        $this->date = $date;
        $this->price = $price;
        $this->vacancies = $vacancies;
    }

    public function register($fullName, $email)
    {
        if($this->vacancies >= 1){
            $this->vacancies--;
            $this->setRegister($fullName, $email);
            echo "<p class='trigger accept'>Parabéns {$fullName}, vaga garantida!</p>";
        }else{
            echo "<p class='trigger error'>Desculpe {$fullName}, mas as vagas esgotaram!</p>";
        }
    }

    /**
     * @param mixed $register
     */
    public function setRegister($fullName, $email): void
    {
        $this->register[] = [
            'name' => $fullName,
            'email' => $email
        ];
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->event;
    }

    public function getDate(): string
    {
        return $this->date->format("d/m/Y H:i");
    }

    /**
     * @return mixed
     */
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * @return mixed
     */
    public function getVacancies()
    {
        return $this->vacancies;
    }
}
