<?php

use Modules\Account;
use Modules\AccessToken;
use Modules\Users;

class VK
{
    /**
     * @var Account
     */
    public $account;

    /**
     * @var AccessToken
     */
    public $access_token;

    /**
     * @var Users
     */
    //public $users;

    /**
     * VK constructor.
     */
    public function __construct()
    {
        $this->account = new Account();
        $this->access_token = new AccessToken();
        //$this->users = new Users();

        return $this;
    }
}
