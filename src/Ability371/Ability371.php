<?php
namespace Topsdk\Topapi\Ability371;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability371\Request\TaobaoTbkCouponGetRequest;
use Topsdk\Topapi\Ability371\Request\TaobaoTbkItemInfoGetRequest;
use Topsdk\Topapi\Ability371\Request\TaobaoTbkItemInfoTemporaryGetRequest;
use Topsdk\Topapi\Ability371\Request\TaobaoTbkItemInfoUpgradeGetRequest;

class Ability371 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-公用-阿里妈妈推广券详情查询
    **/
    public function taobaoTbkCouponGet(TaobaoTbkCouponGetRequest $request) {
        return $this->client->execute("taobao.tbk.coupon.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-公用-淘宝客商品详情查询(简版)
    **/
    public function taobaoTbkItemInfoGet(TaobaoTbkItemInfoGetRequest $request) {
        return $this->client->execute("taobao.tbk.item.info.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客商品详情查询（简版）（临时接口）
    **/
    public function taobaoTbkItemInfoTemporaryGet(TaobaoTbkItemInfoTemporaryGetRequest $request) {
        return $this->client->execute("taobao.tbk.item.info.temporary.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-公用-淘宝客商品详情查询升级版（简易版）
    **/
    public function taobaoTbkItemInfoUpgradeGet(TaobaoTbkItemInfoUpgradeGetRequest $request) {
        return $this->client->execute("taobao.tbk.item.info.upgrade.get", $request->toMap(), $request->toFileParamMap());
    }
}