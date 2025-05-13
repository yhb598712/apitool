<?php
namespace Topsdk\Topapi\Ability200\Domain;

class TaobaoRefundNegotiatereturnRenderMaxRefundFee {

    /**
        可以协商的最大退款金额
     **/
    public $max_refund_fee;


    public function getMaxRefundFee() : int{
        return $this->max_refund_fee;
    }

    public function setMaxRefundFee(int $maxRefundFee){
        $this->max_refund_fee = $maxRefundFee;
    }


}

