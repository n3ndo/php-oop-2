<?php 

    include_once __DIR__.'/Category.php';

        class Product{
            public $name;
            public $price;
            public $image;
            public $is_available;
            public $category;
    
            function __construct(string $_name, float $_price, String $_image, Bool $_is_available, Category $_category){
                 $this->name = $_name;
                 $this->price = $_price;
                 $this->image = $_image;
                 $this->is_available = $_is_available;
                 $this->category = $_category;
            }
    
            public function getPrice(){
                return $this->price.'€';
            }
        }
    
?>
