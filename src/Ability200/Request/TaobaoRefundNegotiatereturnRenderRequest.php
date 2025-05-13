<?php
namespace Topsdk\Topapi\Ability200\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoRefundNegotiatereturnRenderRequest {

    /**
        退款编号
     **/
    private $refundId;


    public function getRefundId() : int{
        return $this->refundId;
    }

    public function setRefundId(int $refundId){
        $this->refundId = $refundId;
    }


    public function getApiName() : string {
        return "taobao.refund.negotiatereturn.render";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->refundId)) {
            $requestParam["refund_id"] = TopUtil::convertBasic($this->refundId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

