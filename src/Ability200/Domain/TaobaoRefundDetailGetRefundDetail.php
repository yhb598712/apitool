<?php
namespace Topsdk\Topapi\Ability200\Domain;

class TaobaoRefundDetailGetRefundDetail {

    /**
        退款版本号
     **/
    public $refund_version;

    /**
        退款当前可以执行的操作
     **/
    public $allowed_operations;

    /**
        退款当前不可以执行的操作
     **/
    public $not_allowed_operations;


    public function getRefundVersion() : int{
        return $this->refund_version;
    }

    public function setRefundVersion(int $refundVersion){
        $this->refund_version = $refundVersion;
    }

    public function getAllowedOperations() : array{
        return $this->allowed_operations;
    }

    public function setAllowedOperations(array $allowedOperations){
        $this->allowed_operations = $allowedOperations;
    }

    public function getNotAllowedOperations() : array{
        return $this->not_allowed_operations;
    }

    public function setNotAllowedOperations(array $notAllowedOperations){
        $this->not_allowed_operations = $notAllowedOperations;
    }


}

