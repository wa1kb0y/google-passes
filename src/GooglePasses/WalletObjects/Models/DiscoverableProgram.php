<?php

namespace GooglePasses\WalletObjects\Models;

use GooglePasses\WalletObjects\Collections\DiscoverableProgramMerchantSignupInfo;

class DiscoverableProgram extends \Google_Model
{
    public $state;

    protected $merchantSignupInfo;
    protected $merchantSignupInfoType = DiscoverableProgramMerchantSignupInfo::class;
    protected $merchantSignupInfoDataType = '';

    protected $merchantSigninInfo;
    protected $merchantSigninInfoType = DiscoverableProgramMerchantSigninInfo::class;
    protected $merchantSigninInfoDataType = '';

    public function setMerchantSigninInfo(DiscoverableProgramMerchantSigninInfo $merchantSigninInfo)
    {
        $this->merchantSigninInfo = $merchantSigninInfo;
    }

    public function getMerchantSigninInfo()
    {
        return $this->merchantSigninInfo;
    }

    public function setMerchantSignupInfo(DiscoverableProgramMerchantSignupInfo $merchantSignupInfo)
    {
        $this->merchantSignupInfo = $merchantSignupInfo;
    }

    public function getMerchantSignupInfo()
    {
        return $this->merchantSignupInfo;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}