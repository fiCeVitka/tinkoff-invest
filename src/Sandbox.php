<?php

namespace TinkoffInvest;

class Sandbox extends AbstractModule
{

    private const URI_REGISTER = '/sandbox/register';


    public function register()
    {
        return $this->requester->post(self::URI_REGISTER);
    }
}
