<?php
namespace Topsdk\Topapi\Ability200\Domain;

class TaobaoRefundNegotiatereturnRenderReason {

    /**
        退款原因ID
     **/
    public $reason_id;

    /**
        退款原因文案
     **/
    public $reason_text;


    public function getReasonId() : int{
        return $this->reason_id;
    }

    public function setReasonId(int $reasonId){
        $this->reason_id = $reasonId;
    }

    public function getReasonText() : string{
        return $this->reason_text;
    }

    public function setReasonText(string $reasonText){
        $this->reason_text = $reasonText;
    }


}

