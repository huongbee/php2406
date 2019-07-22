<?php
class Product{
    public $color;
    public $height;

    function __construct($color, $height = '12'){
        echo __CLASS__ . __FUNCTION__ . ' is running<br>';
        $this->color = $color;
        $this->height = $height;
    }

    function __destruct(){
        // unset($this->height);
        echo "height: ".$this->height."<br>";
        echo __CLASS__ . __FUNCTION__ . ' is running';
    }
}
$p = new Product('Red', 15);
echo $p->color."<br>";  // Red

// echo $p->height."<br>";



?>