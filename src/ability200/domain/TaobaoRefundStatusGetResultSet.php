<?php
namespace Topsdk\Topapi\Ability200\Domain;

class TaobaoRefundStatusGetResultSet {

    /**
        数组对象
     **/
    public $result_list;

    /**
        错误码，没有表示无异常
     **/
    public $error_code;

    /**
        错误信息
     **/
    public $error_msg;


    public function getResultList() : array{
        return $this->result_list;
    }

    public function setResultList(array $resultList){
        $this->result_list = $resultList;
    }

    public function getErrorCode() : string{
        return $this->error_code;
    }

    public function setErrorCode(string $errorCode){
        $this->error_code = $errorCode;
    }

    public function getErrorMsg() : string{
        return $this->error_msg;
    }

    public function setErrorMsg(string $errorMsg){
        $this->error_msg = $errorMsg;
    }


}

