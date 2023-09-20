<?php
namespace Topsdk\Topapi\Ability428\Domain;

class TaobaoTbkCouponTemporaryConvertStepRateDto {

    /**
        前N件佣金开始时间，当前N件佣金失效，本字段置空
     **/
    public $topn_start_time;

    /**
        前N件佣金结束时间，当前N件佣金  失效，本字段置空
     **/
    public $topn_end_time;

    /**
        前N件初始总库存，当前N件佣金失效，本字段置空（失效：任务完成、时间结束、商品下架）
     **/
    public $topn_total_count;

    /**
        前N件剩余库存，当前N件佣金失效，本字段置空
     **/
    public $topn_quantity;


    public function getTopnStartTime() : int{
        return $this->topn_start_time;
    }

    public function setTopnStartTime(int $topnStartTime){
        $this->topn_start_time = $topnStartTime;
    }

    public function getTopnEndTime() : int{
        return $this->topn_end_time;
    }

    public function setTopnEndTime(int $topnEndTime){
        $this->topn_end_time = $topnEndTime;
    }

    public function getTopnTotalCount() : int{
        return $this->topn_total_count;
    }

    public function setTopnTotalCount(int $topnTotalCount){
        $this->topn_total_count = $topnTotalCount;
    }

    public function getTopnQuantity() : int{
        return $this->topn_quantity;
    }

    public function setTopnQuantity(int $topnQuantity){
        $this->topn_quantity = $topnQuantity;
    }


}

