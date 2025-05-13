<?php
namespace Topsdk\Topapi\Ability431\Domain;

class TaobaoTbkShopConvertNTbkShop {

    /**
        卖家ID
     **/
    public $user_id;

    /**
        淘客地址
     **/
    public $click_url;


    public function getUserId() : int{
        return $this->user_id;
    }

    public function setUserId(int $userId){
        $this->user_id = $userId;
    }

    public function getClickUrl() : string{
        return $this->click_url;
    }

    public function setClickUrl(string $clickUrl){
        $this->click_url = $clickUrl;
    }


}

