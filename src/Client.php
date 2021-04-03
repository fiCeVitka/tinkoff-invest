<?php

namespace TinkoffInvest;

class Client
{
    private $token;
    private $requester;
    private $production;
    private $accountId;

    public function __construct(string $token, bool $production = true)
    {
        $this->token = $token;
        $this->production = $production;

        $this->requester = new Requester($token, $production);
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


    public function getRequester(): Requester
    {
        return $this->requester;
    }


    public function user(): User
    {
        return new User($this->getRequester());
    }

}
