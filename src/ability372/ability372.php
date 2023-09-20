<?php
namespace Topsdk\Topapi\Ability372;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability372\Request\TaobaoTbkShopRecommendGetRequest;

class Ability372 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-公用-店铺关联推荐
    **/
    public function taobaoTbkShopRecommendGet(TaobaoTbkShopRecommendGetRequest $request) {
        return $this->client->execute("taobao.tbk.shop.recommend.get", $request->toMap(), $request->toFileParamMap());
    }
}