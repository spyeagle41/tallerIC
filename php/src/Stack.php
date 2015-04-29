<?php

class Stack {
    
    private $elements= array();
    
    public function isEmpty(){
        return count($this->elements)==0;
    }
    
    public function push($element){
        array_push($this->elements, $element);
    }
    
    public function pop(){
        if ($this->isEmpty()) {
            throw new Exception("Se ha producido un error");
        }
        return array_pop($this->elements);
    }
}
