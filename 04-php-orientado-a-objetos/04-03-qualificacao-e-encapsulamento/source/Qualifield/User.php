<?php

namespace Source\Qualifield;

class User
{
    private $name;
    private $surName;
    private $age;
    private $mail;
    private $error;

    public function setUser($firstName, $surName, $age, $mail): bool
    {
        $this->setName($firstName);
        $this->setSurName($surName);
        $this->setAge($age);
        if(!$this->setMail($mail)){
            $this->error = "O email {$this->getMail()} é invalido";
            return false;
        }
        return true;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param mixed $error
     */
    private function setError($error): void
    {
        $this->error = $error;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Valida o endereço eletrónico.
     * @param $mail
     * @return bool
     */
    private function setMail($mail): bool
    {
        $this->mail = $mail;
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)) return true;
        else return false;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Filtra e recebe somente números inteiros para a idade.
     * @param $age
     * @return void
     */
    private function setAge($age): void
    {
        $this->age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);
    }

    /**
     * @return mixed
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * Filtra os caracteres especiais do sobrenome.
     * @param $surName
     * @return void
     */
    private function setSurName($surName): void
    {
        $this->surName = filter_var($surName, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Filtra os caracteres especiais do nome.
     * @param $name
     * @return void
     */
    private function setName($name): void
    {
        $this->name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
