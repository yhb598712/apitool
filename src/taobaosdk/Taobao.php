<?php

namespace Yhb\taobaosdk;

use Topsdk\Topapi\Ability370\Ability370;
use Topsdk\Topapi\Ability370\Request\TaobaoTbkShopGetRequest;
use Topsdk\Topapi\Ability371\Ability371;
use Topsdk\Topapi\Ability371\Request\TaobaoTbkCouponGetRequest;
use Topsdk\Topapi\Ability371\Request\TaobaoTbkItemInfoGetRequest;
use Topsdk\Topapi\Ability371\Request\TaobaoTbkItemInfoUpgradeGetRequest;
use Topsdk\Topapi\Ability374\Ability374;
use Topsdk\Topapi\Ability374\Request\TaobaoTbkActivityInfoGetRequest;
use Topsdk\Topapi\Ability425\Ability425;
use Topsdk\Topapi\Ability425\Request\TaobaoTbkScPublisherInfoSaveRequest;
use Topsdk\Topapi\Defaultability\Defaultability;
use Topsdk\Topapi\Defaultability\Domain\TaobaoTbkDgMaterialOptionalUpgradeUcrowdrankitems;
use Topsdk\Topapi\Defaultability\Domain\TaobaoTbkOptimusTouMaterialIdsGetMaterialQuery;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkDgMaterialOptionalUpgradeRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkOptimusTouMaterialIdsGetRequest;
use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkDgMaterialRecommendRequest;

class Taobao
{
    private $appkey;
    private $appsecret;

    private $TopApiClient;
    private $request;
    private $ability;
    private $abilityMethod;
    /**
     * @var mixed|null
     */
    private $session;

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
    public function setAbility($ability,$abilityMethod,$session=null)
    {
        $this->ability = $ability;
        $this->abilityMethod = $abilityMethod;
        $this->session = $session;
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
        if(!is_null($this->session)){
            return $this->ability->$method($this->getRequest(),$this->session);
        }else{
            return $this->ability->$method($this->getRequest());
        }

    }

    /**
     * 淘宝客商品详情查询(简版) -- --待下线了
     * https://open.taobao.com/api.htm?docId=24518&docType=2&scopeId=16189
     * @return $this
     */
    public function detailInfo()
    {
        // create Client
        $client = $this->TopApiClient;
        $ability = new Ability371($client);
        $this->setAbility($ability,'taobaoTbkItemInfoGet');
        // create domain

        // create request
        $request = new TaobaoTbkItemInfoGetRequest();
        $this->setRequest($request);
        return $this;

        $request->setNumIids("123,456");
        $request->setPlatform(1);
        $request->setIp("11.22.33.43");
        $request->setBizSceneId("1");
        $request->setPromotionType("2");
        $request->setRelationId("1");
        $request->setManageItemPubId(1);

        $response = $ability->taobaoTbkItemInfoGet($request);
        var_dump($response);
    }

    /**
     * 阿里妈妈推广券详情查询
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
     * @return $this
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
     * @return $this
     */
    public function search()
    {
        // create Client
        $client = $this->TopApiClient;
        $ability = new Defaultability($client);
        $this->setAbility($ability,'taobaoTbkDgMaterialRecommend');
        // create domain

        // create request
        $request = new TaobaoTbkDgMaterialRecommendRequest();
        $this->setRequest($request);
        return $this;
        
        $request->setPageSize(20); // 1- 100
        $request->setPageNo(1);
        $request->setMaterialId(80309); // must
        $request->setAdzoneId(123);     // must
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
     * @return $this
     */
    public function wuliaoIDSearch($pageNo,$subJect,$MaterriaType,$pageSize=20)
    {
        // create Client
        $client = $this->TopApiClient;
        $ability = new Defaultability($client);
        $this->setAbility($ability,'taobaoTbkOptimusTouMaterialIdsGet');

        // create domain
        $taobaoTbkOptimusTouMaterialIdsGetMaterialQuery = new TaobaoTbkOptimusTouMaterialIdsGetMaterialQuery();
        $taobaoTbkOptimusTouMaterialIdsGetMaterialQuery->setPageNo($pageNo);
        $taobaoTbkOptimusTouMaterialIdsGetMaterialQuery->setSubject($subJect);
        $taobaoTbkOptimusTouMaterialIdsGetMaterialQuery->setMaterialType($MaterriaType);
        $taobaoTbkOptimusTouMaterialIdsGetMaterialQuery->setPageSize($pageSize);

        // create request
        $request = new TaobaoTbkOptimusTouMaterialIdsGetRequest();
        $request->setMaterialQuery(taobaoTbkOptimusTouMaterialIdsGetMaterialQuery);
        $this->setRequest($request);
        return $this;

        $response = $ability->taobaoTbkOptimusTouMaterialIdsGet($request);
    }

    /**
     * 物料搜索升级版 -- 适用于工具商
     * https://open.taobao.com/api.htm?docId=64759&docType=2&scopeId=27939
     *
     * @return $this
     */
    public function wuliaoSearchUpgrade()
    {
        // create Client
        $client = $this->TopApiClient;
        $ability = new Defaultability($client);
        $this->setAbility($ability,'taobaoTbkDgMaterialOptionalUpgrade');

        // create domain
        $taobaoTbkDgMaterialOptionalUpgradeUcrowdrankitems = new TaobaoTbkDgMaterialOptionalUpgradeUcrowdrankitems();
        $taobaoTbkDgMaterialOptionalUpgradeUcrowdrankitems->setCommirate(1234);
        $taobaoTbkDgMaterialOptionalUpgradeUcrowdrankitems->setPrice(10.12);
        $taobaoTbkDgMaterialOptionalUpgradeUcrowdrankitems->setItemId("qeqscd1231-uqwenqe");

        // create request
        $request = new TaobaoTbkDgMaterialOptionalUpgradeRequest();
        $this->setRequest($request);
        return $this;

        $request->setStartDsr(10);
        $request->setPageSize(20);
        $request->setPageNo(1);
        $request->setEndTkRate(1234);
        $request->setStartTkRate(1234);
        $request->setEndPrice(10);
        $request->setStartPrice(10);
        $request->setIsOverseas(false);
        $request->setIsTmall(false);
        $request->setSort("tk_rate_des");
        $request->setItemloc("杭州");
        $request->setCat("16,18");
        $request->setQ("女装");
        $request->setMaterialId(80309);
        $request->setHasCoupon(false);
        $request->setIp("13.2.33.4");
        $request->setAdzoneId(12345678);
        $request->setNeedFreeShipment(true);
        $request->setNeedPrepay(true);
        $request->setIncludePayRate30(true);
        $request->setIncludeGoodRate(true);
        $request->setIncludeRfdRate(true);
        $request->setNpxLevel(2);
        $request->setDeviceEncrypt("MD5");
        $request->setDeviceValue("xxx");
        $request->setDeviceType("IMEI");
        $request->setSpecialId("2323");
        $request->setRelationId("3243");
        $request->setGetTopnRate(0);
        $request->setBizSceneId("1");
        $request->setPromotionType("2");
        $request->setMgcStartTime("1695281620000");
        $request->setMgcEndTime("1695281620000");
        $request->setMgcStatus("0");
        $request->setUcrowdId(1);
        /*
            0
        */
        $request->setUcrowdRankItems(array());

        $response = $ability->taobaoTbkDgMaterialOptionalUpgrade($request);
        var_dump($response);

    }

    /**
     * 官方活动转链
     * https://open.taobao.com/api.htm?docId=48340&docType=2&scopeId=18294
     * @return void
     */
    public function activeConvertLink()
    {
        // create Client
        $client = $this->TopApiClient;
        $ability = new Ability374($client);
        $this->setAbility($ability,'taobaoTbkActivityInfoGet');
        // create domain

        // create request
        $request = new TaobaoTbkActivityInfoGetRequest();
        $this->setRequest($request);
        return $this;

        $request->setActivityMaterialId("123");
        $request->setAdzoneId(123);
        $request->setSubPid("mm_1_2_3");
        $request->setRelationId(123);
        $request->setUnionId("demo");

        $response = $ability->taobaoTbkActivityInfoGet($request);
        var_dump($response);
    }

    /**
     * 渠道备案 会员备案 根据授权返回的token 来传来
     * @return $this
     */
    public function qudaoshouquan($session)
    {
        // create Client
        $client = $this->TopApiClient;
        $ability = new Ability425($client);
        $this->setAbility($ability,'taobaoTbkScPublisherInfoSave',$session);

        // create domain

        // create request
        $request = new TaobaoTbkScPublisherInfoSaveRequest();
        $this->setRequest($request);
        return $this;

        // $request->setRelationFrom("1"); //渠道备案 - 来源，取链接的来源
        // $request->setOfflineScene("1"); //渠道备案 - 线下场景信息，1 - 门店，2- 学校，3 - 工厂，4 - 其他
        // $request->setOnlineScene("1");  //渠道备案 - 线上场景信息，1 - 微信群，2- QQ群，3 - 其他
        // $request->setInviterCode("xxx"); // MUST 淘宝客邀请渠道或会员的邀请码
        // $request->setInfoType(1); // MUST 类型，必选 默认为1:
        // $request->setNote("小蜜蜂");
        // $request->setRegisterInfo("{"phoneNumber":"18801088599","city":"江苏省","province":"南京市","location":"玄武区花园小区","detailAddress":"5号楼3单元101室","shopType":"社区店","shopName":"全家便利店","shopCertifyType":"营业执照","certifyNumber":"111100299001"}");
        // //{"phoneNumber":"18801088599","city":"江苏省","province":"南京市","location":"玄武区花园小区","detailAddress":"5号楼3单元101室","shopType":"社区店","shopName":"全家便利店","shopCertifyType":"营业执照","certifyNumber":"111100299001"}
        // $response = $ability->taobaoTbkScPublisherInfoSave($request,"<user session>");
        // var_dump($response);
    }

    public function __call($name, $arguments)
    {
        $this->getRequest()->$name(...$arguments);
        return $this;
    }

}
