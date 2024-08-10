<?php

namespace Source\Traits;

class Cart
{
    use UserTrailt;
    use AddressTrailt;
    private $products;
    private $cart;

    public function add($id, $product, $qtd, $price): void
    {
        $this->products[$id] = [
            'product' => $product,
            'qtd' => $qtd,
            'price' => $price,
            'total' => $qtd * $price
        ];
        $this->cart += $qtd * $price;
    }

    public function remove($id, $qtd): void
    {
        $this->cart -= $qtd * $this->products[$id]["price"];
        if($this->products[$id]["qtd"] > $qtd) {
            $this->products[$id]["qtd"] -= $qtd;
            $this->products[$id]["total"] = $this->products[$id]["qtd"] * $qtd;
        }
        else{
            unset($this->products[$id]);
        }
    }

    public function checkout(User $user, Address $address): void
    {
        $this->setUser($user);
        $this->setAddress($address);
    }

}
