<?php

namespace Source\Traits;

trait AddressTrailt
{
    private Address $address;

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

}
