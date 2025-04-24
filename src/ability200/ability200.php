<?php
namespace Topsdk\Topapi\Ability200;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability200\Request\TaobaoRpRefundInterceptRequest;
use Topsdk\Topapi\Ability200\Request\TaobaoRefundNegotiatereturnRequest;
use Topsdk\Topapi\Ability200\Request\TaobaoRefundNegotiatereturnRenderRequest;
use Topsdk\Topapi\Ability200\Request\TaobaoRefundDetailGetRequest;
use Topsdk\Topapi\Ability200\Request\TaobaoRefundStatusGetRequest;

class Ability200 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        卖家发起拦截
    **/
    public function taobaoRpRefundIntercept(TaobaoRpRefundInterceptRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.rp.refund.intercept", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        协商退货退款
    **/
    public function taobaoRefundNegotiatereturn(TaobaoRefundNegotiatereturnRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refund.negotiatereturn", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        协商退货退款渲染
    **/
    public function taobaoRefundNegotiatereturnRender(TaobaoRefundNegotiatereturnRenderRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refund.negotiatereturn.render", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        退款详情页渲染
    **/
    public function taobaoRefundDetailGet(TaobaoRefundDetailGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refund.detail.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        查询退款状态
    **/
    public function taobaoRefundStatusGet(TaobaoRefundStatusGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refund.status.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}