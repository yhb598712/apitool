<?php
namespace Topsdk\Topapi\Ability428\Domain;

class TaobaoTbkCouponTemporaryConvertRpcResult {

    /**
        data
     **/
    public $results;

    /**
        见错误码描述
     **/
    public $result_code;

    /**
        见错误描述
     **/
    public $result_msg;


    public function getResults() : TaobaoTbkCouponTemporaryConvertMaterialDto{
        return $this->results;
    }

    public function setResults(TaobaoTbkCouponTemporaryConvertMaterialDto $results){
        $this->results = $results;
    }

    public function getResultCode() : int{
        return $this->result_code;
    }

    public function setResultCode(int $resultCode){
        $this->result_code = $resultCode;
    }

    public function getResultMsg() : string{
        return $this->result_msg;
    }

    public function setResultMsg(string $resultMsg){
        $this->result_msg = $resultMsg;
    }


}

