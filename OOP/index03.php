<?php
class Person{
    public $name = 'no_name';
    protected $money = 20;
    private $age = 30;
    
    function getName(){
        return $this->name;
    }
    function getMoney(){
        return $this->money;
    }
    function setMoney($number){
        $this->money = $number;
    }
    function getAge(){
        return $this->age;
    }
    function getInfo(){
        return 'Ban '.$this->name .' co tong tien la '. $this->getMoney() .' ti';
    }
}

$p = new Person;
// $p->name = 'Nam';
// echo $p->getInfo();
// echo 'Ban '.$p->name .' co tong tien la '. $p->getMoney() .' ti';

// echo $p->getMoney();
// echo $p->money; //  Cannot access

// echo $p->getName();
// echo $p->name;
// Ban Nam co tong tien la 20 ti;

$t = new Person;
echo $t->getAge();
// echo $t->age; // Cannot access
// $t->name = 'Teo';
// $t->setMoney(10);
// echo $t->getInfo();
?>