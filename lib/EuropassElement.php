<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EuropassElement
 *
 * @author paulo
 */
class EuropassElement {
    protected $elements, $attributes;
    
    protected function getElement($key){
        return isset($elements) && isset($elements[$key]) ? $elements[$key]:null;
    }
    
    protected function setElementValue($key,$value){
        $success = false;
        if( isset($elements) && isset($elements[$key]) ){
            $elements[$key]['$value']=$value;
            $success = true;
        }
        return $success;
    }
    
    protected function getAttributes($key){
        return isset($attributes) && isset($attributes[$key]) ? $attributes[$key]:null;
    }
    
    protected function setAttributesValue($key,$value){
        $success = false;
        if( isset($attributes) && isset($attributes[$key]) ){
            $attributes[$key]['$value']=$value;
            $success = true;
        }
        return $success;
    }
    
    public function renderXML(){

        foreach($this->elements as $key=>$attrs){
           if( !isset($attrs['show']) || !$attrs['show']){
               continue;
           } 
           echo '<'.$key.'>';
           if(!isset($attrs['multiple'])){
               echo $attrs['value'];
           }else{
               // do stuff
           }
           echo '</'.$key.'>';
        }
    }
    
}
