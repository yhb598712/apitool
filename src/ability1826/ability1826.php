<?php
namespace Topsdk\Topapi\Ability1826;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability1826\Request\TaobaoTbkDgVegasTljTemporaryCreateRequest;
use Topsdk\Topapi\Ability1826\Request\TaobaoTbkDgVegasTljStopRequest;
use Topsdk\Topapi\Ability1826\Request\TaobaoTbkDgVegasTljCreateRequest;
use Topsdk\Topapi\Ability1826\Request\TaobaoTbkDgVegasTljReportRequest;

class Ability1826 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-淘礼金创建测试营销ID
    **/
    public function taobaoTbkDgVegasTljTemporaryCreate(TaobaoTbkDgVegasTljTemporaryCreateRequest $request) {
        return $this->client->execute("taobao.tbk.dg.vegas.tlj.temporary.create", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-淘礼金暂停发放
    **/
    public function taobaoTbkDgVegasTljStop(TaobaoTbkDgVegasTljStopRequest $request) {
        return $this->client->execute("taobao.tbk.dg.vegas.tlj.stop", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-淘礼金创建
    **/
    public function taobaoTbkDgVegasTljCreate(TaobaoTbkDgVegasTljCreateRequest $request) {
        return $this->client->execute("taobao.tbk.dg.vegas.tlj.create", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-淘礼金效果数据
    **/
    public function taobaoTbkDgVegasTljReport(TaobaoTbkDgVegasTljReportRequest $request) {
        return $this->client->execute("taobao.tbk.dg.vegas.tlj.report", $request->toMap(), $request->toFileParamMap());
    }
}