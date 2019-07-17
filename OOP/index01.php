<?php
class Product{
    public $color = 'White'; // property

    function setColor($mauSac){ // function
        $this->color = $mauSac;
    }
}
$iPhone = new Product;
$iPhone->height = 100;
$iPhone->setColor('Yellow');
echo $iPhone->color;
// var_dump($iPhone);

$samsung = new Product;
$samsung->name = 'Samsung A7';

// var_dump($samsung);


// if($iPhone === $samsung) echo 'Same';
// else echo 'Dif';
?>