<?php
namespace Topsdk\Topapi\Ability200\Domain;

class TaobaoRefundNegotiatereturnRenderAddress {

    /**
        地址ID
     **/
    public $address_id;

    /**
        收件人姓名
     **/
    public $receiver_name;

    /**
        邮政编码
     **/
    public $post_code;

    /**
        收件人手机
     **/
    public $mobile;

    /**
        国家
     **/
    public $country_name;

    /**
        省
     **/
    public $province_name;

    /**
        市
     **/
    public $city_name;

    /**
        区
     **/
    public $area_name;

    /**
        乡镇/街道
     **/
    public $town_name;

    /**
        乡镇/街道地址详情
     **/
    public $address_detail;

    /**
        行政区划代码
     **/
    public $division_code;


    public function getAddressId() : int{
        return $this->address_id;
    }

    public function setAddressId(int $addressId){
        $this->address_id = $addressId;
    }

    public function getReceiverName() : string{
        return $this->receiver_name;
    }

    public function setReceiverName(string $receiverName){
        $this->receiver_name = $receiverName;
    }

    public function getPostCode() : string{
        return $this->post_code;
    }

    public function setPostCode(string $postCode){
        $this->post_code = $postCode;
    }

    public function getMobile() : string{
        return $this->mobile;
    }

    public function setMobile(string $mobile){
        $this->mobile = $mobile;
    }

    public function getCountryName() : string{
        return $this->country_name;
    }

    public function setCountryName(string $countryName){
        $this->country_name = $countryName;
    }

    public function getProvinceName() : string{
        return $this->province_name;
    }

    public function setProvinceName(string $provinceName){
        $this->province_name = $provinceName;
    }

    public function getCityName() : string{
        return $this->city_name;
    }

    public function setCityName(string $cityName){
        $this->city_name = $cityName;
    }

    public function getAreaName() : string{
        return $this->area_name;
    }

    public function setAreaName(string $areaName){
        $this->area_name = $areaName;
    }

    public function getTownName() : string{
        return $this->town_name;
    }

    public function setTownName(string $townName){
        $this->town_name = $townName;
    }

    public function getAddressDetail() : string{
        return $this->address_detail;
    }

    public function setAddressDetail(string $addressDetail){
        $this->address_detail = $addressDetail;
    }

    public function getDivisionCode() : string{
        return $this->division_code;
    }

    public function setDivisionCode(string $divisionCode){
        $this->division_code = $divisionCode;
    }


}

