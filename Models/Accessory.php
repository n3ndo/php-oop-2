<?php 
    require_once __DIR__.'/Product.php';
        class Accessory extends Product{
            public $material;
            public $size;
    
            function __construct(string $_name, float $_price, String $_image, Bool $_is_available, Category $_category, String $_material, Float $_size){
                parent::__construct($_name, $_price, $_image, $_is_available, $_category);
                $this->material = $_material;
                $this->size = $_size;
            }
        }
?>