<?php
namespace Topsdk\Topapi\Ability428\Domain;

class TaobaoTbkCouponConvertMaterialDto {

    /**
        优惠券剩余量
     **/
    public $coupon_remain_count;

    /**
        优惠券总量
     **/
    public $coupon_total_count;

    /**
        优惠券面额
     **/
    public $coupon_info;

    /**
        优惠券结束时间
     **/
    public $coupon_end_time;

    /**
        优惠券开始时间
     **/
    public $coupon_start_time;

    /**
        商品优惠券推广链接
     **/
    public $coupon_click_url;

    /**
        后台一级类目
     **/
    public $category_id;

    /**
        当不入参special_id、relation_id、external_id时，展示常规佣金率(%)
     **/
    public $max_commission_rate;

    /**
        商品id
     **/
    public $item_id;

    /**
        商品淘客链接
     **/
    public $item_url;

    /**
        预售有礼-推广链接
     **/
    public $ysyl_click_url;

    /**
        预售有礼-预估淘礼金（元）
     **/
    public $ysyl_tlj_face;

    /**
        预售有礼-淘礼金发放时间
     **/
    public $ysyl_tlj_send_time;

    /**
        预售有礼-淘礼金使用开始时间
     **/
    public $ysyl_tlj_use_start_time;

    /**
        预售有礼-佣金比例（%）（ 预售有礼活动享受的推广佣金比例，注：推广该活动有特殊分成规则，请详见：https://tbk.bbs.taobao.com/detail.html?appId=45301&postId=9334376 ）
     **/
    public $ysyl_commission_rate;

    /**
        预售有礼-淘礼金使用结束时间
     **/
    public $ysyl_tlj_use_end_time;

    /**
        当入参special_id、relation_id、external_id时，该字段展示预估最低佣金率(%)
     **/
    public $min_commission_rate;

    /**
        比价场景专用，当系统检测到入参消费者ID购买当前商品会获得《天天开彩蛋》玩法的彩蛋时，该字段显示1，否则为0
     **/
    public $reward_info;

    /**
        计划类型，0代表通用计划，1代表定向计划，2代表鹊桥计划，3代表营销计划
     **/
    public $campaign_type;

    /**
        优惠券(商品优惠券推广链接中的券)类型，1 公开券，2 私有券，3 妈妈券
     **/
    public $coupon_type;

    /**
        前N件佣金信息-当入参get_topn_rate=1，前N件佣金生效且最高，透出该组字段
     **/
    public $topn_info;

    /**
        小程序链接(暂未对外开放)
     **/
    public $mini_program;

    /**
        转链成功的场景下，需要补充说明的信息
     **/
    public $extra_info;


    public function getCouponRemainCount() : int{
        return $this->coupon_remain_count;
    }

    public function setCouponRemainCount(int $couponRemainCount){
        $this->coupon_remain_count = $couponRemainCount;
    }

    public function getCouponTotalCount() : int{
        return $this->coupon_total_count;
    }

    public function setCouponTotalCount(int $couponTotalCount){
        $this->coupon_total_count = $couponTotalCount;
    }

    public function getCouponInfo() : string{
        return $this->coupon_info;
    }

    public function setCouponInfo(string $couponInfo){
        $this->coupon_info = $couponInfo;
    }

    public function getCouponEndTime() : string{
        return $this->coupon_end_time;
    }

    public function setCouponEndTime(string $couponEndTime){
        $this->coupon_end_time = $couponEndTime;
    }

    public function getCouponStartTime() : string{
        return $this->coupon_start_time;
    }

    public function setCouponStartTime(string $couponStartTime){
        $this->coupon_start_time = $couponStartTime;
    }

    public function getCouponClickUrl() : string{
        return $this->coupon_click_url;
    }

    public function setCouponClickUrl(string $couponClickUrl){
        $this->coupon_click_url = $couponClickUrl;
    }

    public function getCategoryId() : int{
        return $this->category_id;
    }

    public function setCategoryId(int $categoryId){
        $this->category_id = $categoryId;
    }

    public function getMaxCommissionRate() : string{
        return $this->max_commission_rate;
    }

    public function setMaxCommissionRate(string $maxCommissionRate){
        $this->max_commission_rate = $maxCommissionRate;
    }

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getItemUrl() : string{
        return $this->item_url;
    }

    public function setItemUrl(string $itemUrl){
        $this->item_url = $itemUrl;
    }

    public function getYsylClickUrl() : string{
        return $this->ysyl_click_url;
    }

    public function setYsylClickUrl(string $ysylClickUrl){
        $this->ysyl_click_url = $ysylClickUrl;
    }

    public function getYsylTljFace() : string{
        return $this->ysyl_tlj_face;
    }

    public function setYsylTljFace(string $ysylTljFace){
        $this->ysyl_tlj_face = $ysylTljFace;
    }

    public function getYsylTljSendTime() : string{
        return $this->ysyl_tlj_send_time;
    }

    public function setYsylTljSendTime(string $ysylTljSendTime){
        $this->ysyl_tlj_send_time = $ysylTljSendTime;
    }

    public function getYsylTljUseStartTime() : string{
        return $this->ysyl_tlj_use_start_time;
    }

    public function setYsylTljUseStartTime(string $ysylTljUseStartTime){
        $this->ysyl_tlj_use_start_time = $ysylTljUseStartTime;
    }

    public function getYsylCommissionRate() : string{
        return $this->ysyl_commission_rate;
    }

    public function setYsylCommissionRate(string $ysylCommissionRate){
        $this->ysyl_commission_rate = $ysylCommissionRate;
    }

    public function getYsylTljUseEndTime() : string{
        return $this->ysyl_tlj_use_end_time;
    }

    public function setYsylTljUseEndTime(string $ysylTljUseEndTime){
        $this->ysyl_tlj_use_end_time = $ysylTljUseEndTime;
    }

    public function getMinCommissionRate() : string{
        return $this->min_commission_rate;
    }

    public function setMinCommissionRate(string $minCommissionRate){
        $this->min_commission_rate = $minCommissionRate;
    }

    public function getRewardInfo() : int{
        return $this->reward_info;
    }

    public function setRewardInfo(int $rewardInfo){
        $this->reward_info = $rewardInfo;
    }

    public function getCampaignType() : int{
        return $this->campaign_type;
    }

    public function setCampaignType(int $campaignType){
        $this->campaign_type = $campaignType;
    }

    public function getCouponType() : int{
        return $this->coupon_type;
    }

    public function setCouponType(int $couponType){
        $this->coupon_type = $couponType;
    }

    public function getTopnInfo() : TaobaoTbkCouponConvertStepRateDto{
        return $this->topn_info;
    }

    public function setTopnInfo(TaobaoTbkCouponConvertStepRateDto $topnInfo){
        $this->topn_info = $topnInfo;
    }

    public function getMiniProgram() : TaobaoTbkCouponConvertMiniProgramDto{
        return $this->mini_program;
    }

    public function setMiniProgram(TaobaoTbkCouponConvertMiniProgramDto $miniProgram){
        $this->mini_program = $miniProgram;
    }

    public function getExtraInfo() : string{
        return $this->extra_info;
    }

    public function setExtraInfo(string $extraInfo){
        $this->extra_info = $extraInfo;
    }


}

