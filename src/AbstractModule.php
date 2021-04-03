<?php

namespace TinkoffInvest;

class AbstractModule
{
    protected $requester;

    public function __construct(Requester $requester)
    {
        $this->requester = $requester;
    }
}
