<?php 

        class Category{
            public $name;
            public $icon;
    
            function __construct(string $_name, String $_icon){
                $this->name = $_name;
                $this->icon = $_icon;
            }
        }
?>