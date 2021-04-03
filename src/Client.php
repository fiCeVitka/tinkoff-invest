<?php

namespace TinkoffInvest;

class Client
{
    private $token;
    private $production;
    private $accountId;

    public function __construct(string $token, bool $production = true)
    {
        $this->token = $token;
        $this->production = $production;
    }


    public function isProduction(): bool
    {
        return $this->production;
    }


    public function setAccountId(string $accountId): void
    {
        $this->accountId = $accountId;
    }


    public function getAccountId(): string
    {
        return $this->accountId;
    }

}
