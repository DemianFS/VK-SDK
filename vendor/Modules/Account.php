<?php

// Позже напишем автозагрузчик и будем использовать неймспейсы
require "Main.php";

class Account extends Main
{
    public function getInfo()
    {
        echo "info";
    }
}