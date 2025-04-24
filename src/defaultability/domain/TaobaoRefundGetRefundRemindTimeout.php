<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoRefundGetRefundRemindTimeout {

    /**
        是否存在超时。可选值:true(是),false(否)
     **/
    public $exist_timeout;

    /**
        提醒的类型（退款详情中提示信息的类型）
     **/
    public $remind_type;

    /**
        超时时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $timeout;


    public function getExistTimeout() : bool{
        return $this->exist_timeout;
    }

    public function setExistTimeout(bool $existTimeout){
        $this->exist_timeout = $existTimeout;
    }

    public function getRemindType() : int{
        return $this->remind_type;
    }

    public function setRemindType(int $remindType){
        $this->remind_type = $remindType;
    }

    public function getTimeout() : string{
        return $this->timeout;
    }

    public function setTimeout(string $timeout){
        $this->timeout = $timeout;
    }


}

