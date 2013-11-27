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
abstract class EuropassElement {
    protected $elements;
    
    public function getElement($elementName){
        return isset($this->elements) && isset($this->elements[$elementName]) ? $this->elements[$elementName]:null;
    }
    
    public function setElementValue($elementName,$value){
        if( !isset($this->elements) || !isset($this->elements[$this->elements]) ){
            throw new EuropassElementNotFoundException('EuropassElement '.$elementName.' not found!');
        }
        
        $this->elements[$elementName]['value']=$value;
    }
    
    public function showElement($elementName){
        if( !isset($this->elements) || !isset($this->elements[$elementName]) ){
            throw new EuropassElementNotFoundException('EuropassElement '.$elementName.' not found!');
        }
        $this->elements[$elementName]['show']=true;
    }
    
    public function hideElement($elementName){
        if( !isset($this->elements) || !isset($this->elements[$elementName]) ){
            throw new EuropassElementNotFoundException('EuropassElement '.$elementName.' not found!');
        }
        $this->elements[$elementName]['show']=false;
    }
    
    public function isElementVisible($elementName){
        if( !isset($this->elements) || !isset($this->elements[$elementName]) ){
            throw new EuropassElementNotFoundException('EuropassElement '.$elementName.' not found!');
        }
        return $this->elements[$elementName]['show'];
    }
    
//    protected function getAttributes($key){
//        return isset($attributes) && isset($attributes[$key]) ? $attributes[$key]:null;
//    }
//    
//    protected function setAttributesValue($key,$value){
//        $success = false;
//        if( isset($attributes) && isset($attributes[$key]) ){
//            $attributes[$key]['$value']=$value;
//            $success = true;
//        }
//        return $success;
//    }
    
    public function renderXML(){
        $xml = '';
        $topXML = '<'.get_class().'>';
        $bottomXML = '</'.get_class().'>';
        
        if(!isset($this->elements)) return '';
        
        foreach($this->elements as $key=>$attrs){
           if( !isset($attrs['show']) || !$attrs['show']){
               continue;
           } 
           $xml.= '<'.$key.'>';
           if(!isset($attrs['multiple'])){
               $xml.= $attrs['value'];
           }else{
               // do stuff
           }
           $xml.= '</'.$key.'>';
        }
        
        return $topXML.$xml.$bottomXML;
    }
    
}
