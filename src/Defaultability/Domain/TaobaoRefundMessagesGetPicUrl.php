<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoRefundMessagesGetPicUrl {

    /**
        图片链接地址
     **/
    public $url;


    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


}

