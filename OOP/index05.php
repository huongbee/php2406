<?php
class Father{
    public $name = 'no_name';
    static protected $money = 20; // friend
    private $age = 30; // only me

    function getMoney(){
        echo __CLASS__.__FUNCTION__.'<br>';
        return self::$money; // 20
    }
}
class Son extends Father{
    static protected $money = 10;
    
    function getMoney(){
        echo __CLASS__.__FUNCTION__.'<br>';
        return self::$money; // 10
    }
    function getMoneyFather(){
        return parent::getMoney();
    }
}
// $f = new Father;
// echo $f->getMoney();
// $s = new Son;
// echo $s->getMoney(); // 10
// echo $s->getMoneyFather();  // 20


?>