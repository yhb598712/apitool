<?php
namespace Topsdk\Topapi\Ability374;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability374\Request\TaobaoTbkActivityInfoGetRequest;

class Ability374 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-官方活动转链
    **/
    public function taobaoTbkActivityInfoGet(TaobaoTbkActivityInfoGetRequest $request) {
        return $this->client->execute("taobao.tbk.activity.info.get", $request->toMap(), $request->toFileParamMap());
    }
}