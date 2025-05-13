<?php
namespace Topsdk\Topapi\Ability371\Domain;

class TaobaoTbkItemInfoUpgradeGetPublishInfo {

    /**
        商品信息-收入比率(商品佣金比率+补贴比率)。15.5表示15.5%
     **/
    public $income_rate;

    /**
        前N件佣金信息-前N件佣金生效或预热时透出以下字段
     **/
    public $topn_info;

    /**
        单品淘礼金今日剩余可创建个数
     **/
    public $tlj_remain_num;

    /**
        两小时推广销量。 非实时，约半小时更新
     **/
    public $two_hour_promotion_sales;

    /**
        当天推广销量。 非实时，约1小时更新
     **/
    public $daily_promotion_sales;


    public function getIncomeRate() : string{
        return $this->income_rate;
    }

    public function setIncomeRate(string $incomeRate){
        $this->income_rate = $incomeRate;
    }

    public function getTopnInfo() : TaobaoTbkItemInfoUpgradeGetTopNInfoDTO{
        return $this->topn_info;
    }

    public function setTopnInfo(TaobaoTbkItemInfoUpgradeGetTopNInfoDTO $topnInfo){
        $this->topn_info = $topnInfo;
    }

    public function getTljRemainNum() : int{
        return $this->tlj_remain_num;
    }

    public function setTljRemainNum(int $tljRemainNum){
        $this->tlj_remain_num = $tljRemainNum;
    }

    public function getTwoHourPromotionSales() : int{
        return $this->two_hour_promotion_sales;
    }

    public function setTwoHourPromotionSales(int $twoHourPromotionSales){
        $this->two_hour_promotion_sales = $twoHourPromotionSales;
    }

    public function getDailyPromotionSales() : int{
        return $this->daily_promotion_sales;
    }

    public function setDailyPromotionSales(int $dailyPromotionSales){
        $this->daily_promotion_sales = $dailyPromotionSales;
    }


}

