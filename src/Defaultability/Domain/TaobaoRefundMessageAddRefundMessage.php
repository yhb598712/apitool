<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoRefundMessageAddRefundMessage {

    /**
        留言编号
     **/
    public $id;

    /**
        留言创建时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $created;


    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }


}

