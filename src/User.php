<?php

namespace TinkoffInvest;

class User extends AbstractModule
{

    private const URI_ACCOUNTS = '/user/accounts';


    public function accounts()
    {
        return $this->requester->get(self::URI_ACCOUNTS);
    }
}
