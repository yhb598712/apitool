<?php
namespace Topsdk\Topapi\Ability371\Domain;

class TaobaoTbkItemInfoUpgradeGetActivityTagMapData {

    /**
        货品展示标识，展示在商品标题前的商品活动标
     **/
    public $tag_name;


    public function getTagName() : string{
        return $this->tag_name;
    }

    public function setTagName(string $tagName){
        $this->tag_name = $tagName;
    }


}

