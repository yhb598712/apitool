<?php
namespace Topsdk\Topapi\Ability1826\Domain;

class TaobaoTbkDgVegasTljReportInstanceDTO {

    /**
        extra
     **/
    public $extra;


    public function getExtra() : TaobaoTbkDgVegasTljReportExtra{
        return $this->extra;
    }

    public function setExtra(TaobaoTbkDgVegasTljReportExtra $extra){
        $this->extra = $extra;
    }


}

