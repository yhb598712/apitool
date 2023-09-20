<?php
namespace Topsdk\Topapi\Ability431\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkShopConvertRequest {

    /**
        广告位ID，区分效果位置
     **/
    private $adzoneId;

    /**
        需返回的字段列表
     **/
    private $fields;

    /**
        链接形式：1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
        自定义输入串，英文和数字组成，长度不能大于12个字符，区分不同的推广渠道
     **/
    private $unid;

    /**
        卖家ID串，用','分割，从taobao.tbk.shop.get接口获取user_id字段
     **/
    private $userIds;


    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getFields() : string{
        return $this->fields;
    }

    public function setFields(string $fields){
        $this->fields = $fields;
    }

    public function getPlatform() : int{
        return $this->platform;
    }

    public function setPlatform(int $platform){
        $this->platform = $platform;
    }

    public function getUnid() : string{
        return $this->unid;
    }

    public function setUnid(string $unid){
        $this->unid = $unid;
    }

    public function getUserIds() : string{
        return $this->userIds;
    }

    public function setUserIds(string $userIds){
        $this->userIds = $userIds;
    }


    public function getApiName() : string {
        return "taobao.tbk.shop.convert";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->fields)) {
            $requestParam["fields"] = TopUtil::convertBasic($this->fields);
        }

        if (!TopUtil::checkEmpty($this->platform)) {
            $requestParam["platform"] = TopUtil::convertBasic($this->platform);
        }

        if (!TopUtil::checkEmpty($this->unid)) {
            $requestParam["unid"] = TopUtil::convertBasic($this->unid);
        }

        if (!TopUtil::checkEmpty($this->userIds)) {
            $requestParam["user_ids"] = TopUtil::convertBasic($this->userIds);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

