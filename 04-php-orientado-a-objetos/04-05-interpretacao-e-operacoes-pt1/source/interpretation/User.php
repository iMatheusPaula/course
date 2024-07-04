<?php

namespace Source\Interpretation;

class User
{
    private mixed $firstName;
    private mixed $lastName;
    private mixed $email;

    public function __clone(): void
    {
        $this->firstName = null;
        $this->lastName = null;
    }

    public function __destruct()
    {
        echo "<p class='trigger accept'>O obj {$this->getLastName()} foi destruido.</p>";
    }

    public function setLastName(mixed $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param $firstName
     * @param $lastName
     * @param $email
     */
    public function __construct($firstName, $lastName, $email = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
}