<?php
class Type{
    static public $price = 15;

    static function getPrice(){
        return self::$price;
    }
    function setPrice($dongia){
        self::$price = $dongia;
    }
}
$t1 = new Type;
$t1->setPrice(10);
echo $t1->getPrice(); // 10

$t2 = new Type;
echo $t2->getPrice(); // 10



// $iPhone = new Type();
// echo Type::$price;
// echo Type::getPrice();
?>