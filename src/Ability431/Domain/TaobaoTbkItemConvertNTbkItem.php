<?php
namespace Topsdk\Topapi\Ability431\Domain;

class TaobaoTbkItemConvertNTbkItem {

    /**
        淘客地址
     **/
    public $click_url;

    /**
        商品ID
     **/
    public $num_iid;

    /**
        原始输入的商品ID
     **/
    public $input_num_iid;


    public function getClickUrl() : string{
        return $this->click_url;
    }

    public function setClickUrl(string $clickUrl){
        $this->click_url = $clickUrl;
    }

    public function getNumIid() : string{
        return $this->num_iid;
    }

    public function setNumIid(string $numIid){
        $this->num_iid = $numIid;
    }

    public function getInputNumIid() : string{
        return $this->input_num_iid;
    }

    public function setInputNumIid(string $inputNumIid){
        $this->input_num_iid = $inputNumIid;
    }


}

