<?php

namespace Yhb\taobaosdk;

use Topsdk\Topapi\Ability370\Ability370;
use Topsdk\Topapi\Ability370\Request\TaobaoTbkShopGetRequest;
use Topsdk\Topapi\TopApiClient;

class Taobao
{
    private $appkey;
    private $appsecret;

    private $TopApiClient;
    private $request;
    private $ability;
    private $abilityMethod;

    /**
     * @return mixed
     */
    public function getAbility()
    {
        return $this->ability;
    }

    /**
     * @param mixed $ability
     */
    public function setAbility($ability,$abilityMethod)
    {
        $this->ability = $ability;
        $this->abilityMethod = $abilityMethod;
    }

    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    public function __construct($appkey, $appsecret)
    {
        $this->appkey = $appkey;
        $this->appsecret = $appsecret;

        $this->TopApiClient = new TopApiClient($this->appkey, $this->appsecret, "https://eco.taobao.com/router/rest");
    }

    /**
     * 店铺搜索
     * https://open.taobao.com/api.htm?docId=24521&docType=2&scopeId=16516#scopes
     *
     * @return $this
     */
    public function shopsearch()
    {
        // create Client
        $client = $this->TopApiClient;
        $ability = new Ability370($client);
        $this->setAbility($ability,'taobaoTbkShopGet');
        // create domain

        // create request
        $request = new TaobaoTbkShopGetRequest();
        $this->setRequest($request);
        return $this;
        // $request->setEndAuctionCount(200);
        // $request->setEndCommissionRate(123);
        // $request->setEndCredit(20);
        // $request->setEndTotalAction(100);
        // $request->setFields("user_id,shop_title,shop_type,seller_nick,pict_url,shop_url");
        // $request->setIsTmall(false);
        // $request->setPageNo(1);
        // $request->setPageSize(20);
        // $request->setPlatform(1);
        // $request->setQ($key);
        // $request->setSort("commission_rate_des");
        // $request->setStartAuctionCount(123);
        // $request->setStartCommissionRate(2000);
        // $request->setStartCredit(1);
        // $request->setStartTotalAction(1);

        return $ability->taobaoTbkShopGet($request);
    }

    /**
     * 原样获取结果
     *
     * @return mixed
     */
    public function getResult()
    {
        $method = $this->abilityMethod;
        return $this->ability->$method($this->getRequest());
    }

    /**
     * 淘宝客商品详情查询(简版)
     * https://open.taobao.com/api.htm?docId=24518&docType=2&scopeId=16189
     *
     * @return void
     */
    public function detailInfo()
    {

    }

    /**
     * 阿里妈妈推广券详情查询 --待下线了
     * https://open.taobao.com/api.htm?docId=31106&docType=2&scopeId=16189
     * @return void
     */
    public function couponInfo()
    {
        // create Client
        $client = $this->TopApiClient;
        $ability = new Ability371($client);
        $this->setAbility($ability,'taobaoTbkCouponGet');
        // create domain

        // create request
        $request = new TaobaoTbkCouponGetRequest();
        $this->setRequest($request);
        return $this;
        // $request->setMe("nfr%2BYTo2k1PX18gaNN%2BIPkIG2PadNYbBnwEsv6mRavWieOoOE3L9OdmbDSSyHbGxBAXjHpLKvZbL1320ML%2BCF5FRtW7N7yJ056Lgym4X01A%3D");
        // $request->setItemId("123");
        // $request->setActivityId("sdfwe3eefsdf");

        $response = $ability->taobaoTbkCouponGet($request);

        return $response;
    }

    /**
     * 淘宝商品详情接口
     * 淘宝客商品详情查询升级版（简易版）
     * https://open.taobao.com/api.htm?docId=64763&docType=2&scopeId=16189
     *
     * @return void
     */
    public function detailInfoUpgrade()
    {
        $client = $this->TopApiClient;
        $ability = new Ability371($client);
        $this->setAbility($ability,'taobaoTbkItemInfoUpgradeGet');
        // create domain

        // create request
        $request = new TaobaoTbkItemInfoUpgradeGetRequest();
        $this->setRequest($request);
        return $this;
        $request->setItemId("3232");
        $request->setIp("11.22.33.43");
        $request->setBizSceneId("1");
        $request->setPromotionType("2");
        $request->setRelationId("1");
        $request->setManageItemPubId(1);
        $request->setGetTljInfo(0);

        $response = $ability->taobaoTbkItemInfoUpgradeGet($request);
    }

    /**
     * 物料精选升级版 -- 适用于自己推广的媒体
     * https://open.taobao.com/api.htm?docId=62201&docType=2&scopeId=27939
     *
     * @param $wuliaoId
     * @return void
     */
    public function search($key)
    {
        // create Client
        $client = $this->TopApiClient;
        $ability = new Defaultability($client);
        $this->setAbility($ability,'taobaoTbkDgMaterialRecommend');
        // create domain

        // create request
        $request = new TaobaoTbkDgMaterialRecommendRequest();
        $request->setPageSize(20);
        $request->setPageNo(1);
        $request->setMaterialId(123);
        $request->setAdzoneId(123);
        $request->setRelationId(123456);
        $request->setDeviceType("IMEI");
        $request->setDeviceEncrypt("MD5");
        $request->setDeviceValue("xxx");
        $request->setPromotionType("2");
        $request->setSpecialId("2323");
        $request->setItemId("qeqscd1231-uqwenqe");
        $request->setFavoritesId("123445");

        $response = $ability->taobaoTbkDgMaterialRecommend($request);
    }

    /**
     * 物料id列表查询
     * https://open.taobao.com/api.htm?docId=64333&docType=2&scopeId=27939
     *
     * @return void
     */
    public function wuliaoIDSearch()
    {

    }

    /**
     * 物料搜索升级版 -- 适用于工具商
     * https://open.taobao.com/api.htm?docId=64759&docType=2&scopeId=27939
     *
     * @return void
     */
    public function wuliaoSearchUpgrade()
    {

    }

    /**
     * 官方活动转链
     * https://open.taobao.com/api.htm?docId=48340&docType=2&scopeId=18294
     * @return void
     */
    public function activeConvertLink()
    {

    }

    public function __call($name, $arguments)
    {
        $this->getRequest()->$name(...$arguments);
        return $this;
    }

}
