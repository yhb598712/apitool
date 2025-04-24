<?php
namespace Topsdk\Topapi\Ability200\Domain;

class TaobaoRefundStatusGetQueryRefundStatusResponse {

    /**
        退款单id
     **/
    public $refund_id;

    /**
        淘宝交易单号
     **/
    public $tid;

    /**
        子订单号
     **/
    public $oid;

    /**
        更新时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $modified;

    /**
        退款状态。可选值WAIT_SELLER_AGREE(买家已经申请退款，等待卖家同意) WAIT_BUYER_RETURN_GOODS(卖家已经同意退款，等待买家退货) WAIT_SELLER_CONFIRM_GOODS(买家已经退货，等待卖家确认收货) SELLER_REFUSE_BUYER(卖家拒绝退款) CLOSED(退款关闭) SUCCESS(退款成功)
     **/
    public $status;


    public function getRefundId() : int{
        return $this->refund_id;
    }

    public function setRefundId(int $refundId){
        $this->refund_id = $refundId;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getOid() : int{
        return $this->oid;
    }

    public function setOid(int $oid){
        $this->oid = $oid;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }


}

