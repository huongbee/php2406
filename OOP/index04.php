<?php
class Father{
    public $name = 'no_name';
    protected $money = 20; // friend
    private $age = 30; // only me
    
    function getAge(){
        return $this->age;
    }
}
class Son extends Father{
    // name
    // money // protected
    function getMoney(){
        return $this->money;
    }
    // function getAge(){
    //     return $this->age; // Undefined
    // }
}
$s = new Son;
echo $s->getAge()


// echo $s->getMoney()

// echo $s->money;

// $s->name = 'Nam';
// echo $s->name;
// print_r($s);



?>