<?php


namespace GooglePasses\WalletObjects\Models;

use Google_Model;

class LoyaltyPointsBalance extends Google_Model
{
    protected $double;
    protected $int;
    protected $string;
    protected $money;

    public function setDouble($double)
    {
        $this->double = $double;
    }
    public function getDouble()
    {
        return $this->double;
    }
    public function setInt($int)
    {
        $this->int = $int;
    }
    public function getInt()
    {
        return $this->int;
    }
    public function setMoney(Money $money)
    {
        $this->money = $money;
    }
    public function getMoney()
    {
        return $this->money;
    }
    public function setString($string)
    {
        $this->string = $string;
    }
    public function getString()
    {
        return $this->string;
    }
}