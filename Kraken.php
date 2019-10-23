<?php

class Kraken extends KrakenAPI
{

	/**
     * balances recupera il bilancio degli asset dell'account
     * $balances = $api->balances();
     *
     * @return array with error message or array of balances
     * @throws \Exception
     */
    public function balance()
    {
        return $this->QueryPrivate('Balance');
    }

	public function assets()
    {
        return $this->QueryPublic('Assets');
    }

	public function ticker($ticker = 'XBTCZEUR')
    {
        return $this->QueryPublic('Ticker', array('pair' => $ticker));
    }




};
