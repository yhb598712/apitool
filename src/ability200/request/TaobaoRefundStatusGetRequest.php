<?php
namespace Topsdk\Topapi\Ability200\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability200\Domain\TaobaoRefundStatusGetRefundQueryByOrderIdRequest;

class TaobaoRefundStatusGetRequest {

    /**
        入参对象
     **/
    private $queryParam;


    public function getQueryParam() : TaobaoRefundStatusGetRefundQueryByOrderIdRequest{
        return $this->queryParam;
    }

    public function setQueryParam(TaobaoRefundStatusGetRefundQueryByOrderIdRequest $queryParam){
        $this->queryParam = $queryParam;
    }


    public function getApiName() : string {
        return "taobao.refund.status.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->queryParam)) {
            $requestParam["query_param"] = TopUtil::convertStruct($this->queryParam);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

