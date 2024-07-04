<?php

namespace Source\Interpretation;

class Product
{
    public $name;
    private $price;
    private $data;

    public function __set(string $name, $value): void
    {
        $this->notFound(__FUNCTION__, $name);
        $this->data[$name] = $value;
    }

    public function __isset(string $name)
    {
        $this->notFound(__FUNCTION__, $name);
    }

    public function __get(string $name)
    {
        if($this->data[$name]) return $this->data[$name];
        else $this->notFound(__FUNCTION__, $name);
    }

    public function __call(string $name, array $arguments): void
    {
        $this->notFound(__FUNCTION__, $name);
        var_dump($arguments);
    }

    public function __toString(): string
    {
        return "<p class='trigger warning'>Objeto não pode ser impresso.</p>";
    }

    public function __unset(string $name): void
    {
        trigger_error(__FUNCTION__ . ": Acesso negado a propriedade {$name}", E_USER_WARNING,);
    }

    public function handler($name, $price): void
    {
        $this->name = $name;
        $this->price = number_format($price, 2, ',', '.');
    }

    private function notFound($method, $name): void
    {
        echo "<p class='trigger error'>{$method}: A propriedade {$name} não existe em ".__CLASS__."</p>";
    }
}
