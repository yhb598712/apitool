<?php
namespace Topsdk\Topapi\Ability200\Domain;

class TaobaoRefundStatusGetRefundQueryByOrderIdRequest {

    /**
        订单号
     **/
    public $biz_order_id;


    public function getBizOrderId() : int{
        return $this->biz_order_id;
    }

    public function setBizOrderId(int $bizOrderId){
        $this->biz_order_id = $bizOrderId;
    }


}

