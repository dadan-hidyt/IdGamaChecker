<?php

namespace DadanDev\IdGamaChecker;

class IdGameChecker
{
    public $url_end_point;
    public Config $config;
    public $merchant_id;
    public function request($game_id, $user_id)
    {
        $url = $this->url_end_point . "merchant/{$this->config->merchant_id}/cek-username/{$game_id}?user_id={$user_id}&signature=" . $this->config->getSignature();
        return @file_get_contents($url);
    }
    public function __construct(Config $config)
    {

        $this->config = $config;
        $this->url_end_point = $this->config->api_endpoint;
    }
    public function checkUserFf($ffid)
    {
        return json_decode($this->request('freefire', $ffid), true);
    }
    public function checkUsernameMobileLegend($mlid)
    {
        return json_decode($this->request('mobilelegend', $mlid), true);
    }
    public function checkUsernameHiggs($higgsId)
    {
        return json_decode($this->request('higgs', $higgsId), true);
    }
}
