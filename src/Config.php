<?php

namespace DadanDev\IdGamaChecker;


class Config
{
    public $merchant_id = '';
    public $secret_key = '';
    public $api_endpoint = 'https://v1.apigames.id/';
    public function __construct(
        $secret_key = null,
        $merchant_id = null,
    ) {
        $this->setSecretKey($secret_key);
        $this->setMerchantId($merchant_id);
    }
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
    }
    public function setSecretKey($secret_key)
    {
        $this->secret_key = $secret_key;
    }
    public function getSignature()
    {
        return md5($this->merchant_id . $this->secret_key);
    }
}
