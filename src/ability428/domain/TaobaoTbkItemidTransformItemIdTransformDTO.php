<?php
namespace Topsdk\Topapi\Ability428\Domain;

class TaobaoTbkItemidTransformItemIdTransformDTO {

    /**
        原商品id
     **/
    public $original_item_id;

    /**
        升级后的商品id-b段
     **/
    public $item_id;


    public function getOriginalItemId() : string{
        return $this->original_item_id;
    }

    public function setOriginalItemId(string $originalItemId){
        $this->original_item_id = $originalItemId;
    }

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }


}

