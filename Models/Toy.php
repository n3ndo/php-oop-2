<?php 
    include_once __DIR__.'/Product.php';
    class Toy extends Product{
        public $features;
        public $size;

        function __construct(string $_name, float $_price, String $_image, Bool $_is_available, Category $_category, String $_features, Float $_size){
            parent::__construct($_name, $_price, $_image, $_is_available, $_category);
            $this->features = $_features;
            $this->size = $_size;
        }
    }
?>