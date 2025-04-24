<?php
namespace Topsdk\Topapi\Ability371\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkItemInfoUpgradeGetRequest {

    /**
        商品ID。多个用","分割，一次最多查询20个
     **/
    private $itemId;

    /**
        ip地址，影响邮费获取，如果不传或者传入不准确，邮费无法精准提供
     **/
    private $ip;

    /**
        1-动态ID转链场景，2-消费者比价场景，3-商品库导购场景（不填默认为1）；场景id使用说明参考《淘宝客新商品ID升级》白皮书：https://www.yuque.com/taobaolianmengguanfangxiaoer/zmig94/tfyt0pahmlpzu2ud
     **/
    private $bizSceneId;

    /**
        1-自购省，2-推广赚（代理模式专属ID，代理模式必填，非代理模式不用填写该字段）
     **/
    private $promotionType;

    /**
        渠道关系ID，仅适用于渠道推广场景
     **/
    private $relationId;

    /**
        商品库服务账户(场景id3权限对应的memberid）
     **/
    private $manageItemPubId;

    /**
        是否获取单品淘礼金剩余数量，0-否，1-是，默认否(仅开通淘礼金权限媒体可查)
     **/
    private $getTljInfo;


    public function getItemId() : string{
        return $this->itemId;
    }

    public function setItemId(string $itemId){
        $this->itemId = $itemId;
    }

    public function getIp() : string{
        return $this->ip;
    }

    public function setIp(string $ip){
        $this->ip = $ip;
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

    public function getRelationId() : string{
        return $this->relationId;
    }

    public function setRelationId(string $relationId){
        $this->relationId = $relationId;
    }

    public function getManageItemPubId() : int{
        return $this->manageItemPubId;
    }

    public function setManageItemPubId(int $manageItemPubId){
        $this->manageItemPubId = $manageItemPubId;
    }

    public function getGetTljInfo() : int{
        return $this->getTljInfo;
    }

    public function setGetTljInfo(int $getTljInfo){
        $this->getTljInfo = $getTljInfo;
    }


    public function getApiName() : string {
        return "taobao.tbk.item.info.upgrade.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->ip)) {
            $requestParam["ip"] = TopUtil::convertBasic($this->ip);
        }

        if (!TopUtil::checkEmpty($this->bizSceneId)) {
            $requestParam["biz_scene_id"] = TopUtil::convertBasic($this->bizSceneId);
        }

        if (!TopUtil::checkEmpty($this->promotionType)) {
            $requestParam["promotion_type"] = TopUtil::convertBasic($this->promotionType);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->manageItemPubId)) {
            $requestParam["manage_item_pub_id"] = TopUtil::convertBasic($this->manageItemPubId);
        }

        if (!TopUtil::checkEmpty($this->getTljInfo)) {
            $requestParam["get_tlj_info"] = TopUtil::convertBasic($this->getTljInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

