<?php
namespace Topsdk\Topapi\Ability428\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkItemidTransformRequest {

    /**
        商品id列表，使用英文逗号拼接
     **/
    private $itemIds;


    public function getItemIds() : string{
        return $this->itemIds;
    }

    public function setItemIds(string $itemIds){
        $this->itemIds = $itemIds;
    }


    public function getApiName() : string {
        return "taobao.tbk.itemid.transform";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->itemIds)) {
            $requestParam["item_ids"] = TopUtil::convertBasic($this->itemIds);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

