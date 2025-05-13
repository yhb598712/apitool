<?php
namespace Topsdk\Topapi\Ability371\Domain;

class TaobaoTbkItemInfoUpgradeGetTbkItemDetail {

    /**
        商品ID
     **/
    public $item_id;

    /**
        淘客推广信息
     **/
    public $publish_info;

    /**
        价格促销信息
     **/
    public $price_promotion_info;

    /**
        输入的（新）商品ID
     **/
    public $input_item_iid;

    /**
        商品基本信息
     **/
    public $item_basic_info;

    /**
        预售信息
     **/
    public $presale_info;


    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getPublishInfo() : TaobaoTbkItemInfoUpgradeGetPublishInfo{
        return $this->publish_info;
    }

    public function setPublishInfo(TaobaoTbkItemInfoUpgradeGetPublishInfo $publishInfo){
        $this->publish_info = $publishInfo;
    }

    public function getPricePromotionInfo() : TaobaoTbkItemInfoUpgradeGetPromotionInfoMapData{
        return $this->price_promotion_info;
    }

    public function setPricePromotionInfo(TaobaoTbkItemInfoUpgradeGetPromotionInfoMapData $pricePromotionInfo){
        $this->price_promotion_info = $pricePromotionInfo;
    }

    public function getInputItemIid() : string{
        return $this->input_item_iid;
    }

    public function setInputItemIid(string $inputItemIid){
        $this->input_item_iid = $inputItemIid;
    }

    public function getItemBasicInfo() : TaobaoTbkItemInfoUpgradeGetBasicMapData{
        return $this->item_basic_info;
    }

    public function setItemBasicInfo(TaobaoTbkItemInfoUpgradeGetBasicMapData $itemBasicInfo){
        $this->item_basic_info = $itemBasicInfo;
    }

    public function getPresaleInfo() : TaobaoTbkItemInfoUpgradeGetPresaleInfo{
        return $this->presale_info;
    }

    public function setPresaleInfo(TaobaoTbkItemInfoUpgradeGetPresaleInfo $presaleInfo){
        $this->presale_info = $presaleInfo;
    }


}

