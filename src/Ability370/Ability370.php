<?php
namespace Topsdk\Topapi\Ability370;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability370\Request\TaobaoTbkShopGetRequest;
use Topsdk\Topapi\Ability370\Request\TaobaoTbkDgMaterialTemporaryOptionalRequest;

class Ability370 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-店铺搜索
    **/
    public function taobaoTbkShopGet(TaobaoTbkShopGetRequest $request) {
        return $this->client->execute("taobao.tbk.shop.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-物料搜索（临时接口）
    **/
    public function taobaoTbkDgMaterialTemporaryOptional(TaobaoTbkDgMaterialTemporaryOptionalRequest $request) {
        return $this->client->execute("taobao.tbk.dg.material.temporary.optional", $request->toMap(), $request->toFileParamMap());
    }
}