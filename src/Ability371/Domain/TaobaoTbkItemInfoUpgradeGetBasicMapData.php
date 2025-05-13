<?php
namespace Topsdk\Topapi\Ability371\Domain;

class TaobaoTbkItemInfoUpgradeGetBasicMapData {

    /**
        商品标题
     **/
    public $title;

    /**
        商品主图
     **/
    public $pict_url;

    /**
        商品小图列表
     **/
    public $small_images;

    /**
        一级类目名称
     **/
    public $level_one_category_name;

    /**
        叶子类目名称
     **/
    public $category_name;

    /**
        商品所在地
     **/
    public $provcity;

    /**
        商品链接
     **/
    public $item_url;

    /**
        卖家类型，0表示集市，1表示商城，3表示特价版
     **/
    public $user_type;

    /**
        卖家等级(字段等级SA)
     **/
    public $ratesum;

    /**
        店铺dsr 评分(字段等级SA)
     **/
    public $shop_dsr;

    /**
        退款率是否低于行业均值(字段等级SA)
     **/
    public $i_rfd_rate;

    /**
        好评率是否高于行业均值(字段等级SA)
     **/
    public $h_good_rate;

    /**
        成交转化是否高于行业均值(字段等级SA)
     **/
    public $h_pay_rate30;

    /**
        30天销量；数据统计截止昨日非实时更新
     **/
    public $volume;

    /**
        是否加入消费者保障
     **/
    public $is_prepay;

    /**
        是否品牌精选，0不是，1是
     **/
    public $superior_brand;

    /**
        商品库类型，支持多库类型输出，以英文逗号分隔“,”分隔，1:营销商品主推库，2. 内容商品库，如果值为空则不属于1，2这两种商品类型
     **/
    public $material_lib_type;

    /**
        pc宝贝详情(字段等级S)
     **/
    public $tmall_desc_url;

    /**
        H5宝贝详情(字段等级S)
     **/
    public $taobao_desc_url;

    /**
        商品信息-店铺名称
     **/
    public $shop_title;

    /**
        商品信息-是否包邮
     **/
    public $free_shipment;

    /**
        商品信息-品牌名称
     **/
    public $brand_name;

    /**
        商品信息-商品短标题
     **/
    public $short_title;

    /**
        商品信息-商品白底图
     **/
    public $white_image;

    /**
        卖家id(字段等级C)
     **/
    public $seller_id;

    /**
        年销量
     **/
    public $annual_vol;


    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getPictUrl() : string{
        return $this->pict_url;
    }

    public function setPictUrl(string $pictUrl){
        $this->pict_url = $pictUrl;
    }

    public function getSmallImages() : array{
        return $this->small_images;
    }

    public function setSmallImages(array $smallImages){
        $this->small_images = $smallImages;
    }

    public function getLevelOneCategoryName() : string{
        return $this->level_one_category_name;
    }

    public function setLevelOneCategoryName(string $levelOneCategoryName){
        $this->level_one_category_name = $levelOneCategoryName;
    }

    public function getCategoryName() : string{
        return $this->category_name;
    }

    public function setCategoryName(string $categoryName){
        $this->category_name = $categoryName;
    }

    public function getProvcity() : string{
        return $this->provcity;
    }

    public function setProvcity(string $provcity){
        $this->provcity = $provcity;
    }

    public function getItemUrl() : string{
        return $this->item_url;
    }

    public function setItemUrl(string $itemUrl){
        $this->item_url = $itemUrl;
    }

    public function getUserType() : int{
        return $this->user_type;
    }

    public function setUserType(int $userType){
        $this->user_type = $userType;
    }

    public function getRatesum() : int{
        return $this->ratesum;
    }

    public function setRatesum(int $ratesum){
        $this->ratesum = $ratesum;
    }

    public function getShopDsr() : int{
        return $this->shop_dsr;
    }

    public function setShopDsr(int $shopDsr){
        $this->shop_dsr = $shopDsr;
    }

    public function getIRfdRate() : bool{
        return $this->i_rfd_rate;
    }

    public function setIRfdRate(bool $iRfdRate){
        $this->i_rfd_rate = $iRfdRate;
    }

    public function getHGoodRate() : bool{
        return $this->h_good_rate;
    }

    public function setHGoodRate(bool $hGoodRate){
        $this->h_good_rate = $hGoodRate;
    }

    public function getHPayRate30() : bool{
        return $this->h_pay_rate30;
    }

    public function setHPayRate30(bool $hPayRate30){
        $this->h_pay_rate30 = $hPayRate30;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getIsPrepay() : bool{
        return $this->is_prepay;
    }

    public function setIsPrepay(bool $isPrepay){
        $this->is_prepay = $isPrepay;
    }

    public function getSuperiorBrand() : string{
        return $this->superior_brand;
    }

    public function setSuperiorBrand(string $superiorBrand){
        $this->superior_brand = $superiorBrand;
    }

    public function getMaterialLibType() : string{
        return $this->material_lib_type;
    }

    public function setMaterialLibType(string $materialLibType){
        $this->material_lib_type = $materialLibType;
    }

    public function getTmallDescUrl() : string{
        return $this->tmall_desc_url;
    }

    public function setTmallDescUrl(string $tmallDescUrl){
        $this->tmall_desc_url = $tmallDescUrl;
    }

    public function getTaobaoDescUrl() : string{
        return $this->taobao_desc_url;
    }

    public function setTaobaoDescUrl(string $taobaoDescUrl){
        $this->taobao_desc_url = $taobaoDescUrl;
    }

    public function getShopTitle() : string{
        return $this->shop_title;
    }

    public function setShopTitle(string $shopTitle){
        $this->shop_title = $shopTitle;
    }

    public function getFreeShipment() : bool{
        return $this->free_shipment;
    }

    public function setFreeShipment(bool $freeShipment){
        $this->free_shipment = $freeShipment;
    }

    public function getBrandName() : string{
        return $this->brand_name;
    }

    public function setBrandName(string $brandName){
        $this->brand_name = $brandName;
    }

    public function getShortTitle() : string{
        return $this->short_title;
    }

    public function setShortTitle(string $shortTitle){
        $this->short_title = $shortTitle;
    }

    public function getWhiteImage() : string{
        return $this->white_image;
    }

    public function setWhiteImage(string $whiteImage){
        $this->white_image = $whiteImage;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getAnnualVol() : string{
        return $this->annual_vol;
    }

    public function setAnnualVol(string $annualVol){
        $this->annual_vol = $annualVol;
    }


}

