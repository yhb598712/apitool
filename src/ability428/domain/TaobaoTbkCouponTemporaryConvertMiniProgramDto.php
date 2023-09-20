<?php
namespace Topsdk\Topapi\Ability428\Domain;

class TaobaoTbkCouponTemporaryConvertMiniProgramDto {

    /**
        小程序APPID
     **/
    public $mini_program_appid;

    /**
        小程序路径
     **/
    public $mini_program_path;

    /**
        小程序码url地址
     **/
    public $mini_program_qrcode_url;


    public function getMiniProgramAppid() : string{
        return $this->mini_program_appid;
    }

    public function setMiniProgramAppid(string $miniProgramAppid){
        $this->mini_program_appid = $miniProgramAppid;
    }

    public function getMiniProgramPath() : string{
        return $this->mini_program_path;
    }

    public function setMiniProgramPath(string $miniProgramPath){
        $this->mini_program_path = $miniProgramPath;
    }

    public function getMiniProgramQrcodeUrl() : string{
        return $this->mini_program_qrcode_url;
    }

    public function setMiniProgramQrcodeUrl(string $miniProgramQrcodeUrl){
        $this->mini_program_qrcode_url = $miniProgramQrcodeUrl;
    }


}

