<?php

use Modules\Account;

class VK
{
    public $account;

    public function __construct()
    {
        $this->account = new Account();
    }
}