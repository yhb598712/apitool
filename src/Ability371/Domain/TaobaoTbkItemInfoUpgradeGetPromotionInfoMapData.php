<?php
namespace Topsdk\Topapi\Ability371\Domain;

class TaobaoTbkItemInfoUpgradeGetPromotionInfoMapData {

    /**
        商品一口价格
     **/
    public $reserve_price;

    /**
        折扣价（元） 若属于预售商品，付定金时间内，折扣价=预售价
     **/
    public $zk_final_price;

    /**
        促销信息-预估到手价(元)。若属于预售商品，付定金时间内，预估到手价=预售尾款预估到手价
     **/
    public $final_promotion_price;

    /**
        优惠促销列表
     **/
    public $final_promotion_path_list;

    /**
        标签信息列表
     **/
    public $promotion_tag_list;

    /**
        促销信息-预估凑单价（元）。预估凑单叠加优惠后的商品单价
     **/
    public $predict_rounding_up_price;

    /**
        促销信息-凑单价说明，描述凑单价的实现说明。如 “可凑单”或“需买X件”
     **/
    public $predict_rounding_up_price_desc;

    /**
        更多活动优惠
     **/
    public $more_promotion_list;

    /**
        货品展示标识列表
     **/
    public $activity_tag_list;


    public function getReservePrice() : string{
        return $this->reserve_price;
    }

    public function setReservePrice(string $reservePrice){
        $this->reserve_price = $reservePrice;
    }

    public function getZkFinalPrice() : string{
        return $this->zk_final_price;
    }

    public function setZkFinalPrice(string $zkFinalPrice){
        $this->zk_final_price = $zkFinalPrice;
    }

    public function getFinalPromotionPrice() : string{
        return $this->final_promotion_price;
    }

    public function setFinalPromotionPrice(string $finalPromotionPrice){
        $this->final_promotion_price = $finalPromotionPrice;
    }

    public function getFinalPromotionPathList() : array{
        return $this->final_promotion_path_list;
    }

    public function setFinalPromotionPathList(array $finalPromotionPathList){
        $this->final_promotion_path_list = $finalPromotionPathList;
    }

    public function getPromotionTagList() : array{
        return $this->promotion_tag_list;
    }

    public function setPromotionTagList(array $promotionTagList){
        $this->promotion_tag_list = $promotionTagList;
    }

    public function getPredictRoundingUpPrice() : string{
        return $this->predict_rounding_up_price;
    }

    public function setPredictRoundingUpPrice(string $predictRoundingUpPrice){
        $this->predict_rounding_up_price = $predictRoundingUpPrice;
    }

    public function getPredictRoundingUpPriceDesc() : string{
        return $this->predict_rounding_up_price_desc;
    }

    public function setPredictRoundingUpPriceDesc(string $predictRoundingUpPriceDesc){
        $this->predict_rounding_up_price_desc = $predictRoundingUpPriceDesc;
    }

    public function getMorePromotionList() : array{
        return $this->more_promotion_list;
    }

    public function setMorePromotionList(array $morePromotionList){
        $this->more_promotion_list = $morePromotionList;
    }

    public function getActivityTagList() : array{
        return $this->activity_tag_list;
    }

    public function setActivityTagList(array $activityTagList){
        $this->activity_tag_list = $activityTagList;
    }


}

