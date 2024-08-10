<?php

namespace Source\Contracts;

class Login
{
    private $logged;
    public function loginUser(User $user): User
    {
        $this->logged = $user;
        return $this->logged;
    }

    public function loginAdmin(UserAdmin $user): User
    {
        $this->logged = $user;
        return $this->logged;
    }

    public function login(UserInterface $user): UserInterface
    {
        $this->logged = $user;
        return $this->logged;
    }
}
