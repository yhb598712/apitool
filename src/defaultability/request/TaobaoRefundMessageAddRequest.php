<?php
namespace Topsdk\Topapi\Defaultability\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoRefundMessageAddRequest {

    /**
        图片（凭证）。类型: JPG,GIF,PNG;最大为: 500K
     **/
    private $image;

    /**
        退款编号。
     **/
    private $refundId;

    /**
        留言内容。最大长度: 400个字节
     **/
    private $content;


    public function getImage() : string{
        return $this->image;
    }

    public function setImage(string $image){
        $this->image = $image;
    }

    public function getRefundId() : int{
        return $this->refundId;
    }

    public function setRefundId(int $refundId){
        $this->refundId = $refundId;
    }

    public function getContent() : string{
        return $this->content;
    }

    public function setContent(string $content){
        $this->content = $content;
    }


    public function getApiName() : string {
        return "taobao.refund.message.add";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->refundId)) {
            $requestParam["refund_id"] = TopUtil::convertBasic($this->refundId);
        }

        if (!TopUtil::checkEmpty($this->content)) {
            $requestParam["content"] = TopUtil::convertBasic($this->content);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        if (!TopUtil::checkEmpty($this->image)){
            $fileParam["image"] = TopUtil::convertBasic($this->image);
        }
        return $fileParam;
    }

}

