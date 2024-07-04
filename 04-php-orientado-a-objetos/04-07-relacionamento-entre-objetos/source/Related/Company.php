<?php

namespace Source\Related;

class Company
{
    private $company;
    /**
     * @var Address
     */
    private $address;
    private $team;
    private $products;

    public function bootCompany($company, $address): void
    {
        $this->company = $company;
        $this->address = $address;
    }

    public function boot($company, Address $address): void
    {
        $this->company = $company;
        $this->address = $address;
    }

    public function addProduct(Product $product): void
    {
        $this->products[] = $product;
    }

    public function addTeamMember($job, $firstName, $lastName): void
    {
        $this->team[] = new User($job, $firstName, $lastName);
    }
    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    
}
