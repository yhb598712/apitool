<?php
namespace Topsdk\Topapi\Ability431;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability431\Request\TaobaoTbkItemConvertRequest;
use Topsdk\Topapi\Ability431\Request\TaobaoTbkShopConvertRequest;

class Ability431 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-商品链接转换
    **/
    public function taobaoTbkItemConvert(TaobaoTbkItemConvertRequest $request) {
        return $this->client->execute("taobao.tbk.item.convert", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-店铺链接转换
    **/
    public function taobaoTbkShopConvert(TaobaoTbkShopConvertRequest $request) {
        return $this->client->execute("taobao.tbk.shop.convert", $request->toMap(), $request->toFileParamMap());
    }
}