<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Defaultability\Domain\TaobaoTbkOptimusTouMaterialIdsGetMaterialQuery;

class TaobaoTbkOptimusTouMaterialIdsGetRequest {

    /**
        请求结构
     **/
    private $materialQuery;


    public function getMaterialQuery() : TaobaoTbkOptimusTouMaterialIdsGetMaterialQuery{
        return $this->materialQuery;
    }

    public function setMaterialQuery(TaobaoTbkOptimusTouMaterialIdsGetMaterialQuery $materialQuery){
        $this->materialQuery = $materialQuery;
    }


    public function getApiName() : string {
        return "taobao.tbk.optimus.tou.material.ids.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->materialQuery)) {
            $requestParam["material_query"] = TopUtil::convertStruct($this->materialQuery);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

