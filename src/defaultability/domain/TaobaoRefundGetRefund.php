<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class TaobaoRefundGetRefund {

    /**
        卖家收货地址
     **/
    public $address;

    /**
        退款先行垫付默认的未申请状态 0;退款先行垫付申请中  1;退款先行垫付，垫付完成 2;退款先行垫付，卖家拒绝收货 3;退款先行垫付，垫付关闭 4;退款先行垫付，垫付分账成功 5;
     **/
    public $advance_status;

    /**
        支付宝交易号
     **/
    public $alipay_no;

    /**
        attribute
     **/
    public $attribute;

    /**
        买家昵称
     **/
    public $buyer_nick;

    /**
        物流公司名称
     **/
    public $company_name;

    /**
        退款申请时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $created;

    /**
        不需客服介入1;需要客服介入2;客服已经介入3;客服初审完成4;客服主管复审失败5;客服处理完成6;系统撤销(B2B使用)，维权撤销(集市使用) 7;支持买家 8;支持卖家 9;举证中 10;开放申诉 11;
     **/
    public $cs_status;

    /**
        退款说明
     **/
    public $desc;

    /**
        退货时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $good_return_time;

    /**
        货物状态。可选值BUYER_NOT_RECEIVED (买家未收到货) BUYER_RECEIVED (买家已收到货) BUYER_RETURNED_GOODS (买家已退货)
     **/
    public $good_status;

    /**
        买家是否需要退货。可选值:true(是),false(否)
     **/
    public $has_good_return;

    /**
        更新时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $modified;

    /**
        商品数量
     **/
    public $num;

    /**
        申请退款的商品数字编号
     **/
    public $num_iid;

    /**
        子订单号。如果是单笔交易oid会等于tid
     **/
    public $oid;

    /**
        退款约束，可选值：cannot_refuse（不允许操作），refund_onweb（需要到网页版操作）
     **/
    public $operation_contraint;

    /**
        退款对应的订单交易状态。可选值TRADE_NO_CREATE_PAY(没有创建支付宝交易) WAIT_BUYER_PAY(等待买家付款) WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款) WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货) TRADE_BUYER_SIGNED(买家已签收,货到付款专用) TRADE_FINISHED(交易成功) TRADE_CLOSED(交易关闭) TRADE_CLOSED_BY_TAOBAO(交易被淘宝关闭) ALL_WAIT_PAY(包含：WAIT_BUYER_PAY、TRADE_NO_CREATE_PAY) ALL_CLOSED(包含：TRADE_CLOSED、TRADE_CLOSED_BY_TAOBAO) 取自"http://open.taobao.com/dev/index.php/%E4%BA%A4%E6%98%93%E7%8A%B6%E6%80%81"
     **/
    public $order_status;

    /**
        商品外部商家编码
     **/
    public $outer_id;

    /**
        支付给卖家的金额(交易总金额-退还给买家的金额)。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $payment;

    /**
        商品价格。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $price;

    /**
        退款原因
     **/
    public $reason;

    /**
        退还金额(退还给买家的金额)。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $refund_fee;

    /**
        退款单号
     **/
    public $refund_id;

    /**
        退款阶段，可选值：onsale(售中)/aftersale(售后)
     **/
    public $refund_phase;

    /**
        退款超时结构RefundRemindTimeout
     **/
    public $refund_remind_timeout;

    /**
        退款版本号（时间戳）
     **/
    public $refund_version;

    /**
        卖家昵称
     **/
    public $seller_nick;

    /**
        物流方式.可选值:free(卖家包邮),post(平邮),express(快递),ems(EMS).
     **/
    public $shipping_type;

    /**
        退货运单号
     **/
    public $sid;

    /**
        商品SKU信息
     **/
    public $sku;

    /**
        分账给卖家的钱
     **/
    public $split_seller_fee;

    /**
        分账给淘宝的钱
     **/
    public $split_taobao_fee;

    /**
        退款状态。可选值WAIT_SELLER_AGREE(买家已经申请退款，等待卖家同意) WAIT_BUYER_RETURN_GOODS(卖家已经同意退款，等待买家退货) WAIT_SELLER_CONFIRM_GOODS(买家已经退货，等待卖家确认收货) SELLER_REFUSE_BUYER(卖家拒绝退款) CLOSED(退款关闭) SUCCESS(退款成功)
     **/
    public $status;

    /**
        淘宝交易单号
     **/
    public $tid;

    /**
        商品标题
     **/
    public $title;

    /**
        交易总金额。精确到2位小数;单位:元。如:200.07，表示:200元7分
     **/
    public $total_fee;

    /**
        买家账号的OpenUID
     **/
    public $buyer_open_uid;

    /**
        crm改造新增ouid返回
     **/
    public $ouid;

    /**
        组合品信息
     **/
    public $combine_item_info;

    /**
        退款类型，可选值REFUND(退款不退货),REFUND_AND_RETURN(退货退款),TMALL_EXCHANGE(天猫换货),TAOBAO_EXCHANGE(淘宝换货),REPAIR(维修),RESHIPPING(补寄),OTHERS(其他)
     **/
    public $dispute_type;

    /**
        完结时间。格式:yyyy-MM-dd HH:mm:ss
     **/
    public $end_time;

    /**
        卖家账号的OpenUID
     **/
    public $seller_open_uid;

    /**
        新修改的sku
     **/
    public $new_sku;

    /**
        收件人淘宝加密openId
     **/
    public $real_receiver_open_id;

    /**
        收件人淘宝加密昵称
     **/
    public $real_receiver_display_nick;

    /**
        退款单类型，"1"代表百亿超级半托管
     **/
    public $ypds_refund_type;

    /**
        消费者发起退款原因
     **/
    public $ypds_refund_reason;

    /**
        退款货款金额，退款比例*货款总额
     **/
    public $ypds_refund_supply_fee;


    public function getAddress() : string{
        return $this->address;
    }

    public function setAddress(string $address){
        $this->address = $address;
    }

    public function getAdvanceStatus() : int{
        return $this->advance_status;
    }

    public function setAdvanceStatus(int $advanceStatus){
        $this->advance_status = $advanceStatus;
    }

    public function getAlipayNo() : string{
        return $this->alipay_no;
    }

    public function setAlipayNo(string $alipayNo){
        $this->alipay_no = $alipayNo;
    }

    public function getAttribute() : string{
        return $this->attribute;
    }

    public function setAttribute(string $attribute){
        $this->attribute = $attribute;
    }

    public function getBuyerNick() : string{
        return $this->buyer_nick;
    }

    public function setBuyerNick(string $buyerNick){
        $this->buyer_nick = $buyerNick;
    }

    public function getCompanyName() : string{
        return $this->company_name;
    }

    public function setCompanyName(string $companyName){
        $this->company_name = $companyName;
    }

    public function getCreated() : string{
        return $this->created;
    }

    public function setCreated(string $created){
        $this->created = $created;
    }

    public function getCsStatus() : int{
        return $this->cs_status;
    }

    public function setCsStatus(int $csStatus){
        $this->cs_status = $csStatus;
    }

    public function getDesc() : string{
        return $this->desc;
    }

    public function setDesc(string $desc){
        $this->desc = $desc;
    }

    public function getGoodReturnTime() : string{
        return $this->good_return_time;
    }

    public function setGoodReturnTime(string $goodReturnTime){
        $this->good_return_time = $goodReturnTime;
    }

    public function getGoodStatus() : string{
        return $this->good_status;
    }

    public function setGoodStatus(string $goodStatus){
        $this->good_status = $goodStatus;
    }

    public function getHasGoodReturn() : bool{
        return $this->has_good_return;
    }

    public function setHasGoodReturn(bool $hasGoodReturn){
        $this->has_good_return = $hasGoodReturn;
    }

    public function getModified() : string{
        return $this->modified;
    }

    public function setModified(string $modified){
        $this->modified = $modified;
    }

    public function getNum() : int{
        return $this->num;
    }

    public function setNum(int $num){
        $this->num = $num;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getOid() : int{
        return $this->oid;
    }

    public function setOid(int $oid){
        $this->oid = $oid;
    }

    public function getOperationContraint() : string{
        return $this->operation_contraint;
    }

    public function setOperationContraint(string $operationContraint){
        $this->operation_contraint = $operationContraint;
    }

    public function getOrderStatus() : string{
        return $this->order_status;
    }

    public function setOrderStatus(string $orderStatus){
        $this->order_status = $orderStatus;
    }

    public function getOuterId() : string{
        return $this->outer_id;
    }

    public function setOuterId(string $outerId){
        $this->outer_id = $outerId;
    }

    public function getPayment() : string{
        return $this->payment;
    }

    public function setPayment(string $payment){
        $this->payment = $payment;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getReason() : string{
        return $this->reason;
    }

    public function setReason(string $reason){
        $this->reason = $reason;
    }

    public function getRefundFee() : string{
        return $this->refund_fee;
    }

    public function setRefundFee(string $refundFee){
        $this->refund_fee = $refundFee;
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

    public function getRefundRemindTimeout() : TaobaoRefundGetRefundRemindTimeout{
        return $this->refund_remind_timeout;
    }

    public function setRefundRemindTimeout(TaobaoRefundGetRefundRemindTimeout $refundRemindTimeout){
        $this->refund_remind_timeout = $refundRemindTimeout;
    }

    public function getRefundVersion() : int{
        return $this->refund_version;
    }

    public function setRefundVersion(int $refundVersion){
        $this->refund_version = $refundVersion;
    }

    public function getSellerNick() : string{
        return $this->seller_nick;
    }

    public function setSellerNick(string $sellerNick){
        $this->seller_nick = $sellerNick;
    }

    public function getShippingType() : string{
        return $this->shipping_type;
    }

    public function setShippingType(string $shippingType){
        $this->shipping_type = $shippingType;
    }

    public function getSid() : string{
        return $this->sid;
    }

    public function setSid(string $sid){
        $this->sid = $sid;
    }

    public function getSku() : string{
        return $this->sku;
    }

    public function setSku(string $sku){
        $this->sku = $sku;
    }

    public function getSplitSellerFee() : string{
        return $this->split_seller_fee;
    }

    public function setSplitSellerFee(string $splitSellerFee){
        $this->split_seller_fee = $splitSellerFee;
    }

    public function getSplitTaobaoFee() : string{
        return $this->split_taobao_fee;
    }

    public function setSplitTaobaoFee(string $splitTaobaoFee){
        $this->split_taobao_fee = $splitTaobaoFee;
    }

    public function getStatus() : string{
        return $this->status;
    }

    public function setStatus(string $status){
        $this->status = $status;
    }

    public function getTid() : int{
        return $this->tid;
    }

    public function setTid(int $tid){
        $this->tid = $tid;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getTotalFee() : string{
        return $this->total_fee;
    }

    public function setTotalFee(string $totalFee){
        $this->total_fee = $totalFee;
    }

    public function getBuyerOpenUid() : string{
        return $this->buyer_open_uid;
    }

    public function setBuyerOpenUid(string $buyerOpenUid){
        $this->buyer_open_uid = $buyerOpenUid;
    }

    public function getOuid() : string{
        return $this->ouid;
    }

    public function setOuid(string $ouid){
        $this->ouid = $ouid;
    }

    public function getCombineItemInfo() : array{
        return $this->combine_item_info;
    }

    public function setCombineItemInfo(array $combineItemInfo){
        $this->combine_item_info = $combineItemInfo;
    }

    public function getDisputeType() : string{
        return $this->dispute_type;
    }

    public function setDisputeType(string $disputeType){
        $this->dispute_type = $disputeType;
    }

    public function getEndTime() : string{
        return $this->end_time;
    }

    public function setEndTime(string $endTime){
        $this->end_time = $endTime;
    }

    public function getSellerOpenUid() : string{
        return $this->seller_open_uid;
    }

    public function setSellerOpenUid(string $sellerOpenUid){
        $this->seller_open_uid = $sellerOpenUid;
    }

    public function getNewSku() : string{
        return $this->new_sku;
    }

    public function setNewSku(string $newSku){
        $this->new_sku = $newSku;
    }

    public function getRealReceiverOpenId() : string{
        return $this->real_receiver_open_id;
    }

    public function setRealReceiverOpenId(string $realReceiverOpenId){
        $this->real_receiver_open_id = $realReceiverOpenId;
    }

    public function getRealReceiverDisplayNick() : string{
        return $this->real_receiver_display_nick;
    }

    public function setRealReceiverDisplayNick(string $realReceiverDisplayNick){
        $this->real_receiver_display_nick = $realReceiverDisplayNick;
    }

    public function getYpdsRefundType() : string{
        return $this->ypds_refund_type;
    }

    public function setYpdsRefundType(string $ypdsRefundType){
        $this->ypds_refund_type = $ypdsRefundType;
    }

    public function getYpdsRefundReason() : string{
        return $this->ypds_refund_reason;
    }

    public function setYpdsRefundReason(string $ypdsRefundReason){
        $this->ypds_refund_reason = $ypdsRefundReason;
    }

    public function getYpdsRefundSupplyFee() : string{
        return $this->ypds_refund_supply_fee;
    }

    public function setYpdsRefundSupplyFee(string $ypdsRefundSupplyFee){
        $this->ypds_refund_supply_fee = $ypdsRefundSupplyFee;
    }


}

