<?php
namespace Topsdk\Topapi\Ability428\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkCouponConvertRequest {

    /**
        推广位id，mm_xx_xx_xx pid三段式中的第三段
     **/
    private $adzoneId;

    /**
        淘客商品id
     **/
    private $itemId;

    /**
        1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
        渠道管理ID（如是主站选品推广场景，必须入参该字段，且bizSceneId字段需入参2-消费者比价场景，否则二次转链失败）
     **/
    private $relationId;

    /**
        会员运营ID
     **/
    private $specialId;

    /**
        淘宝客外部用户标记，如自身系统账户ID；微信ID等
     **/
    private $externalId;

    /**
        团长与下游渠道合作的特殊标识，用于统计渠道推广效果
     **/
    private $xid;

    /**
        会员人群ID，用于统计人群推广效果
     **/
    private $ucrowdId;

    /**
        是否获取前N件佣金	,0-否，1-是,其他值-否
     **/
    private $getTopnRate;

    /**
        是否需要获取小程序链接，需要设置1。(暂未对外开放)
     **/
    private $miniProgramLink;

    /**
        1-动态ID转链场景，2-消费者比价场景，3-商品库导购场景（不填默认为1）
     **/
    private $bizSceneId;

    /**
        1-自购省，2-推广赚（代理模式专属ID，代理模式必填，其它模式不用填写本字段）
     **/
    private $promotionType;

    /**
        商品库服务账户(场景id3权限对应的memberid）
     **/
    private $manageItemPubId;

    /**
        入参商品id下的skuid，传入时会透传至转链结果url中
     **/
    private $skuId;


    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getItemId() : string{
        return $this->itemId;
    }

    public function setItemId(string $itemId){
        $this->itemId = $itemId;
    }

    public function getPlatform() : int{
        return $this->platform;
    }

    public function setPlatform(int $platform){
        $this->platform = $platform;
    }

    public function getRelationId() : string{
        return $this->relationId;
    }

    public function setRelationId(string $relationId){
        $this->relationId = $relationId;
    }

    public function getSpecialId() : string{
        return $this->specialId;
    }

    public function setSpecialId(string $specialId){
        $this->specialId = $specialId;
    }

    public function getExternalId() : string{
        return $this->externalId;
    }

    public function setExternalId(string $externalId){
        $this->externalId = $externalId;
    }

    public function getXid() : string{
        return $this->xid;
    }

    public function setXid(string $xid){
        $this->xid = $xid;
    }

    public function getUcrowdId() : int{
        return $this->ucrowdId;
    }

    public function setUcrowdId(int $ucrowdId){
        $this->ucrowdId = $ucrowdId;
    }

    public function getGetTopnRate() : int{
        return $this->getTopnRate;
    }

    public function setGetTopnRate(int $getTopnRate){
        $this->getTopnRate = $getTopnRate;
    }

    public function getMiniProgramLink() : int{
        return $this->miniProgramLink;
    }

    public function setMiniProgramLink(int $miniProgramLink){
        $this->miniProgramLink = $miniProgramLink;
    }

    public function getBizSceneId() : string{
        return $this->bizSceneId;
    }

    public function setBizSceneId(string $bizSceneId){
        $this->bizSceneId = $bizSceneId;
    }

    public function getPromotionType() : string{
        return $this->promotionType;
    }

    public function setPromotionType(string $promotionType){
        $this->promotionType = $promotionType;
    }

    public function getManageItemPubId() : int{
        return $this->manageItemPubId;
    }

    public function setManageItemPubId(int $manageItemPubId){
        $this->manageItemPubId = $manageItemPubId;
    }

    public function getSkuId() : int{
        return $this->skuId;
    }

    public function setSkuId(int $skuId){
        $this->skuId = $skuId;
    }


    public function getApiName() : string {
        return "taobao.tbk.coupon.convert";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->platform)) {
            $requestParam["platform"] = TopUtil::convertBasic($this->platform);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->specialId)) {
            $requestParam["special_id"] = TopUtil::convertBasic($this->specialId);
        }

        if (!TopUtil::checkEmpty($this->externalId)) {
            $requestParam["external_id"] = TopUtil::convertBasic($this->externalId);
        }

        if (!TopUtil::checkEmpty($this->xid)) {
            $requestParam["xid"] = TopUtil::convertBasic($this->xid);
        }

        if (!TopUtil::checkEmpty($this->ucrowdId)) {
            $requestParam["ucrowd_id"] = TopUtil::convertBasic($this->ucrowdId);
        }

        if (!TopUtil::checkEmpty($this->getTopnRate)) {
            $requestParam["get_topn_rate"] = TopUtil::convertBasic($this->getTopnRate);
        }

        if (!TopUtil::checkEmpty($this->miniProgramLink)) {
            $requestParam["mini_program_link"] = TopUtil::convertBasic($this->miniProgramLink);
        }

        if (!TopUtil::checkEmpty($this->bizSceneId)) {
            $requestParam["biz_scene_id"] = TopUtil::convertBasic($this->bizSceneId);
        }

        if (!TopUtil::checkEmpty($this->promotionType)) {
            $requestParam["promotion_type"] = TopUtil::convertBasic($this->promotionType);
        }

        if (!TopUtil::checkEmpty($this->manageItemPubId)) {
            $requestParam["manage_item_pub_id"] = TopUtil::convertBasic($this->manageItemPubId);
        }

        if (!TopUtil::checkEmpty($this->skuId)) {
            $requestParam["sku_id"] = TopUtil::convertBasic($this->skuId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

