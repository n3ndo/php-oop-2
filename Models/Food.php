<?php 
    include_once __DIR__.'/Product.php';
    class Food extends Product{
        public $weight;
        public $ingredients;

        function __construct(string $_name, float $_price, String $_image, Bool $_is_available, Category $_category, Float $_weight, Array $_ingredients){
            parent::__construct($_name, $_price, $_image, $_is_available, $_category);
            $this->weight = $_weight;
            $this->ingredients = $_ingredients;
        }
    }
?>