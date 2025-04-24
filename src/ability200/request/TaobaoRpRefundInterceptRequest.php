<?php
namespace Topsdk\Topapi\Ability200\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoRpRefundInterceptRequest {

    /**
        退款编号
     **/
    private $refundId;

    /**
        退款版本号
     **/
    private $refundVersion;


    public function getRefundId() : int{
        return $this->refundId;
    }

    public function setRefundId(int $refundId){
        $this->refundId = $refundId;
    }

    public function getRefundVersion() : int{
        return $this->refundVersion;
    }

    public function setRefundVersion(int $refundVersion){
        $this->refundVersion = $refundVersion;
    }


    public function getApiName() : string {
        return "taobao.rp.refund.intercept";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->refundId)) {
            $requestParam["refund_id"] = TopUtil::convertBasic($this->refundId);
        }

        if (!TopUtil::checkEmpty($this->refundVersion)) {
            $requestParam["refund_version"] = TopUtil::convertBasic($this->refundVersion);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

