<?php
namespace Topsdk\Topapi\Ability428;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability428\Request\TaobaoTbkCouponTemporaryConvertRequest;
use Topsdk\Topapi\Ability428\Request\TaobaoTbkCouponConvertRequest;
use Topsdk\Topapi\Ability428\Request\TaobaoTbkItemidTransformRequest;

class Ability428 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-单品券高效转链（临时接口）
    **/
    public function taobaoTbkCouponTemporaryConvert(TaobaoTbkCouponTemporaryConvertRequest $request) {
        return $this->client->execute("taobao.tbk.coupon.temporary.convert", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-单品券高效转链
    **/
    public function taobaoTbkCouponConvert(TaobaoTbkCouponConvertRequest $request) {
        return $this->client->execute("taobao.tbk.coupon.convert", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-商品id升级（二方）
    **/
    public function taobaoTbkItemidTransform(TaobaoTbkItemidTransformRequest $request) {
        return $this->client->execute("taobao.tbk.itemid.transform", $request->toMap(), $request->toFileParamMap());
    }
}