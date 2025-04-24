<?php
namespace Topsdk\Topapi\Defaultability;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditFastupdateRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoKfcKeywordSearchRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoRefundsApplyGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoRefundGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkOptimusTouMaterialIdsGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\AlibabaItemEditSubmitRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductAddSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductMatchSchemaGetRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductSchemaMatchRequest;
use Topsdk\Topapi\Defaultability\Request\TmallProductSchemaAddRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcMessageProduceRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserCancelRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTmcUserPermitRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkDgMaterialOptionalUpgradeRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoTbkDgMaterialRecommendRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoRefundMessagesGetRequest;
use Topsdk\Topapi\Defaultability\Request\TaobaoRefundMessageAddRequest;

class Defaultability {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        商品编辑增量更新
    **/
    public function alibabaItemEditFastupdate(AlibabaItemEditFastupdateRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.edit.fastupdate", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        关键词过滤匹配
    **/
    public function taobaoKfcKeywordSearch(TaobaoKfcKeywordSearchRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.kfc.keyword.search", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取商家所在分组及其已授权(广播)消息topics
    **/
    public function taobaoTmcUserGet(TaobaoTmcUserGetRequest $request) {
        return $this->client->execute("taobao.tmc.user.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        查询买家申请的退款列表
    **/
    public function taobaoRefundsApplyGet(TaobaoRefundsApplyGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refunds.apply.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取单笔退款详情
    **/
    public function taobaoRefundGet(TaobaoRefundGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refund.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-推广者-物料id列表查询
    **/
    public function taobaoTbkOptimusTouMaterialIdsGet(TaobaoTbkOptimusTouMaterialIdsGetRequest $request) {
        return $this->client->execute("taobao.tbk.optimus.tou.material.ids.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        商品编辑获取schema信息
    **/
    public function alibabaItemEditSchemaGet(AlibabaItemEditSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.edit.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        商品编辑提交schema信息
    **/
    public function alibabaItemEditSubmit(AlibabaItemEditSubmitRequest $request,string $session) {
        return $this->client->executeWithSession("alibaba.item.edit.submit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        产品发布规则获取接口
    **/
    public function tmallProductAddSchemaGet(TmallProductAddSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.add.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        获取匹配产品规则
    **/
    public function tmallProductMatchSchemaGet(TmallProductMatchSchemaGetRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.match.schema.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        product匹配接口
    **/
    public function tmallProductSchemaMatch(TmallProductSchemaMatchRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.schema.match", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        使用Schema文件发布一个产品
    **/
    public function tmallProductSchemaAdd(TmallProductSchemaAddRequest $request,string $session) {
        return $this->client->executeWithSession("tmall.product.schema.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        发布单条消息
    **/
    public function taobaoTmcMessageProduce(TaobaoTmcMessageProduceRequest $request) {
        return $this->client->execute("taobao.tmc.message.produce", $request->toMap(), $request->toFileParamMap());
    }
    /**
        取消用户的消息服务
    **/
    public function taobaoTmcUserCancel(TaobaoTmcUserCancelRequest $request) {
        return $this->client->execute("taobao.tmc.user.cancel", $request->toMap(), $request->toFileParamMap());
    }
    /**
        为已授权的用户开通消息服务
    **/
    public function taobaoTmcUserPermit(TaobaoTmcUserPermitRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tmc.user.permit", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-推广者-物料搜索升级版
    **/
    public function taobaoTbkDgMaterialOptionalUpgrade(TaobaoTbkDgMaterialOptionalUpgradeRequest $request) {
        return $this->client->execute("taobao.tbk.dg.material.optional.upgrade", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-物料精选升级版
    **/
    public function taobaoTbkDgMaterialRecommend(TaobaoTbkDgMaterialRecommendRequest $request) {
        return $this->client->execute("taobao.tbk.dg.material.recommend", $request->toMap(), $request->toFileParamMap());
    }
    /**
        查询退款留言/凭证列表
    **/
    public function taobaoRefundMessagesGet(TaobaoRefundMessagesGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refund.messages.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        创建退款留言/凭证
    **/
    public function taobaoRefundMessageAdd(TaobaoRefundMessageAddRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.refund.message.add", $request->toMap(), $request->toFileParamMap(), $session);
    }
}