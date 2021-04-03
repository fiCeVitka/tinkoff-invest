<?php

namespace TinkoffInvest;

class Requester
{

    private const URI_PRODUCTION_PREFIX = 'https://api-invest.tinkoff.ru/openapi/';
    private const URI_SANDBOX_PREFIX = 'https://api-invest.tinkoff.ru/openapi/sandbox';

    private $guzzle;
    private $production;


    public function __construct(string $token, bool $production = true)
    {
        $this->guzzle = new \GuzzleHttp\Client(
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
            ]
        );
        $this->production = $production;
    }


    public function request(string $method, string $uri, array $params)
    {
        $request = $this->guzzle->request($method, ($this->production ? self::URI_PRODUCTION_PREFIX : self::URI_SANDBOX_PREFIX) . $uri, $params);

        // todo: обработать тут логику по-человечески
        $jsonResponse = json_decode($request->getBody()->getContents(), true);

        return $jsonResponse;
    }


    public function post(string $uri, array $params = [])
    {
        return $this->request('POST', $uri, $params);
    }


    public function get(string $uri, array $params = [])
    {
        return $this->request('GET', $uri, $params);
    }
}
