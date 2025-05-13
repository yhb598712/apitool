<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoRefundMessagesGetRequest {

    /**
        需返回的字段列表。可选值：RefundMessage结构体中的所有字段，以半角逗号(,)分隔。
     **/
    private $fields;

    /**
        页码
     **/
    private $pageNo;

    /**
        每页条数
     **/
    private $pageSize;

    /**
        退款单号
     **/
    private $refundId;

    /**
        退款阶段，可选值：onsale（售中），aftersale（售后），天猫退款为必传。
     **/
    private $refundPhase;


    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getRefundId() : int{
        return $this->refundId;
    }

    public function setRefundId(int $refundId){
        $this->refundId = $refundId;
    }

    public function getRefundPhase() : string{
        return $this->refundPhase;
    }

    public function setRefundPhase(string $refundPhase){
        $this->refundPhase = $refundPhase;
    }


    public function getApiName() : string {
        return "taobao.refund.messages.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->refundId)) {
            $requestParam["refund_id"] = TopUtil::convertBasic($this->refundId);
        }

        if (!TopUtil::checkEmpty($this->refundPhase)) {
            $requestParam["refund_phase"] = TopUtil::convertBasic($this->refundPhase);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

