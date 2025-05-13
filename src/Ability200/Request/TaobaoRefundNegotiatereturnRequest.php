<?php
namespace Topsdk\Topapi\Ability200\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoRefundNegotiatereturnRequest {

    /**
        退款编号
     **/
    private $refundId;

    /**
        退款版本号
     **/
    private $refundVersion;

    /**
        退款金额，单位（分）
     **/
    private $refundFee;

    /**
        地址ID，通过协商退货退款渲染接口获取到的
     **/
    private $addressId;


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

    public function getRefundFee() : int{
        return $this->refundFee;
    }

    public function setRefundFee(int $refundFee){
        $this->refundFee = $refundFee;
    }

    public function getAddressId() : int{
        return $this->addressId;
    }

    public function setAddressId(int $addressId){
        $this->addressId = $addressId;
    }


    public function getApiName() : string {
        return "taobao.refund.negotiatereturn";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->refundId)) {
            $requestParam["refund_id"] = TopUtil::convertBasic($this->refundId);
        }

        if (!TopUtil::checkEmpty($this->refundVersion)) {
            $requestParam["refund_version"] = TopUtil::convertBasic($this->refundVersion);
        }

        if (!TopUtil::checkEmpty($this->refundFee)) {
            $requestParam["refund_fee"] = TopUtil::convertBasic($this->refundFee);
        }

        if (!TopUtil::checkEmpty($this->addressId)) {
            $requestParam["address_id"] = TopUtil::convertBasic($this->addressId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

