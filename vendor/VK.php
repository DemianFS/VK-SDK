<?php

require "Modules/Account.php";

class VK
{
    public $account;

    public function __construct()
    {
        $this->account = new Account();
    }
}