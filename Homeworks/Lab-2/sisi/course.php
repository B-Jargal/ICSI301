<?php
    class Course{
        var $name;
        var $index;
        var $creditHours;
        function __construct ($_name, $_index, $_creditHours){
            $this->name = $_name;
            $this->index = $_index;
            $this->creditHours = $_creditHours;
        }
        function setName($_name){
            $this->name = $_name;
        }
        function setIndex($_index){
            $this->index = $_index;
        }
        function setCreditHours($_creditHours){
            $this->creditHours = $_creditHours;
        }
        function getName(){
           return $this->name;
        }
        function getIndex(){
           return $this->index;
        }
        function getCreditHours(){
           return $this->creditHours ;
        }
        function toString(){
            return (string)((string)$this->getName().", ". (string)$this->getIndex().", ".(string)$this->getCreditHours());
        }
    }

?>