<?php
namespace Topsdk\Topapi\Ability200\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoRefundDetailGetRequest {

    /**
        退款编号
     **/
    private $refundId;

    /**
        需要返回的字段。目前支持有：allowedOperations,refund_version
     **/
    private $fields;


    public function getRefundId() : int{
        return $this->refundId;
    }

    public function setRefundId(int $refundId){
        $this->refundId = $refundId;
    }

    public function getFields() : array{
        return $this->fields;
    }

    public function setFields(array $fields){
        $this->fields = $fields;
    }


    public function getApiName() : string {
        return "taobao.refund.detail.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->refundId)) {
            $requestParam["refund_id"] = TopUtil::convertBasic($this->refundId);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasicList($this->fields);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

