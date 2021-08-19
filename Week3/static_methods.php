<?php
class Buy{
    private $base_price;

    static $shopping = 0;

    function __construct($range){
        if($range=="urban"){
            $this->base_price=10000;
        }elseif ($range=="compact"){
            $this->base_price=20000;
        }else{
            $this->base_price=30000;
        }
        Buy::$shopping +=1;
    }

    function final_price(){
        return $this->base_price;
    }

    function climateControl(){
        $this->base_price+= 2000;
    }
}

?>