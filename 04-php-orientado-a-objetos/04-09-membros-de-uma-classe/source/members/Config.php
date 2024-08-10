<?php

namespace Source\Members;

class Config
{
    public const string COMPANY = "upinside";
    private const string DOMAIN = "upinside.com.br";
    protected const string NUMBER = "12412";

    public static string $nome;
    public static int $idade;

    public static function setConfig(string $nome, int $idade)
    {
        self::$nome = $nome;
        self::$idade = $idade;
    }

    public static function getConfig()
    {
        return self::$nome . " - " . self::$idade;
    }

}
