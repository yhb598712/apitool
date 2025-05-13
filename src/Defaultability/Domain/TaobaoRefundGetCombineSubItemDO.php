<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoRefundGetCombineSubItemDO {

    /**
        商品数字编号 
     **/
    public $num_iid;

    /**
        商品标题
     **/
    public $item_name;

    /**
        数量
     **/
    public $quantity;

    /**
        sku_id
     **/
    public $sku_id;

    /**
        商家外部编码(可与商家外部系统对接)
     **/
    public $outer_iid;

    /**
        123
     **/
    public $outer_sku_id;


    public function getNumIid() : string{
        return $this->num_iid;
    }

    public function setNumIid(string $numIid){
        $this->num_iid = $numIid;
    }

    public function getItemName() : string{
        return $this->item_name;
    }

    public function setItemName(string $itemName){
        $this->item_name = $itemName;
    }

    public function getQuantity() : int{
        return $this->quantity;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
    }

    public function getSkuId() : string{
        return $this->sku_id;
    }

    public function setSkuId(string $skuId){
        $this->sku_id = $skuId;
    }

    public function getOuterIid() : string{
        return $this->outer_iid;
    }

    public function setOuterIid(string $outerIid){
        $this->outer_iid = $outerIid;
    }

    public function getOuterSkuId() : string{
        return $this->outer_sku_id;
    }

    public function setOuterSkuId(string $outerSkuId){
        $this->outer_sku_id = $outerSkuId;
    }


}

