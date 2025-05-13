<?php
namespace Topsdk\Topapi\Ability369;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability369\Request\TaobaoTbkDgOptimusPromotionRequest;

class Ability369 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-权益物料精选
    **/
    public function taobaoTbkDgOptimusPromotion(TaobaoTbkDgOptimusPromotionRequest $request) {
        return $this->client->execute("taobao.tbk.dg.optimus.promotion", $request->toMap(), $request->toFileParamMap());
    }
}