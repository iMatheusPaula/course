<?php

namespace Source\Traits;

class Register
{
    use UserTrailt;
    use AddressTrailt;
    public function __construct(User $user, Address $address)
    {
        $this->setUser($user);
        $this->setAddress($address);
    }

    public function save()
    {
        $this->user->id = 232;
        $this->address->user_id = $this->user->id;
    }
}
