<?php

namespace TinkoffInvest;

class Market extends AbstractModule
{

    private const URI_STOCKS = '/market/stocks';


    public function stocks()
    {
        return $this->requester->get(self::URI_STOCKS);
    }
}
