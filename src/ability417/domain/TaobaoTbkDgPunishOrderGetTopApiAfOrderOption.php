<?php
namespace Topsdk\Topapi\Ability417\Domain;

class TaobaoTbkDgPunishOrderGetTopApiAfOrderOption {

    /**
        渠道关系id
     **/
    public $relation_id;

    /**
        子订单号
     **/
    public $tb_trade_id;

    /**
        此参数不再使用，请勿入参
     **/
    public $tb_trade_parent_id;

    /**
        pagesize
     **/
    public $page_size;

    /**
        pageNo
     **/
    public $page_no;

    /**
        查询时间跨度，不超过30天，单位是天
     **/
    public $span;

    /**
        查询开始时间，以taoke订单创建时间开始
     **/
    public $start_time;

    /**
        此参数不再使用，请勿入参
     **/
    public $special_id;

    /**
        pid中的第三段，adzoneId
     **/
    public $adzone_id;

    /**
        pid中的第二段，siteId
     **/
    public $site_id;

    /**
        此参数不再使用，请勿入参
     **/
    public $violation_type;

    /**
        此参数不再使用，请勿入参
     **/
    public $punish_status;


    public function getRelationId() : int{
        return $this->relation_id;
    }

    public function setRelationId(int $relationId){
        $this->relation_id = $relationId;
    }

    public function getTbTradeId() : int{
        return $this->tb_trade_id;
    }

    public function setTbTradeId(int $tbTradeId){
        $this->tb_trade_id = $tbTradeId;
    }

    public function getTbTradeParentId() : int{
        return $this->tb_trade_parent_id;
    }

    public function setTbTradeParentId(int $tbTradeParentId){
        $this->tb_trade_parent_id = $tbTradeParentId;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getSpan() : int{
        return $this->span;
    }

    public function setSpan(int $span){
        $this->span = $span;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getSpecialId() : int{
        return $this->special_id;
    }

    public function setSpecialId(int $specialId){
        $this->special_id = $specialId;
    }

    public function getAdzoneId() : int{
        return $this->adzone_id;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzone_id = $adzoneId;
    }

    public function getSiteId() : int{
        return $this->site_id;
    }

    public function setSiteId(int $siteId){
        $this->site_id = $siteId;
    }

    public function getViolationType() : int{
        return $this->violation_type;
    }

    public function setViolationType(int $violationType){
        $this->violation_type = $violationType;
    }

    public function getPunishStatus() : int{
        return $this->punish_status;
    }

    public function setPunishStatus(int $punishStatus){
        $this->punish_status = $punishStatus;
    }


}

