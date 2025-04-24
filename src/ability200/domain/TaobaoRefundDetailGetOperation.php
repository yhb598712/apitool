<?php
namespace Topsdk\Topapi\Ability200\Domain;

class TaobaoRefundDetailGetOperation {

    /**
        操作编码
     **/
    public $operation_code;

    /**
        操作提示文案
     **/
    public $tips;


    public function getOperationCode() : string{
        return $this->operation_code;
    }

    public function setOperationCode(string $operationCode){
        $this->operation_code = $operationCode;
    }

    public function getTips() : string{
        return $this->tips;
    }

    public function setTips(string $tips){
        $this->tips = $tips;
    }


}

