<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoRefundMessagesGetRefundMessage {

    /**
        留言内容。最大长度: 400个字节
     **/
    public $content;

    /**
        留言创建时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $created;

    /**
        留言编号
     **/
    public $id;

    /**
        退款类型：NORMAL（普通留言），RETURN_GOODS_APPROVED（卖家留退货地址时留言）；如果为RETURN_GOODS_APPROVED，则退款留言中有卖家收货地址
     **/
    public $message_type;

    /**
        留言者编号
     **/
    public $owner_id;

    /**
        留言者昵称
     **/
    public $owner_nick;

    /**
        留言者身份1代表买家，2代表卖家，3代表小二
     **/
    public $owner_role;

    /**
        退款编号。
     **/
    public $refund_id;

    /**
        退款阶段，可选值：onsale（售中）, aftersale（售后）
     **/
    public $refund_phase;

    /**
        图片链接
     **/
    public $pic_urls;

    /**
        留言者openid
     **/
    public $owner_open_uid;


    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getId() : int{
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getMessageType() : string{
        return $this->message_type;
    }

    public function setMessageType(string $messageType){
        $this->message_type = $messageType;
    }

    public function getOwnerId() : int{
        return $this->owner_id;
    }

    public function setOwnerId(int $ownerId){
        $this->owner_id = $ownerId;
    }

    public function getOwnerNick() : string{
        return $this->owner_nick;
    }

    public function setOwnerNick(string $ownerNick){
        $this->owner_nick = $ownerNick;
    }

    public function getOwnerRole() : string{
        return $this->owner_role;
    }

    public function setOwnerRole(string $ownerRole){
        $this->owner_role = $ownerRole;
    }

    public function getRefundId() : string{
        return $this->refund_id;
    }

    public function setRefundId(string $refundId){
        $this->refund_id = $refundId;
    }

    public function getRefundPhase() : string{
        return $this->refund_phase;
    }

    public function setRefundPhase(string $refundPhase){
        $this->refund_phase = $refundPhase;
    }

    public function getPicUrls() : array{
        return $this->pic_urls;
    }

    public function setPicUrls(array $picUrls){
        $this->pic_urls = $picUrls;
    }

    public function getOwnerOpenUid() : string{
        return $this->owner_open_uid;
    }

    public function setOwnerOpenUid(string $ownerOpenUid){
        $this->owner_open_uid = $ownerOpenUid;
    }


}

